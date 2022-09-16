<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PModel;

class PController extends Controller
{
    public function __construct()
    {
        $this->PModel = new PModel();
    }

    public function index()
    {
        $data = [
            'pegawai' => $this->PModel->allData(),
        ];
        return view('pegawai.index', $data);
    }

    public function create()
    {
        $data = [
            'pegawai' => $this->PModel->tambah(),
            'jabatan' => $this->PModel->dataJabatan(),
        ];
        return view('pegawai.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'id_jabatan' => 'required',
        ]);

        $data = [
            'nama' => Request()->nama,
            'no_hp' => Request()->no_hp,
            'jk' => Request()->jk,
            'email' => Request()->email,
            'alamat' => Request()->alamat,
            'tgl_lahir' => Request()->tgl_lahir,
            'id_jabatan' => Request()->id_jabatan,
        ];

        $this->PModel->addData($data);
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai created successfully.');
    }

    public function show($id_pegawai)
    {
        $data = [
            'pegawai' => $this->PModel->detailData($id_pegawai),
        ];
        return view('pegawai.show', $data);
    }

    public function edit($id_pegawai)
    {
        $data = [
            'pegawai' => $this->PModel->detailData($id_pegawai),
            'jabatan' => $this->PModel->dataJabatan(),
        ];
        return view('pegawai.edit', $data);    }

    public function update(Request $request, $id_pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'id_jabatan' => 'required',
        ]);

        $data = [
            'nama' => Request()->nama,
            'no_hp' => Request()->no_hp,
            'jk' => Request()->jk,
            'email' => Request()->email,
            'alamat' => Request()->alamat,
            'tgl_lahir' => Request()->tgl_lahir,
            'id_jabatan' => Request()->id_jabatan,
        ];
        $this->PModel->editData($id_pegawai,$data);
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai updated successfully');

    }

    public function destroy($id_pegawai)
    {
        $this->PModel->deleteData($id_pegawai);
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai deleted successfully');
    }

    public function showProfil($id_profil)
    {
        $data = [
            'profil' => $this->PModel->profilData($id_profil),
        ];
        return view('pegawai.showProfil', $data);
    }
}
