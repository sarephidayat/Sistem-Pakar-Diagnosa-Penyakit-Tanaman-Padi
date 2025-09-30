<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagnosa Penyakit Padi</title>
    <link rel="stylesheet" href="css/diagnosa.css">
    
</head>
<body>
    <div class="container">
        <h2>Form Diagnosa Penyakit Padi</h2>
        
        <div class="progress-container">
            <div class="progress-bar">
                <div class="progress" id="progress"></div>
            </div>
            <div class="progress-text" id="progress-text">0%</div>
        </div>
        
        <form action="{{ route('diagnosa') }}" method="POST" id="diagnosa-form">
            @csrf
            
            <div class="question-container" id="question-container">
                <div class="question-number" id="question-number">Pertanyaan 1:</div>
                <div class="question-text" id="question-text"></div>
                <div class="options-container">
                    <label class="option-label" id="option-ya">
                        <input type="radio" class="option-input" name="currentAnswer" value="ya"> Ya
                    </label>
                    <label class="option-label" id="option-tidak">
                        <input type="radio" class="option-input" name="currentAnswer" value="tidak"> Tidak
                    </label>
                </div>
                <div class="validation-message" id="validation-message">
                    Silakan pilih jawaban sebelum melanjutkan
                </div>
            </div>
            
            <div class="completion-message" id="completion-message">
                <h3>Semua pertanyaan telah terjawab!</h3>
                <p>Klik tombol "Diagnosa" di bawah untuk melihat hasil diagnosa.</p>
            </div>
            
            <div class="navigation-buttons">
                <button type="button" class="btn-prev" id="btn-prev" disabled>Sebelumnya</button>
                <button type="button" class="btn-next" id="btn-next" disabled>Selanjutnya</button>
                <button type="submit" class="btn-submit" id="btn-submit" disabled>Diagnosa</button>
            </div>
            
            <div class="question-counter" id="question-counter"></div>
            
            <!-- Hidden fields to store all answers -->
            <div id="hidden-fields"></div>
        </form>
    </div>

    <script src="js/diagnosa.js"></script>
</body>
</html>