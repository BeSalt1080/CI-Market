<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class Product extends BaseController
{
    protected $productModel;
    protected $userModel;
    public function __construct()
    {
        helper(['form']);
        $this->productModel = model("ProductModel");
        $this->userModel = model("UserModel");
    }
    public function index()
    {
        if(auth()->user())
        {
            $data = [
                "products" => $this->productModel->where("user_id = ".auth()->id())->findAll(),
            ];
            return view("template/navbar").view("product/index", $data);
        }
        return redirect()->route("home");
    }
    public function createView()
    {
        if(auth()->user())
        {
            $data = [
                "user_id" => auth()->id(),
            ];
            return view("template/navbar").view("product/create", $data);
        }
        return redirect()->route("home");
    }
    public function updateView()
    {
        if(!auth()->user()) return redirect()->route("home");
        $id = $_GET["id"];
        $product = $this->productModel->where(!auth()->user()->can("admin.access")?"user_id = ".auth()->id()." and id = ".$id :"id = ".$id )->find();
        if(!$product) return redirect()->back();
        $data = [
            "product" => $product[0],
        ];
        return view("template/navbar").view("product/update",$data);
    }
    public function detailView()
    {
        $id = $_GET["id"];
        $data = ["product" => ""];
        $product = $this->productModel->where("id = ".$id)->find();
        if($product)
        {
            $product = $product[0];
            $username = $this->userModel->where("id= ".$product['user_id'])->find()[0]->username;
            if($product["verified"] == 1)
            {
                $data = [
                    "product" => $product,
                    "username" => $username
                ];
            }
            if(auth()->user()){
                
                if($product["user_id"] == auth()->id())
                $data = [
                    "product" => $product,
                    "username" => $username
                ];
                else if(auth()->user()->can("admin.access"))
                $data = [
                    "product" => $product,
                    "username" => $username
                ];
            }
        }
        return view("template/navbar").view("product/description",$data);
        
    }
    public function insert()
    {
        $rules = [
            "name" => [
                "required",
                "alpha_numeric_space"
            ],
            "description" => [ 
                "required",
            ],
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,4096]',
            ],
            'price' => [
                'required',
                'integer'
            ],
            'user_id' => [
                'required'
            ]
        ];
        
        if (!$this->validate($rules)) {
            return view('product/create', [
                'validation' => $this->validator,
                'user_id' => auth()->id(),
            ]); 
        }
        $file = $this->request->getFile('image');
        $imageName = $file->getRandomName();
        $file->move('uploads', $imageName);

        $username = $_POST["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $user_id = $_POST["user_id"];

        $data = [
            "name" => $username,
            "description" => $description,
            "image" => $imageName,
            "price" => $price,
            "user_id" => $user_id,

        ];
        $this->productModel->insert($data);
        return redirect()->to("product");
    }
    public function update()
    {
        $id = $_POST["id"];
        $product = $this->productModel->where(!auth()->user()->can("admin.access")?"user_id = ".auth()->id()." and id = ".$id :"id = ".$id )->find();
        if(!$product) return redirect()->back();
        $product = $product[0];
        $file = $this->request->getFile('image');
        $rules = [
            "name" => [
                "required",
                "alpha_numeric_space"
            ],
            "description" => [ 
                "required",
            ],
            'price' => [
                'required',
                'integer'
            ]
        ];
        if($file->getSize()!=0)
        $data = array_merge($rules, [
            "image" => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,4096]'
            ],
        ]);

        if (!$this->validate($rules)) {
            $product = $_POST;
            return redirect()->back()->with('validation', $this->validator->getErrors() );
        }
        $username = $_POST["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $data = [
            "name" => $username,
            "description" => $description,
            "price" => $price,
            "verified" => 0,
        ];
        if($file->getSize() != 0) 
        {
            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);   
            unlink('uploads/'.$product["image"]);
            $data = array_merge($data, ["image" => $imageName]);
        }
        $this->productModel->update($id,$data);
        return redirect()->route("admin_view_product");
    }
    public function delete()
    {
        if(!auth()->user()) return redirect()->to("home");
        $id = $_GET["id"];
        $product = $this->productModel->where("user_id = ".auth()->id()." and id = ".$id)->find()[0];
        if(!$product || !auth()->user()->can("admin.access")) return redirect()->back();
        unlink("uploads/".$product["image"]);
        $this->productModel->delete($id);
        return redirect()->back();
    }
    public function search()
    {
        $data = [
            'products' => ""
        ];
        $query = $_GET["q"];
        if($query){
            $products = $this->productModel->where("name like '%".$query."%' and verified = 1")->findAll();
            $i =0;
            foreach($products as $product) $products[$i++]["name"] = strlen($product["name"]) > 30 ? substr($product["name"], 0, 30) . "..." : $product["name"];
            $data = [
                'products' => $products
            ];
        }
        return view("template/navbar").view("product/search",$data);
    }
}
