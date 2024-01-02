<?php
require_once 'base_controller.php';
require_once 'models/products.php';
require_once 'models/productGroups.php';
require_once 'controllers/cart_controller.php';

class DogsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'dogs';
    }

    public function index()
    {
        $products = Product::get_all(1);
        $productGroups = ProductGroup::get_all();

        foreach ($products as $product) {
            foreach ($productGroups as $productGroup) {
                if ($product->productGroupId == $productGroup->productGroupId) {
                    $product->productGroupName = $productGroup->name;
                }
            }
        }

        $data = array('products' => $products);
        $this->render('index', $data);
    }

    public function details()
    {
        $id = $_GET['id'] ? $_GET['id'] : null;
        $data = Product::get_by_id($id);
        $product = array('product' => $data);
        $this->render('details', $product);

        if (isset($_POST['productId']) && $_POST['quantity'] > 0) {
            $obj = new CartController();
            $obj->insert();
        }
    }
}