<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'id_pegawai'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'nama', 'no_hp','jk','email','alamat','tgl_lahir'
    ];
}
