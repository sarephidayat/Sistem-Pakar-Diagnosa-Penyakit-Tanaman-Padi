<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailGejalaSeeder extends Seeder
{
    public function run(): void
    {
        $rulesList = [
            'K01' => ['G001', 'G002', 'G003', 'G004', 'G005', 'G006', 'G007'],
            'K02' => ['G002', 'G008', 'G009', 'G010', 'G011', 'G012'],
            'K03' => ['G003', 'G013', 'G014'],
            'K04' => ['G002', 'G013', 'G016', 'G017', 'G023', 'G024'],
            'K05' => ['G010', 'G018', 'G019'],
            'K06' => ['G024', 'G025', 'G026', 'G027', 'G028', 'G029', 'G030', 'G031'],
            'K07' => ['G021', 'G022', 'G023', 'G025', 'G032', 'G033', 'G034'],
            'K08' => ['G019', 'G020', 'G024', 'G036', 'G037', 'G038'],
        ];

        $gejalaWeightByName = [
            'Menyerang Pelepah' => 0.75,
            'Malai' => 1.00,
            'Menyerang Buah yang baru tumbuh' => 1.00,
            'Menyerang pada Kecambah' => 1.00,
            'Biji bercak coklat tetapi tetap berisi' => 0.50,
            'Biji Kecambah busuk' => 1.00,
            'Kecambah mati' => 1.00,
            'Padi dewasa busuk dan kering' => 1.00,
            'Menyerang Bagian daun' => 0.75,
            'Menyerang Buku pada malai' => 1.00,
            'Pemasakan makanan terhambat' => 1.00,
            'Butiran menjadi Hampa' => 1.00,
            'Menyerang tangkai malai' => 1.00,
            'Menyerang pelepah yang membentuk anakan' => 0.75,
            'Jumlah gabah menurun' => 0.50,
            'Kualitas Gabah kurang baik' => 0.50,
            'Menyerang titik tumbuh padi' => 1.00,
            'Terdapat garis-garis di antara tulang daun' => 0.75,
            'Batang melepuh' => 0.75,
            'Batang berisi cairan kehitaman' => 0.75,
            'Daun Mengering' => 0.75,
            'Daun Mati' => 0.75,
            'Daun terkulai' => 0.75,
            'Akar membusuk' => 1.00,
            'Menyerang semua bagian tanaman' => 1.00,
            'Daun menjadi pendek' => 0.50,
            'Batang menjadi sempit' => 0.50,
            'Tanaman berwarna hijau kekuningan' => 0.50,
            'Batang menjadi pendek' => 0.50,
            'Buku-Buku menjadi pendek' => 0.50,
            'Anakan banyak tapi kecil' => 0.50,
            'Pertumbuhan tanaman kurang sempurna' => 0.50,
            'Daun menguning dan kecoklatan' => 0.75,
            'Jumlah tunas berkurang' => 0.50,
            'Malai menjadi kecil' => 0.75,
            'Malai tidak berisi' => 1.00,
            'Bercak daun membesar' => 0.75,
            'Bercak kehitaman pada pelepah' => 0.75,
        ];

        // helper normalizer
        $normalize = function ($s) {
            $s = trim($s);
            $s = preg_replace('/\s+/', ' ', $s); // collapse spaces
            return mb_strtolower($s);
        };

        // normalize mapping keys
        $weightNorm = [];
        foreach ($gejalaWeightByName as $name => $w) {
            $weightNorm[$normalize($name)] = $w;
        }

        // ambil id_status dari DB (cari label "Wajib" / "Opsional" jika tersedia)
        $idStatusWajib = DB::table('master_status')->whereRaw('LOWER(nama_status) LIKE ?', ['%wajib%'])->value('id_status') ?? 1;
        $idStatusOpsional = DB::table('master_status')->whereRaw('LOWER(nama_status) LIKE ?', ['%opsional%'])->value('id_status') ?? 2;

        $detailInserts = [];
        $missing = ['master_rule_not_found' => [], 'master_gejala_not_found' => []];

        foreach ($rulesList as $kodeRule => $kodeGejalaArr) {
            $ruleRow = DB::table('master_rule')->where('kode_rule', $kodeRule)->first();
            if (!$ruleRow) {
                $missing['master_rule_not_found'][] = $kodeRule;
                continue;
            }
            $idRule = $ruleRow->id_rule;

            foreach ($kodeGejalaArr as $kodeGejala) {
                $gejalaRow = DB::table('master_gejala')->where('kode_gejala', $kodeGejala)->first();
                if (!$gejalaRow) {
                    $missing['master_gejala_not_found'][] = $kodeGejala;
                    continue;
                }

                $namaGejala = trim($gejalaRow->nama_gejala ?? '');
                $norm = $normalize($namaGejala);

                $bobot = $weightNorm[$norm] ?? 0.50; // default jika tidak match
                $idStatus = ($bobot == 1.00) ? $idStatusWajib : $idStatusOpsional;

                $detailInserts[] = [
                    'id_rule' => $idRule,
                    'id_gejala' => $gejalaRow->id_gejala,
                    'id_status' => $idStatus,
                    'bobot' => number_format((float) $bobot, 2, '.', ''),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        if (!empty($detailInserts)) {
            // gunakan upsert supaya bisa di-run ulang tanpa duplikat
            DB::table('detail_gejala')->upsert(
                $detailInserts,
                ['id_rule', 'id_gejala'],            // unique keys
                ['id_status', 'bobot', 'updated_at'] // fields to update jika sudah ada
            );
            $this->command->info('Upserted ' . count($detailInserts) . ' detail_gejala rows.');
        } else {
            $this->command->info('No detail_gejala to insert.');
        }

        if (!empty($missing['master_rule_not_found'])) {
            $this->command->warn('Missing master_rule for: ' . implode(', ', array_unique($missing['master_rule_not_found'])));
        }
        if (!empty($missing['master_gejala_not_found'])) {
            $this->command->warn('Missing master_gejala for: ' . implode(', ', array_unique($missing['master_gejala_not_found'])));
        }
    }
}
