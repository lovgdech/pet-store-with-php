<?php

require_once 'base_controller.php';
require_once 'models/productGroups.php';

class ProductGroupsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'products/groups';
    }

    public function index()
    {
        $productGroups = ProductGroup::get_all();

        $data = array('productGroups' => $productGroups);
        $this->render('index', $data);
    }

    public function add_product_group()
    {
        $this->render('product_group_ins');
    }

    public function add_product_group_submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = time();
            $productGroupId = $_POST['productGroupId'] ? $_POST['productGroupId'] : '';
            $name = $_POST['name'] ? $_POST['name'] : '';
            $note = $_POST['note'] ? $_POST['note'] : '';

            $newProductGroup =
                new ProductGroup($id, $productGroupId, $name, $note);

            $result = $newProductGroup->insert();

            return $this->index();
        }
    }

    public function edit_product_group()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $productGroup = ProductGroup::get_by_id($id);

            $data = array('productGroup' => $productGroup);
            return $this->render('product_group_edit', $data);
        }

        $this->index();
    }

    public function edit_product_group_submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ? $_POST['id'] : '';
            $productGroupId = $_POST['productGroupId'] ? $_POST['productGroupId'] : '';
            $name = $_POST['name'] ? $_POST['name'] : '';
            $note = $_POST['note'] ? $_POST['note'] : '';

            $oldProductGroup =
                new ProductGroup($id, $productGroupId, $name, $note);

            $oldProductGroup->update($id);

            $this->index();
        }
    }

    public function delete_product_group()
    {
        $id = $_GET['id'] ? $_GET['id'] : null;
        $result = ProductGroup::delete($id);

        $this->index();
    }
}
