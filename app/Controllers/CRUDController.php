<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class CRUDController extends BaseController
{
    public function index()
    {

        $model = new BukuModel();
        $semuaData = $model->findAll();
        return view("index",[
            "data" => $semuaData
        ]);

    }

    public function tambah() 
    {
        return view("create");
    }

    public function simpan()
    {
        $model = new BukuModel();
        $judul = request()->getPost("judul");
        $penulis = request()->getPost("penulis");
        $penerbit = request()->getPost("penerbit");
        $tahun_terbit = request()->getPost("tahun_terbit");

        $model -> insert([
            "judul" => $judul,
            "penulis" => $penulis,
            "penerbit" => $penerbit,
            "tahun_terbit" => $tahun_terbit
        ]);
        return redirect() ->to(base_url('/'));
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data = $model-> find($id);

        return view('edit', [
            "data" => $data
        ]);
    }
    
    public function update($id)
    {
        $model = new BukuModel();
        $data = [
        'judul' => $this->request->getPost('judul'),
        'penulis' => $this->request->getPost('penulis'),
        'penerbit' => $this->request->getPost('penerbit'),
        'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];
        
        
        $model -> update($id, $data);
        return redirect()->to(base_url('/'));
    }

    public function hapus($id)
    {
        $model = new BukuModel();
        $model -> delete($id);
        return redirect() ->to(base_url('/'));
    }
}