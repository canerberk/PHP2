<?php
namespace App\Controllers;

require_once "App/Models/Products.php";
require_once "App/Models/Categories.php";

use App\Models\Products;
use App\Models\Categories;
class ProductController
{
    protected $productModel;
    protected $categoryModel;
    public function __construct()
    {
        $this->productModel = new Products();
        $this->categoryModel = new Categories();
    }
    function listProduct() {
        $products = $this->productModel->getProduct();
        include_once "App/Views/Product/ListProduct.php";
    }

    function createProduct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['add']) && ($_POST['add']) != "") {
                $target_dir = "App/Uploads/";

                $idcgr = $_POST['idcgr'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $des = $_POST['des'];
                $img = $_FILES['img']['name'];

                $target_file = $target_dir . basename($_FILES["img"]["name"]);

                $this->productModel->addProduct($name, $img, $price, $des, $idcgr);

                $thongbao = "Cập nhật thành công";
            }
        }

        $categories = $this->categoryModel->getCategory();
        include_once "App/Views/Product/AddProduct.php";
    }

    function deleteProduct()
    {
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $this->productModel->delProduct($_GET['id']);
        }
        $products = $this->productModel->getProduct();
        include_once "App/Views/Product/ListProduct.php";
    }

    function editProduct() {
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $pro = $this->productModel->detailProduct($_GET['id']);
        }
        $categories = $this->categoryModel->getCategory();
        include_once "App/Views/Product/UpdProduct.php";
    }

    function updateProduct() {
        if (isset($_POST['update']) && ($_POST['update']) != "") {
            $target_dir = __DIR__ . "App/Uploads/";

            $id = $_POST['id'];
            $idcgr = $_POST['idcgr'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $des = $_POST['des'];
            $img = $_FILES['img']['name'];

            $target_file = $target_dir . basename($_FILES["img"]["name"]);

            $this->productModel->updProduct($id, $name, $img, $price, $des, $idcgr);

            $thongbao = "Cập nhật thành công";
        }
        $categories = $this->categoryModel->getCategory();
        $products = $this->productModel->getProduct("", 0);
        include_once "App/Views/Product/ListProduct.php";
    }
}