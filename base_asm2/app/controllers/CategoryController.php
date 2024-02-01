<?php
namespace App\Controllers;

use App\Models\Categories;
class CategoryController extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new Categories();
    }
    public function listCategory() {

        $categories = $this->categoryModel->getCategory();
        $this->render('category.index', compact('categories'));
    }

    public function createCategory() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['add']) && ($_POST['add']) != "") {
                $name = $_POST['name'];

                $this->categoryModel->addCategory($name);

                $thongbao = "Cập nhật thành công";
            }
        }

        $this->render('category.add');
    }

    public function deleteCategory($id)
    {
        $this->categoryModel->delCategory($id);
        $categories = $this->categoryModel->getCategory();
        $this->render('category.index', compact('categories'));
    }

    public function editCategory($id) {
        $cgr = $this->categoryModel->detailCategory($id);
        $this->render('category.edit', compact('cgr'));
    }

    public function updateCategory() {
        if (isset($_POST['update']) && ($_POST['update']) != "") {
            $id = $_POST['id'];
            $name = $_POST['name'];

            $this->categoryModel->updCategory($id, $name);

            $thongbao = "Cập nhật thành công";
        }

        $customers = $this->categoryModel->getCategory("", 0);
        $this->render('category.index', compact('customers'));
    }
}
