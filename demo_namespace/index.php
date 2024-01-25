<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

require_once "App/Controllers/CustomerController.php";
use App\Controllers\CustomerController;

require_once "App/Controllers/ProductController.php";
use App\Controllers\ProductController;

$customerController = new CustomerController();
$productController = new ProductController();

switch ($url) {
    case '/':
        include_once "App/Views/home.php";
        break;
    case 'list-product':
        $productController->listProduct();
        break;

    case 'add-product':
        $productController->createProduct();
        break;

    case 'del-product':
        $productController->deleteProduct();
        break;

    case 'edit-product':
        $productController->editProduct();
        break;

    case 'upd-product':
        $productController->updateProduct();
        break;

    case 'list-customer':
        $customerController->listCustomer();
        break;

    case 'add-customer':
        $customerController->createCustomer();
        break;

    case 'del-customer':
        $customerController->deleteCustomer();
        break;

    case 'edit-customer':
        $customerController->editCustomer();
        break;

    case 'upd-customer':
        $customerController->updateCustomer();
        break;
}
?>