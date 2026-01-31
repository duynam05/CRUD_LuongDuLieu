<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $model = new Product();

        if (!empty($_GET['keyword'])) {
            $products = $model->search($_GET['keyword']);
        } else {
            $products = $model->all();
        }

        require "views/products/list.php";
    }


    public function detail() {
        $id = $_GET['id'];
        $model = new Product();
        $product = $model->find($id);
        require_once "views/products/detail.php";
    }

    public function delete() {
        $id = $_GET['id'];
        $model = new Product();
        $model->delete($id);
        header("Location: index.php?page=product-list");
    }

    public function create() {
        require_once "views/products/add.php";
    }

    public function store() {

        if (empty($_POST['name']) || empty($_POST['price'])) {
            echo "Không được để trống!";
            return;
        }

        $imageName = null;

        if (!empty($_FILES['image']['name'])) {
            $imageName = time() . '_' . $_FILES['image']['name'];
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                "uploads/" . $imageName
            );
        }

        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'description' => $_POST['description'],
            'image' => $imageName
        ];

        $model = new Product();
        $model->insert($data);

        header("Location: index.php?page=product-list");
    }


    public function edit() {
        $id = $_GET['id'];
        $model = new Product();
        $product = $model->find($id);
        require_once "views/products/edit.php";
    }

    public function update() {
        $id = $_POST['id'];
        $imageName = $_POST['old_image'];

        if (!empty($_FILES['image']['name'])) {
            $imageName = time() . '_' . $_FILES['image']['name'];
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                "uploads/" . $imageName
            );
        }

        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'description' => $_POST['description'],
            'image' => $imageName
        ];

        $model = new Product();
        $model->update($id, $data);

        header("Location: index.php?page=product-list");
    }

}
