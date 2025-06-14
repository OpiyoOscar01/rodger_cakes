<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RodgerCakes - Premium Birthday & Celebration Cakes in Kampala</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .dancing-script {
            font-family: 'Dancing Script', cursive;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        :root {
            --primary-pink: #ec4899;
            --light-pink: #fce7f3;
            --dark-pink: #be185d;
            --primary-blue: #3b82f6;
            --light-blue: #dbeafe;
            --dark-blue: #1e40af;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-fade {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }
        
        .slide-fade.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .hero-slide {
            opacity: 0;
            transition: opacity 1s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .hero-slide.active {
            opacity: 1;
        }
        
        .cake-card {
            transition: all 0.4s ease;
            transform: translateZ(0);
            background: linear-gradient(135deg, #fdf2f8, #fce7f3);
        }
        
        .cake-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(236, 72, 153, 0.2);
        }
        
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-pink), var(--dark-pink));
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: all 0.5s ease;
        }
        
        .loader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        
        .spinner {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(255, 255, 255, 0.2);
            border-top: 4px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .hero-overlay {
            background: linear-gradient(45deg, rgba(236, 72, 153, 0.8), rgba(59, 130, 246, 0.6));
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
            background: linear-gradient(135deg, #be185d, #1e40af);
            backdrop-filter: blur(20px);
        }
        
        .mobile-menu.open {
            transform: translateX(0);
        }
        
        .mobile-menu-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(4px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 39;
        }
        
        .mobile-menu-overlay.open {
            opacity: 1;
            visibility: visible;
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .navbar-glass {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .testimonial-card {
            background: linear-gradient(135deg, #fdf2f8, #fce7f3);
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(236, 72, 153, 0.15);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-pink), var(--dark-pink), var(--primary-blue));
        }
        
        .btn-pulse:hover {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .section-padding {
            padding: 4rem 0;
        }
        
        .pink-gradient {
            background: linear-gradient(135deg, var(--primary-pink), var(--dark-pink));
        }
        
        .blue-gradient {
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
        }
        
        /* Enhanced responsive design */
        @media (max-width: 640px) {
            .section-padding {
                padding: 2rem 0;
            }
            
            .hero-slide {
                background-attachment: scroll;
            }
            
            .cake-card:hover {
                transform: translateY(-4px) scale(1.01);
            }
        }
        
        @media (min-width: 641px) and (max-width: 1024px) {
            .section-padding {
                padding: 3rem 0;
            }
        }
        
        /* Enhanced mobile menu styles */
        .mobile-menu-link {
            color: #f3f4f6;
            font-weight: 500;
            font-size: 1.25rem;
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            min-height: 60px;
            border: 2px solid transparent;
        }
        
        .mobile-menu-link:hover,
        .mobile-menu-link:focus {
            background: rgba(59, 130, 246, 0.2);
            color: #93c5fd;
            border-color: rgba(59, 130, 246, 0.3);
            transform: translateX(8px);
        }
        
        /* Better button sizing for touch */
        .touch-target {
            min-height: 44px;
            min-width: 44px;
        }
        
        /* Enhanced typography scaling */
        .hero-title {
            font-size: clamp(2.5rem, 8vw, 5rem);
            line-height: 1.1;
        }
        
        .hero-subtitle {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
        }
        
        .section-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
        }

        /* Mobile menu full-height improvements */
        .mobile-menu-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .mobile-menu-header {
            flex-shrink: 0;
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-menu-nav {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem 1.5rem;
            min-height: 0;
        }

        .mobile-menu-footer {
            flex-shrink: 0;
            padding: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(0, 0, 0, 0.2);
        }

        /* Custom pink and blue styling */
        .text-pink-custom { color: var(--primary-pink); }
        .text-blue-custom { color: var(--primary-blue); }
        .bg-pink-custom { background-color: var(--primary-pink); }
        .bg-blue-custom { background-color: var(--primary-blue); }
        .border-pink-custom { border-color: var(--primary-pink); }
        .hover\:bg-pink-custom:hover { background-color: var(--dark-pink); }
        .hover\:bg-blue-custom:hover { background-color: var(--dark-blue); }

        /* Cake decoration elements */
        .cake-decoration {
            position: absolute;
            opacity: 0.1;
            pointer-events: none;
        }

        .cake-decoration-1 {
            top: 10%;
            left: 5%;
            font-size: 3rem;
            color: var(--primary-pink);
            animation: float 6s ease-in-out infinite;
        }

        .cake-decoration-2 {
            top: 20%;
            right: 10%;
            font-size: 2.5rem;
            color: var(--primary-blue);
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* PDF optimization */
        @media print {
            .section-padding {
                padding: 1.5rem 0;
            }
            
            .hero-slide {
                position: relative;
                height: auto;
                min-height: 60vh;
            }
            
            .cake-card:hover {
                transform: none;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        }
    </style>
</head>
<body class="bg-white overflow-x-hidden">
    <!-- Loader -->
    <div class="loader" id="loader">
        <div class="text-center">
            <div class="spinner mx-auto mb-4"></div>
            <p class="text-white text-lg font-medium">Loading RodgerCakes...</p>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay"></div>

    <!-- Header -->
    <header class="fixed top-0 w-full navbar-glass shadow-lg z-50 transition-all duration-300">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2 sm:space-x-3">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-pink-custom rounded-full flex items-center justify-center shadow-md">
                    <i class="bi bi-cake2 text-white text-lg sm:text-xl"></i>
                </div>
                <span class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 dancing-script">RodgerCakes</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#home" class="text-gray-700 hover:text-pink-custom transition duration-300 font-medium">Home</a>
                <a href="#about" class="text-gray-700 hover:text-pink-custom transition duration-300 font-medium">About Us</a>
                <a href="#cakes" class="text-gray-700 hover:text-pink-custom transition duration-300 font-medium">Our Cakes</a>
                <a href="#contact" class="text-gray-700 hover:text-pink-custom transition duration-300 font-medium">Contact</a>
                <a href="#newsletter" class="bg-pink-custom text-white px-4 py-2 rounded-lg hover:bg-pink-custom transition duration-300 font-medium touch-target">Order Now</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-gray-700 hover:text-pink-custom transition duration-300 touch-target p-2" aria-label="Open mobile menu">
                <i class="bi bi-list text-2xl sm:text-3xl"></i>
            </button>
        </nav>

        <!-- Enhanced Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu fixed inset-y-0 right-0 w-80 max-w-full z-40 lg:hidden" role="dialog" aria-modal="true" aria-labelledby="mobile-menu-title">
            <div class="mobile-menu-container">
                <!-- Menu Header -->
                <div class="mobile-menu-header">
                    <div class="flex justify-between items-center">
                        <h2 id="mobile-menu-title" class="text-xl font-bold text-white dancing-script">RodgerCakes Menu</h2>
                        <button id="close-menu-btn" class="close-btn text-gray-300 hover:text-white transition duration-300 touch-target p-2 rounded-lg" aria-label="Close mobile menu">
                            <i class="bi bi-x text-3xl"></i>
                        </button>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="mobile-menu-nav" role="navigation" aria-label="Main navigation">
                    <div class="space-y-3">
                        <a href="#home" class="mobile-menu-link" role="menuitem">
                            <i class="bi bi-house mr-4 text-xl"></i>
                            <span>Home</span>
                        </a>
                        <a href="#about" class="mobile-menu-link" role="menuitem">
                            <i class="bi bi-info-circle mr-4 text-xl"></i>
                            <span>About Us</span>
                        </a>
                        <a href="#cakes" class="mobile-menu-link" role="menuitem">
                            <i class="bi bi-cake2 mr-4 text-xl"></i>
                            <span>Our Cakes</span>
                        </a>
                        <a href="#contact" class="mobile-menu-link" role="menuitem">
                            <i class="bi bi-envelope mr-4 text-xl"></i>
                            <span>Contact</span>
                        </a>
                        <a href="#newsletter" class="mobile-menu-link" role="menuitem">
                            <i class="bi bi-cart mr-4 text-xl"></i>
                            <span>Order Now</span>
                        </a>
                    </div>
                </nav>

                <!-- Contact Info Footer -->
                <div class="mobile-menu-footer">
                    <h3 class="text-white font-semibold mb-4 text-lg">Quick Contact</h3>
                    <div class="space-y-3 text-gray-300">
                        <a href="tel:+256742208275" class="flex items-center p-2 rounded-lg hover:bg-gray-700 transition-colors touch-target">
                            <i class="bi bi-telephone mr-3 text-lg"></i>
                            <span>+256 742 208275</span>
                        </a>
                        <a href="mailto:rodgercakes@gmail.com" class="flex items-center p-2 rounded-lg hover:bg-gray-700 transition-colors touch-target">
                            <i class="bi bi-envelope mr-3 text-lg"></i>
                            <span>Email Us</span>
                        </a>
                        <a href="https://wa.me/256742208275" class="flex items-center p-2 rounded-lg hover:bg-gray-700 transition-colors touch-target">
                            <i class="bi bi-whatsapp mr-3 text-lg"></i>
                            <span>WhatsApp Chat</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen overflow-hidden">
        <div class="absolute inset-0" id="hero-container">
            <div class="hero-slide active" style="background-image: url('https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg')"></div>
            <div class="hero-slide" style="background-image: url('https://images.pexels.com/photos/1721932/pexels-photo-1721932.jpeg')"></div>
            <div class="hero-slide" style="background-image: url('https://images.pexels.com/photos/1055272/pexels-photo-1055272.jpeg')"></div>
            <div class="hero-slide" style="background-image: url('https://images.pexels.com/photos/1028714/pexels-photo-1028714.jpeg')"></div>
        </div>
        
        <div class="hero-overlay absolute inset-0"></div>
        
        <!-- Decorative Elements -->
        <div class="cake-decoration cake-decoration-1">🎂</div>
        <div class="cake-decoration cake-decoration-2">🧁</div>
        
        <div class="relative z-10 flex items-center justify-center h-full text-center text-white px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <h1 class="hero-title font-extrabold mb-4 sm:mb-6 fade-in leading-tight dancing-script">
                    Sweet Moments, Sweeter Cakes
                </h1>
                <h2 class="hero-subtitle font-light mb-6 sm:mb-8 fade-in text-blue-200">
                    Crafting Delicious Memories Since Day One
                </h2>
                <p class="text-base sm:text-lg lg:text-xl mb-8 sm:mb-10 fade-in max-w-3xl mx-auto leading-relaxed">
                    From birthday celebrations to graduation parties, we create stunning custom cakes that make every occasion unforgettable. 
                    Premium ingredients, artistic designs, and love in every slice.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center fade-in">
                    <a href="#cakes" class="inline-block bg-pink-custom hover:bg-pink-custom text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold transition-all duration-300 transform hover:scale-105 btn-pulse touch-target">
                        <i class="bi bi-cake2 mr-2"></i>
                        View Our Cakes
                    </a>
                    <a href="tel:+256742208275" class="inline-block bg-blue-custom hover:bg-blue-custom text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold transition-all duration-300 transform hover:scale-105 btn-pulse touch-target">
                        <i class="bi bi-telephone mr-2"></i>
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-gradient-to-br from-pink-50 to-blue-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="section-title font-bold text-gray-900 mb-6 sm:mb-8 fade-in dancing-script">
                    About RodgerCakes
                </h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div class="fade-in">
                        <img src="https://images.pexels.com/photos/1028714/pexels-photo-1028714.jpeg" alt="Beautiful Custom Cake" class="w-full h-64 sm:h-80 object-cover rounded-xl shadow-lg">
                    </div>
                    <div class="fade-in text-left">
                        <p class="text-base sm:text-lg lg:text-xl text-gray-600 mb-6 leading-relaxed">
                            Located in the heart of Makerere Kikoni, Kampala, RodgerCakes has been bringing joy to celebrations across Uganda with our exquisite custom cakes and desserts.
                        </p>
                        <p class="text-base sm:text-lg lg:text-xl text-gray-600 mb-6 leading-relaxed">
                            We specialize in creating memorable cakes for birthdays, graduations, weddings, and all of life's special moments. Each cake is crafted with premium ingredients, artistic flair, and a commitment to making your celebration extraordinary.
                        </p>
                        <div class="grid grid-cols-2 gap-4 mt-8">
                            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                                <i class="bi bi-cake2 text-3xl text-pink-custom mb-2"></i>
                                <h4 class="font-semibold text-gray-900">Custom Designs</h4>
                                <p class="text-sm text-gray-600">Unique cakes for every occasion</p>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                                <i class="bi bi-heart-fill text-3xl text-pink-custom mb-2"></i>
                                <h4 class="font-semibold text-gray-900">Made with Love</h4>
                                <p class="text-sm text-gray-600">Premium ingredients, crafted fresh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Cakes Section -->
    <section id="cakes" class="section-padding bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title font-bold text-center text-gray-900 mb-12 sm:mb-16 fade-in dancing-script">
                Our Delicious Creations
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Cake 1 -->
                <div class="cake-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Birthday Cake" class="w-full h-48 sm:h-64 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="absolute top-4 right-4">
                            <span class="bg-pink-custom text-white px-3 py-1 rounded-full text-sm font-semibold">Popular</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">Birthday Celebration Cake</h3>
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Multi-layered vanilla sponge with buttercream frosting and custom decorations</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xl sm:text-2xl font-bold text-pink-custom">UGX 45,000</span>
                            <span class="text-sm text-gray-500">Serves 8-10</span>
                        </div>
                        <button class="w-full bg-pink-custom hover:bg-pink-custom text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 touch-target">
                            <i class="bi bi-telephone mr-2"></i>
                            Order Now
                        </button>
                    </div>
                </div>

                <!-- Cake 2 -->
                <div class="cake-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1721932/pexels-photo-1721932.jpeg" alt="Graduation Cake" class="w-full h-48 sm:h-64 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="absolute top-4 right-4">
                            <span class="bg-blue-custom text-white px-3 py-1 rounded-full text-sm font-semibold">Special</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">Graduation Achievement Cake</h3>
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Elegant design with graduation cap decoration and personalized message</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xl sm:text-2xl font-bold text-pink-custom">UGX 55,000</span>
                            <span class="text-sm text-gray-500">Serves 12-15</span>
                        </div>
                        <button class="w-full bg-pink-custom hover:bg-pink-custom text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 touch-target">
                            <i class="bi bi-telephone mr-2"></i>
                            Order Now
                        </button>
                    </div>
                </div>

                <!-- Cake 3 -->
                <div class="cake-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1055272/pexels-photo-1055272.jpeg" alt="Wedding Cake" class="w-full h-48 sm:h-64 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="absolute top-4 right-4">
                            <span class="bg-pink-custom text-white px-3 py-1 rounded-full text-sm font-semibold">Premium</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">Wedding Celebration Cake</h3>
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Three-tier masterpiece with floral decorations and elegant finish</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xl sm:text-2xl font-bold text-pink-custom">UGX 120,000</span>
                            <span class="text-sm text-gray-500">Serves 30-40</span>
                        </div>
                        <button class="w-full bg-pink-custom hover:bg-pink-custom text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 touch-target">
                            <i class="bi bi-telephone mr-2"></i>
                            Order Now
                        </button>
                    </div>
                </div>

                <!-- Cake 4 -->
                <div class="cake-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1028714/pexels-photo-1028714.jpeg" alt="Chocolate Cake" class="w-full h-48 sm:h-64 object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">Chocolate Indulgence Cake</h3>
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Rich chocolate layers with ganache filling and decorative toppings</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xl sm:text-2xl font-bold text-pink-custom">UGX 40,000</span>
                            <span class="text-sm text-gray-500">Serves 6-8</span>
                        </div>
                        <button class="w-full bg-pink-custom hover:bg-pink-custom text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 touch-target">
                            <i class="bi bi-telephone mr-2"></i>
                            Order Now
                        </button>
                    </div>
                </div>

                <!-- Cake 5 -->
                <div class="cake-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1126359/pexels-photo-1126359.jpeg" alt="Cupcakes" class="w-full h-48 sm:h-64 object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">Gourmet Cupcake Collection</h3>
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Assorted flavors beautifully decorated cupcakes perfect for any gathering</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xl sm:text-2xl font-bold text-pink-custom">UGX 25,000</span>
                            <span class="text-sm text-gray-500">12 pieces</span>
                        </div>
                        <button class="w-full bg-pink-custom hover:bg-pink-custom text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 touch-target">
                            <i class="bi bi-telephone mr-2"></i>
                            Order Now
                        </button>
                    </div>
                </div>

                <!-- Cake 6 -->
                <div class="cake-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1192031/pexels-photo-1192031.jpeg" alt="Custom Cake" class="w-full h-48 sm:h-64 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="absolute top-4 right-4">
                            <span class="bg-blue-custom text-white px-3 py-1 rounded-full text-sm font-semibold">Custom</span>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">Custom Design Cake</h3>
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Personalized cake designed according to your specific requirements and theme</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xl sm:text-2xl font-bold text-pink-custom">From UGX 35,000</span>
                            <span class="text-sm text-gray-500">Size varies</span>
                        </div>
                        <button class="w-full bg-pink-custom hover:bg-pink-custom text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 touch-target">
                            <i class="bi bi-telephone mr-2"></i>
                            Order Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-12 fade-in">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Don't See What You're Looking For?</h3>
                <p class="text-lg text-gray-600 mb-6">We specialize in custom cakes for all occasions. Contact us to discuss your unique requirements!</p>
                <a href="tel:+256742208275" class="inline-block bg-blue-custom hover:bg-blue-custom text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 btn-pulse touch-target">
                    <i class="bi bi-chat-dots mr-2"></i>
                    Discuss Custom Order
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-padding bg-gradient-to-br from-pink-50 to-blue-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title font-bold text-center text-gray-900 mb-12 sm:mb-16 fade-in dancing-script">
                What Our Customers Say
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card p-4 sm:p-6 rounded-xl shadow-lg text-center fade-in">
                    <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg" alt="Happy Customer" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full mx-auto mb-4 object-cover">
                    <div class="flex justify-center mb-4">
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4 leading-relaxed text-sm sm:text-base">"RodgerCakes made my daughter's birthday absolutely magical! The cake was not only beautiful but incredibly delicious. Will definitely order again!"</p>
                    <h4 class="text-base sm:text-lg font-semibold text-gray-900">Sarah M.</h4>
                    <p class="text-sm text-gray-500">Mother of 3</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card p-4 sm:p-6 rounded-xl shadow-lg text-center fade-in">
                    <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg" alt="Satisfied Client" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full mx-auto mb-4 object-cover">
                    <div class="flex justify-center mb-4">
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4 leading-relaxed text-sm sm:text-base">"Perfect graduation cake! The attention to detail was incredible and it tasted even better than it looked. Highly recommended!"</p>
                    <h4 class="text-base sm:text-lg font-semibold text-gray-900">James K.</h4>
                    <p class="text-sm text-gray-500">University Graduate</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card p-4 sm:p-6 rounded-xl shadow-lg text-center fade-in">
                    <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg" alt="Happy Bride" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full mx-auto mb-4 object-cover">
                    <div class="flex justify-center mb-4">
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4 leading-relaxed text-sm sm:text-base">"Our wedding cake was absolutely stunning! RodgerCakes exceeded all our expectations. Professional service and exceptional quality."</p>
                    <h4 class="text-base sm:text-lg font-semibold text-gray-900">Grace & David</h4>
                    <p class="text-sm text-gray-500">Newlyweds</p>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card p-4 sm:p-6 rounded-xl shadow-lg text-center fade-in">
                    <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg" alt="Event Organizer" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full mx-auto mb-4 object-cover">
                    <div class="flex justify-center mb-4">
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4 leading-relaxed text-sm sm:text-base">"As an event planner, I trust RodgerCakes for all my clients' special occasions. Consistent quality and timely delivery every time!"</p>
                    <h4 class="text-base sm:text-lg font-semibold text-gray-900">Patricia N.</h4>
                    <p class="text-sm text-gray-500">Event Planner</p>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card p-4 sm:p-6 rounded-xl shadow-lg text-center fade-in">
                    <img src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg" alt="Corporate Client" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full mx-auto mb-4 object-cover">
                    <div class="flex justify-center mb-4">
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4 leading-relaxed text-sm sm:text-base">"Great experience ordering cupcakes for our office celebration. Fresh, delicious, and beautifully presented. Our team loved them!"</p>
                    <h4 class="text-base sm:text-lg font-semibold text-gray-900">Michael O.</h4>
                    <p class="text-sm text-gray-500">HR Manager</p>
                </div>

                <!-- Testimonial 6 -->
                <div class="testimonial-card p-4 sm:p-6 rounded-xl shadow-lg text-center fade-in">
                    <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg" alt="Regular Customer" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full mx-auto mb-4 object-cover">
                    <div class="flex justify-center mb-4">
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                        <i class="bi bi-star-fill text-yellow-500"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4 leading-relaxed text-sm sm:text-base">"Been ordering from RodgerCakes for years. They never disappoint! Great prices, amazing taste, and beautiful designs every single time."</p>
                    <h4 class="text-base sm:text-lg font-semibold text-gray-900">Elizabeth T.</h4>
                    <p class="text-sm text-gray-500">Loyal Customer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="section-padding gradient-bg text-white relative overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="section-title font-bold mb-4 sm:mb-6 fade-in dancing-script">
                Stay Sweet with Our Updates
            </h2>
            <p class="text-base sm:text-lg lg:text-xl text-blue-200 mb-8 sm:mb-10 fade-in max-w-3xl mx-auto leading-relaxed">
                Subscribe to our newsletter and be the first to know about new cake designs, special offers, baking tips, and exclusive promotions from RodgerCakes.
            </p>

            <div class="max-w-2xl mx-auto fade-in">
                <form id="newsletter-form" class="flex flex-col sm:flex-row items-stretch gap-4">
                    <input 
                        type="email" 
                        placeholder="Enter your email address" 
                        required
                        class="flex-1 px-4 sm:px-6 py-3 sm:py-4 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white shadow-lg text-sm sm:text-base"
                    >
                    <button 
                        type="submit" 
                        class="px-6 sm:px-8 py-3 sm:py-4 bg-white text-pink-custom rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg btn-pulse touch-target text-sm sm:text-base"
                    >
                        <i class="bi bi-envelope-plus mr-2"></i>
                        Subscribe Now
                    </button>
                </form>
                <div id="newsletter-message" class="mt-4 text-white font-medium hidden"></div>
            </div>

            <!-- Special Offer Section -->
            <div class="mt-12 fade-in">
                <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 sm:p-8 max-w-3xl mx-auto">
                    <h3 class="text-xl sm:text-2xl font-bold mb-4">🎉 First Order Special!</h3>
                    <p class="text-base sm:text-lg mb-6">Get 15% off your first cake order when you call us directly and mention "SWEET15"</p>
                    <a href="tel:+256742208275" class="inline-block bg-white text-pink-custom px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 touch-target">
                        <i class="bi bi-telephone mr-2"></i>
                        Call Now: +256 742 208275
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-white bg-opacity-10 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-40 h-40 bg-white bg-opacity-10 rounded-full blur-3xl animate-pulse delay-200"></div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title font-bold text-center text-gray-900 mb-12 sm:mb-16 fade-in dancing-script">
                Get In Touch
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Contact Form -->
                <div class="fade-in">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-6">Send us a Message</h3>
                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <input 
                                type="text" 
                                placeholder="Your Name" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-custom transition duration-300 text-sm sm:text-base"
                            >
                            <input 
                                type="email" 
                                placeholder="Your Email" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-custom transition duration-300 text-sm sm:text-base"
                            >
                        </div>
                        <input 
                            type="tel" 
                            placeholder="Your Phone Number" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-custom transition duration-300 text-sm sm:text-base"
                        >
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-custom transition duration-300 text-sm sm:text-base">
                            <option value="">Select Cake Type</option>
                            <option value="birthday">Birthday Cake</option>
                            <option value="graduation">Graduation Cake</option>
                            <option value="wedding">Wedding Cake</option>
                            <option value="custom">Custom Design</option>
                            <option value="other">Other</option>
                        </select>
                        <textarea 
                            placeholder="Tell us about your cake requirements, design preferences, serving size, and event date" 
                            rows="6" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-custom transition duration-300 text-sm sm:text-base"
                        ></textarea>
                        <button 
                            type="submit" 
                            class="w-full bg-pink-custom hover:bg-pink-custom text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 touch-target text-sm sm:text-base"
                        >
                            <i class="bi bi-send mr-2"></i>
                            Send Message
                        </button>
                    </form>
                    <div id="contact-message" class="mt-4 hidden"></div>
                </div>
                
                <!-- Contact Info -->
                <div class="fade-in">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-pink-50 to-blue-50 rounded-lg shadow-sm">
                            <i class="bi bi-telephone text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900">Phone</p>
                                <a href="tel:+256742208275" class="text-pink-custom hover:underline text-base sm:text-lg">+256 742 208275</a>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-pink-50 to-blue-50 rounded-lg shadow-sm">
                            <i class="bi bi-envelope text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900">Email</p>
                                <a href="mailto:rodgercakes@gmail.com" class="text-pink-custom hover:underline text-base sm:text-lg">rodgercakes@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-pink-50 to-blue-50 rounded-lg shadow-sm">
                            <i class="bi bi-clock text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900">Business Hours</p>
                                <p class="text-gray-600 text-sm sm:text-base">Monday - Saturday: 8:00 AM - 8:00 PM</p>
                                <p class="text-gray-600 text-sm sm:text-base">Sunday: 10:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-pink-50 to-blue-50 rounded-lg shadow-sm">
                            <i class="bi bi-whatsapp text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900">WhatsApp</p>
                                <a href="https://wa.me/256742208275" class="text-pink-custom hover:underline text-base sm:text-lg">Chat with us instantly</a>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-pink-50 to-blue-50 rounded-lg shadow-sm">
                            <i class="bi bi-calendar-check text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900">Order Notice</p>
                                <p class="text-gray-600 text-sm sm:text-base">Please order 2-3 days in advance</p>
                                <p class="text-gray-600 text-sm sm:text-base">Rush orders may incur additional charges</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="section-padding bg-gradient-to-br from-pink-50 to-blue-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title font-bold text-center text-gray-900 mb-12 sm:mb-16 fade-in dancing-script">
                Visit Our Kitchen
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="fade-in">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-6">Our Location</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-sm">
                            <i class="bi bi-geo-alt text-pink-custom text-xl sm:text-2xl mt-1"></i>
                            <div>
                                <p class="font-medium text-gray-900 text-base sm:text-lg">Address</p>
                                <p class="text-gray-600 text-sm sm:text-base">Makerere Kikoni</p>
                                <p class="text-gray-600 text-sm sm:text-base">Kampala, Uganda</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-sm">
                            <i class="bi bi-map text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900 text-base sm:text-lg">Directions</p>
                                <p class="text-gray-600 text-sm sm:text-base">Located in the heart of Makerere area</p>
                                <p class="text-gray-600 text-sm sm:text-base">Easily accessible by taxi, boda-boda, or private car</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-sm">
                            <i class="bi bi-truck text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900 text-base sm:text-lg">Delivery</p>
                                <p class="text-gray-600 text-sm sm:text-base">We deliver within Kampala and surrounding areas</p>
                                <p class="text-gray-600 text-sm sm:text-base">Delivery charges apply based on distance</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-sm">
                            <i class="bi bi-shop text-pink-custom text-xl sm:text-2xl"></i>
                            <div>
                                <p class="font-medium text-gray-900 text-base sm:text-lg">Pickup Available</p>
                                <p class="text-gray-600 text-sm sm:text-base">Save on delivery costs with in-store pickup</p>
                                <p class="text-gray-600 text-sm sm:text-base">Call ahead to ensure your order is ready</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="fade-in">
                    <div class="bg-gradient-to-br from-pink-100 to-blue-200 h-64 sm:h-80 rounded-xl flex items-center justify-center shadow-lg">
                        <div class="text-center px-4">
                            <i class="bi bi-geo-alt text-4xl sm:text-6xl text-pink-custom mb-4"></i>
                            <p class="text-pink-800 font-semibold text-base sm:text-lg mb-2">Find Us Here</p>
                            <p class="text-pink-600 text-sm sm:text-base mb-2">Makerere Kikoni</p>
                            <p class="text-pink-600 text-sm sm:text-base mb-4">Kampala, Uganda</p>
                            <div class="space-y-2">
                                <button class="w-full bg-pink-custom text-white px-4 sm:px-6 py-2 rounded-lg hover:bg-pink-custom transition duration-300 text-sm sm:text-base touch-target">
                                    <i class="bi bi-telephone mr-2"></i>
                                    Call for Directions
                                </button>
                                <button class="w-full bg-blue-custom text-white px-4 sm:px-6 py-2 rounded-lg hover:bg-blue-custom transition duration-300 text-sm sm:text-base touch-target">
                                    <i class="bi bi-whatsapp mr-2"></i>
                                    WhatsApp Location
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Areas -->
            <div class="mt-12 fade-in">
                <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-6 text-center">Areas We Serve</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-sm font-medium text-gray-900">Makerere</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-sm font-medium text-gray-900">Wandegeya</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-sm font-medium text-gray-900">Kawempe</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-sm font-medium text-gray-900">Mulago</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-sm font-medium text-gray-900">Kampala Central</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-sm font-medium text-gray-900">& More Areas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white section-padding">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Brand -->
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-pink-custom rounded-full flex items-center justify-center">
                            <i class="bi bi-cake2 text-white text-lg sm:text-xl"></i>
                        </div>
                        <span class="text-lg sm:text-2xl font-bold dancing-script">RodgerCakes</span>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed text-sm sm:text-base">
                        Creating sweet memories with premium custom cakes for all your special occasions in Kampala, Uganda.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-pink-custom transition-colors touch-target">
                            <i class="bi bi-instagram text-xl sm:text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-pink-custom transition-colors touch-target">
                            <i class="bi bi-facebook text-xl sm:text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-pink-custom transition-colors touch-target">
                            <i class="bi bi-tiktok text-xl sm:text-2xl"></i>
                        </a>
                        <a href="https://wa.me/256742208275" class="text-gray-400 hover:text-pink-custom transition-colors touch-target">
                            <i class="bi bi-whatsapp text-xl sm:text-2xl"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4 text-base sm:text-lg">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-400 hover:text-pink-custom transition-colors text-sm sm:text-base">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-pink-custom transition-colors text-sm sm:text-base">About Us</a></li>
                        <li><a href="#cakes" class="text-gray-400 hover:text-pink-custom transition-colors text-sm sm:text-base">Our Cakes</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-pink-custom transition-colors text-sm sm:text-base">Contact</a></li>
                        <li><a href="#newsletter" class="text-gray-400 hover:text-pink-custom transition-colors text-sm sm:text-base">Newsletter</a></li>
                    </ul>
                </div>
                
                <!-- Our Specialties -->
                <div>
                    <h4 class="font-semibold mb-4 text-base sm:text-lg">Our Specialties</h4>
                    <ul class="space-y-3">
                        <li class="text-gray-400 text-sm sm:text-base">Birthday Cakes</li>
                        <li class="text-gray-400 text-sm sm:text-base">Graduation Cakes</li>
                        <li class="text-gray-400 text-sm sm:text-base">Wedding Cakes</li>
                        <li class="text-gray-400 text-sm sm:text-base">Custom Designs</li>
                        <li class="text-gray-400 text-sm sm:text-base">Cupcakes & More</li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="font-semibold mb-4 text-base sm:text-lg">Contact Info</h4>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-telephone text-pink-custom"></i>
                            <a href="tel:+256742208275" class="text-gray-400 hover:text-pink-custom transition-colors text-sm sm:text-base">+256 742 208275</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-envelope text-pink-custom"></i>
                            <a href="mailto:rodgercakes@gmail.com" class="text-gray-400 hover:text-pink-custom transition-colors text-sm sm:text-base">rodgercakes@gmail.com</a>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="bi bi-geo-alt text-pink-custom mt-1"></i>
                            <div class="text-gray-400 text-sm sm:text-base">
                                <p>Makerere Kikoni</p>
                                <p>Kampala, Uganda</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-clock text-pink-custom"></i>
                            <div class="text-gray-400 text-sm sm:text-base">
                                <p>Mon-Sat: 8AM-8PM</p>
                                <p>Sun: 10AM-6PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="border-gray-800 my-8">
            
            <div class="flex flex-col sm:flex-row justify-between items-center text-center sm:text-left">
                <p class="text-gray-400 mb-4 sm:mb-0 text-sm sm:text-base">
                    &copy; 2025 RodgerCakes. All rights reserved. Made with ❤️ in Kampala.
                </p>
                <div class="flex flex-wrap justify-center sm:justify-end gap-4 sm:space-x-6 sm:gap-0">
                    <a href="#" class="text-gray-400 hover:text-pink-custom transition-colors text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-pink-custom transition-colors text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-pink-custom transition-colors text-sm">Return Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Loading Animation
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loader').classList.add('hidden');
            }, 1500);
        });

        // Enhanced Mobile Menu Toggle with Accessibility
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const closeMenuBtn = document.getElementById('close-menu-btn');

        function openMobileMenu() {
            mobileMenu.classList.add('open');
            mobileMenuOverlay.classList.add('open');
            document.body.style.overflow = 'hidden';
            closeMenuBtn.focus();
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('open');
            mobileMenuOverlay.classList.remove('open');
            document.body.style.overflow = 'auto';
            mobileMenuBtn.focus();
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }

        // Event listeners
        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMenuBtn.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // Close mobile menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
                closeMobileMenu();
            }
        });

        // Hero Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const totalSlides = slides.length;

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % totalSlides;
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, 4000);

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in, .slide-fade').forEach(el => {
            observer.observe(el);
        });

        // Newsletter form submission
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const messageDiv = document.getElementById('newsletter-message');
            const email = this.querySelector('input[type="email"]').value;
            
            messageDiv.className = 'mt-4 text-white bg-green-600 bg-opacity-20 p-3 rounded-lg border border-green-400';
            messageDiv.innerHTML = `
                <i class="bi bi-check-circle mr-2"></i>
                Thank you for subscribing! You will receive updates about our latest cake designs and special offers at ${email}.
            `;
            messageDiv.classList.remove('hidden');
            this.reset();
            
            setTimeout(() => {
                messageDiv.classList.add('hidden');
            }, 5000);
        });

        // Contact form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const messageDiv = document.getElementById('contact-message');
            const name = this.querySelector('input[type="text"]').value;
            
            messageDiv.className = 'mt-4 text-green-600 bg-green-50 p-3 rounded-lg border border-green-200';
            messageDiv.innerHTML = `
                <i class="bi bi-check-circle mr-2"></i>
                Thank you ${name}! Your cake inquiry has been sent successfully. We will contact you within 24 hours to discuss your requirements and provide a quote.
            `;
            messageDiv.classList.remove('hidden');
            this.reset();
            
            setTimeout(() => {
                messageDiv.classList.add('hidden');
            }, 7000);
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('shadow-xl');
            } else {
                header.classList.remove('shadow-xl');
            }
        });

        // Initialize animations on load
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.querySelectorAll('#home .fade-in').forEach(el => {
                    el.classList.add('visible');
                });
            }, 2000);
        });

        // Add click handlers for order buttons
        document.querySelectorAll('.cake-card button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const cakeName = this.closest('.cake-card').querySelector('h3').textContent;
                const phoneNumber = '+256742208275';
                const message = `Hello RodgerCakes! I'm interested in ordering the ${cakeName}. Could you please provide more details and help me place an order?`;
                const whatsappUrl = `https://wa.me/${phoneNumber.replace('+', '')}?text=${encodeURIComponent(message)}`;
                
                // Try WhatsApp first, fallback to phone call
                if (window.innerWidth <= 768) {
                    window.open(whatsappUrl, '_blank');
                } else {
                    if (confirm(`Would you like to contact RodgerCakes about "${cakeName}"?\n\nClick OK to call directly or Cancel to send a WhatsApp message.`)) {
                        window.location.href = `tel:${phoneNumber}`;
                    } else {
                        window.open(whatsappUrl, '_blank');
                    }
                }
            });
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024 && mobileMenu.classList.contains('open')) {
                closeMobileMenu();
            }
        });

        // Add some interactive cake-related features
        document.addEventListener('DOMContentLoaded', () => {
            // Add floating cake emojis on special occasions
            const today = new Date();
            const isWeekend = today.getDay() === 0 || today.getDay() === 6;
            
            if (isWeekend) {
                // Add weekend special indicator
                const weekendBanner = document.createElement('div');
                weekendBanner.innerHTML = `
                    <div class="bg-pink-custom text-white text-center py-2 px-4 text-sm font-medium">
                        🎉 Weekend Special: 10% off on all orders above UGX 50,000! 
                        <a href="tel:+256742208275" class="underline hover:no-underline">Call now!</a>
                    </div>
                `;
                document.body.insertBefore(weekendBanner, document.body.firstChild);
            }
        });

        // Add call tracking
        document.querySelectorAll('a[href^="tel:"]').forEach(link => {
            link.addEventListener('click', function() {
                // You can add analytics tracking here
                console.log('Phone call initiated to:', this.href);
            });
        });

        // Add WhatsApp tracking
        document.querySelectorAll('a[href^="https://wa.me/"]').forEach(link => {
            link.addEventListener('click', function() {
                // You can add analytics tracking here
                console.log('WhatsApp initiated to:', this.href);
            });
        });
    </script>
</body>
</html>
