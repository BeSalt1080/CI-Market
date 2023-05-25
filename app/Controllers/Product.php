<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use function PHPUnit\Framework\isNull;

class Product extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = model("ProductModel");
    }
    public function index()
    {
        $authorized = false;
        if(auth()->user())
        {
            if(auth()->user()->can("product.create"))
            $authorized = true;
        }
        $data = [
            "products" => $this->productModel->findAll(),
            "authorized" => $authorized,
        ];
        return view("product/index", $data);
    }
    public function createView()
    {
        if(!auth()->user())
        {
            return redirect()->back()->with("message","Lemao");
        }
        return view("product/create");
    }
    public function insert()
    {
        $rules = [

        ];
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
