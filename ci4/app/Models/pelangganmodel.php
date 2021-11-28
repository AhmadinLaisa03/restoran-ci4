<?php

namespace App\Models;

use CodeIgniter\Model;

class pelangganmodel extends Model
{
    protected $table = 'tblpelanggan';

    protected $primaryKey = 'idpelanggan';

    protected $allowedFields = ['aktif'];
}
