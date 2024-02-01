<?php
namespace App\Controllers;

use App\Models\Customers;
class CustomerController extends BaseController
{
    protected $customerModel;
    public function __construct()
    {
        $this->customerModel = new Customers();
    }
    public function listCustomer() {

        $customers = $this->customerModel->getCustomer();
        $this->render('user.index', compact('customers'));
    }

    public function createCustomer() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['add']) && ($_POST['add']) != "") {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $this->customerModel->addCustomer($name, $email, $phone);

                $thongbao = "Cập nhật thành công";
            }
        }

        $this->render('user.add');
    }

    public function deleteCustomer($id)
    {
        $this->customerModel->delCustomer($id);
        $customers = $this->customerModel->getCustomer();
        $this->render('user.index', compact('customers'));
    }

    public function editCustomer($id) {
        $cus = $this->customerModel->detailCustomer($id);
        $this->render('user.edit', compact('cus'));
    }

    public function updateCustomer() {
        if (isset($_POST['update']) && ($_POST['update']) != "") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $this->customerModel->updCustomer($id, $name, $email, $phone);

            $thongbao = "Cập nhật thành công";
        }

        $customers = $this->customerModel->getCustomer("", 0);
        $this->render('user.index', compact('customers'));
    }
}
