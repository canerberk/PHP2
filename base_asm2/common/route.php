<?php

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

    $router->get('/', [\App\Controllers\HomeController::class, "index"]);

    $router->get('home-category', [\App\Controllers\CategoryController::class, "listCategory"]);
    $router->get('add-category', [\App\Controllers\CategoryController::class, "createCategory"]);
    $router->post('create-category', [\App\Controllers\CategoryController::class, "createCategory"]);
    $router->get('detail-category/{id}', [\App\Controllers\CategoryController::class, "editCategory"]);
    $router->post('update-category', [\App\Controllers\CategoryController::class, "updateCategory"]);
    $router->get('delete-category/{id}', [\App\Controllers\CategoryController::class, "deleteCategory"]);

    $router->get('home-product', [\App\Controllers\ProductController::class, "listProduct"]);
    $router->get('add-product', [\App\Controllers\ProductController::class, "createProduct"]);
    $router->post('create-product', [\App\Controllers\ProductController::class, "createProduct"]);
    $router->get('detail-product/{id}', [\App\Controllers\ProductController::class, "editProduct"]);
    $router->post('update-product', [\App\Controllers\ProductController::class, "updateProduct"]);
    $router->get('delete-product/{id}', [\App\Controllers\ProductController::class, "deleteProduct"]);

    $router->get('home-customer', [\App\Controllers\CustomerController::class, "listCustomer"]);
    $router->get('add-customer', [\App\Controllers\CustomerController::class, "createCustomer"]);
    $router->post('create-customer', [\App\Controllers\CustomerController::class, "createCustomer"]);
    $router->get('detail-customer/{id}', [\App\Controllers\CustomerController::class, "editCustomer"]);
    $router->post('update-customer', [\App\Controllers\CustomerController::class, "updateCustomer"]);
    $router->get('delete-customer/{id}', [\App\Controllers\CustomerController::class, "deleteCustomer"]);

$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
?>