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

$router->map(
    'GET',
    '/admin',
    [
    'controller' => '\App\Controllers\MainController',
    'method' => 'admin'
    ],
    'admin-home'
);

$router->map(
    'GET',
    '/login',
    [
        'controller' => '\App\Controllers\MainController',
        'method' => 'login'
    ],
    'main-login'
);

$router->map(
    'POST',
    '/login',
    [
        'controller' => '\App\Controllers\MainController',
        'method' => 'loginExecute'
    ],
    'main-login-execute'
);

$router->map(
    'GET',
    '/logout',
    [
        'controller' => '\App\Controllers\MainController',
        'method' => 'logout'
    ],
    'logout'
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
        'controller' => '\App\Controllers\Backoffice\RecipeController',
        'method' => 'add'
    ],
    'recipe-add'
);

$router->map(
    'POST',
    '/admin/recipe/add',
    [
        'controller' => '\App\Controllers\Backoffice\RecipeController',
        'method' => 'addExecute'
    ],
    'recipe-addExecute'
);

$router->map(
    'GET',
    '/admin/recipe',
    [
    'controller' => '\App\Controllers\Backoffice\RecipeController',
    'method' => 'browse'
    ],
    'admin-recipe-browse'
);


$router->map(
    'GET',
    '/admin/recipe/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\RecipeController',
    'method' => 'edit'
    ],
    'admin-recipe-edit'
);

$router->map(
    'POST',
    '/admin/recipe/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\RecipeController',
    'method' => 'editExecute'
    ],
    'admin-recipe-edit-execute'
);

$router->map(
    'GET',
    '/admin/recipe/delete/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\RecipeController',
    'method' => 'delete'
    ],
    'admin-recipe-delete'
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
    'controller' => '\App\Controllers\Backoffice\CategoryController',
    'method' => 'browse'
    ],
    'admin-category-browse'
);

$router->map(
    'GET',
    '/admin/category/add',
    [
    'controller' => '\App\Controllers\Backoffice\CategoryController',
    'method' => 'add'
    ],
    'admin-category-add'
);

$router->map(
    'POST',
    '/admin/category/add',
    [
    'controller' => '\App\Controllers\Backoffice\CategoryController',
    'method' => 'addExecute'
    ],
    'admin-category-add-execute'
);

$router->map(
    'GET',
    '/admin/category/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\CategoryController',
    'method' => 'edit'
    ],
    'admin-category-edit'
);

$router->map(
    'POST',
    '/admin/category/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\CategoryController',
    'method' => 'editExecute'
    ],
    'admin-category-edit-execute'
);

$router->map(
    'GET',
    '/admin/category/delete/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\CategoryController',
    'method' => 'delete'
    ],
    'admin-category-delete'
);

/* USER */ 

$router->map(
    'GET',
    '/admin/user',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'browse'
    ],
    'admin-user-browse'
);

$router->map(
    'GET',
    '/admin/user/add',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'add'
    ],
    'admin-user-add'
);

$router->map(
    'POST',
    '/admin/user/add',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'addExecute'
    ],
    'admin-user-add-execute'
);

$router->map(
    'GET',
    '/admin/user/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'edit'
    ],
    'admin-user-edit'
);

$router->map(
    'POST',
    '/admin/user/edit/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'editExecute'
    ],
    'admin-user-edit-execute'
);

$router->map(
    'GET',
    '/admin/user/delete/[i:id]',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'delete'
    ],
    'admin-user-delete'
);

$router->map(
    'GET',
    '/admin/user/edit/userSession',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'editUserSession'
    ],
    'admin-user-session-edit'
);

$router->map(
    'POST',
    '/admin/user/edit/userSession',
    [
    'controller' => '\App\Controllers\Backoffice\UserController',
    'method' => 'editUserSessionExecute'
    ],
    'admin-user-session-edit-execute'
);

/* ------------
--- DISPATCH ---
-------------*/

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error404');

$dispatcher->setControllersArguments($match, $router);

$dispatcher->dispatch();