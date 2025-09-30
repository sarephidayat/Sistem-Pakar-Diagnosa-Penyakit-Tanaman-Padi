<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_gejala')->insert([
            [
                'kode_gejala' => 'G001',
                'nama_gejala' => 'Menyerang Pelepah',
                'pertanyaan' => 'Apakah padi Anda terlihat terserang pada bagian pelepah?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G002',
                'nama_gejala' => 'Malai',
                'pertanyaan' => 'Apakah terdapat masalah pada malai (bunga padi)?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G003',
                'nama_gejala' => 'Menyerang Buah yang baru tumbuh',
                'pertanyaan' => 'Apakah buah padi yang baru tumbuh tampak diserang hama atau penyakit?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G004',
                'nama_gejala' => 'Menyerang pada Kecambah',
                'pertanyaan' => 'Apakah kecambah padi Anda terlihat terserang atau rusak?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G005',
                'nama_gejala' => 'Biji bercak coklat tetapi tetap berisi',
                'pertanyaan' => 'Apakah biji padi memiliki bercak coklat tetapi tetap berisi?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G006',
                'nama_gejala' => 'Biji Kecambah busuk',
                'pertanyaan' => 'Apakah biji kecambah tampak busuk?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G007',
                'nama_gejala' => 'Kecambah mati',
                'pertanyaan' => 'Apakah kecambah padi mati atau tidak tumbuh?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G008',
                'nama_gejala' => 'Padi dewasa busuk dan kering',
                'pertanyaan' => 'Apakah padi dewasa terlihat busuk dan kering?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G009',
                'nama_gejala' => 'Menyerang Bagian daun',
                'pertanyaan' => 'Apakah ada serangan pada bagian daun padi?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G010',
                'nama_gejala' => 'Menyerang Buku pada malai',
                'pertanyaan' => 'Apakah terdapat serangan pada buku malai padi?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G011',
                'nama_gejala' => 'Pemasakan makanan terhambat',
                'pertanyaan' => 'Apakah pemasakan makanan dalam bulir padi tampak terhambat?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G012',
                'nama_gejala' => 'Butiran menjadi Hampa',
                'pertanyaan' => 'Apakah butiran gabah banyak yang kosong (hampa)?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G013',
                'nama_gejala' => 'Menyerang tangkai malai',
                'pertanyaan' => 'Apakah ada serangan pada tangkai malai padi?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G014',
                'nama_gejala' => 'Menyerang pelepah yang membentuk anakan',
                'pertanyaan' => 'Apakah pelepah yang membentuk anakan terlihat diserang?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G015',
                'nama_gejala' => 'Jumlah gabah menurun',
                'pertanyaan' => 'Apakah jumlah gabah yang dihasilkan menurun drastis?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G016',
                'nama_gejala' => 'Kualitas Gabah kurang baik',
                'pertanyaan' => 'Apakah kualitas gabah tampak kurang baik (kering, kecil, atau tidak bernas)?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G017',
                'nama_gejala' => 'Menyerang titik tumbuh padi',
                'pertanyaan' => 'Apakah titik tumbuh padi tampak terserang?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G018',
                'nama_gejala' => 'Terdapat garis-garis di antara tulang daun',
                'pertanyaan' => 'Apakah terdapat garis-garis di antara tulang daun padi?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G019',
                'nama_gejala' => 'Batang melepuh',
                'pertanyaan' => 'Apakah batang padi terlihat melepuh?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G020',
                'nama_gejala' => 'Batang berisi cairan kehitaman',
                'pertanyaan' => 'Apakah batang padi berisi cairan berwarna kehitaman?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G021',
                'nama_gejala' => 'Daun Mengering',
                'pertanyaan' => 'Apakah daun padi mengering sebelum waktunya?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G022',
                'nama_gejala' => 'Daun Mati',
                'pertanyaan' => 'Apakah banyak daun padi yang mati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G023',
                'nama_gejala' => 'Daun terkulai',
                'pertanyaan' => 'Apakah daun padi tampak terkulai layu?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G024',
                'nama_gejala' => 'Akar membusuk',
                'pertanyaan' => 'Apakah akar padi terlihat membusuk?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G025',
                'nama_gejala' => 'Menyerang semua bagian tanaman',
                'pertanyaan' => 'Apakah semua bagian tanaman padi terlihat terserang?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G026',
                'nama_gejala' => 'Daun menjadi pendek',
                'pertanyaan' => 'Apakah daun padi menjadi lebih pendek dari biasanya?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G027',
                'nama_gejala' => 'Batang menjadi sempit',
                'pertanyaan' => 'Apakah batang padi terlihat lebih sempit dari biasanya?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G028',
                'nama_gejala' => 'Tanaman berwarna hijau kekuningan',
                'pertanyaan' => 'Apakah tanaman padi berwarna hijau kekuningan?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G029',
                'nama_gejala' => 'Batang menjadi pendek',
                'pertanyaan' => 'Apakah batang padi menjadi lebih pendek dari normal?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G030',
                'nama_gejala' => 'Buku-Buku menjadi pendek',
                'pertanyaan' => 'Apakah buku-buku batang padi menjadi lebih pendek?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G031',
                'nama_gejala' => 'Anakan banyak tapi kecil',
                'pertanyaan' => 'Apakah anakan padi banyak tetapi ukurannya kecil-kecil?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G032',
                'nama_gejala' => 'Pertumbuhan tanaman kurang sempurna',
                'pertanyaan' => 'Apakah pertumbuhan tanaman padi tampak kurang sempurna?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G033',
                'nama_gejala' => 'Daun menguning dan kecoklatan',
                'pertanyaan' => 'Apakah daun padi menguning dan berubah kecoklatan?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G034',
                'nama_gejala' => 'Jumlah tunas berkurang',
                'pertanyaan' => 'Apakah jumlah tunas padi berkurang dari biasanya?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G035',
                'nama_gejala' => 'Malai menjadi kecil',
                'pertanyaan' => 'Apakah malai padi tampak lebih kecil dari biasanya?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G036',
                'nama_gejala' => 'Malai tidak berisi',
                'pertanyaan' => 'Apakah malai padi banyak yang tidak berisi gabah?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G037',
                'nama_gejala' => 'Bercak daun membesar',
                'pertanyaan' => 'Apakah bercak pada daun padi semakin membesar?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_gejala' => 'G038',
                'nama_gejala' => 'Bercak kehitaman pada pelepah',
                'pertanyaan' => 'Apakah terdapat bercak kehitaman pada pelepah padi?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

}
