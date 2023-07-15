<?php

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

/* ------------
--- ROUTAGE ---
-------------*/

/* MAIN */ 

$router->map(
    'GET',
    '/',
    [
        'controller' => '\App\Controllers\MainController',
        'method' => 'home'
    ],
    'home'
);

/* RECIPE */ 

$router->map(
'GET',
'/recipe',
[
'controller' => '\App\Controllers\RecipeController',
'method' => 'browse'
],
'recipe-browse'
);


$router->map(
    'GET',
    '/recipe/[i:id]',
    [
        'controller' => '\App\Controllers\RecipeController',
        'method' => 'read'
    ],
    'recipe-read'
);

$router->map(
    'GET',
    '/recipe/add',
    [
        'controller' => '\App\Controllers\RecipeController',
        'method' => 'add'
    ],
    'recipe-add'
);

$router->map(
    'GET',
    '/admin/recipe',
    [
    'controller' => '\App\Controllers\RecipeController',
    'method' => 'adminBrowse'
    ],
    'recipe-admin-browse'
);


$router->map(
    'GET',
    '/recipe/edit/[i:id]',
    [
    'controller' => '\App\Controllers\RecipeController',
    'method' => 'edit'
    ],
    'recipe-admin-edit'
);

/* CATEGORY */ 

$router->map(
'GET',
'/category',
[
'controller' => '\App\Controllers\CategoryController',
'method' => 'browse'
],
'category-browse'
);


$router->map(
    'GET',
    '/category/[i:id]',
    [
        'controller' => '\App\Controllers\CategoryController',
        'method' => 'read'
    ],
    'category-read'
);

$router->map(
    'GET',
    '/admin/category',
    [
    'controller' => '\App\Controllers\CategoryController',
    'method' => 'adminBrowse'
    ],
    'admin-category-browse'
);

$router->map(
    'GET',
    '/admin/category/add',
    [
    'controller' => '\App\Controllers\CategoryController',
    'method' => 'add'
    ],
    'admin-category-add'
);

/* RECIPE */ 

$router->map(
    'GET',
    '/admin/ingredient',
    [
    'controller' => '\App\Controllers\IngredientController',
    'method' => 'browse'
    ],
    'ingredient-browse'
);

$router->map(
    'GET',
    '/admin/ingredient/add',
    [
    'controller' => '\App\Controllers\IngredientController',
    'method' => 'add'
    ],
    'ingredient-add'
);

/* ------------
--- DISPATCH ---
-------------*/

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error404');

$dispatcher->dispatch();