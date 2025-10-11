<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OryzaDoc - Login & Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --primary-light: #a7f3d0;
            --text: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            --shadow-light: 0 10px 25px rgba(0, 0, 0, 0.05);
            --radius: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 50%, #fef7ed 100%);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1.5rem;
            position: relative;
            overflow-x: hidden;
        }

        /* Main container */
        .auth-container {
            max-height: 90vh;
            display: flex;
            width: 100%;
            max-width: 80vw;
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            z-index: 10;
            position: relative;
        }

        /* Illustration side */
        .illustration-side {
            flex: 1;
            background-image: url(https://assets.pikiran-rakyat.com/photo/2025/05/24/2826405091.jpg);
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        /* Form side */
        .form-side {
            overflow-y: scroll;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1rem 2rem;
            background-color: var(--white);
            overflow-y: auto;
        }

        .form-container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        .form-header {
            margin-bottom: 1.5rem;
        }

        .form-logo {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 0.8rem;
        }

        .logo-icon {
            color: var(--primary);
        }

        .logo-text {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text);
            margin: 0.4rem auto;
        }

        .form-subtitle {
            color: var(--text-light);
            font-size: 0.85rem;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
        }

        .form-label {
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--text);
        }

        .form-input {
            padding: 0.75rem 0.9rem;
            border: 1px solid var(--gray-200);
            border-radius: 8px;
            font-size: 0.7rem;
            transition: all 0.2s;
            background-color: var(--gray-50);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
            background-color: var(--white);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .remember-me input[type="checkbox"] {
            accent-color: var(--primary);
        }

        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .auth-button {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            padding: 0.5rem;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            margin-top: 0.2rem;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .auth-button:hover {
            background-color: var(--primary-dark);
            box-shadow: 0 6px 15px rgba(16, 185, 129, 0.4);
        }

        .social-divider {
            display: flex;
            align-items: center;
            margin: 1.2rem 0;
            color: var(--text-light);
            font-size: 0.85rem;
        }

        .social-divider::before,
        .social-divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: var(--gray-200);
        }

        .social-divider span {
            padding: 0 0.8rem;
        }

        .social-login {
            display: flex;
            gap: 0.8rem;
        }

        .social-button {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.7rem;
            border: 1px solid var(--gray-200);
            border-radius: 8px;
            background-color: var(--white);
            color: var(--text);
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .social-button:hover {
            background-color: var(--gray-100);
            border-color: var(--primary-light);
        }

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: var(--text-light);
        }

        .auth-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        /* Toggle between login and register */
        .form-toggle {
            display: none;
        }

        #register-form {
            display: none;
        }

        #toggle-register:checked~#login-form {
            display: none;
        }

        #toggle-register:checked~#register-form {
            display: block;
        }

        /* Responsive Styles */
        @media (max-width: 900px) {
            .auth-container {
                flex-direction: column;
            }

            .illustration-side {
                padding: 1.5rem;
                min-height: 200px;
            }

            .illustration-title {
                font-size: 1.5rem;
            }

            .form-side {
                padding: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }

            .social-login {
                flex-direction: column;
            }

            .form-options {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.8rem;
            }

            .illustration-title {
                font-size: 1.3rem;
            }

            .illustration-image {
                max-width: 90%;
            }
        }
    </style>
</head>

<body>
    <!-- Main container -->
    <div class="auth-container">
        <!-- Illustration side -->
        <div class="illustration-side">
            <div class="kembali">
                <a href="{{ route('home') }}" style="font-size: 0.8rem; text-decoration: none; color: white; font-weight: bold; position: absolute; top: 20px; left: 20px; background-color: rgba(0, 0, 0, 0.5); padding: 10px 10px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);">
                    &larr; Kembali ke Beranda
                </a>
            </div>
        </div>

        <!-- Form side -->
        <div class="form-side">
            <div class="form-container">
                <input type="checkbox" id="toggle-register" class="form-toggle">

                <!-- Login Form -->
                <div id="login-form">
                    <div class="form-header">
                        <h2 class="form-title">Masuk ke Akun Anda</h2>
                        <p class="form-subtitle">Silakan masuk untuk melanjutkan</p>
                    </div>

                    <form class="auth-form">
                        <div class="form-group">
                            <label for="login-email" class="form-label">Email</label>
                            <input type="email" id="login-email" class="form-input" placeholder="nama@contoh.com" required>
                        </div>

                        <div class="form-group">
                            <label for="login-password" class="form-label">Kata Sandi</label>
                            <input type="password" id="login-password" class="form-input" placeholder="Masukkan kata sandi" required>
                        </div>

                        <div class="form-options">
                            <div class="remember-me">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me">Ingat saya</label>
                            </div>
                            <a href="#forgot-password" class="forgot-password">Lupa kata sandi?</a>
                        </div>

                        <button type="submit" class="auth-button">Masuk</button>
                    </form>

                    <div class="social-divider">
                        <span>Atau lanjutkan dengan</span>
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

                    <div class="form-footer">
                        <p>Belum punya akun? <label for="toggle-register" class="auth-link">Daftar sekarang</label></p>
                    </div>
                </div>

                <!-- Register Form -->
                <div id="register-form">
                    <div class="form-header">
                        <h2 class="form-title">Buat Akun Baru</h2>
                        <p class="form-subtitle">Daftar untuk mulai menggunakan OryzaDoc</p>
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
                            <label for="register-confirm" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" id="register-confirm" class="form-input" placeholder="Ulangi kata sandi" required>
                        </div>

                        <div class="form-options">
                            <div class="remember-me">
                                <input type="checkbox" id="agree-terms" required>
                                <label for="agree-terms">Saya setuju dengan <a href="#" class="auth-link">Syarat & Ketentuan</a></label>
                            </div>
                        </div>

                        <button type="submit" class="auth-button">Daftar</button>
                    </form>

                    <div class="social-divider">
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

                    <div class="form-footer">
                        <p>Sudah punya akun? <label for="toggle-register" class="auth-link">Masuk di sini</label></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Feather icons
        feather.replace();

        // Check URL parameter to show register form
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const formType = urlParams.get('form');

            if (formType === 'register') {
                document.getElementById('toggle-register').checked = true;
            }
        });
        // Form submission handling
        document.querySelectorAll('.auth-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Add your form submission logic here
                if (this.closest('#login-form')) {
                    alert('Login functionality would be implemented here');
                } else {
                    alert('Registration functionality would be implemented here');
                }
            });
        });

        // Simple password validation for register form
        const registerForm = document.querySelector('#register-form .auth-form');
        if (registerForm) {
            registerForm.addEventListener('submit', function(e) {
                const password = document.getElementById('register-password').value;
                const confirmPassword = document.getElementById('register-confirm').value;

                if (password !== confirmPassword) {
                    e.preventDefault();
                    alert('Kata sandi tidak cocok. Silakan periksa kembali.');
                    return false;
                }

                if (password.length < 6) {
                    e.preventDefault();
                    alert('Kata sandi harus terdiri dari minimal 6 karakter.');
                    return false;
                }
            });
        }
    </script>
</body>

</html>