    <!-- FOOTER -->
    <footer class="bg-cream pt-20 pb-10 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-16 mb-16">
                <!-- Info PremiumPlas -->
                <div>
                    <img src="/assets/images/logocompleto.png" alt="PremiumPlas Logo" class="h-16 w-auto mb-6">
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Empresa líder en distribución de artículos de cocina, menaje y productos de limpieza. Calidad, compromiso y servicio cercano.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-200 flex items-center justify-center text-gray-700 hover:bg-amber-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 flex items-center justify-center text-gray-700 hover:bg-amber-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 flex items-center justify-center text-gray-700 hover:bg-amber-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Navegación -->
                <div>
                    <h4 class="font-serif text-2xl text-gray-700 mb-6">Navegación</h4>
                    <ul class="space-y-4">
                        <li><a href="index.php" class="text-gray-600 hover:text-amber-600 font-light transition-colors duration-300">Inicio</a></li>
                        <li><a href="nosotros.php" class="text-gray-600 hover:text-amber-600 font-light transition-colors duration-300">Nosotros</a></li>
                        <li><a href="clientes.php" class="text-gray-600 hover:text-amber-600 font-light transition-colors duration-300">Clientes</a></li>
                        <li><a href="catalogo.php" class="text-gray-600 hover:text-amber-600 font-light transition-colors duration-300">Catálogo</a></li>
                        <li><a href="blog.php" class="text-gray-600 hover:text-amber-600 font-light transition-colors duration-300">Blog</a></li>
                        <li><a href="contacto.php" class="text-gray-600 hover:text-amber-600 font-light transition-colors duration-300">Contacto</a></li>
                    </ul>
                </div>
                
                <!-- Contacto -->
                <div>
                    <h4 class="font-serif text-2xl text-gray-700 mb-6">Contacto</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start text-gray-600 font-light">
                            <i class="fas fa-map-marker-alt text-green-600 mt-1 mr-4"></i>
                            Av. Principal 1234, Ciudad
                        </li>
                        <li class="flex items-center text-gray-600 font-light">
                            <i class="fas fa-phone text-green-600 mr-4"></i>
                            +593 (XX) XXX XXXX
                        </li>
                        <li class="flex items-center text-gray-600 font-light">
                            <i class="fas fa-envelope text-green-600 mr-4"></i>
                            info@premiumplas.com
                        </li>
                        <li class="flex items-center text-gray-600 font-light">
                            <i class="fas fa-clock text-green-600 mr-4"></i>
                            Lun - Vie: 8:00 - 18:00 hrs
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-200 pt-10 text-center">
                <p class="text-gray-500 font-light">
                    &copy; <?php echo date('Y'); ?> PremiumPlas. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu JavaScript -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mainHeader = document.getElementById('main-header');
        
        function openMobileMenu() {
            mobileMenu.classList.add('active');
            mobileMenuOverlay.classList.add('active');
            mobileMenuBtn.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            mobileMenuBtn.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                if (mobileMenu.classList.contains('active')) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            });
        }
        
        if (mobileMenuOverlay) {
            mobileMenuOverlay.addEventListener('click', closeMobileMenu);
        }
        
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', closeMobileMenu);
        }
        
        // Header scroll effect
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 50) {
                mainHeader.classList.add('shadow-lg');
            } else {
                mainHeader.classList.remove('shadow-lg');
            }
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>
