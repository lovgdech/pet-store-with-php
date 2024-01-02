<?php
require_once 'base_controller.php';

class CheckoutController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'checkout';
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


    // public function details()
    // {
    //     $id = $_GET['id'] ? $_GET['id'] : null;
    //     $data = Product::get_by_id($id);
    //     $product = array('product' => $data);
    //     $this->render('details', $product);
    // }
}
