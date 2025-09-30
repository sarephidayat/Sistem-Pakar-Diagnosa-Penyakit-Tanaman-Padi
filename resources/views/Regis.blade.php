<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - OryzaDoc</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        :root {
            --primary-500: #10b981;
            --primary-600: #059669;
            --primary-700: #047857;
            --primary-800: #065f46;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9fafb;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Auth Container */
        .auth-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
        }
        
        .auth-card {
            background-color: var(--white);
            border-radius: 0.75rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
        }
        
        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .auth-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .auth-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-800);
            margin-bottom: 0.5rem;
        }
        
        .auth-subtitle {
            color: var(--gray-600);
            font-size: 0.875rem;
        }
        
        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .form-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-700);
        }
        
        .form-input {
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            transition: border-color 0.2s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary-500);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }
        
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.875rem;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .forgot-password {
            color: var(--primary-600);
            text-decoration: none;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .auth-button {
            background-color: var(--primary-600);
            color: var(--white);
            border: none;
            padding: 0.75rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 0.5rem;
        }
        
        .auth-button:hover {
            background-color: var(--primary-700);
        }
        
        .auth-divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: var(--gray-600);
            font-size: 0.875rem;
        }
        
        .auth-divider::before,
        .auth-divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: #e5e7eb;
        }
        
        .auth-divider span {
            padding: 0 1rem;
        }
        
        .social-login {
            display: flex;
            gap: 1rem;
        }
        
        .social-button {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            background-color: var(--white);
            color: var(--gray-700);
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .social-button:hover {
            background-color: #f9fafb;
        }
        
        .auth-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: var(--gray-600);
        }
        
        .auth-link {
            color: var(--primary-600);
            text-decoration: none;
            font-weight: 500;
        }
        
        .auth-link:hover {
            text-decoration: underline;
        }
        
        /* Responsive Styles */
        @media (min-width: 768px) {
            .nav-links {
                display: flex;
                align-items: center;
                gap: 1rem;
            }
            
            .mobile-menu-button {
                display: none;
            }
        }
        
        @media (max-width: 767px) {
            .nav-buttons {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Register Form -->
    <div class="auth-container">
        <div class="auth-card">
            <a href="{{ route('home') }}" style="border: none; background-color: transparent; color: black;"><i data-feather="arrow-left-circle"></i></a>
            <div class="auth-header">
                <div class="auth-logo">
                    <i data-feather="cpu" class="logo-icon"></i>
                    <span class="logo-text" style="margin-left: 0.2vw;">OryzaDoc</span>
                </div>
                <h2 class="auth-title">Buat Akun Baru</h2>
                <p class="auth-subtitle">Daftar untuk mulai menggunakan OryzaDoc</p>
            </div>
            
            <form class="auth-form">
                <div class="form-group">
                    <label for="register-name" class="form-label">Nama Lengkap</label>
                    <input type="text" id="register-name" class="form-input" placeholder="Masukkan nama lengkap" required>
                </div>
                
                <div class="form-group">
                    <label for="register-email" class="form-label">Email</label>
                    <input type="email" id="register-email" class="form-input" placeholder="nama@contoh.com" required>
                </div>
                
                <div class="form-group">
                    <label for="register-password" class="form-label">Kata Sandi</label>
                    <input type="password" id="register-password" class="form-input" placeholder="Buat kata sandi" required>
                </div>
                
                <div class="form-group">
                    <label for="register-confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" id="register-confirm-password" class="form-input" placeholder="Konfirmasi kata sandi" required>
                </div>
                
                <div class="form-group">
                    <div class="remember-me">
                        <input type="checkbox" id="agree-terms" required>
                        <label for="agree-terms">Saya setuju dengan <a href="#terms" class="auth-link">Syarat dan Ketentuan</a></label>
                    </div>
                </div>
                
                <button type="submit" class="auth-button">Daftar</button>
            </form>
            
            <div class="auth-divider">
                <span>Atau daftar dengan</span>
            </div>
            
            <div class="social-login">
                <button class="social-button">
                    <i data-feather="facebook"></i>
                    Facebook
                </button>
                <button class="social-button">
                    <i data-feather="mail"></i>
                    Google
                </button>
            </div>
            
            <div class="auth-footer">
                <p>Sudah punya akun? <a href="{{ route('Login') }}" class="auth-link">Masuk sekarang</a></p>
            </div>
        </div>
    </div>

    <script>
        // Initialize Feather icons
        feather.replace();
        
        // Form submission handling
        document.querySelector('.auth-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Password validation
            const password = document.getElementById('register-password').value;
            const confirmPassword = document.getElementById('register-confirm-password').value;
            
            if (password !== confirmPassword) {
                alert('Kata sandi tidak cocok!');
                return;
            }
            
            // Add your registration logic here
            alert('Pendaftaran berhasil!');
        });
    </script>
</body>
</html>