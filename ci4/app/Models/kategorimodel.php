<?php 
    namespace App\Models;

    use CodeIgniter\Model;
    
    class kategorimodel extends Model
    {
        protected $table = 'tblkategori';

        protected $allowedFields = ['kategori','keterangan'];

        protected $primaryKey = 'idkategori';

        protected $validationRules = [
            'kategori' => 'alpha_numeric_space|min_length[3]|is_unique[tblkategori.kategori]',
        ];

        protected $validationMessages = [
            'kategori' => [
                'alpha_numeric_space' => 'Kategori hanya berisi angka dan huruf!',
                'min_length' => 'Minimal adalah 3 huruf!',
                'is_unique' => 'Terdapat kategori yang sama, cari kategori lain!'
            ],
        ];
    }
?>