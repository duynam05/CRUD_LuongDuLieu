<?php
namespace App\Controllers;

use App\Models\Student;

class HomeController {
    public function index() {
        // Dữ liệu
        $message = "Chào mừng đến với MVC!";
        $studentInfo = (new Student())->getInfo();

        // Gọi view
        include 'views/home.php';
    }
}
