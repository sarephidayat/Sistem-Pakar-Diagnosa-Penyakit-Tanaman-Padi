document.addEventListener('DOMContentLoaded', function() {
    // Data gejala lengkap
    const gejala = [
        { id_gejala: 1, pertanyaan: "Apakah padi Anda terlihat terserang pada bagian pelepah?" },
        { id_gejala: 2, pertanyaan: "Apakah terdapat masalah pada malai (bunga padi)?" },
        { id_gejala: 3, pertanyaan: "Apakah buah padi yang baru tumbuh tampak diserang hama atau penyakit?" },
        // { id_gejala: 4, pertanyaan: "Apakah kecambah padi Anda terlihat terserang atau rusak?" },
        // { id_gejala: 5, pertanyaan: "Apakah biji padi memiliki bercak coklat tetapi tetap berisi?" },
        // { id_gejala: 6, pertanyaan: "Apakah biji kecambah tampak busuk?" },
        // { id_gejala: 7, pertanyaan: "Apakah kecambah padi mati atau tidak tumbuh?" },
        // { id_gejala: 8, pertanyaan: "Apakah padi dewasa terlihat busuk dan kering?" },
        // { id_gejala: 9, pertanyaan: "Apakah ada serangan pada bagian daun padi?" },
        // { id_gejala: 10, pertanyaan: "Apakah terdapat serangan pada buku malai padi?" },
        // { id_gejala: 11, pertanyaan: "Apakah pemasakan makanan dalam bulir padi tampak terhambat?" },
        // { id_gejala: 12, pertanyaan: "Apakah butiran gabah banyak yang kosong (hampa)?" },
        // { id_gejala: 13, pertanyaan: "Apakah ada serangan pada tangkai malai padi?" },
        // { id_gejala: 14, pertanyaan: "Apakah pelepah yang membentuk anakan terlihat diserang?" },
        // { id_gejala: 15, pertanyaan: "Apakah jumlah gabah yang dihasilkan menurun drastis?" },
        // { id_gejala: 16, pertanyaan: "Apakah kualitas gabah tampak kurang baik (kering, kecil, atau tidak bernas)?" },
        // { id_gejala: 17, pertanyaan: "Apakah titik tumbuh padi tampak terserang?" },
        // { id_gejala: 18, pertanyaan: "Apakah terdapat garis-garis di antara tulang daun padi?" },
        // { id_gejala: 19, pertanyaan: "Apakah batang padi terlihat melepuh?" },
        // { id_gejala: 20, pertanyaan: "Apakah batang padi berisi cairan berwarna kehitaman?" },
        // { id_gejala: 21, pertanyaan: "Apakah daun padi mengering sebelum waktunya?" },
        // { id_gejala: 22, pertanyaan: "Apakah banyak daun padi yang mati?" },
        // { id_gejala: 23, pertanyaan: "Apakah daun padi tampak terkulai layu?" },
        // { id_gejala: 24, pertanyaan: "Apakah akar padi terlihat membusuk?" },
        // { id_gejala: 25, pertanyaan: "Apakah semua bagian tanaman padi terlihat terserang?" },
        // { id_gejala: 26, pertanyaan: "Apakah daun padi menjadi lebih pendek dari biasanya?" },
        // { id_gejala: 27, pertanyaan: "Apakah batang padi terlihat lebih sempit dari biasanya?" },
        // { id_gejala: 28, pertanyaan: "Apakah tanaman padi berwarna hijau kekuningan?" },
        // { id_gejala: 29, pertanyaan: "Apakah batang padi menjadi lebih pendek dari normal?" },
        // { id_gejala: 30, pertanyaan: "Apakah buku-buku batang padi menjadi lebih pendek?" },
        // { id_gejala: 31, pertanyaan: "Apakah anakan padi banyak tetapi ukurannya kecil-kecil?" },
        // { id_gejala: 32, pertanyaan: "Apakah pertumbuhan tanaman padi tampak kurang sempurna?" },
        // { id_gejala: 33, pertanyaan: "Apakah daun padi menguning dan berchange kecoklatan?" },
        // { id_gejala: 34, pertanyaan: "Apakah jumlah tunas padi berkurang dari biasanya?" },
        // { id_gejala: 35, pertanyaan: "Apakah malai padi tampak lebih kecil dari biasanya?" },
        // { id_gejala: 36, pertanyaan: "Apakah malai padi banyak yang tidak berisi gabah?" },
        // { id_gejala: 37, pertanyaan: "Apakah bercak pada daun padi semakin membesar?" },
        // { id_gejala: 38, pertanyaan: "Apakah terdapat bercak kehitaman pada pelepah padi?" }
    ];

    const questionText = document.getElementById('question-text');
    const questionNumber = document.getElementById('question-number');
    const questionCounter = document.getElementById('question-counter');
    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');
    const btnSubmit = document.getElementById('btn-submit');
    const progressBar = document.getElementById('progress');
    const progressText = document.getElementById('progress-text');
    const hiddenFieldsContainer = document.getElementById('hidden-fields');
    const questionContainer = document.getElementById('question-container');
    const completionMessage = document.getElementById('completion-message');
    const validationMessage = document.getElementById('validation-message');
    const optionYa = document.getElementById('option-ya');
    const optionTidak = document.getElementById('option-tidak');
    
    let currentQuestion = 0;
    const answers = new Array(gejala.length).fill(null);
    
    // Initialize the form
    function initializeForm() {
        showQuestion(0);
        updateProgressBar();
        updateQuestionCounter();
        updateNavigationButtons();
        
        // Add hidden fields for all questions
        gejala.forEach((gejalaItem, index) => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = `gejala[${gejalaItem.id_gejala}]`;
            hiddenInput.value = '';
            hiddenInput.id = `hidden-input-${index}`;
            hiddenFieldsContainer.appendChild(hiddenInput);
        });
    }
    
    // Show current question
    function showQuestion(index) {
        questionNumber.textContent = `Pertanyaan ${index + 1}:`;
        questionText.textContent = gejala[index].pertanyaan;
        
        // Clear all radio selections
        const radioButtons = document.querySelectorAll('input[name="currentAnswer"]');
        radioButtons.forEach(radio => {
            radio.checked = false;
        });
        
        // Remove selected class from options
        optionYa.classList.remove('selected');
        optionTidak.classList.remove('selected');
        
        // If answer exists for this question, pre-select it
        if (answers[index] !== null) {
            const radioToCheck = document.querySelector(`input[name="currentAnswer"][value="${answers[index]}"]`);
            if (radioToCheck) {
                radioToCheck.checked = true;
                if (answers[index] === 'ya') {
                    optionYa.classList.add('selected');
                } else {
                    optionTidak.classList.add('selected');
                }
            }
        }
        
        // Hide validation message
        validationMessage.style.display = 'none';
        
        // Update navigation buttons
        btnPrev.disabled = index === 0;
        
        if (index === gejala.length - 1) {
            btnNext.style.display = 'none';
            btnSubmit.style.display = 'block';
        } else {
            btnNext.style.display = 'block';
            btnSubmit.style.display = 'none';
        }
        
        // Show completion message if all questions answered
        const allAnswered = answers.every(answer => answer !== null);
        if (index === gejala.length - 1 && allAnswered) {
            completionMessage.style.display = 'block';
            questionContainer.style.display = 'none';
            btnSubmit.disabled = false;
            btnSubmit.classList.add('pulse');
        } else {
            completionMessage.style.display = 'none';
            questionContainer.style.display = 'block';
            btnSubmit.classList.remove('pulse');
        }
        
        // Update navigation buttons based on current answer
        updateNavigationButtons();
        
        // Animate question container
        questionContainer.style.opacity = '0';
        questionContainer.style.transform = 'translateY(10px)';
        
        setTimeout(() => {
            questionContainer.style.opacity = '1';
            questionContainer.style.transform = 'translateY(0)';
        }, 300);
    }
    
    // Update progress bar
    function updateProgressBar() {
        const progress = ((currentQuestion + 1) / gejala.length) * 100;
        progressBar.style.width = `${progress}%`;
        progressText.textContent = `${Math.round(progress)}% selesai`;
    }
    
    // Update question counter
    function updateQuestionCounter() {
        questionCounter.textContent = `Pertanyaan ${currentQuestion + 1} dari ${gejala.length}`;
    }
    
    // Save current answer
    function saveAnswer() {
        const selectedAnswer = document.querySelector('input[name="currentAnswer"]:checked');
        if (selectedAnswer) {
            answers[currentQuestion] = selectedAnswer.value;
            
            // Update hidden field
            const hiddenInput = document.getElementById(`hidden-input-${currentQuestion}`);
            if (hiddenInput) {
                hiddenInput.value = selectedAnswer.value;
            }
            
            // Hide validation message
            validationMessage.style.display = 'none';
            
            return true;
        } else {
            // Show validation message
            validationMessage.style.display = 'block';
            return false;
        }
    }
    
    // Check if all questions are answered
    function checkAllAnswers() {
        return answers.every(answer => answer !== null);
    }
    
    // Update navigation buttons based on current answer
    function updateNavigationButtons() {
        const hasAnswer = answers[currentQuestion] !== null;
        btnNext.disabled = !hasAnswer;
        
        // Enable submit button only when all questions are answered AND we're on the last question
        if (currentQuestion === gejala.length - 1) {
            btnSubmit.disabled = !checkAllAnswers();
        }
    }
    
    // Event listeners for option selection
    optionYa.addEventListener('click', function() {
        document.querySelector('input[value="ya"]').checked = true;
        optionYa.classList.add('selected');
        optionTidak.classList.remove('selected');
        answers[currentQuestion] = 'ya';
        updateNavigationButtons();
        
        // Auto-save and check if we should show completion
        saveAnswer();
        if (currentQuestion === gejala.length - 1 && checkAllAnswers()) {
            completionMessage.style.display = 'block';
            questionContainer.style.display = 'none';
            btnSubmit.disabled = false;
            btnSubmit.classList.add('pulse');
        }
        
        validationMessage.style.display = 'none';
    });
    
    optionTidak.addEventListener('click', function() {
        document.querySelector('input[value="tidak"]').checked = true;
        optionTidak.classList.add('selected');
        optionYa.classList.remove('selected');
        answers[currentQuestion] = 'tidak';
        updateNavigationButtons();
        
        // Auto-save and check if we should show completion
        saveAnswer();
        if (currentQuestion === gejala.length - 1 && checkAllAnswers()) {
            completionMessage.style.display = 'block';
            questionContainer.style.display = 'none';
            btnSubmit.disabled = false;
            btnSubmit.classList.add('pulse');
        }
        
        validationMessage.style.display = 'none';
    });
    
    // Event listeners for navigation buttons
    btnNext.addEventListener('click', function() {
        if (saveAnswer()) {
            if (currentQuestion < gejala.length - 1) {
                currentQuestion++;
                showQuestion(currentQuestion);
                updateProgressBar();
                updateQuestionCounter();
            }
        }
    });
    
    btnPrev.addEventListener('click', function() {
        if (currentQuestion > 0) {
            // Save answer even if moving back
            saveAnswer();
            currentQuestion--;
            showQuestion(currentQuestion);
            updateProgressBar();
            updateQuestionCounter();
        }
    });
    
    // Form submission handler
    document.getElementById('diagnosa-form').addEventListener('submit', function(e) {
        // Pastikan semua jawaban sudah disimpan
        if (!checkAllAnswers()) {
            e.preventDefault();
            alert('Silakan jawab semua pertanyaan sebelum melakukan diagnosa.');
            return;
        }
        
        // Tampilkan loading state
        btnSubmit.disabled = true;
        btnSubmit.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
    });
    
    // Add animation to options when clicked
    document.querySelectorAll('.option-label').forEach(label => {
        label.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);
        });
    });
    
    // Initialize the form
    initializeForm();
    
    // Add keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowRight' && currentQuestion < gejala.length - 1) {
            // Next question
            if (answers[currentQuestion] !== null) {
                btnNext.click();
            }
        } else if (e.key === 'ArrowLeft' && currentQuestion > 0) {
            // Previous question
            btnPrev.click();
        } else if (e.key === '1' || e.key === 'y' || e.key === 'Y') {
            // Select 'Ya'
            optionYa.click();
        } else if (e.key === '2' || e.key === 't' || e.key === 'T') {
            // Select 'Tidak'
            optionTidak.click();
        }
    });
});