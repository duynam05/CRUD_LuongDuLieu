<?php
namespace App\Models;

class Product extends BaseModel {

    public function all() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }   

    public function find($id) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function insert($data) {
        $sql = "INSERT INTO products(name, price, description, image)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $data['name'],
            $data['price'],
            $data['description'],
            $data['image']
        ]);
    }


    public function update($id, $data) {
        $sql = "UPDATE products
                SET name=?, price=?, description=?, image=?
                WHERE id=?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $data['name'],
            $data['price'],
            $data['description'],
            $data['image'],
            $id
        ]);
    }

    public function search($keyword) {
        $sql = "SELECT * FROM products WHERE name LIKE ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['%' . $keyword . '%']);
        return $stmt->fetchAll();
    }

}
