<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\pelangganmodel;

class pelanggan extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new pelangganmodel();

        $data = [
            'judul' => 'DATA PELANGGAN',
            'pelanggan' => $model->paginate(3, 'grup1'),
            'pager' => $model->pager
        ];

        return view('pelanggan/select', $data);
    }

    public function delete($id = null)
    {
        $model = new pelangganmodel();
        $model->delete($id);
        return redirect()->to(base_url("/Admin/pelanggan"));
    }

    public function update($id = null, $isi = 1)
    {
        $model = new pelangganmodel();
        if ($isi == 0) {
            $isi = 1;
        } else {
            $isi = 0;
        }

        $data = [
            'aktif' => $isi
        ];
        echo $id;

        $model->update($id, $data);
        return redirect()->to(base_url("/Admin/pelanggan"));
    }
}
