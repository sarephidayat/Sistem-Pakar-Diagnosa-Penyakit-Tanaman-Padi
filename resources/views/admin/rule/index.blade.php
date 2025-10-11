@extends('admin.layout.main')

@section('title', 'List Dosen')

@section('content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List rule</h1>
    <a href="{{ url('/rule/create') }}" class="btn btn-primary">Tambah Data</a>
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
                  <th>Kode rule</th>
                  <th>Nama Penyakit</th>
                  <th>Gejala</th>
                  <th style="width: 150px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($rules as $index => $rule)
                      <tr>
                          <td>{{ $rule->id_rule }}</td>
                          <td>{{ $rule->kode_rule }}</td>
                          <td>{{ $rule->nama_penyakit }}</td>
                          <td>{{ $rule->gejala }}</td>
                          <td>
                              <a href="{{ route('rule.edit', $rule->id_rule) }}" class="btn btn-warning btn-sm" title="Edit">
                                  <i class="bi bi-pencil-square"></i>
                              </a>

                              <form action="{{ route('rule.destroy', $rule->id_rule) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('PUT')
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