<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MasterPenyakit;
use Illuminate\Http\Request;

class MasterPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // hanya ambil data yang belum dihapus (deleted = NULL)
        $penyakits = MasterPenyakit::whereNull('deleted')->get();

        return view('admin.penyakit.index', compact('penyakits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Jika hanya menampilkan form tambah data
        return view('admin.penyakit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_penyakit' => 'required|string|max:50|unique:master_penyakit,kode_penyakit',
            'nama_penyakit' => 'required|string|max:255',
            'pertanyaan' => 'required|string|max:255',
        ]);
        // dd($request->all());

        // Simpan data penyakit baru
        MasterPenyakit::create([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'pertanyaan' => $request->pertanyaan,
            'deleted' => null, // default null (belum dihapus)
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('penyakit.index')->with('success', 'penyakit berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(MasterPenyakit $MasterPenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // Cari data berdasarkan id_penyakit
        $penyakit = MasterPenyakit::findOrFail($id);

        // Tampilkan ke view edit
        return view('admin.penyakit.edit', compact('penyakit'));
    }

    /**
     * Proses update data penyakit.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
            'solusi' => 'required|string',
        ]);

        // Cari data penyakit
        $penyakit = MasterPenyakit::findOrFail($id);

        // Update data
        $penyakit->update([
            'nama_penyakit' => $request->nama_penyakit,
            'solusi' => $request->solusi,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('penyakit.index')->with('success', 'Data penyakit berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penyakit = MasterPenyakit::findOrFail($id);
        $penyakit->deleted = 1;     // ubah dari NULL ke 1
        $penyakit->save();         // simpan perubahan

        return redirect()->route('penyakit.index')->with('success', 'Data berhasil dihapus (soft delete)');
    }
}
