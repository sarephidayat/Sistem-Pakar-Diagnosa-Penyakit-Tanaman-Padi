<?php

namespace App\Http\Controllers;

use App\Models\MasterRule;
use App\Models\MasterGejala;
use App\Models\MasterPenyakit;
use App\Models\DetailGejala;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    // Tampilkan form diagnosa
    public function index()
    {
        $gejala = MasterGejala::orderBy('id_gejala', 'asc')->get();
        return view('diagnosa', compact('gejala'));
    }

    // Proses hasil diagnosa
    public function diagnosa(Request $request)
    {
        $input = $request->input('gejala', []);

        // Normalisasi input jadi array id_gejala yang dipilih
        $selected = [];
        foreach ($input as $id => $val) {
            if ($val === 'ya' || $val === 1 || $val === '1' || $val === 'on') {
                $selected[] = (int) $id;
            }
        }

        // Ambil semua rule beserta gejalanya dan penyakit
        $rules = \App\Models\MasterRule::with(['penyakit', 'detailGejala.gejala'])->get();

        $results = [];

        foreach ($rules as $rule) {
            $gejalaRule = $rule->detailGejala->pluck('id_gejala')->toArray();
            $total = count($gejalaRule);
            if ($total === 0)
                continue;

            $matched = count(array_intersect($gejalaRule, $selected));
            $score = $matched / $total;

            // Simpan hanya jika ada kecocokan
            if ($score > 0) {
                $results[] = [
                    'penyakit' => $penyakit,
                    'gejala_terdeteksi' => $gejalaTerdeteksi,
                    'cf_total' => $cfTotal,
                    'persentase' => round($cfTotal * 100, 2),
                    'jumlah_gejala_cocok' => count($gejalaTerdeteksi)
                ];
            }
        }

        // Urutkan berdasarkan CF tertinggi
        usort($results, function ($a, $b) {
            return $b['cf_total'] <=> $a['cf_total'];
        });

        return view('hasilDiagnosa', [
            'selectedGejala' => $selectedGejala,
            'results' => $results,
            'totalGejalaDipilih' => count($selectedGejala),
            'metode' => 'CF'
        ]);
    }
}