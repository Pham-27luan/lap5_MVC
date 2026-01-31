<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $products = (new Product())->all();
        require "views/product-list.php";
    }

    public function detail() {
        $product = (new Product())->find($_GET['id']);
        require "views/product-detail.php";
    }

    public function create() {
        require "views/product-add.php";
    }

    public function store() {
        if (empty($_POST['ten']) || empty($_POST['gia'])) die("Không được trống");
        (new Product())->insert($_POST);
        header("Location: index.php?page=product-list");
    }

    public function edit() {
        $product = (new Product())->find($_GET['id']);
        require "views/product-edit.php";
    }

    public function update() {
        (new Product())->update($_GET['id'], $_POST);
        header("Location: index.php?page=product-list");
    }

    public function delete() {
        (new Product())->delete($_GET['id']);
        header("Location: index.php?page=product-list");
    }
}
