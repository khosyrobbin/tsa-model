<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PegawaiModel;

class JabatanModel extends Model
{
    use HasFactory;
    protected $table = 'jabatan';
    public function pegawai(){
        return $this->hasMany(PegawaiModel::class);
    }
}
