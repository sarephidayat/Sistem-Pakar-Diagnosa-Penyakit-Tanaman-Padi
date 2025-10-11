@extends('admin.layout.main')

@section('title', 'Ubah Data gejala')

@section('content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data gejala</h1>
    <a href="{{ url('/gejala') }}" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="{{ route('gejala.update', $gejala->id_gejala) }}" method="POST">
          @csrf
          @method('PUT')
            <table cellpadding="8" class="w-100">
              <tr>
                <td>kode_gejala</td>
                <td>
                  <input class="form-control" type="text" value="{{ $gejala->kode_gejala }}" disabled>
                  <input type="hidden" name="kode_gejala" value="{{ $gejala->id_gejala }}">
                </td>
              </tr>

              <tr>
                <td>Nama gejala</td>
                <td>
                  <input class="form-control" type="text" name="nama_gejala" required value="{{ old('nama_gejala', $gejala->nama_gejala) }}">
                  @error('nama_gejala')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>

              <tr>
                <td>Pertanyaan</td>
                <td>
                  <input class="form-control" type="text" name="pertanyaan" required value="{{ old('pertanyaan', $gejala->pertanyaan) }}">
                  @error('pertanyaan')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>


              <tr>
                <td>
                  <button type="submit" class="btn btn-primary d-inline">Ubah</button>
                  <a href="{{ url('/gejala') }}" class="btn btn-danger ml-1">Batal</a>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection
