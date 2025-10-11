<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('/dashboard') }}">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('/dashboard') }}">EF</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li>
        <a class="nav-link" href="{{ url('/dashboard') }}">
          <i class="fas fa-fire"></i> <span>Home</span>
        </a>
      </li>

      <li class="menu-header">Main Feature</li>

      <!-- Menu Dosen -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-notes-medical me-2"></i> <span>Detail Gejala</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('/dosen') }}">List</a></li>
          <li><a class="nav-link" href="{{ url('/dosen/create') }}">Tambah Data</a></li>
        </ul>
      </li>

      <!-- Menu User -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-stethoscope me-2"></i> <span>Gejala</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('/user') }}">List</a></li>
          <li><a class="nav-link" href="{{ url('/user/create') }}">Tambah Data</a></li>
        </ul>
      </li>           

      <!-- Menu User -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-diagnoses me-2"></i> <span>Penyakit</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('/user') }}">List</a></li>
          <li><a class="nav-link" href="{{ url('/user/create') }}">Tambah Data</a></li>
        </ul>
      </li>           

      <!-- Menu User -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-project-diagram me-2"></i> <span>Rule</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('/user') }}">List</a></li>
          <li><a class="nav-link" href="{{ url('/user/create') }}">Tambah Data</a></li>
        </ul>
      </li>           

      <!-- Bagian Profile -->
      <li class="menu-header">Account</li>
      <li>
        <a class="nav-link" href="{{ url('/profile') }}">
          <i class="fas fa-user-circle me-2"></i> <span>Profile</span>
        </a>
      </li>
    </ul>
  </aside>
</div>
