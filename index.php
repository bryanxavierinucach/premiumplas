<?php
$page_title = 'PremiumPlas - Artículos de Cocina y Menaje';
$current_page = 'index';
?>

<?php include 'header.php'; ?>

    <!-- HERO SECTION WITH CAROUSEL -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden rounded-[24px] mx-2 mt-4">
        <div class="carousel">
            <div class="carousel-image" style="background-image: url('https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=1920&q=80');"></div>
            <div class="carousel-image" style="background-image: url('https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=1920&q=80');"></div>
            <div class="carousel-image" style="background-image: url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=1920&q=80');"></div>
        </div>
        <div class="absolute inset-0 bg-blue-900/50"></div>
        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
            <h1 class="font-serif text-6xl md:text-7xl lg:text-8xl font-light text-white mb-8 leading-tight">
                Piezas Únicas para tu <span class="italic">Hogar</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/90 mb-12 max-w-3xl mx-auto font-light">
                Curamos las mejores piezas de artesanía ecuatoriana para transformar tu hogar en un espacio único y especial.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="catalogo.php" class="px-10 py-4 bg-green-600 text-white font-medium hover:bg-green-700 transition-colors duration-300 rounded-full">
                    Ver Catálogo
                </a>
                <a href="contacto.php" class="px-10 py-4 bg-white text-gray-700 font-medium hover:bg-gray-100 transition-colors duration-300 rounded-full">
                    Contáctanos
                </a>
            </div>
        </div>
    </section>

    <!-- SERVICIOS SECTION -->
    <section class="py-32 bg-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Nuestra Colección</span>
                <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Catálogo de Menaje</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Servicio 1 -->
                <div class="group text-center">
                    <div class="w-full h-80 bg-gray-100 mb-8 overflow-hidden relative rounded-[24px]">
                        <img src="https://images.unsplash.com/photo-1513519245088-0e12902e35a6?w=600&q=80" alt="Textiles" class="w-full h-full object-cover grayscale grayscale-hover smooth-transition">
                    </div>
                    <h3 class="font-serif text-3xl text-gray-700 mb-4">Textiles para el Hogar</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Cojines, manteles, toallas y textiles artesanales que aportan calidez y estilo a cada espacio.</p>
                </div>
                
                <!-- Servicio 2 -->
                <div class="group text-center">
                    <div class="w-full h-80 bg-gray-100 mb-8 overflow-hidden relative rounded-[24px]">
                        <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=600&q=80" alt="Vajilla" class="w-full h-full object-cover grayscale grayscale-hover smooth-transition">
                    </div>
                    <h3 class="font-serif text-3xl text-gray-700 mb-4">Vajilla y Cristalería</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Piezas únicas de cerámica artesanal, vidrio soplado y porcelana para tu mesa.</p>
                </div>
                
                <!-- Servicio 3 -->
                <div class="group text-center">
                    <div class="w-full h-80 bg-gray-100 mb-8 overflow-hidden relative rounded-[24px]">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&q=80" alt="Decoración" class="w-full h-full object-cover grayscale grayscale-hover smooth-transition">
                    </div>
                    <h3 class="font-serif text-3xl text-gray-700 mb-4">Decoración Artesanal</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Jarrones, espejos, velas y piezas decorativas creadas por artesanos ecuatorianos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTO DESTACADO -->
    <section class="py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-full h-full border-2 border-green-600"></div>
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=800&q=80" alt="Set de Vajilla Cerámica" class="w-full h-[600px] object-cover grayscale grayscale-hover smooth-transition relative z-10">
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Producto Destacado</span>
                    <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-8">Set de Vajilla Cerámica Artesanal</h2>
                    <p class="text-gray-600 text-lg font-light leading-relaxed mb-8">
                        Este excepcional set de vajilla combina tradición artesanal con diseño contemporáneo. Cada pieza está elaborada a mano por artesanos ecuatorianos, utilizando técnicas de barro negro tradicionales.
                    </p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center text-gray-700 font-light">
                            <i class="fas fa-check text-green-600 mr-4"></i>
                            Incluye 4 platos principales, 4 secundarios y 4 bowls
                        </li>
                        <li class="flex items-center text-gray-700 font-light">
                            <i class="fas fa-check text-green-600 mr-4"></i>
                            Cerámica artesanal ecuatoriana
                        </li>
                        <li class="flex items-center text-gray-700 font-light">
                            <i class="fas fa-check text-green-600 mr-4"></i>
                            Apto para microondas y lavavajillas
                        </li>
                    </ul>
                    <a href="catalogo.php" class="inline-flex items-center text-green-600 font-medium hover:text-green-700 transition-colors duration-300 group">
                        Ver más productos
                        <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 smooth-transition"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ESTADÍSTICAS -->
    <section class="py-24 bg-blue-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 text-center">
                <div>
                    <div class="font-serif text-5xl md:text-6xl text-white mb-4">15+</div>
                    <div class="text-white/80 font-light">Años de Experiencia</div>
                </div>
                <div>
                    <div class="font-serif text-5xl md:text-6xl text-white mb-4">500+</div>
                    <div class="text-white/80 font-light">Piezas Únicas</div>
                </div>
                <div>
                    <div class="font-serif text-5xl md:text-6xl text-white mb-4">50+</div>
                    <div class="text-white/80 font-light">Artesanos</div>
                </div>
                <div>
                    <div class="font-serif text-5xl md:text-6xl text-white mb-4">12</div>
                    <div class="text-white/80 font-light">Estados Ecuatorianos</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIOS -->
    <section class="py-32 bg-cream">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Testimonios</span>
                <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Lo que dicen nuestros clientes</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-10 border-l-4 border-green-600">
                    <i class="fas fa-quote-left text-green-600 text-2xl mb-6"></i>
                    <p class="text-gray-600 text-lg font-light italic leading-relaxed mb-8">
                        "PremiumPlas transformó completamente nuestro hogar. Su atención al detalle y sensibilidad estética superaron todas nuestras expectativas. Recomendamos altamente sus servicios."
                    </p>
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-gray-500"></i>
                        </div>
                        <div>
                            <div class="font-serif text-xl text-gray-700">María González</div>
                            <div class="text-gray-500 text-sm">Cliente Residencial</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-10 border-l-4 border-green-600">
                    <i class="fas fa-quote-left text-green-600 text-2xl mb-6"></i>
                    <p class="text-gray-600 text-lg font-light italic leading-relaxed mb-8">
                        "Profesionalismo excepcional y creatividad sin límites. El diseño de nuestra oficina refleja perfectamente nuestra identidad corporativa. Una experiencia impecable."
                    </p>
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-gray-500"></i>
                        </div>
                        <div>
                            <div class="font-serif text-xl text-gray-700">Carlos Ramírez</div>
                            <div class="text-gray-500 text-sm">CEO, Tech Solutions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-32 bg-blue-900">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="font-serif text-5xl md:text-6xl text-white mb-6">¿Listo para transformar tu hogar?</h2>
            <p class="text-white/80 text-xl font-light leading-relaxed mb-10">
                Descubre nuestra amplia selección de artículos de cocina, menaje y productos de limpieza de la más alta calidad.
            </p>
            <a href="catalogo.php" class="inline-block px-12 py-5 bg-green-600 text-white font-medium hover:bg-green-700 transition-all duration-300 rounded-full shadow-lg hover:shadow-xl">
                Explorar Catálogo
            </a>
        </div>
    </section>

<?php include 'footer.php'; ?>
