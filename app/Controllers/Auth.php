<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
class Auth extends BaseController
{

    protected $AuthModel;

    function __construct() {
        $this->AuthModel = new AuthModel();
    }

    public function index()
    {
        
        return redirect()->to(site_url('Auth/Login'));
    }

    public function Login()
    {
        if (session('userId')) {
            return redirect()->to('/');
        }
        $data = [
            'title' =>  'Login page'
        ];
        return view('Auth/Login',$data);
    }

    public function Process()  {
        $getEmail = $this->request->getPost('UserEmail');
        $getPassword = $this->request->getPost('Password');
         
        $checkEmail = $this->AuthModel->getWhere(['UserEmail' => $getEmail]);
        $queryrow = $checkEmail->getRow();
         if ($queryrow) {
             if (password_verify($getPassword, $queryrow->Password)) {
                $checkactive  = $queryrow->Active;
                 if ($checkactive != null && $checkactive != 0) {
                    $checkrole = $queryrow->role_id;
                    if ($checkrole == 1) {
                        $sessData = [
                            'userId' => $queryrow->userId,
                            'Name' => $queryrow->Name,
                            'UserName' => $queryrow->UserName,
                            'UserEmail' => $queryrow->UserEmail,
                            'Password' => $queryrow->Password,
                            'Active' => $queryrow->Active,
                            'role_id' => $queryrow->role_id,
                            'Role' => 'Admin IT'
                          ];
                        session()->set($sessData);
                        return redirect()->to('/');

                    }elseif ($checkrole == 2) {

                        $sessData = [
                            'userId' => $queryrow->userId,
                            'Name' => $queryrow->Name,
                            'UserName' => $queryrow->UserName,
                            'UserEmail' => $queryrow->UserEmail,
                            'Password' => $queryrow->Password,
                            'Active' => $queryrow->Active,
                            'role_id' => $queryrow->role_id,
                            'Role' => 'Admin'
                          ];
                        session()->set($sessData);
                        return redirect()->to('Admin');
                        
                    }elseif ($checkrole == 3) {

                        $sessData = [
                            'userId' => $queryrow->userId,
                            'Name' => $queryrow->Name,
                            'UserName' => $queryrow->UserName,
                            'UserEmail' => $queryrow->UserEmail,
                            'Password' => $queryrow->Password,
                            'Active' => $queryrow->Active,
                            'role_id' => $queryrow->role_id,
                            'Role' => 'User'
                          ];
                        session()->set($sessData);
                        return redirect()->to('User');
                       
                    }


                 }else {
                    session()->setFlashdata('error','user account is inactive');
                return redirect()->to('/Auth/Login');
                 }
             }else {
                session()->setFlashdata('error','email or password wrong');
                return redirect()->to('/Auth/Login');
             }
         }else {
            session()->setFlashdata('error','User email not found');
            return redirect()->to('/Auth/Login');
         }
    }

    public function Logout()  {
        session()->remove('userId');
        session()->remove('Name');
        session()->remove('UserName');
        session()->remove('UserEmail');
        session()->remove('Password');
        session()->remove('Active');
        session()->remove('role_id');
        return redirect()->to('/Auth/Login');
    }

}
