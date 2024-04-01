AuthController
<?php
require_once('controllers/base_controller.php');
require_once('controllers/home_controller.php');
require_once('models/auth.php');

class AuthController extends BaseController
{
    function __construct()
    {
        $this->folder = 'auth';

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user'])) {
            $previous_page = $_SERVER['HTTP_REFERER'];

            if (!empty($previous_page)) {
                return header("Location: $previous_page");
            } else {
                return header("Location: index.php");
            }
        }
    }

    public function index()
    {
        return $this->render('index');
    }

    public function register()
    {
        return $this->render('register');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ? $_POST['email'] : '';
            $password = $_POST['password'] ? $_POST['password'] : '';

            if (empty($email) || empty($password)) {
                echo '<script>alert("Email and password are required!")</script>';
                return $this->render('index');
            }

            if (strlen($password) < 6) {
                echo '<script>alert("Password must have at least 6 characters!")</script>';
                return $this->render('index');
            }

            $response = Authentication::login($email, $password);

            if ($response['status'] === 'error') {
                echo '<script>alert("' . $response['content'] . '")</script>';
                return $this->render('index');
            }

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['user'] = $response['user'];

            echo '<script>alert("' . $response['content'] . '")</script>';

            return header("Location: index.php");
        }
    }

    public function registerSubmit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ID = time();
            $firstName = $_POST['firstName'] ? $_POST['firstName'] : '';
            $lastName = $_POST['lastName'] ? $_POST['lastName'] : '';
            $email = $_POST['email'] ? $_POST['email'] : '';
            $enteredPassword = $_POST['password'] ? $_POST['password'] : '';

            if (empty($email) || empty($enteredPassword)) {
                echo '<script>alert("Email and password are required!")</script>';
                return $this->render('register');
            }

            if (strlen($firstName) < 3 || strlen($lastName) < 3) {
                echo '<script>alert("Your name must have more than 3 characters!")</script>';
                return $this->render('register');
            }

            if (strlen($enteredPassword) < 6) {
                echo '<script>alert("Password must have at least 6 characters!")</script>';
                return $this->render('register');
            }

            $hashedEnteredPassword = password_hash($enteredPassword, PASSWORD_BCRYPT);

            $user = new Authentication($ID, $firstName, $lastName, $email, $hashedEnteredPassword, '', '');
            $response = $user->register();

            if ($response['status'] === 'error') {
                echo '<script>alert("' . $response['content'] . '")</script>';
                return $this->render('register');
            }
            echo '<script>alert("' . $response['content'] . '")</script>';
            return header("Location: index.php?controller=auth");
        }
    }

    public static function logout()
    {
        if (!isset($_SESSION['user'])) {
            $previous_page = $_SERVER['HTTP_REFERER'];

            if (!empty($previous_page)) {
                return header("Location: $previous_page");
            } else {
                return header("Location: index.php");
            }
        }

        unset($_SESSION['user']);
    }

    public function error()
    {
        $this->folder = 'home';
        $this->render('error');
    }
}


AuthModel
<?php
require_once('config/connectDatabase.php');

class Authentication
{
    public $ID;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $passwordHashed;
    public $permission;
    public $status;

    function __construct($ID, $firstName, $lastName, $email, $passwordHashed, $permission, $status)
    {
        $this->ID = $ID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->passwordHashed = $passwordHashed;
        $this->permission = $permission;
        $this->status = $status;
    }

    static function getUserByID($ID)
    {
        $db = Database::getInstance();
        $req = $db->prepare('SELECT * FROM `customer_account` where ID = :ID');
        $req->execute(array('ID' => $ID));

        $item = $req->fetch();
        if (isset($item['ID'])) {
            return new Authentication($item['ID'], $item['firstName'], $item['lastName'], $item['email'], $item['passwordHashed'], $item['permission'], $item['status']);
        }

        return null;
    }

    static function getUserByEmail($email)
    {
        $db = Database::getInstance();
        $req = $db->prepare('SELECT * FROM `customer_account` where email = :email');
        $req->execute(array('email' => $email));

        $item = $req->fetch();
        if (isset($item['ID'])) {
            return new Authentication($item['ID'], $item['firstName'], $item['lastName'], $item['email'], $item['passwordHashed'], $item['permission'], $item['status']);
        }

        return null;
    }

    static function login($email, $enteredPassword)
    {
        $user = Authentication::getUserByEmail($email);
        if ($user === null) {
            return ['status' => 'error', 'content' => "Account does not exist!"];
        }

        if (password_verify($enteredPassword, $user->passwordHashed)) {
            return ['status' => 'success', 'content' => "Login successfuly!", 'user' => $user];
        } else {
            return ['status' => 'error', 'content' => "Password is not correct!"];
        }
    }

    function register()
    {
        $userEmail = Authentication::getUserByEmail($this->email);
        if (isset($userEmail)) {
            return ['status' => 'error', 'content' => "Email has been used!"];
        }
        $this->permission = 'user';
        $db = Database::getInstance();
        $req = $db->exec("INSERT INTO `customer_account` (`ID`, `firstName`, `lastName`, `email`, `passwordHashed`, `permission`, `status`) 
        VALUES ('$this->ID', '$this->firstName', '$this->lastName', '$this->email', '$this->passwordHashed','$this->permission', 1)");

        return ['status' => 'success', 'content' => "Create an account successfuly!", 'user' => $req];
    }
}
