<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\kategorimodel;

class kategori extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "<h1> belajar ci4 </h1>";                  
    }

    public function select()
    {

        $model = new kategorimodel();
        $kategori = $model -> findAll();
        
        $data = [
            'judul' => 'SELECT DATA DARI CONTROLLER',
            'kategori' => $kategori
        ];

        // print_r($data);

        
        echo view("kategori/select", $data);
        
    }

    public function selectwhere($id = null)
    {
        echo "<h1>menampilkan data yg dipilih $id</h1>";
    }

    public function forminsert()
    {
        
        echo view("kategori/forminsert");
        
    }

    public function formupdate($id = null)
    {
        
        echo view("kategori/update");
    
    }

    public function update($id = null)
    {
        echo "proses update data";
    }

    public function delete($id = null)
    {
        echo "menghapus data";
    }
}
