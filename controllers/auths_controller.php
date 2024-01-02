<?php
require_once 'base_controller.php';
require_once 'models/authentication.php';
require_once 'models/cart.php';
require_once 'pages_controller.php';

class AuthsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'auths';
    }

    public function index()
    {
        $this->render('index');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ? $_POST['email'] : '';
            $password = $_POST['password'] ? $_POST['password'] : '';

            if (!empty($email) && !empty($password)) {
                $user = Authentication::check_auth($email, $password);
                if (!isset($user)) {
                    echo '<script>alert("Error login, please login again!")</script>';
                    return $this->render('index');
                }
            }

            session_start();

            $_SESSION['user'] = array(
                "id" => $user->id,
                "username" => $user->username,
                "email" => $user->email
            );

            if (!isset($_SESSION['cart'])) {
                $cart = Cart::get_cart();

                $_SESSION['cart'] = $cart;
            }

            echo '<script>alert("Đăng nhập thành công!")</script>';
            $this->folder = 'pages';
            $controller = new PagesController();
            $controller->home();
            return $this->render('home');
        }
    }

    public function register()
    {
        $this->render('register');
    }

    public function register_submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = time();
            $username = $_POST['username'] ? $_POST['username'] : '';
            $email = $_POST['email'] ? $_POST['email'] : '';
            $password = $_POST['password'] ? $_POST['password'] : '';

            $user = new Authentication($id, $username, $email, $password);
            $result = $user->insert();

            if (!$result) {
                echo '<script>alert("Đăng ký không thành công! Vui lòng điền lại thông tin")</script>';
                return $this->register();
            }
            echo '<script>alert("Đăng ký thành công! Quay lại đăng nhập")</script>';
            return $this->index();
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        echo '<script>alert("Đăng xuất thành công!")</script>';
        $this->folder = 'pages';
        $controller = new PagesController();
        $controller->home();
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