<?php
namespace App\Models;
require_once "BaseModel.php";
class Categories extends BaseModel
{
    public function getCategory()
    {
        $sql = "Select * from category order by id";
        return $this->getData($sql);
    }
}