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
            <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode Rule</th>
                      <th>Nama Penyakit</th>
                      <th>Daftar Gejala</th>
                      <th>Jumlah Gejala</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($rules as $index => $rule)
                      <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $rule->kode_rule }}</td>
                          <td>{{ $rule->penyakit->nama_penyakit ?? '-' }}</td>
                          <td>
                              <ol style="padding-left: 20px; margin: 0;">
                                  @foreach($rule->gejala as $gejala)
                                      <li>{{ $gejala->nama_gejala }}</li>
                                  @endforeach
                              </ol>
                          </td>
                          <td>{{ $rule->gejala->count() }}</td>
                          <td>
                              {{-- Edit --}}
                              <a href="{{ route('rule.edit', $rule->id_rule) }}" class="btn btn-sm btn-warning">Edit</a>

                              {{-- Hapus --}}
                              <form action="{{ route('rule.destroy', $rule->id_rule) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('PUT') {{-- karena route destroy kamu pakai PUT --}}
                                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">
                                      Hapus
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