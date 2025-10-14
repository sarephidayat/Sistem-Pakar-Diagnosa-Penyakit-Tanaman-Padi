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
        
        // Normalisasi input - hanya ambil gejala yang dijawab "ya"
        $selectedGejala = [];
        foreach ($input as $id_gejala => $jawaban) {
            if ($jawaban === 'ya') {
                $selectedGejala[] = (int) $id_gejala;
            }
        }

        // Jika tidak ada gejala yang dipilih
        if (empty($selectedGejala)) {
            return view('hasilDiagnosa', [
                'selectedGejala' => [],
                'results' => [],
                'message' => 'Tidak ada gejala yang dipilih. Silakan pilih gejala yang dialami tanaman padi Anda.'
            ]);
        }

        // Ambil semua penyakit beserta rules dan detail gejala
        $penyakitList = MasterPenyakit::with(['rules.detailGejala.gejala'])->get();
        
        $results = [];

        foreach ($penyakitList as $penyakit) {
            $totalGejalaPenyakit = 0;
            $gejalaCocok = 0;
            $gejalaTerdeteksi = [];
            
            // Hitung total gejala untuk penyakit ini dan gejala yang cocok
            foreach ($penyakit->rules as $rule) {
                foreach ($rule->detailGejala as $detailGejala) {
                    $idGejala = $detailGejala->id_gejala;
                    $totalGejalaPenyakit++;
                    
                    // Jika gejala ini dipilih user
                    if (in_array($idGejala, $selectedGejala)) {
                        $gejalaCocok++;
                        $gejalaTerdeteksi[$idGejala] = [
                            'gejala' => $detailGejala->gejala,
                            'cf' => $detailGejala->cf ?? 0.8 // Default CF jika tidak ada
                        ];
                    }
                }
            }
            
            // Hitung persentase kecocokan
            if ($totalGejalaPenyakit > 0) {
                $persentase = ($gejalaCocok / $totalGejalaPenyakit) * 100;
                
                // Hanya tampilkan jika ada kecocokan
                if ($persentase > 0) {
                    $results[] = [
                        'penyakit' => $penyakit,
                        'gejala_terdeteksi' => $gejalaTerdeteksi,
                        'persentase' => round($persentase, 2),
                        'jumlah_gejala_cocok' => $gejalaCocok,
                        'total_gejala_penyakit' => $totalGejalaPenyakit
                    ];
                }
            }
        }

        // Urutkan berdasarkan persentase tertinggi
        usort($results, function ($a, $b) {
            return $b['persentase'] <=> $a['persentase'];
        });

        return view('hasilDiagnosa', [
            'selectedGejala' => $selectedGejala,
            'results' => $results,
            'totalGejalaDipilih' => count($selectedGejala)
        ]);
    }

    // Alternatif metode dengan Certainty Factor
    public function diagnosaCF(Request $request)
    {
        $input = $request->input('gejala', []);
        
        $selectedGejala = [];
        foreach ($input as $id_gejala => $jawaban) {
            if ($jawaban === 'ya') {
                $selectedGejala[] = (int) $id_gejala;
            }
        }

        if (empty($selectedGejala)) {
            return view('hasilDiagnosa', [
                'selectedGejala' => [],
                'results' => [],
                'message' => 'Tidak ada gejala yang dipilih.'
            ]);
        }

        $penyakitList = MasterPenyakit::with(['rules.detailGejala.gejala'])->get();
        $results = [];

        foreach ($penyakitList as $penyakit) {
            $cfTotal = 0;
            $gejalaTerdeteksi = [];
            
            foreach ($penyakit->rules as $rule) {
                foreach ($rule->detailGejala as $detailGejala) {
                    $idGejala = $detailGejala->id_gejala;
                    
                    if (in_array($idGejala, $selectedGejala)) {
                        $cf = $detailGejala->cf ?? 0.8; // Gunakan CF dari database atau default
                        $gejalaTerdeteksi[$idGejala] = [
                            'gejala' => $detailGejala->gejala,
                            'cf' => $cf
                        ];
                        
                        // Hitung CF Combine
                        if ($cfTotal == 0) {
                            $cfTotal = $cf;
                        } else {
                            $cfTotal = $cfTotal + ($cf * (1 - $cfTotal));
                        }
                    }
                }
            }
            
            if (!empty($gejalaTerdeteksi)) {
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