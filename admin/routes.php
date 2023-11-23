<?php
$controllers = array(
    'home' => ['index'],
    'accounts' => ['index', 'add_account', 'add_account_submit', 'edit_account', 'edit_account_submit', 'delete_account'],
    'products' => ['index', 'add_product', 'add_product_submit', 'edit_product', 'edit_product_submit', 'delete_product'],
    'product_groups' => ['index', 'add_product_group', 'add_product_group_submit', 'edit_product_group', 'edit_product_group_submit', 'delete_product_group']
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'home';
    $action = 'error';
}

include_once('controllers/' . $controller . '_controller.php');

$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;

$controller->$action();
