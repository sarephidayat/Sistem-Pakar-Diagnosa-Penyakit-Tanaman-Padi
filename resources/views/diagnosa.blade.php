<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagnosa Penyakit Padi - OryzaDoc</title>
    <link rel="stylesheet" href="{{ asset('css/diagnosa.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="diagnosa-container">
        <div class="diagnosa-header">
            <h1><i class="fas fa-leaf"></i> Diagnosis Penyakit Padi</h1>
            <p>Jawab pertanyaan berikut untuk mendapatkan diagnosis penyakit tanaman padi Anda</p>
        </div>

        <div class="diagnosa-card">
            <div class="progress-section">
                <div class="progress-info">
                    <span class="progress-text" id="progress-text">0% Selesai</span>
                    <span class="question-counter" id="question-counter">Pertanyaan 0/0</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar">
                        <div class="progress" id="progress"></div>
                    </div>
                </div>
            </div>

            <form action="{{ route('diagnosa') }}" method="POST" id="diagnosa-form">
                @csrf

                <div class="question-container" id="question-container">
                    <div class="question-header">
                        <div class="question-number" id="question-number">Pertanyaan 1</div>
                        <div class="question-indicator">
                            <i class="fas fa-seedling"></i>
                        </div>
                    </div>
                    <div class="question-text" id="question-text">Memuat pertanyaan...</div>

                    <div class="options-container">
                        <label class="option-label" id="option-ya">
                            <input type="radio" class="option-input" name="currentAnswer" value="ya">
                            <div class="custom-radio"></div>
                            <span class="option-text">Ya</span>
                        </label>
                        <label class="option-label" id="option-tidak">
                            <input type="radio" class="option-input" name="currentAnswer" value="tidak">
                            <div class="custom-radio"></div>
                            <span class="option-text">Tidak</span>
                        </label>
                    </div>

                    <div class="validation-message" id="validation-message">
                        <i class="fas fa-exclamation-circle"></i>
                        Silakan pilih jawaban sebelum melanjutkan
                    </div>
                </div>

                <div class="completion-message" id="completion-message">
                    <div class="completion-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Semua pertanyaan telah terjawab!</h3>
                    <p>Klik tombol "Diagnosa" di bawah untuk melihat hasil diagnosa.</p>
                </div>

                <div class="navigation-buttons">
                    <button type="button" class="btn-prev" id="btn-prev" disabled>
                        <i class="fas fa-arrow-left"></i> Sebelumnya
                    </button>
                    <button type="button" class="btn-next" id="btn-next" disabled>
                        Selanjutnya <i class="fas fa-arrow-right"></i>
                    </button>
                    <button type="submit" class="btn-submit" id="btn-submit" disabled>
                        <i class="fas fa-stethoscope"></i> Diagnosa
                    </button>
                </div>

                <!-- Hidden fields to store all answers -->
                <div id="hidden-fields"></div>
            </form>
        </div>

        <div class="diagnosa-tips">
            <h3><i class="fas fa-lightbulb"></i> Tips Diagnosis yang Akurat</h3>
            <ul>
                <li>Periksa tanaman padi secara menyeluruh sebelum menjawab pertanyaan</li>
                <li>Perhatikan gejala pada daun, batang, dan akar tanaman</li>
                <li>Gunakan pencahayaan yang baik saat mengamati gejala</li>
                <li>Jika ragu, ulangi pengamatan sebelum memilih jawaban</li>
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/diagnosa.js') }}"></script>
</body>

</html>