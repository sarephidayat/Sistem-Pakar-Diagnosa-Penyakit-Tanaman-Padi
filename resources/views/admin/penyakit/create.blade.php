@extends('admin.layout.main')

@section('title', 'Tambah penyakit')

@section('content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah penyakit</h1>
    <a href="{{ route('penyakit.index') }}" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="{{ route('penyakit.store') }}" method="POST">
            @csrf
            <table cellpadding="8" class="w-100">
              
              <tr>
                <td>Kode penyakit</td>
                <td>
                  <input class="form-control" type="text" name="kode_penyakit" value="{{ old('kode_penyakit') }}" required>
                  @error('kode_penyakit')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>

              <tr>
                <td>Nama penyakit</td>
                <td>
                  <input class="form-control" type="text" name="nama_penyakit" value="{{ old('nama_penyakit') }}" required>
                  @error('nama_penyakit')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>
              
              <tr>
                <td>Nama penyakit</td>
                <td>
                  <input class="form-control" type="text" name="nama_penyakit" value="{{ old('nama_penyakit') }}" required>
                  @error('nama_penyakit')
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
