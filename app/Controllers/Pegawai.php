<?php

namespace App\Controllers;

use App\Models\ModelPegawai;

class Pegawai extends BaseController
{
    public function index()
    {
        
        return view("pegawai/viewtampildata");
        
    }

    public function ambildata(){
        if($this->request->isAJAX()){
            $pegawai = new ModelPegawai;
            $data = ['tampildata' => $pegawai->findAll()];

            $msg = ['data' => view('pegawai/datapegawai', $data)];

            echo json_encode($msg);
            
        }else{
            exit('Maaf tidak dapat ditampilkan');
        }
    }
}
