<?php

require_once 'config/connection.php';
require_once 'controllers/auths_controller.php';

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
} else {
    $controller = 'pages';
    $action = 'home';
}

require_once 'routes.php';
