<?php

use App\Controllers\Backend\IngredientController;

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
    'main-home'
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
    '/recipe/category/[i:id]',
    [
    'controller' => '\App\Controllers\RecipeController',
    'method' => 'browseByCategory'
    ],
    'recipe-browse-category'
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
    '/admin/recipe/add',
    [
        'controller' => '\App\Controllers\Backend\RecipeController',
        'method' => 'add'
    ],
    'recipe-add'
);

$router->map(
    'POST',
    '/admin/recipe/add',
    [
        'controller' => '\App\Controllers\Backend\RecipeController',
        'method' => 'addExecute'
    ],
    'recipe-addExecute'
);

$router->map(
    'GET',
    '/admin/recipe',
    [
    'controller' => '\App\Controllers\Backend\RecipeController',
    'method' => 'browse'
    ],
    'admin-recipe-browse'
);


$router->map(
    'GET',
    '/admin/recipe/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backend\RecipeController',
    'method' => 'edit'
    ],
    'admin-recipe-edit'
);

$router->map(
    'POST',
    '/admin/recipe/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backend\RecipeController',
    'method' => 'editExecute'
    ],
    'admin-recipe-edit-execute'
);

$router->map(
    'GET',
    '/admin/recipe/edit/add-ingredient',
    [
    'controller' => '\App\Controllers\Backend\RecipeController',
    'method' => 'addIngredient'
    ],
    'admin-recipe-edit-addIngredient'
);

$router->map(
    'POST',
    '/admin/recipe/edit/add-ingredient',
    [
    'controller' => '\App\Controllers\Backend\RecipeController',
    'method' => 'addIngredientExecute'
    ],
    'admin-recipe-edit-addIngredient-execute'
);

$router->map(
    'GET',
    '/admin/recipe/edit/[i:idRecipe]/edit-ingredient/[i:idIngredient]',
    [
    'controller' => '\App\Controllers\Backend\RecipeController',
    'method' => 'editIngredient'
    ],
    'admin-recipe-edit-editIngredient'
);

$router->map(
    'POST',
    '/admin/recipe/edit/[i:idRecipe]/edit-ingredient/[i:idIngredient]',
    [
    'controller' => '\App\Controllers\Backend\RecipeController',
    'method' => 'editIngredientExecute'
    ],
    'admin-recipe-edit-editIngredientExecute'
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
    'controller' => '\App\Controllers\Backend\CategoryController',
    'method' => 'browse'
    ],
    'admin-category-browse'
);

$router->map(
    'GET',
    '/admin/category/add',
    [
    'controller' => '\App\Controllers\Backend\CategoryController',
    'method' => 'add'
    ],
    'admin-category-add'
);

/* INGREDIENT */ 

$router->map(
    'GET',
    '/admin/ingredient',
    [
    'controller' => 'App\Controllers\Backend\IngredientController',
    'method' => 'browse'
    ],
    'admin-ingredient-browse'
);

$router->map(
    'GET',
    '/admin/ingredient/add',
    [
    'controller' => '\App\Controllers\Backend\IngredientController',
    'method' => 'add'
    ],
    'admin-ingredient-add'
);

$router->map(
    'POST',
    '/admin/ingredient/add',
    [
    'controller' => '\App\Controllers\Backend\IngredientController',
    'method' => 'addExecute'
    ],
    'admin-ingredient-addExecute'
);

$router->map(
    'GET',
    '/admin/ingredient/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backend\IngredientController',
    'method' => 'edit'
    ],
    'admin-ingredient-edit'
);

/* ------------
--- DISPATCH ---
-------------*/

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error404');

$dispatcher->dispatch();