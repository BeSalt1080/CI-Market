<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    protected $productModel;
    public function index()
    {
        $this->productModel = model("ProductModel");
        $products = $this->productModel->where("verified = 1")->findAll();
        $i =0;
        foreach($products as $product) $products[$i++]["name"] = strlen($product["name"]) > 20 ? substr($product["name"], 0, 20) . "..." : $product["name"];
        $data = [ "products" => $products ];
        return view('template/navbar').view('index', $data);
    }
}
