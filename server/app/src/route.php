<?php

$controllers = [
    'page' => [
        'default_action',
        'home',
        'about',
        'register',
        'login',
        'users',
        'product',
        'news',
        'admin',
    ],
    'user' => [
        'default_action',
        'create',
        'read',
        'update',
        'delete',
    ],
    'product' => [
        'default_action',
        'create',
        'read',
        'update',
        'delete',
    ],
    'admin' => [
        'default_action',
        'overview',
        'product',
        'customer',
        'news',
    ],
];

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    http_response_code(404);
    die();
}

try {
    require_once(__ROOT__ . '/controller/' . $controller . '_controller.php');
} catch (ErrorException $err) {
    http_response_code(404);
    die();
}

$controllerClass = ucwords($controller) . 'Controller';
$controllerClass::$action();
