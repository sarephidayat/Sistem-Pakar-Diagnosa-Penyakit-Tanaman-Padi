@extends('admin.layout.main')

@section('title', 'Tambah Gejala')

@section('content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Gejala</h1>
    <a href="{{ route('gejala.index') }}" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="{{ route('gejala.store') }}" method="POST">
            @csrf
            <table cellpadding="8" class="w-100">
              
              <tr>
                <td>Kode Gejala</td>
                <td>
                  <input class="form-control" type="text" name="kode_gejala" value="{{ old('kode_gejala') }}" required>
                  @error('kode_gejala')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>

              <tr>
                <td>Nama Gejala</td>
                <td>
                  <input class="form-control" type="text" name="nama_gejala" value="{{ old('nama_gejala') }}" required>
                  @error('nama_gejala')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>
              <tr>
                <td>Pertanyaan</td>
                <td>
                  <input class="form-control" type="text" name="pertanyaan" value="{{ old('pertanyaan') }}" required>
                  @error('pertanyaan')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>

              <tr>
                <td>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-danger">Bersihkan</button>
                </td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
