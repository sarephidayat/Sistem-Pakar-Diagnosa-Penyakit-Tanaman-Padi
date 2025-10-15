<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa - OryzaDoc</title>
    <link rel="stylesheet" href="{{ asset('css/diagnosa.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
  <body class="font-sans bg-gray-50 p-6">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
      <h2 class="text-2xl font-bold mb-4">🩺 Hasil Diagnosa</h2>

      <!-- Gejala yang dipilih -->
      <h3 class="text-lg font-semibold mb-2">Gejala yang dipilih:</h3>
      @if (!empty($selectedGejala))
        <ul class="list-disc list-inside mb-4">
          @foreach ($selectedGejala as $id)
            @php $g = \App\Models\MasterGejala::find($id); @endphp
            <li>{{ $g ? $g->nama_gejala : "Gejala #{$id}" }}</li>
          @endforeach
        </ul>
      @else
        <p class="text-gray-600 mb-4">Tidak ada gejala dipilih.</p>
      @endif

      <!-- Hasil pencocokan -->
      <h3 class="text-lg font-semibold mb-2">Hasil Analisis:</h3>
      @if (!empty($results))
        <table class="w-full border-collapse border border-gray-300">
          <thead class="bg-gray-100">
            <tr>
              <th class="border border-gray-300 px-3 py-2 text-left">Penyakit</th>
              <th class="border border-gray-300 px-3 py-2">Kode Rule</th>
              <th class="border border-gray-300 px-3 py-2">Gejala Cocok</th>
              <th class="border border-gray-300 px-3 py-2">Total Gejala</th>
              <th class="border border-gray-300 px-3 py-2">Kecocokan</th>
              <th class="border border-gray-300 px-3 py-2">Solusi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($results as $r)
              <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-3 py-2 font-semibold">
                  {{ $r['penyakit']->nama_penyakit ?? '-' }}
                </td>
                <td class="border border-gray-300 px-3 py-2 text-center">
                  {{ $r['rule']->kode_rule }}
                </td>
                <td class="border border-gray-300 px-3 py-2 text-center">
                  {{ $r['matched'] }}
                </td>
                <td class="border border-gray-300 px-3 py-2 text-center">
                  {{ $r['total_gejala'] }}
                </td>
                <td class="border border-gray-300 px-3 py-2 text-center">
                  <span class="font-bold text-blue-600">
                    {{ number_format($r['score'] * 100, 2) }}%
                  </span>
                </td>
                <td class="border border-gray-300 px-3 py-2 text-sm">
                  {!! nl2br(e($r['penyakit']->solusi ?? '-')) !!}
                </td>
              </tr>
            @endforeach
            @else
            <div class="diagnosa-card">
                <div class="no-results">
                    <i class="fas fa-search"></i>
                    <h3>Tidak Ditemukan Diagnosa yang Cocok</h3>
                    <p>Berdasarkan gejala yang dipilih, tidak ditemukan penyakit yang sesuai dalam database kami.</p>
                    <p>Silakan konsultasikan dengan ahli pertanian untuk diagnosa lebih lanjut.</p>
                </div>
            </div>
            @endif
        </div>
        @endif

        <div class="action-buttons">
            <a href="{{ route('diagnosa.index') }}" class="btn-secondary">
                <i class="fas fa-redo"></i> Diagnosa Ulang
            </a>
            <a href="{{ route('home') }}" class="btn-primary">
                <i class="fas fa-home"></i> Kembali ke Beranda
            </a>
        </div>
    </div>

    <!-- Di dalam script section, tambahkan: -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const confidenceBars = document.querySelectorAll('.confidence-fill');
            confidenceBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });

            // Add click handlers for buttons to show loading
            const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (this.getAttribute('href') === @json(route('diagnosa.index'))) {
                        this.innerHTML = '<i class="fas fa-spinner loading-spinner"></i> Memuat...';
                    }
                });
            });
        });
    </script>
</body>
</html>