<?php

namespace App\Models;

use CodeIgniter\Model;

class menumodel extends Model
{
    protected $table = 'tblmenu';

    protected $primaryKey = 'idmenu';

    protected $allowedFields = ['idkategori', 'menu', 'harga', 'gambar'];

    protected $validationRules = [
        'menu' => 'alpha_numeric_space|min_length[3]|is_unique[tblmenu.menu]',
        'harga' => 'numeric'
    ];

    protected $validationMessages = [
        'menu' => [
            'alpha_numeric_space' => 'menu hanya berisi angka dan huruf!',
            'min_length' => 'Minimal adalah 3 huruf!',
            'is_unique' => 'Terdapat menu yang sama, gunakan menu lain!'
        ],
        'harga' => [
            'numeric' => 'menu hanya dapat berisi angka!',
        ]
    ];
}
