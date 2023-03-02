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

    public function formtambah(){
        if($this->request->isAJAX()){
            $msg = ['data' => view('pegawai/modaltambah')];

            echo json_encode($msg);
        }else{
            exit('Maaf tidak dapat ditampilkan');
        }
    }

    public function simpandata(){
        if($this->request->isAJAX()){
           $simpandata =[
            'idpegawai'     =>$this->request->getVar('idpegawai'),
            'nama_pegawai'  =>$this->request->getVar('namapegawai'),
            'jenkel'     =>$this->request->getVar('jenkel'),
            'tanggal_lahir'     =>$this->request->getVar('tgllahir'),
            'alamat_pegawai'     =>$this->request->getVar('alamat'),
            'telepon'     =>$this->request->getVar('telepon')
           ];

           $pegawai = new ModalPegawai;

           $pegawai->insert($simpandata);
           $msg = [
                'sukses' =>'Data pegawai berhasil disimpan'
           ];
        }else{
            exit('Maaf tidak dapat ditampilkan');
        }
    }
}
