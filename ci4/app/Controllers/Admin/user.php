<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $session = null;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        echo "user";
    }

    public function create()
    {
        $tbluser = [
            'user'  => 'admin',
            'email' => 'admin@gmail.com',
            'level' => 'admin'
        ];
        
        $this->session->set($tbluser);
    }
    
    public function read()
    {
        // global $tbluser;
        echo $this->session->get('user');
        echo "<br>";
        echo $this->session->get('email');
        echo "<br>";
        echo $this->session->get('level');
    }

    public function delete()
    {
        // global $tbluser;
        $this->session -> remove('user');
    }
    
    public function destroy()
    {   
        // global $tbluser;
        $this->session -> destroy();
    }
}