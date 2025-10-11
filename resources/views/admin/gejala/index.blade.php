@extends('admin.layout.main')

@section('title', 'List Dosen')

@section('content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Dosen</h1>
    <a href="{{ url('/dosen/create') }}" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Gejala</th>
                  <th>Nama Gejala</th>
                  <th>Pertanyaan</th>
                  <th style="width: 150px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($gejalas as $index => $gejala)
                      <tr>
                          <td>{{ $gejala->id_gejala }}</td>
                          <td>{{ $gejala->kode_gejala }}</td>
                          <td>{{ $gejala->nama_gejala }}</td>
                          <td>{{ $gejala->pertanyaan }}</td>
                          <td>
                              <a href="{{ route('gejala.edit', $gejala->id_gejala) }}" class="btn btn-warning btn-sm" title="Edit">
                                  <i class="bi bi-pencil-square"></i>
                              </a>

                              <form action="{{ route('gejala.destroy', $gejala->id_gejala) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')" title="Hapus">
                                      <i class="bi bi-trash"></i>
                                  </button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection

@section('scripts')
@if(session('success'))
<script>
  iziToast.success({
    title: 'Sukses',
    message: `{{ session('success') }}`,
    position: 'topCenter',
    timeout: 5000
  });
</script>
@endif

@if(session('error'))
<script>
  iziToast.error({
    title: 'Gagal',
    message: `{{ session('error') }}`,
    position: 'topCenter',
    timeout: 5000
  });
</script>
@endif

<script src="{{ asset('assets/js/page/modules-datatables.js') }}"></script>
@endsection