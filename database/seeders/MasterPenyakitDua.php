<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterPenyakitDua extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_penyakit_dua')->insert([
            [
                'nama_penyakit' => 'Kerdil Busuk',
            ],
            [
                'nama_penyakit'=> 'Tungoro',
            ]
            ]);
    }
}
