<?php
namespace App\Models;

class Product extends BaseModel {
    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
