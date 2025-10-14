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

<body>
    <div class="diagnosa-container">
        <div class="diagnosa-header">
            <div class="header-content">
                <h1><i class="fas fa-clipboard-check"></i> Hasil Diagnosa</h1>
                <p>Berdasarkan gejala yang Anda pilih, berikut adalah hasil diagnosa penyakit padi</p>
            </div>
            <a href="{{ route('diagnosa.index') }}" class="back-button">
                <i class="fas fa-arrow-left"></i> Diagnosa Ulang
            </a>
        </div>

        @if(isset($message))
        <div class="diagnosa-card">
            <div class="no-results">
                <i class="fas fa-info-circle"></i>
                <h3>{{ $message }}</h3>
            </div>
        </div>
        @else
        <div class="results-summary">
            <div class="summary-card">
                <div class="summary-item">
                    <i class="fas fa-leaf"></i>
                    <div class="summary-content">
                        <span class="summary-label">Gejala Dipilih</span>
                        <span class="summary-value">{{ $totalGejalaDipilih }} gejala</span>
                    </div>
                </div>
                <div class="summary-item">
                    <i class="fas fa-bug"></i>
                    <div class="summary-content">
                        <span class="summary-label">Kemungkinan Penyakit</span>
                        <span class="summary-value">{{ count($results) }} penyakit</span>
                    </div>
                </div>
                @if(isset($metode))
                <div class="summary-item">
                    <i class="fas fa-calculator"></i>
                    <div class="summary-content">
                        <span class="summary-label">Metode</span>
                        <span class="summary-value">{{ $metode }}</span>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="results-container">
            @if(count($results) > 0)
            @foreach($results as $index => $result)
            <div class="result-card {{ $index == 0 ? 'primary-result' : '' }}">
                <div class="result-header">
                    <div class="result-rank">
                        <span class="rank-number">#{{ $index + 1 }}</span>
                    </div>
                    <div class="result-title">
                        <h3>{{ $result['penyakit']->nama_penyakit }}</h3>
                        <p>{{ $result['penyakit']->deskripsi ?? 'Deskripsi tidak tersedia' }}</p>
                    </div>
                    <div class="result-confidence">
                        <div class="confidence-score">
                            <span class="score-percentage">{{ $result['persentase'] }}%</span>
                            <span class="score-label">Tingkat Kecocokan</span>
                        </div>
                        <div class="confidence-bar">
                            <div class="confidence-fill" style="width: {{ round($result['persentase'] ?? 0) }}%;"></div>
                        </div>
                    </div>
                </div>

                <div class="result-details">
                    <div class="detail-section">
                        <h4><i class="fas fa-check-circle"></i> Gejala yang Cocok ({{ $result['jumlah_gejala_cocok'] }})</h4>
                        <ul class="symptoms-list">
                            @foreach($result['gejala_terdeteksi'] as $gejala)
                            <li>
                                <i class="fas fa-check"></i>
                                {{ $gejala['gejala']->pertanyaan }}
                                @if(isset($gejala['cf']))
                                <span class="cf-badge">CF: {{ $gejala['cf'] }}</span>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    @if($result['penyakit']->solusi)
                    <div class="detail-section">
                        <h4><i class="fas fa-lightbulb"></i> Solusi Penanganan</h4>
                        <div class="solution-content">
                            {!! $result['penyakit']->solusi !!}
                        </div>
                    </div>
                    @endif

                    @if($result['penyakit']->pencegahan)
                    <div class="detail-section">
                        <h4><i class="fas fa-shield-alt"></i> Tindakan Pencegahan</h4>
                        <div class="prevention-content">
                            {!! $result['penyakit']->pencegahan !!}
                        </div>
                    </div>
                    @endif
                </div>

                @if($index == 0 && $result['persentase'] >= 60)
                <div class="result-alert success">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div>
                        <strong>Diagnosa Utama:</strong> Penyakit ini memiliki kecocokan tinggi dengan gejala yang Anda pilih.
                    </div>
                </div>
                @endif
            </div>
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