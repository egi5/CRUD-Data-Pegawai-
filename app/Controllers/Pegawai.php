<?php

namespace App\Controllers;

use App\Models\ModelPegawai;

class Pegawai extends BaseController
{
    public function index()
    {
        $pegawai = new ModelPegawai;
        $data = ['tampildata' => $pegawai->findAll()];
        return view("pegawai/viewtampildata",$data);
        
    }

    
}
