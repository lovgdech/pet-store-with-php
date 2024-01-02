<?php
require_once 'base_controller.php';
require_once 'models/cart.php';

class CartController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'cart';
    }

    public function index()
    {
        session_start();

        if (!isset($_SESSION['user'])) {
            $this->folder = "auth";
            $controller = new AuthsController();
            $controller->index();
            return $this->render('index');
        }
        $cart = Cart::get_cart();

        $data = array('cart' => $cart);

        return $this->render('index', $data);
    }

    public function delete()
    {
        if (isset($_POST['cartId'])) {
            $cartId = $_POST['cartId'];
            Cart::delete($cartId);
            CartController::index();
            echo '<script>alert("Xóa thành công sản phẩm!")</script>';
        }
    }

    public function insert()
    {
        if (!isset($_SESSION['user'])) {

            echo '<script>
            alert("Bạn chưa đăng nhâp! Vui lòng đăng nhập trước khi thêm vao giỏ hàng!")
            </script>';
            echo '<script>
            window.location.href = "index.php?controller=auths";
            </script>';
        }
        if (isset($_POST['quantity']) && isset($_SESSION['user'])) {
            Cart::insert($_POST['productId'], $_POST['quantity']);
            CartController::index();
            echo '<script>
            alert("Đã thêm vào giỏ hàng!");
            </script>';
        }
    }

    public function update()
    {
        if (isset($_POST['quantity'])) {

            if ($_POST['quantity'] == 1) {
                CartController::delete();
            }
            Cart::update($_POST['cartId'], $_POST['quantity']);
            CartController::index();
        }
    }
}
