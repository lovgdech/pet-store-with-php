<?php

$controllers = array(
    'pages' => ['home', 'error'],
    'dogs' => ['index', 'details'],
    'cats' => ['index', 'details'],
    'auths' => ['index', 'login', 'register'],
);

if (!array_key_exists('pages', $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

require_once 'controllers/' . $controller . '_controller.php';

$classController = ucwords($controller) . 'Controller';

$controller = new $classController;
$controller->$action();
