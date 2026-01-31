<?php
namespace App\Models;

use PDO;

class BaseModel {
    protected $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            "mysql:host=localhost;dbname=buoi2_php;charset=utf8",
            "root",
            ""
        );
    }
}

