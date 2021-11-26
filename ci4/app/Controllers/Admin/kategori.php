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

    public function read()
    {
        $pager = \Config\Services::pager();

        $model = new kategorimodel();
        // $kategori = $model -> findAll();
        
        $data = [
            'judul' => 'DATA KATEGORI',
            // 'kategori' => $kategori,
            'kategori' => $model->paginate(2, 'grup1'),
            'pager' => $model->pager,
        ];

        // print_r($data);

        return view("kategori/select", $data);
        
    }
    
    public function create()
    {
        
        echo view("kategori/insert");
        
    }
    
    public function insert()
    {
        // if (isset($_POST['simpan'])) {
        //     if (isset($_POST['kategori']) && isset($_POST['keterangan'])) {
        //         print_r($_POST);
        //     }
        // }
        
        $model = new kategorimodel();
        
        if ($model -> insert($_POST) === false) {
            $error = $model -> errors();

            // echo $error['kategori'];
            session()->setFlashdata('infoeror', $error['kategori']);

            return redirect()->to(base_url("/Admin/kategori/create")); 
        } else {
            return redirect()->to(base_url("/Admin/kategori")); 
        }
    }
    
    public function find($id = null)
    {
        // echo "UPDATE THIS ID => $id<br>";
        
        $model = new kategorimodel();
        $kategori = $model -> find($id);
        
        // print_r($kategori);
        
        $data = [
            'judul' => 'UPDATE DATA KATEGORI',
            'kategori' => $kategori
        ];
        
        return view("kategori/update", $data);
        
    }
    
    public function update()
    {
        // print_r($_POST);

        $model = new kategorimodel();
        $model -> save($_POST);
        return redirect()->to(base_url("/Admin/kategori"));
    }
    
    public function delete($id = null)
    {
        // echo $id;
        
        $model = new kategorimodel();
        $model->delete($id);
        return redirect()->to(base_url("/Admin/kategori"));
    }
}
