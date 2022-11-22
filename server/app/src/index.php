<?php

define('__ROOT__', __DIR__);

require_once(__ROOT__ . '/database.php');

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'default_action';
    }
} else {
    $controller = 'page';
    $action = 'home';
}

require_once(__ROOT__ . '/route.php');
