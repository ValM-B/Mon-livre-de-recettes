<?php

require_once __DIR__ . '/../vendor/autoload.php';
$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

/* ------------
--- ROUTAGE ---
-------------*/

$router->map(
    'GET',
    '/',
    [
        'controller' => '\App\Controllers\MainController',
        'method' => 'home'
    ],
    'home'
);

$router->map(
    'GET',
    '/category',
    [
        'controller' => '\App\Controllers\RecipeController',
        'method' => 'category'
    ],
    'category'
);

$router->map(
    'GET',
    '/recipe',
    [
        'controller' => '\App\Controllers\RecipeController',
        'method' => 'recipe'
    ],
    'recipe'
);

/* ------------
--- DISPATCH ---
-------------*/

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error404');

$dispatcher->dispatch();