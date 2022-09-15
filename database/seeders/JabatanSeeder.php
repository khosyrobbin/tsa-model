<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
            ['nama_jabatan' => 'Manajer',],
            ['nama_jabatan' => 'Pegawai Tetap',],
            ['nama_jabatan' => 'Pegawai Kontrak',],
            ['nama_jabatan' => 'Supervisor',],
        ];

        DB::table('jabatan')->insert($jabatan);
        // php artisan db:seed --class=JabatanSeeder
    }
}
