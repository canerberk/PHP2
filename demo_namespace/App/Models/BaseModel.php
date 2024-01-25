<?php
namespace App\Models;
require_once "env.php";

use PDO;
class BaseModel
{
    private $connect;

    function __construct()
    {
        $this->connect = new PDO(
            "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME,
            DBUSER,
            DBPASS
        );
    }

    function getData($query, $getAllData = true)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute();

        if ($getAllData) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>