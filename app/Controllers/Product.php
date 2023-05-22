<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = model("ProductModel");
    }
    public function index()
    {
        $data = ["products" => $this->productModel->findAll()];
        return view("product/index", $data);
    }
    public function create()
    {
        return view("product/create");
    }
    public function insert()
    {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $data = [
            "name" => $name,
            "description" => $description,
        ];
        $this->productModel->insert($data);
    }
    public function update()
    {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $description = $_POST["description"];
        $data = [
            "name" => $name,
            "description" => $description,
        ];
        $this->productModel->insert($id, $data);
    }
    public function delete()
    {
        $id = $_POST["id"];
        $this->productModel->delete($id);
    }
}
