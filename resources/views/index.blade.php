<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OryzaDoc - Smart Diagnosis for Healthy Rice Plants</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Tailwind Customization -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f7fee7',
                            100: '#ecfccb',
                            200: '#d9f99d',
                            300: '#bef264',
                            400: '#a3e635',
                            500: '#84cc16',
                            600: '#65a30d',
                            700: '#4d7c0f',
                            800: '#3f6212',
                            900: '#365314',
                        },
                        secondary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        /* Warna teks normal semua menu */
.navbar a {
  color: #4b5563;       /* contoh abu-abu */
  text-decoration: none;
  padding-bottom: 4px;
  transition: color 0.3s, border-color 0.3s;
}

/* Warna saat hover */
.navbar a:hover {
  color: #6ba31b;       /* hijau */
}

/* State aktif saat section terlihat */
.nav-active {
  color: #6ba31b;
  border-bottom: 3px solid #6ba31b;
}

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
    </style>
</head>
<body class="font-sans bg-white text-gray-800">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i data-feather="cpu" class="text-primary-500 h-8 w-8"></i>
                        <span class="ml-2 text-xl font-bold text-primary-700">OryzaDoc</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#home" class="text-primary-600 hover:text-primary-800 px-3 py-2 text-sm font-medium">Home</a>
                        <a href="#about" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">About</a>
                        <a href="#features" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Features</a>
                        <a href="#how-it-works" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">How It Works</a>
                        <a href="#testimonials" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Testimonials</a>
                        <a href="#team" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Team</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="mobile-menu-button p-2 rounded-md text-gray-700 hover:text-primary-600 focus:outline-none">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden fixed inset-0 z-40 bg-white mt-16">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Home</a>
            <a href="#about" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">About</a>
            <a href="#features" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Features</a>
            <a href="#how-it-works" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">How It Works</a>
            <a href="#testimonials" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Testimonials</a>
            <a href="#team" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Team</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-12 md:pt-32 md:pb-20 bg-gradient-to-b from-primary-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-4">
                        Smart Diagnosis for <span class="text-primary-600">Healthy Rice Plants</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        OryzaDoc helps farmers identify rice plant diseases quickly and accurately using AI-powered technology.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#diagnose" class="bg-primary-500 hover:bg-primary-600 text-white font-medium py-3 px-6 rounded-lg shadow-md transition duration-300">
                            Diagnose Now <i data-feather="arrow-right" class="ml-2 inline"></i>
                        </a>
                        <a href="#how-it-works" class="border border-primary-500 text-primary-500 hover:bg-primary-50 font-medium py-3 px-6 rounded-lg transition duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <img src="http://static.photos/agriculture/640x360/1" alt="Healthy Rice Field" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- About Product -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">What is OryzaDoc?</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    OryzaDoc is an expert system designed to help farmers diagnose rice plant diseases quickly and accurately. 
                    Our AI-powered platform analyzes symptoms and provides recommendations for treatment.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div data-aos="fade-right">
                    <img src="http://static.photos/technology/640x360/2" alt="Technology" class="rounded-lg shadow-lg">
                </div>
                <div data-aos="fade-left">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h3>
                    <p class="text-gray-600 mb-6">
                        We aim to empower rice farmers with technology that helps them make informed decisions about their crops, 
                        reducing losses and increasing yields through accurate disease diagnosis.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">AI-powered disease detection</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Instant diagnosis results</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Treatment recommendations</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Preventive measures</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Why Choose OryzaDoc?</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Our platform offers several advantages that make it the best choice for rice farmers.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="activity" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Accurate Diagnosis</h3>
                    <p class="text-gray-600">
                        Our AI model has been trained on thousands of rice plant images to provide highly accurate disease identification.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="clock" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Fast Results</h3>
                    <p class="text-gray-600">
                        Get diagnosis results in seconds, allowing you to take immediate action to protect your crops.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="smartphone" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Easy to Use</h3>
                    <p class="text-gray-600">
                        Simple interface designed for farmers with minimal technical knowledge. Just upload a photo and get results.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="book-open" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Comprehensive Database</h3>
                    <p class="text-gray-600">
                        Access to extensive information about rice diseases, symptoms, and treatment options.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="dollar-sign" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Cost Effective</h3>
                    <p class="text-gray-600">
                        Save money by preventing unnecessary pesticide use and catching diseases early.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="globe" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Available Anywhere</h3>
                    <p class="text-gray-600">
                        Access our platform from any device with an internet connection, even in remote areas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">How OryzaDoc Works</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Getting a diagnosis for your rice plants is simple and straightforward.
                </p>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Access Platform</h3>
                    <p class="text-gray-600">
                        Open OryzaDoc on your smartphone, tablet, or computer.
                    </p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Upload Photo</h3>
                    <p class="text-gray-600">
                        Take a clear photo of the affected plant or upload from your gallery.
                    </p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">AI Analysis</h3>
                    <p class="text-gray-600">
                        Our system analyzes the image using advanced computer vision.
                    </p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Get Results</h3>
                    <p class="text-gray-600">
                        Receive instant diagnosis and treatment recommendations.
                    </p>
                </div>
            </div>
            <div class="mt-12 text-center" data-aos="fade-up">
                <a href="#diagnose" class="bg-primary-500 hover:bg-primary-600 text-white font-medium py-3 px-8 rounded-lg shadow-md transition duration-300 inline-flex items-center">
                    Try It Now <i data-feather="arrow-right" class="ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">What Our Users Say</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Hear from farmers who have benefited from using OryzaDoc.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/100x100/1" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Budi Santoso</h4>
                            <p class="text-gray-500 text-sm">Rice Farmer, Central Java</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "OryzaDoc helped me identify a bacterial leaf blight infection early. The treatment recommendations saved my entire crop!"
                    </p>
                    <div class="mt-4 text-primary-500">
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/100x100/2" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Siti Rahayu</h4>
                            <p class="text-gray-500 text-sm">Farm Owner, West Java</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "As someone new to rice farming, OryzaDoc has been invaluable. It's like having an expert by my side at all times."
                    </p>
                    <div class="mt-4 text-primary-500">
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/100x100/3" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Agus Setiawan</h4>
                            <p class="text-gray-500 text-sm">Agricultural Extension Officer</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "I recommend OryzaDoc to all the farmers I work with. It's accurate, easy to use, and has significantly reduced crop losses."
                    </p>
                    <div class="mt-4 text-primary-500">
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="team" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Meet Our Team</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    The passionate people behind OryzaDoc.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center" data-aos="fade-up">
                    <img src="http://static.photos/people/200x200/4" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Anwar Ibrahim</h3>
                    <p class="text-primary-600 font-medium mb-3">Founder & CEO</p>
                    <p class="text-gray-600">
                        Agricultural scientist with 15 years of experience in rice pathology and disease management.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="http://static.photos/people/200x200/5" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Sarah Wijaya</h3>
                    <p class="text-primary-600 font-medium mb-3">AI Specialist</p>
                    <p class="text-gray-600">
                        Machine learning expert focused on computer vision applications for agriculture.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="github" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="http://static.photos/people/200x200/6" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Rudi Hartono</h3>
                    <p class="text-primary-600 font-medium mb-3">Agricultural Engineer</p>
                    <p class="text-gray-600">
                        Designs field testing protocols and ensures our solutions work in real-world conditions.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="diagnose" class="py-16 bg-primary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Ready to Diagnose Your Rice Plants?</h2>
            <p class="text-lg mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Join thousands of farmers who are protecting their crops with OryzaDoc.
            </p>
            <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg shadow-md transition duration-300">
                    Start Diagnosis
                </a>
                <a href="#" class="border border-white text-white hover:bg-primary-700 font-medium py-3 px-8 rounded-lg transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i data-feather="cpu" class="text-primary-500 h-8 w-8"></i>
                        <span class="ml-2 text-xl font-bold">OryzaDoc</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Smart diagnosis for healthy rice plants using AI technology.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white">Features</a></li>
                        <li><a href="#how-it-works" class="text-gray-400 hover:text-white">How It Works</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white">Testimonials</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Rice Disease Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Research Papers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i data-feather="mail" class="mr-3 mt-1 w-4 h-4"></i>
                            <span>contact@oryzadoc.com</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="phone" class="mr-3 mt-1 w-4 h-4"></i>
                            <span>+62 123 4567 890</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="map-pin" class="mr-3 mt-1 w-4 h-4"></i>
                            <span>Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 OryzaDoc. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        
        // === Highlight menu on scroll ===
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.ml-10 a');

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // 1. Bersihkan semua nav dari kelas aktif
        navLinks.forEach((link) => link.classList.remove('nav-active'));

        // 2. Ambil link sesuai id section yang terlihat
        const id = entry.target.getAttribute('id');
        const currentLink = document.querySelector(`.ml-10 a[href="#${id}"]`);
        if (currentLink) currentLink.classList.add('nav-active');
      }
    });
  },
  {
    rootMargin: '-40% 0px -55% 0px',
    threshold: 0,
  }
);

sections.forEach((section) => observer.observe(section));


        // Initialize AOS animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Feather icons replacement
        feather.replace();
    </script>
</body>
</html>
