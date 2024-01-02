<?php
require_once 'base_controller.php';
require_once 'models/products.php';
require_once 'models/productGroups.php';

class PagesController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'pages';
    }

    public function home()
    {
        $products = Product::get_all(0);
        $productGroups = ProductGroup::get_all();

        foreach ($products as $product) {
            foreach ($productGroups as $productGroup) {
                if ($product->productGroupId == $productGroup->productGroupId) {
                    $product->productGroupName = $productGroup->name;
                }
            }
        }

        $data = array('products' => $products);
        $this->render('home', $data);
    }

    public function error()
    {
        $this->render('error');
    }
}
