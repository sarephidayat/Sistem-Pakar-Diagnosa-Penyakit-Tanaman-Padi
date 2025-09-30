<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Detail untuk Gejala Penyakit
        // DB::table('detail_gejala')->insert([

        //     // R001 - Bercak dan Daun Coklat
        //     [
        //         'id_rule' => 1,
        //         'id_gejala' => 5,
        //         'id_status' => 1,
        //         'bobot' => 0.8,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Biji bercak coklat tetapi tetap berisi
        //     [
        //         'id_rule' => 1,
        //         'id_gejala' => 37,
        //         'id_status' => 1,
        //         'bobot' => 0.9,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // bercak daun membesar

        //     // R002 - Blas
        //     [
        //         'id_rule' => 2,
        //         'id_gejala' => 18,
        //         'id_status' => 1,
        //         'bobot' => 0.85,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Garis di antara tulang daun
        //     [
        //         'id_rule' => 2,
        //         'id_gejala' => 36,
        //         'id_status' => 1,
        //         'bobot' => 0.9,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],  // Malai tidak berisi

        //     // R003 - Pelepah Daun
        //     [
        //         'id_rule' => 3,
        //         'id_gejala' => 1,
        //         'id_status' => 1,
        //         'bobot' => 0.8,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],  // Menyerang Pelepah
        //     [
        //         'id_rule' => 3,
        //         'id_gejala' => 38,
        //         'id_status' => 1,
        //         'bobot' => 0.85,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // bercak kehitaman pada pelepah

        //     // R004 - Fusarium
        //     [
        //         'id_rule' => 4,
        //         'id_gejala' => 6,
        //         'id_status' => 1,
        //         'bobot' => 0.8,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Biji Kecambah busuk
        //     [
        //         'id_rule' => 4,
        //         'id_gejala' => 7,
        //         'id_status' => 1,
        //         'bobot' => 0.9,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Kecambah mati

        //     // R005 - Kresek Hawar Daun
        //     [
        //         'id_rule' => 5,
        //         'id_gejala' => 21,
        //         'id_status' => 1,
        //         'bobot' => 0.85,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Daun Mengering
        //     [
        //         'id_rule' => 5,
        //         'id_gejala' => 22,
        //         'id_status' => 1,
        //         'bobot' => 0.9,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],  // Daun Mati

        //     // R006 - Kerdil
        //     [
        //         'id_rule' => 6,
        //         'id_gejala' => 26,
        //         'id_status' => 1,
        //         'bobot' => 0.85,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Daun menjadi pendek
        //     [
        //         'id_rule' => 6,
        //         'id_gejala' => 29,
        //         'id_status' => 1,
        //         'bobot' => 0.9,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],  // Batang menjadi pendek

        //     // R007 - Tungro
        //     [
        //         'id_rule' => 7,
        //         'id_gejala' => 28,
        //         'id_status' => 1,
        //         'bobot' => 0.9,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],  // Tanaman hijau kekuningan
        //     [
        //         'id_rule' => 7,
        //         'id_gejala' => 33,
        //         'id_status' => 1,
        //         'bobot' => 0.85,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Daun menguning kecoklatan

        //     // R008 - Batang Busuk
        //     [
        //         'id_rule' => 8,
        //         'id_gejala' => 19,
        //         'id_status' => 1,
        //         'bobot' => 0.85,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], // Batang melepuh
        //     [
        //         'id_rule' => 8,
        //         'id_gejala' => 20,
        //         'id_status' => 1,
        //         'bobot' => 0.9,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],  // Batang berisi cairan kehitaman
        // ]);
    }
}
