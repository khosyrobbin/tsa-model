<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departemen = [
            ['nama_dapartemen' => 'Departemen Produksi',],
            ['nama_dapartemen' => 'Departemen Keuangan',],
        ];

        DB::table('departemen')->insert($departemen);
        // php artisan db:seed --class=DepartemenSeeder
    }
}
