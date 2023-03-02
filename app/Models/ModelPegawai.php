<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model{
    
    protected $table      = 'pegawai';
    protected $primaryKey = 'idpegawai';

    protected $allowedFields = ['idpegawai', 'nama_pegawai','jenkel','tanggal_lahir', 'alamat_pegawai', 'telepon'];
    
}