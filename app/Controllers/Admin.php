<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Admin'
        ];
        return view('Admin/Data',$data);
    }
}
