<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class PModel extends Model
{
    public function allData()
    {
        return DB::table('pegawai')
        ->join('jabatan', 'jabatan.id_jabatan', '=', 'pegawai.id_jabatan')
        ->paginate(3);
    }
    public function addData($data){
        DB::table('pegawai')->insert($data);
    }
    public function detailData($id_pegawai){
        return DB::table('pegawai')->where('id_pegawai', $id_pegawai)
        ->join('jabatan', 'jabatan.id_jabatan', '=', 'pegawai.id_jabatan')
        ->first();
    }
    public function editData($id_pegawai, $data){
        DB::table('pegawai')->where('id_pegawai', $id_pegawai)->update($data);
    }
    public function deleteData($id_pegawai){
        DB::table('pegawai')->where('id_pegawai', $id_pegawai)->delete();
    }
    public function tambah(){
        return DB::table('pegawai')
        ->join('jabatan', 'jabatan.id_jabatan', '=', 'pegawai.id_jabatan')
        ->get();
    }
    public function dataJabatan(){
        return DB::table('jabatan')->get();
    }

    public function profilData($id_profil){
        DB::table('profil')->where('id_profil', $id_profil)
        ->join('pegawai', 'pegawai.id_pegawai', '=', 'profil.id_pegawai')
        ->join('departemen', 'departemen.id_dapartemen', '=', 'profil.id_dapartemen')
        ->first();
    }
}


