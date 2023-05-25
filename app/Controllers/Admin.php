<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        if(auth()->user()->can('admin.access'))
        return view("admin/index");
        redirect("/");
    }
    public function viewUsers()
    {
        
    }
}
