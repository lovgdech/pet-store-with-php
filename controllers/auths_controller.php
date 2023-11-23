<?php
require_once 'base_controller.php';
require_once 'models/authentication.php';

class AuthsController extends BaseController
{
    public static $user = null;

    public function __construct()
    {
        $this->folder = 'pages';
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ? $_POST['email'] : '';
            $password = $_POST['password'] ? $_POST['password'] : '';

            if (!empty($email) && !empty($password)) {
                self::$user = Authentication::check_auth($email, $password);
                if (!isset(self::$user)) {
                    echo '<script>alert("Error login, please login again!")</script>';
                }
            }

            return $this->render('home');
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = time();
            $username = $_POST['username'] ? $_POST['username'] : '';
            $email = $_POST['email'] ? $_POST['email'] : '';
            $password = $_POST['password'] ? $_POST['password'] : '';

            $user = new Authentication($id, $username, $email, $password);

            return $this->index();
        }
    }

    public function logout()
    {
        self::$user = null;
        return $this->render('home');
    }

    // public function edit_account()
    // {
    //     if ($_GET['id']) {
    //         $id = $_GET['id'];
    //         $account = Account::get_by_id($id);

    //         $data = array('account' => $account);
    //         return $this->render('account_edit', $data);
    //     }

    //     $this->index();
    // }

    // public function edit_account_submit()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $id = $_POST['id'] ? $_POST['id'] : '';
    //         $username = $_POST['username'] ? $_POST['username'] : '';
    //         $email = $_POST['email'] ? $_POST['email'] : '';
    //         $password = $_POST['password'] ? $_POST['password'] : '';
    //         $enable = isset($_POST['enable']) ? $_POST['enable'] : 0;

    //         $oldAccount = new Account($id, $username, $email, $password, $enable);
    //         $result = $oldAccount->update();

    //         $this->index();
    //     }
    // }

    // public function delete_account()
    // {
    //     $id = $_GET['id'] ? $_GET['id'] : null;
    //     $result = Account::delete($id);

    //     $this->index();
    // }
}
