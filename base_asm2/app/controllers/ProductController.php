<?php
namespace App\Controllers;

use App\Models\Products;
use App\Models\Categories;
class ProductController extends BaseController
{
    protected $productModel;
    protected $categoryModel;
    public function __construct()
    {
        $this->productModel = new Products();
        $this->categoryModel = new Categories();
    }
    public function listProduct() {
        $products = $this->productModel->getProduct();
        $this->render('product.index', compact('products'));
    }

    public function createProduct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['add']) && ($_POST['add']) != "") {
                $target_dir = "./public/images/";

                $idcgr = $_POST['idcgr'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $des = $_POST['des'];
                $img = $_FILES['img']['name'];

                $target_file = $target_dir . basename($_FILES["img"]["name"]);

                $this->productModel->addProduct($name, $img, $price, $des, $idcgr);

                $thongBao = "Cập nhật thành công";
            }
        }

        $categories = $this->categoryModel->getCategory();
        $this->render('product.add', compact('categories'));
    }

    public function deleteProduct($id)
    {
        $this->productModel->delProduct($id);
        $products = $this->productModel->getProduct();
        $this->render('product.index', compact('products'));
    }

    public function editProduct($id) {
        $pro = $this->productModel->detailProduct($id);
        $categories = $this->categoryModel->getCategory();
        $this->render('product.edit', compact('categories', 'pro'));
    }


    public function updateProduct() {
        if (isset($_POST['update']) && ($_POST['update']) != "") {
            $target_dir = __DIR__ . "./public/images/";

            $id = $_POST['id'];
            $idcgr = $_POST['idcgr'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $des = $_POST['des'];
            $img = $_FILES['img']['name'];

            $target_file = $target_dir . basename($_FILES["img"]["name"]);

            $this->productModel->updProduct($id, $name, $img, $price, $des, $idcgr);

            $thongBao = "Cập nhật thành công";
        }
        $categories = $this->categoryModel->getCategory();
        $products = $this->productModel->getProduct("", 0);
        $this->render('product.index', compact('products', 'categories', 'thongBao'));
    }
}