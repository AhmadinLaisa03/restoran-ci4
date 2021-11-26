<?php

namespace App\Controllers\homepage;

use App\Controllers\BaseController;

class homepage extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
