<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\kategorimodel;
use App\Models\menumodel;

class menu extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();

        $model = new menumodel();
        // $menu = $model -> findAll();

        $data = [
            'judul' => 'DATA MENU',
            // 'menu' => $menu,
            'menu' => $model->paginate(3, 'grup1'),
            'pager' => $model->pager,
        ];

        // print_r($data);

        return view("menu/select", $data);
    }

    public function read()
    {
        $pager = \Config\Services::pager();
        if (isset($_GET['idkategori'])) {
            $id = $_GET['idkategori'];

            $model = new menumodel();
            $jumlah = $model->where('idkategori', $id)->findAll();
            $count = count($jumlah);

            $tampil = 3;
            $mulai = 0;

            $menu = $model->where('idkategori', $id)->findAll($tampil, $mulai);

            $data = [
                'judul' => 'DATA PENCARIAN MENU',
                'menu' => $menu,
                'pager' => $pager,
                'tampil' => $tampil,
                'total' => $count,
            ];

            return view("menu/cari", $data);
        }
    }

    public function create()
    {
        $model = new kategorimodel();
        $kategori = $model->findAll();

        $data = [
            'kategori' => $kategori
        ];

        echo view("menu/insert", $data);
    }

    public function insert()
    {
        $request = \Config\Services::request();
        $file = $request->getFile('gambar');
        $name = $file->getName();

        $file->move('./upload');

        $data = [
            'idkategori' => $request->getPost('idkategori'),
            'menu' => $request->getPost('menu'),
            'gambar' => $name,
            'harga' => $request->getPost('harga')
        ];

        // print_r($data);

        $model = new menumodel();
        $model->insert($data);

        if ($model->insert($data) === false) {
            $error = $model->errors();
            session()->setFlashdata('infoeror', $error);

            return redirect()->to(base_url("/Admin/menu/create"));
        } else {
            return redirect()->to(base_url("/Admin/menu"));
        }

        // if ($model->insert($_POST) === false) {
        //     $error = $model->errors();

        //     // echo $error['kategori'];
        //     session()->setFlashdata('infoeror', $error['kategori']);

        //     return redirect()->to(base_url("/Admin/kategori/create"));
        // } else {
        //     return redirect()->to(base_url("/Admin/kategori"));
        // }
    }

    public function find($id = null)
    {
        // echo "UPDATE THIS ID => $id<br>";

        $kategorimodel = new kategorimodel();
        $kategori = $kategorimodel->findAll($id);

        $menumodel = new menumodel();
        $menu = $menumodel->find($id);

        // print_r($kategori);

        $data = [
            'judul' => 'UPDATE DATA',
            'kategori' => $kategori,
            'menu' => $menu
        ];

        return view("menu/update", $data);
    }

    public function update()
    {
        $id = $this->request->getPost('idmenu');
        $file = $this->request->getFile('gambar');
        $name = $file->getName();

        if (empty($name)) {
            $name = $this->request->getPost('gambar');
        } else {
            // $file->move('./upload');
        }



        $data = [
            'idkategori' => $this->request->getPost('idkategori'),
            'menu' => $this->request->getPost('menu'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $name
        ];

        $model = new menumodel();

        if ($model->update($id, $data)===false) {
            $error = $model->errors();
            session()->setFlashdata('infoeror', $error);

            return redirect()->to(base_url("/Admin/menu/find/$id"));
        } else {
            return redirect()->to(base_url("/Admin/menu"));
        }
        
    }


    public function option()
    {
        $model = new kategorimodel();
        $kategori = $model->findAll();

        $data = [
            'kategori' => $kategori
        ];

        return view('template/option', $data);
    }

    public function delete($id = null)
    {
        $model = new menumodel();
        $model->delete($id);
        return redirect()->to(base_url("/Admin/menu"));
    }
}
