<?php
$page_title = 'Clientes - PremiumPlas';
$current_page = 'clientes';
?>

<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 rounded-[24px] mx-2 mt-4" style="background-image: url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1920&q=80'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-blue-900/60"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-32 text-center">
            <span class="text-white/80 font-light tracking-widest uppercase text-sm">Nuestra Reputación</span>
            <h1 class="font-serif text-6xl md:text-7xl lg:text-8xl text-white mt-4 mb-6">Nuestros Clientes</h1>
        </div>
    </section>

    <!-- CLIENTES -->
    <section class="py-32 bg-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Confían en Nosotros</span>
                <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Empresas que Trabajan con Nosotros</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <!-- Logos de Clientes -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 items-center mb-20">
                <div class="bg-white p-8 rounded-[24px] shadow-lg hover:shadow-xl smooth-transition flex items-center justify-center h-32">
                    <span class="font-serif text-2xl text-gray-600 font-bold">Hotel Luxury</span>
                </div>
                <div class="bg-white p-8 rounded-[24px] shadow-lg hover:shadow-xl smooth-transition flex items-center justify-center h-32">
                    <span class="font-serif text-2xl text-gray-600 font-bold">Restaurante Elite</span>
                </div>
                <div class="bg-white p-8 rounded-[24px] shadow-lg hover:shadow-xl smooth-transition flex items-center justify-center h-32">
                    <span class="font-serif text-2xl text-gray-600 font-bold">Catering Pro</span>
                </div>
                <div class="bg-white p-8 rounded-[24px] shadow-lg hover:shadow-xl smooth-transition flex items-center justify-center h-32">
                    <span class="font-serif text-2xl text-gray-600 font-bold">Casa de Huéspedes</span>
                </div>
            </div>
            
            <!-- TESTIMONIOS -->
            <div class="text-center mb-16">
                <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Testimonios</span>
                <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Lo que dicen nuestros clientes</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-10 rounded-[24px] shadow-lg hover:shadow-xl smooth-transition">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-green-600 text-2xl"></i>
                        </div>
                        <div>
                            <div class="font-serif text-2xl text-gray-700">María González</div>
                            <div class="text-gray-500">Hotel Director</div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-lg font-light leading-relaxed italic">
                        "PremiumPlas ha sido nuestro proveedor de confianza durante años. La calidad de sus productos y la puntualidad en las entregas son excepcionales. Recomendamos ampliamente sus servicios."
                    </p>
                    <div class="mt-4 flex text-amber-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <div class="bg-white p-10 rounded-[24px] shadow-lg hover:shadow-xl smooth-transition">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-green-600 text-2xl"></i>
                        </div>
                        <div>
                            <div class="font-serif text-2xl text-gray-700">Carlos Ramírez</div>
                            <div class="text-gray-500">Restaurante Owner</div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-lg font-light leading-relaxed italic">
                        "Encontré en PremiumPlas todo lo que necesito para mi restaurante. La variedad de productos y la atención personalizada hacen que trabajar con ellos sea una experiencia excelente."
                    </p>
                    <div class="mt-4 flex text-amber-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ESTADÍSTICAS -->
    <section class="py-24 bg-green-600">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 text-center">
                <div>
                    <div class="font-serif text-5xl text-white mb-2">500+</div>
                    <div class="text-white/80 font-light">Clientes Satisfechos</div>
                </div>
                <div>
                    <div class="font-serif text-5xl text-white mb-2">50+</div>
                    <div class="text-white/80 font-light">Empresas Aliadas</div>
                </div>
                <div>
                    <div class="font-serif text-5xl text-white mb-2">98%</div>
                    <div class="text-white/80 font-light">Tasa de Satisfacción</div>
                </div>
                <div>
                    <div class="font-serif text-5xl text-white mb-2">10+</div>
                    <div class="text-white/80 font-light">Años de Experiencia</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-32 bg-blue-900">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="font-serif text-5xl md:text-6xl text-white mb-6">¿Quieres ser nuestro cliente?</h2>
            <p class="text-white/80 text-xl font-light leading-relaxed mb-10">
                Únete a cientos de empresas que ya disfrutan de nuestros productos y servicios de primera calidad.
            </p>
            <a href="contacto.php" class="inline-block px-12 py-5 bg-green-600 text-white font-medium hover:bg-green-700 transition-all duration-300 rounded-full">
                Contáctanos
            </a>
        </div>
    </section>

<?php include 'footer.php'; ?>
