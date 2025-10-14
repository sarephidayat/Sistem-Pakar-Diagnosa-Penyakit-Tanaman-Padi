@extends('admin.layout.main')

@section('title', 'Ubah Data penyakit')

@section('content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data penyakit</h1>
    <a href="{{ url('/penyakit') }}" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="{{ route('penyakit.update', $penyakit->id_penyakit) }}" method="POST">
          @csrf
          @method('PUT')
            <table cellpadding="8" class="w-100">
              <tr>
                <td>kode_penyakit</td>
                <td>
                  <input class="form-control" type="text" value="{{ $penyakit->kode_penyakit }}" disabled>
                  <input type="hidden" name="kode_penyakit" value="{{ $penyakit->id_penyakit }}">
                </td>
              </tr>

              <tr>
                <td>Nama penyakit</td>
                <td>
                  <input class="form-control" type="text" name="nama_penyakit" required value="{{ old('nama_penyakit', $penyakit->nama_penyakit) }}">
                  @error('nama_penyakit')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </td>
              </tr>

              <tr>
                  <td>Solusi</td>
                  <td>
                      <textarea class="form-control" 
                                name="solusi" 
                                rows="6" 
                                required>{{ old('solusi', $penyakit->solusi) }}</textarea>
                      @error('solusi')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </td>
              </tr>



              <tr>
                <td>
                  <button type="submit" class="btn btn-primary d-inline">Ubah</button>
                  <a href="{{ url('/penyakit') }}" class="btn btn-danger ml-1">Batal</a>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection
