<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\kategorimodel;

class menu extends BaseController
{
    public function index()
    {
        return view('Menu/form');
    }

    public function insert()
    {
        $file =  $this->request->getFile('gambar');

        $name = $file->getName();


        $file->move('./upload');
        echo $name . " telah di upload";
    }

    public function option()
    {
        $model = new kategorimodel();
        $kategori= $model->findAll();

        $data = [
            'kategori'=>$kategori
        ];

        return view('template/option', $data);
    }
}
