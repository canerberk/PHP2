<?php
namespace App\Models;
class Products extends BaseModel
{
    function getProduct() {
        $sql = "SELECT * FROM product order by id";
        return $this->getData($sql);
    }

    function detailProduct($id)
    {
        $sql = "select * from product where id=" . $id;
        return $this->getData($sql, false);
    }

    function addProduct($name, $img, $price, $des, $idcgr)
    {
        $sql = "INSERT INTO product(name,img,price,des,idcgr) VALUES('$name', '$img', '$price', '$des', '$idcgr')";
        $this->getData($sql);
    }

    function delProduct($id)
    {
        $sql = "DELETE FROM product WHERE id=" . $id;
        $this->getData($sql);
    }

    function updProduct($id, $name, $img, $price, $des, $idcgr)
    {
        if ($img != "")
            $sql = "update product set  name='" . $name . "',price='" . $price . "',img='" . $img . "',des='" . $des . "',idcgr='" . $idcgr . "' where id=" . $id;
        else
            $sql = "update product set  name='" . $name . "',price='" . $price . "',des='" . $des . "',idcgr='" . $idcgr . "' where id=" . $id;
        $this->getData($sql);
    }
}