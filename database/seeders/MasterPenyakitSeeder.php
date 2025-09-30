<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Master Penyakit
        DB::table('master_penyakit')->insert([
            [
                'kode_penyakit' => 'P001',
                'nama_penyakit' => 'Bercak dan Daun Coklat',
                'solusi' => "1. Jarak tanam jangan terlalu rapat terutama saat musim hujan.\n2. Gunakan cara tanam sistem legowo.\n3. Jangan gunakan urea yang berlebih dan imbangi dengan unsur K.\n4. Aplikasi fungisida kontak pada daun (Antracol, Dithane, dll).\n5. Gunakan fungisida sistemik (Score, Anvil, Folicur, Nativo, Opus, dll).\n6. Gunakan varietas tahan seperti Ciherang dan Membrano.\n7. Pemupukan berimbang lengkap (250 kg urea, 100 kg SP36, 100 kg KCl per ha).\n8. Penyemprotan fungisida berbahan aktif difenoconazol, azoxistrobin, belerang, tebukonazol, dll.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penyakit' => 'P002',
                'nama_penyakit' => 'Blas',
                'solusi' => "1. Membakar sisa jerami.\n2. Menggenangi sawah.\n3. Menanam bibit varietas unggul (Sentani, Cimandiri, IR-48, IR-36).\n4. Pemberian pupuk N pada fase vegetatif & fase pembentukan bulir.\n5. Pemberian GLIO diawal tanam.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penyakit' => 'P003',
                'nama_penyakit' => 'Pelepah Daun',
                'solusi' => "1. Pengaturan jarak tanam tidak terlalu rapat.\n2. Pemupukan berimbang.\n3. Pengairan berselang.\n4. Sanitasi sisa tanaman & gulma di sekitar sawah.\n5. Aplikasi fungisida (benomyl, difenoconazol, mankozeb, validamycin).",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penyakit' => 'P004',
                'nama_penyakit' => 'Fusarium',
                'solusi' => "1. Merenggangkan jarak tanam.\n2. Merendam bibit dalam larutan POCNASA.\n3. Sebarkan GLIO di lahan.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penyakit' => 'P005',
                'nama_penyakit' => 'Kresek Hawar Daun',
                'solusi' => "1. Perbaikan cara bercocok tanam.\n2. Pengolahan tanah optimal.\n3. Pengaturan pola tanam & tanam serempak.\n4. Pergiliran tanam & varietas tahan.\n5. Gunakan benih sehat & unggul.\n6. Pengaturan jarak tanam.\n7. Pemupukan berimbang (N, P, K, mikro).\n8. Pengaturan pengairan sesuai fase.\n9. Sanitasi lingkungan.\n10. Pemanfaatan agensia hayati Corynebacterium.\n11. Penyemprotan bakterisida yang diizinkan.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penyakit' => 'P006',
                'nama_penyakit' => 'Kerdil',
                'solusi' => "1. Gunakan bibit unggul.\n2. Bersihkan gulma sekitar tanaman.\n3. Bercocok tanam dengan tepat.\n4. Pengendalian biologi dengan musuh alami.\n5. Penyemprotan pestisida & insektisida.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penyakit' => 'P007',
                'nama_penyakit' => 'Tungro',
                'solusi' => "1. Gunakan varietas tahan (Tukad Unda, Tukad Balian, Tukad Petanu, Bondoyudo, Kalimas).\n2. Cabut & bakar tanaman terinfeksi.\n3. Gunakan tanam benih langsung (Tabela).\n4. Menanam padi saat populasi wereng rendah.\n5. Menanam serempak.\n6. Rotasi tanaman dengan non-padi.\n7. Kendalikan wereng hijau dengan insektisida abamectin.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penyakit' => 'P008',
                'nama_penyakit' => 'Batang Busuk',
                'solusi' => "1. Sanitasi lahan & sisa tanaman.\n2. Gunakan varietas tahan.\n3. Aplikasi fungisida sesuai anjuran.\n4. Perbaikan drainase sawah.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


    }
}
