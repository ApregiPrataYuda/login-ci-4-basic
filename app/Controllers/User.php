<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'User'
        ];
        return view('User/Data',$data);
    }
}
