@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="row">
    <!-- Total Gejala -->
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-stethoscope me-2"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Gejala</h4>
          </div>
          <div class="card-body">
            {{ $total_gejala }}
          </div>
        </div>
      </div>
    </div>

    <!-- Total User -->
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-diagnoses me-2"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Penyakit</h4>
          </div>
          <div class="card-body">
            {{ $total_penyakit }}
          </div>
        </div>
      </div>
    </div>

    <!-- Total Mata Kuliah -->
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-project-diagram me-2"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Aturan</h4>
          </div>
          <div class="card-body">
            {{ $total_rule }}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
