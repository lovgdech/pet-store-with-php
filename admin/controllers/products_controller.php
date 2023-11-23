<?php

require_once 'base_controller.php';
require_once 'models/products.php';
require_once 'models/productGroups.php';

class ProductsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'products';
    }

    public function index()
    {
        $products = Product::get_all();
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

    public function add_product()
    {
        $productGroups = ProductGroup::get_all();
        $data = array('productGroups' => $productGroups);
        $this->render('product_ins', $data);
    }

    public function add_product_submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = time();
            $productId = $_POST['productId'] ? $_POST['productId'] : '';
            $productGroupId = $_POST['productGroupId'] ? $_POST['productGroupId'] : '';
            $name = $_POST['name'] ? $_POST['name'] : '';
            $title = $_POST['title'] ? $_POST['title'] : '';
            $description = $_POST['description'] ? $_POST['description'] : '';
            $price = $_POST['price'] ? $_POST['price'] : '';
            $quanlity = $_POST['quanlity'] ? $_POST['quanlity'] : '';
            $note = $_POST['note'] ? $_POST['note'] : '';
            $enable = isset($_POST['enable']) ? $_POST['enable'] : 0;

            $newProduct =
                new Product($id, $productId, $productGroupId, $name, $title, $description, $price, $quanlity, $note, $enable);

            $result = $newProduct->insert();

            return $this->index();
        }
    }

    public function edit_product()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $product = Product::get_by_id($id);
            $productGroups = ProductGroup::get_all();
            $data = array('productGroups' => $productGroups, 'product' => $product);

            return $this->render('product_edit', $data);
        }

        $this->index();
    }

    public function edit_product_submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ? $_POST['id'] : '';
            $productId = $_POST['productId'] ? $_POST['productId'] : '';
            $productGroupId = $_POST['productGroupId'] ? $_POST['productGroupId'] : '';
            $name = $_POST['name'] ? $_POST['name'] : '';
            $title = $_POST['title'] ? $_POST['title'] : '';
            $description = $_POST['description'] ? $_POST['description'] : '';
            $price = $_POST['price'] ? $_POST['price'] : '';
            $quanlity = $_POST['quanlity'] ? $_POST['quanlity'] : '';
            $note = $_POST['note'] ? $_POST['note'] : '';
            $enable = isset($_POST['enable']) ? $_POST['enable'] : 0;

            $oldProduct =
                new Product($id, $productId, $productGroupId, $name, $title, $description, $price, $quanlity, $note, $enable);

            $oldProduct->update($id);

            $this->index();
        }
    }

    public function delete_product()
    {
        $id = $_GET['id'] ? $_GET['id'] : null;
        $result = Product::delete($id);

        $this->index();
    }
}
