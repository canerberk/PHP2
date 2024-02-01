<?php
namespace App\Models;
class Categories extends BaseModel
{
    public function getCategory()
    {
        $sql = "Select * from category order by id";
        return $this->getData($sql);
    }

    function detailCategory($id)
    {
        $sql = "select * from category where id=" . $id;
        return $this->getData($sql, false);
    }

    function addCategory($name)
    {
        $sql = "INSERT INTO category(name) VALUES('$name')";
        $this->getData($sql);
    }

    function delCategory($id)
    {
        $sql = "DELETE FROM category WHERE id=" . $id;
        $this->getData($sql);
    }

    function updCategory($id, $name)
    {
        $sql = "update category set name='" . $name . "' where id=" . $id;
        $this->getData($sql);
    }
}