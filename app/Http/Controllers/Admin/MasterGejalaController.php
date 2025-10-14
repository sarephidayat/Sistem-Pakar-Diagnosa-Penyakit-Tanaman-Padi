<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MasterGejala;
use Illuminate\Http\Request;

class MasterGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // hanya ambil data yang belum dihapus (deleted = NULL)
        $gejalas = MasterGejala::whereNull('deleted')->get();

        return view('admin.gejala.index', compact('gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Jika hanya menampilkan form tambah data
        return view('admin.gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_gejala' => 'required|string|max:50|unique:master_gejala,kode_gejala',
            'nama_gejala' => 'required|string|max:255',
            'pertanyaan' => 'required|string|max:255',
        ]);
        // dd($request->all());

        // Simpan data gejala baru
        MasterGejala::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
            'pertanyaan' => $request->pertanyaan,
            'deleted' => null, // default null (belum dihapus)
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(MasterGejala $masterGejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // Cari data berdasarkan id_gejala
        $gejala = MasterGejala::findOrFail($id);

        // Tampilkan ke view edit
        return view('admin.gejala.edit', compact('gejala'));
    }

    /**
     * Proses update data gejala.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
            'pertanyaan' => 'required|string|max:255',
        ]);

        // Cari data gejala
        $gejala = MasterGejala::findOrFail($id);

        // Update data
        $gejala->update([
            'nama_gejala' => $request->nama_gejala,
            'pertanyaan' => $request->pertanyaan,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('gejala.index')->with('success', 'Data gejala berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gejala = MasterGejala::findOrFail($id);
        $gejala->deleted = 1;     // ubah dari NULL ke 1
        $gejala->save();         // simpan perubahan

        return redirect()->route('gejala.index')->with('success', 'Data berhasil dihapus (soft delete)');
    }
}
