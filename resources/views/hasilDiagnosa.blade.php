<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hasil Diagnosa</title>
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
          </tbody>
        </table>
      @else
        <p class="text-red-600 font-semibold">Tidak ada penyakit yang terdeteksi dari gejala yang dipilih.</p>
      @endif

      <div class="mt-4">
        <a href="{{ route('diagnosa') }}"
          class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
          ⬅️ Kembali
        </a>
      </div>
    </div>
  </body>

</html>
