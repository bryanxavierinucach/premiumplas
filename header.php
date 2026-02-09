<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title><?php echo $page_title ?? 'PremiumPlas - Artículos de Cocina y Menaje'; ?></title>
    <meta name="title" content="<?php echo $page_title ?? 'PremiumPlas'; ?>"">
    <meta name="description" content="Empresa líder en distribución de artículos de cocina, menaje y productos de limpieza en Ecuador. Calidad, compromiso y servicio cercano.">
    <meta name="keywords" content="artículos de cocina, menaje, productos de limpieza, vajillas, ollas, cubiertos, Ecuador">
    <meta name="author" content="PremiumPlas">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo $page_title ?? 'PremiumPlas'; ?>">
    <meta property="og:description" content="Empresa líder en distribución de artículos de cocina, menaje y productos de limpieza en Ecuador.">
    <meta property="og:image" content="https://premiumplas.com/assets/images/logocompleto.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title" content="<?php echo $page_title ?? 'PremiumPlas'; ?>">
    <meta property="twitter:description" content="Empresa líder en distribución de artículos de cocina, menaje y productos de limpieza en Ecuador.">
    <meta property="twitter:image" content="https://premiumplas.com/assets/images/logocompleto.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/logo.png">
    <link rel="apple-touch-icon" href="/assets/images/logo.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: '#FDFBF7',
                        'green-600': '#059669',
                        'green-700': '#047857',
                        'blue-900': '#1e3a5f',
                        'amber-600': '#d97706',
                        'gray-700': '#374151',
                        'gray-600': '#4b5563',
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['"Inter"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        .grayscale-hover:hover {
            filter: grayscale(0%);
        }
        .grayscale {
            filter: grayscale(100%);
        }
        .smooth-transition {
            transition: all 0.4s ease-in-out;
        }
        
        /* CSS-only Carousel */
        .carousel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .carousel-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: slide 15s infinite;
        }
        
        .carousel-image:nth-child(1) {
            animation-delay: 0s;
        }
        
        .carousel-image:nth-child(2) {
            animation-delay: 5s;
        }
        
        .carousel-image:nth-child(3) {
            animation-delay: 10s;
        }
        
        @keyframes slide {
            0%, 25% {
                opacity: 1;
            }
            33.33%, 100% {
                opacity: 0;
            }
        }
        
        /* Modern Menu Styles */
        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #059669, #047857);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .nav-link:hover::before,
        .nav-link.active::before {
            width: 80%;
        }
        
        .nav-link:hover {
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: #059669;
            font-weight: 500;
        }
        
        /* Glassmorphism Header */
        .glass-header {
            background: rgba(253, 251, 247, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(5, 150, 105, 0.1);
        }
        
        /* Mobile Menu Animation */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        .mobile-menu-overlay {
            transition: all 0.3s ease;
        }
        
        .mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .mobile-nav-link {
            position: relative;
            overflow: hidden;
        }
        
        .mobile-nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, rgba(5, 150, 105, 0.1), transparent);
            transition: width 0.3s ease;
        }
        
        .mobile-nav-link:hover::before,
        .mobile-nav-link.active::before {
            width: 100%;
        }
        
        .mobile-nav-link:hover,
        .mobile-nav-link.active {
            padding-left: 1.5rem;
        }
        
        /* Animated Hamburger */
        .hamburger-line {
            transition: all 0.3s ease;
        }
        
        .hamburger.active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }
        
        /* Logo Scale Animation */
        .logo-container {
            transition: transform 0.3s ease;
        }
        
        .logo-container:hover {
            transform: scale(1.05);
        }
        
        /* Scroll indicator */
        .scroll-indicator {
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        /* Product Card Hover */
        .product-card {
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-8px);
        }
        
        /* Blog Card Hover */
        .blog-card {
            transition: all 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-8px);
        }
        
        /* Form Input Animation */
        .input-group {
            position: relative;
        }
        
        .input-group input,
        .input-group textarea,
        .input-group select {
            transition: all 0.3s ease;
        }
        
        .input-group input:focus,
        .input-group textarea:focus,
        .input-group select:focus {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-cream font-sans text-gray-700">
    
    <!-- HEADER MODERNO -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 glass-header transition-all duration-3 overflow-visible">
        <nav class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="index.php" class="logo-container flex-shrink-0">
                    <img src="/assets/images/logocompleto.png" alt="PremiumPlas Logo" class="h-20 w-auto">
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="index.php" class="nav-link <?php echo $current_page == 'index' ? 'active' : 'text-gray-600 hover:text-gray-800'; ?> font-medium">
                        <span class="relative z-10">Inicio</span>
                    </a>
                    <a href="nosotros.php" class="nav-link <?php echo $current_page == 'nosotros' ? 'active' : 'text-gray-600 hover:text-gray-800'; ?> font-medium">
                        <span class="relative z-10">Nosotros</span>
                    </a>
                    <a href="clientes.php" class="nav-link <?php echo $current_page == 'clientes' ? 'active' : 'text-gray-600 hover:text-gray-800'; ?> font-medium">
                        <span class="relative z-10">Clientes</span>
                    </a>
                    <a href="catalogo.php" class="nav-link <?php echo $current_page == 'catalogo' ? 'active' : 'text-gray-600 hover:text-gray-800'; ?> font-medium">
                        <span class="relative z-10">Catálogo</span>
                    </a>
                    <a href="blog.php" class="nav-link <?php echo $current_page == 'blog' ? 'active' : 'text-gray-600 hover:text-gray-800'; ?> font-medium">
                        <span class="relative z-10">Blog</span>
                    </a>
                    <a href="contacto.php" class="nav-link <?php echo $current_page == 'contacto' ? 'active' : 'text-gray-600 hover:text-gray-800'; ?> font-medium">
                        <span class="relative z-10">Contacto</span>
                    </a>
                </div>
                
                <!-- CTA Button -->
                <div class="hidden lg:block">
                    <a href="catalogo.php" class="px-6 py-2.5 bg-green-600 text-white font-medium rounded-full hover:bg-green-700 transition-all duration-300 hover:shadow-lg hover:shadow-green-600/30 transform hover:-translate-y-0.5">
                        Ver Catálogo
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="hamburger lg:hidden w-10 h-10 flex flex-col justify-center items-center gap-1.5 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <span class="hamburger-line w-6 h-0.5 bg-gray-700 rounded"></span>
                    <span class="hamburger-line w-6 h-0.5 bg-gray-700 rounded"></span>
                    <span class="hamburger-line w-6 h-0.5 bg-gray-700 rounded"></span>
                </button>
            </div>
        </nav>
    </header>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay fixed inset-0 bg-black/50 z-40 lg:hidden transition-opacity duration-300 opacity-0 invisible"></div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 left-0 bottom-0 w-80 max-w-[85vw] bg-cream z-50 lg:hidden shadow-2xl transform -translate-x-full transition-transform duration-300">
        <div class="p-6">
            <!-- Mobile Logo -->
            <div class="flex items-center justify-between mb-8">
                <img src="/assets/images/logocompleto.png" alt="PremiumPlas Logo" class="h-16 w-auto">
                <button id="mobile-menu-close" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-times text-xl text-gray-600"></i>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <div class="flex flex-col space-y-2">
                <a href="index.php" class="mobile-nav-link <?php echo $current_page == 'index' ? 'active' : ''; ?> px-4 py-3 <?php echo $current_page == 'index' ? 'text-green-600' : 'text-gray-600'; ?> font-medium rounded-lg transition-all duration-300">
                    <i class="fas fa-home mr-3 w-5"></i>Inicio
                </a>
                <a href="nosotros.php" class="mobile-nav-link <?php echo $current_page == 'nosotros' ? 'active' : ''; ?> px-4 py-3 <?php echo $current_page == 'nosotros' ? 'text-green-600' : 'text-gray-600'; ?> font-medium rounded-lg transition-all duration-300">
                    <i class="fas fa-users mr-3 w-5"></i>Nosotros
                </a>
                <a href="clientes.php" class="mobile-nav-link <?php echo $current_page == 'clientes' ? 'active' : ''; ?> px-4 py-3 <?php echo $current_page == 'clientes' ? 'text-green-600' : 'text-gray-600'; ?> font-medium rounded-lg transition-all duration-300">
                    <i class="fas fa-heart mr-3 w-5"></i>Clientes
                </a>
                <a href="catalogo.php" class="mobile-nav-link <?php echo $current_page == 'catalogo' ? 'active' : ''; ?> px-4 py-3 <?php echo $current_page == 'catalogo' ? 'text-green-600' : 'text-gray-600'; ?> font-medium rounded-lg transition-all duration-300">
                    <i class="fas fa-box mr-3 w-5"></i>Catálogo
                </a>
                <a href="blog.php" class="mobile-nav-link <?php echo $current_page == 'blog' ? 'active' : ''; ?> px-4 py-3 <?php echo $current_page == 'blog' ? 'text-green-600' : 'text-gray-600'; ?> font-medium rounded-lg transition-all duration-300">
                    <i class="fas fa-newspaper mr-3 w-5"></i>Blog
                </a>
                <a href="contacto.php" class="mobile-nav-link <?php echo $current_page == 'contacto' ? 'active' : ''; ?> px-4 py-3 <?php echo $current_page == 'contacto' ? 'text-green-600' : 'text-gray-600'; ?> font-medium rounded-lg transition-all duration-300">
                    <i class="fas fa-envelope mr-3 w-5"></i>Contacto
                </a>
            </div>
            
            <!-- Mobile CTA -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="catalogo.php" class="block w-full px-6 py-3 bg-green-600 text-white font-medium text-center rounded-full hover:bg-green-700 transition-all duration-300">
                    Ver Catálogo
                </a>
            </div>
            
            <!-- Social Links -->
            <div class="flex justify-center space-x-4 mt-6">
                <a href="#" class="w-10 h-10 bg-gray-100 flex items-center justify-center text-gray-600 rounded-full hover:bg-green-600 hover:text-white transition-all duration-300">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-gray-100 flex items-center justify-center text-gray-600 rounded-full hover:bg-green-600 hover:text-white transition-all duration-300">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-gray-100 flex items-center justify-center text-gray-600 rounded-full hover:bg-green-600 hover:text-white transition-all duration-300">
                    <i class="fab fa-pinterest-p"></i>
                </a>
            </div>
        </div>
    </div>
