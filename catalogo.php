<?php
$page_title = 'Catálogo - PremiumPlas';
$current_page = 'catalogo';
?>

<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 rounded-[24px] mx-2 mt-4" style="background-image: url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1920&q=80'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-blue-900/60"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-32 text-center">
            <span class="text-white/80 font-light tracking-widest uppercase text-sm">Calidad y Variedad</span>
            <h1 class="font-serif text-6xl md:text-7xl lg:text-8xl text-white mt-4 mb-6">Nuestro Catálogo</h1>
        </div>
    </section>

    <!-- CATÁLOGO -->
    <section class="py-32 bg-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Productos Premium</span>
                <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Explora Nuestro Catálogo</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <!-- Filtros -->
            <div class="flex flex-wrap justify-center gap-4 mb-16" id="filter-buttons">
                <button class="filter-btn px-6 py-2 bg-green-600 text-white font-medium rounded-full hover:bg-green-700 transition-all duration-300" data-filter="all">Todos</button>
                <button class="filter-btn px-6 py-2 bg-white text-gray-700 font-medium rounded-full hover:bg-green-600 hover:text-white transition-all duration-300 border border-gray-200" data-filter="cocina">Artículos de Cocina</button>
                <button class="filter-btn px-6 py-2 bg-white text-gray-700 font-medium rounded-full hover:bg-green-600 hover:text-white transition-all duration-300 border border-gray-200" data-filter="menaje">Menaje</button>
                <button class="filter-btn px-6 py-2 bg-white text-gray-700 font-medium rounded-full hover:bg-green-600 hover:text-white transition-all duration-300 border border-gray-200" data-filter="limpieza">Productos de Limpieza</button>
            </div>
            
            <!-- Productos -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="products-grid">
                <!-- Producto 1 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="cocina">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1584992236310-6eddd3f4a94c?w=600&q=80" alt="Ollas de Cocina" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 right-4 bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">Popular</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Ollas de Cocina</h3>
                        <p class="text-gray-600 font-light mb-4"> Ollas de acero inoxidable de alta calidad</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 2 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="menaje">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=600&q=80" alt="Vajillas" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Vajillas Completas</h3>
                        <p class="text-gray-600 font-light mb-4"> Sets de vajilla para todo tipo de ocasión</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 3 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="cocina">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1588515724527-074a7a56616c?w=600&q=80" alt="Cubiertos" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Cubiertos</h3>
                        <p class="text-gray-600 font-light mb-4"> Cubiertos de acero inoxidable</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 4 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="cocina">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=600&q=80" alt="Sartenes" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 right-4 bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full">Nuevo</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Sartenes Antiadherentes</h3>
                        <p class="text-gray-600 font-light mb-4"> Sartenes de alta durabilidad</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 5 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="menaje">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1576618148400-f54bed99fcfd?w=600&q=80" alt="Recipientes" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Recipientes de Vidrio</h3>
                        <p class="text-gray-600 font-light mb-4"> Recipientes herméticos para alimentos</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 6 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="cocina">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581553690325-78dbf98afbe1?w=600&q=80" alt="Utensilios" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Utensilios de Cocina</h3>
                        <p class="text-gray-600 font-light mb-4"> Cucharas, tenedores y cuchillos profesionales</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 7 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="menaje">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581553690325-78dbf98afbe1?w=600&q=80" alt="Dispensadores" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Dispensadores</h3>
                        <p class="text-gray-600 font-light mb-4"> Dispensadores de jabón y otros líquidos</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Producto 8 -->
                <div class="product-card bg-white shadow-lg overflow-hidden rounded-[24px]" data-category="limpieza">
                    <div class="h-64 bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1584992236310-6eddd3f4a94c?w=600&q=80" alt="Productos de Limpieza" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 right-4 bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">Oferta</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl text-gray-700 mb-2">Productos de Limpieza</h3>
                        <p class="text-gray-600 font-light mb-4"> Artículos de limpieza profesionales</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-xl">Cotizar</span>
                            <a href="contacto.php" class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class="text-center mt-16">
                <a href="contacto.php" class="inline-block px-10 py-4 bg-green-600 text-white font-medium hover:bg-green-700 transition-all duration-300 rounded-full shadow-lg hover:shadow-xl">
                    Solicitar Catálogo Completo
                </a>
            </div>
        </div>
    </section>

    <!-- Filter JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const products = document.querySelectorAll('.product-card');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-green-600', 'text-white');
                        b.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    });
                    
                    // Add active class to clicked button
                    this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    this.classList.add('bg-green-600', 'text-white');
                    
                    const filter = this.dataset.filter;
                    
                    products.forEach(product => {
                        if (filter === 'all' || product.dataset.category === filter) {
                            product.classList.remove('hidden');
                            product.style.display = 'block';
                        } else {
                            product.classList.add('hidden');
                            product.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

<?php include 'footer.php'; ?>
