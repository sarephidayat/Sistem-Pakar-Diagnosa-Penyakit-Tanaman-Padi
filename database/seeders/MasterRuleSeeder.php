<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // 1) Daftar penyakit/pemetaan rule -> id_penyakit
        // Pastikan master_penyakit sudah di-seed dan id_penyakit cocok.
        // Contoh: 'K01' punya id_penyakit = 1, dsb. Sesuaikan jika beda.
        $rulesMeta = [
            'K01' => 1,
            'K02' => 2,
            'K03' => 3,
            'K04' => 4,
            'K05' => 5,
            'K06' => 6,
            'K07' => 7,
            'K08' => 8,
        ];

        // 2) Isi daftar gejala per rule berdasarkan matriks inferensimu.
        // Contoh format: 'K01' => ['G001','G002','G003', ...]
        // *** GANTI array di bawah sesuai tabel inferensi milikmu ***
        $rulesList = [
            'K01' => ['G001', 'G002', 'G003', 'G004', 'G005', 'G006', 'G007'], // contoh, ubah sesuai matriks
            'K02' => ['G002', 'G008', 'G009', 'G010', 'G011', 'G012',],
            'K03' => ['G003', 'G013', 'G014'],
            'K04' => ['G002', 'G013', 'G016', 'G017', 'G023', 'G024',],
            'K05' => ['G010', 'G018', 'G019'],
            'K06' => ['G024', 'G025', 'G026', 'G027', 'G028', 'G029', 'G030', 'G031'],
            'K07' => ['G021', 'G022', 'G023', 'G025', 'G032', 'G033', 'G034'],
            'K08' => ['G019', 'G020', 'G024', 'G036', 'G037', 'G038',]
        ];

        // 3) Insert master_rule (satu row per kode_rule)
        foreach ($rulesMeta as $kodeRule => $idPenyakit) {
            DB::table('master_rule')->insert([
                'kode_rule' => $kodeRule,
                'id_penyakit' => $idPenyakit,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        // 4) Ambil id_rule dari DB (kode_rule -> id_rule)
        $masterRules = DB::table('master_rule')->pluck('id_rule', 'kode_rule')->toArray();

        foreach ($rulesList as $kodeRule => $kodeGejalaArr) {
            if (!isset($masterRules[$kodeRule]))
                continue;

            $idRule = $masterRules[$kodeRule];
            dump("Rule $kodeRule (id_rule=$idRule) punya gejala: " . implode(', ', $kodeGejalaArr));
        }

        // 5) Masukkan detail_gejala
        // (asumsi master_status: 1 = Ya/default)
        $detailInserts = [];
        foreach ($rulesList as $kodeRule => $kodeGejalaArr) {
            if (!isset($masterRules[$kodeRule]))
                continue;
            $idRule = $masterRules[$kodeRule];
            foreach ($kodeGejalaArr as $kodeGejala) {
                // cari id_gejala berdasarkan kode_gejala
                $row = DB::table('master_gejala')->where('kode_gejala', $kodeGejala)->first();
                if (!$row)
                    continue; // jika kode gejala tidak ditemukan, lewati
                $idGejala = $row->id_gejala;

                $detailInserts[] = [
                    'id_rule' => $idRule,
                    'id_gejala' => $idGejala,
                    'id_status' => 1,         // default = Ya (sesuaikan jika perlu)
                    'bobot' => 1.00,          // default bobot (ubah kalau pakai CF)
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
        }

        if (!empty($detailInserts)) {
            DB::table('detail_gejala')->insert($detailInserts);
        }
    }
}