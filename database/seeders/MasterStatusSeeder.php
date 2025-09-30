<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_status')->insert([
            [
                'nama_status' => 'Benar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_status' => 'Salah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
