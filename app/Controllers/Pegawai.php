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
        $simpandata =[
            'idpegawai' => $this->request->getVar('idpegawai'),
            'nama_pegawai' => $this->request->getVar('namapegawai'),
            'jenkel' => $this->request->getVar('jenkel'),
            'tanggal_lahir' => $this->request->getVar('tgllahir'),
            'alamat_pegawai' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon')
        ];

        $pegawai = new ModelPegawai;

        $pegawai->insert($simpandata);
        $msg = [
                'sukses' =>'Data pegawai berhasil disimpan'
        ];
        echo json_encode($msg);
    }

    public function formedit(){
        if($this->request->isAJAX()){
            
            $pegawai = new ModelPegawai;
            $idpegawai = $this->request->getVar('idpegawai');
            
            
            $row = $pegawai->find($idpegawai);

            $data = [
                'idpegawai' => $row['idpegawai'],
                'namapegawai' => $row['nama_pegawai'],
                'jenkel' => $row['jenkel'],
                'tgllahir' => $row['tanggal_lahir'],
                'alamat' => $row['alamat'],
                'telepon' => $row['telepon'],
            ];

            $msg = [
                'sukses' => view('pegawai/modaledit')
            ];
            echo json_encode($msg);
        }
    }

    public function hapus(){
        if($this->request->isAJAX()){
            $idpegawai = $this->request->getVar('idpegawai');
            $pegawai = new ModelPegawai;

            $pegawai->delete($idpegawai);

            $msg = [
                'sukses' => 'Pegawai dengan ID $idpegawai berhasil dihapus'
            ];
            echo json_encode($msg);
           
        }
    }
}
