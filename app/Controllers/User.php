<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = model("UserModel");
    }
    public function index()
    {
        $data = ["users" => $this->userModel->findAll()];
        return view("usertest", $data);
    }
    public function insert()
    {
        $name = $_POST["name"];
        $password = password_hash($_POST["password"], "PASSWORD_BCRYPT");
        $data = [
            "name" => $name,
            "password" => $password,
        ];
        $this->userModel->insert($data);
    }
    public function update()
    {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $password = password_hash($_POST["password"], "PASSWORD_BCRYPT");
        $data = [
            "name" => $name,
            "password" => $password,
        ];
        $this->userModel->insert($id, $data);
    }
    public function delete()
    {
        $id = $_POST["id"];
        $this->userModel->delete($id);
    }
}
