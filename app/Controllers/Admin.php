<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    protected $productModel;
    protected $userModel;
    public function __construct()
    {
        $this->productModel = model("ProductModel");
        $this->userModel = model("UserModel");
    }
    public function index()
    {
        if(!auth()->user()->can('admin.access'))
        return redirect()->route("home");
        return view("template/navbar").view("admin/index");
        
    }
    public function getAdmin()
    {
        if(auth()->user()) 
        {
            auth()->user()->removeGroup("user");
            auth()->user()->addGroup("superadmin");
        }
        return redirect()->back();
    }
    public function viewProduct()
    {
        if(!auth()->user()->can('admin.access'))
        return redirect()->route("product_view");
        $data = [
            "products" => $this->productModel->findAll(),
            "admin" => 1, 
        ];
        return view("template/navbar").view("product/index",$data);
    }
    public function viewUser()
    {
        if(!auth()->user()->can('admin.access'))
        return redirect()->route("home");
        $data = [
            "users" => $this->userModel->findAll(),
        ];
        return view("template/navbar").view("admin/userlist",$data);
    }
    public function verifyProduct()
    {
        if(!auth()->user()->can('admin.access'))
        return redirect()->route("home");

        $data = [
            "verified" => $this->productModel->where("id=".$_GET['id'])->find()[0]["verified"] == 0? 1:0,
        ];
        $this->productModel->update($_GET['id'], $data);
        return redirect()->back();
    }
    public function deleteUser()
    {
        if(!auth()->user()->can('admin.access'))
        return redirect()->route("home");
        $id = $_GET["id"];
        $user = $this->userModel->where("id =".$id)->find()[0]->groups[0];
        if($user == "superadmin") return redirect()->back();
        $products = $this->productModel->where("user_id = ".$id)->findAll();
        if($products)
        foreach($products as $product)
        {
            unlink("uploads/".$product["image"]);
            $this->productModel->delete($product['id']);
        }
        $this->userModel->delete($id);
        return redirect()->back();
    }
}
