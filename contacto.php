<?php
$page_title = 'Contacto - PremiumPlas';
$current_page = 'contacto';
?>

<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 rounded-[24px] mx-2 mt-4" style="background-image: url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1920&q=80'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-blue-900/60"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-32 text-center">
            <span class="text-white/80 font-light tracking-widest uppercase text-sm">Contáctanos</span>
            <h1 class="font-serif text-6xl md:text-7xl lg:text-8xl text-white mt-4 mb-6">Escríbenos</h1>
        </div>
    </section>

    <!-- CONTACTO -->
    <section class="py-32 bg-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Información de Contacto -->
                <div>
                    <div class="text-center mb-12">
                        <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Información</span>
                        <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Datos de Contacto</h2>
                        <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                    </div>
                    
                    <div class="space-y-8">
                        <!-- Dirección -->
                        <div class="flex items-start bg-white p-8 shadow-lg rounded-[24px] hover:shadow-xl smooth-transition">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-serif text-2xl text-gray-700 mb-2">Dirección</h3>
                                <p class="text-gray-600 font-light">Av. Principal 1234<br>Ciudad, Ecuador</p>
                            </div>
                        </div>
                        
                        <!-- Teléfono -->
                        <div class="flex items-start bg-white p-8 shadow-lg rounded-[24px] hover:shadow-xl smooth-transition">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                <i class="fas fa-phone text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-serif text-2xl text-gray-700 mb-2">Teléfono</h3>
                                <p class="text-gray-600 font-light">+593 (XX) XXX XXXX<br>+593 (XX) XXX XXXX</p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start bg-white p-8 shadow-lg rounded-[24px] hover:shadow-xl smooth-transition">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                <i class="fas fa-envelope text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-serif text-2xl text-gray-700 mb-2">Email</h3>
                                <p class="text-gray-600 font-light">info@premiumplas.com<br>ventas@premiumplas.com</p>
                            </div>
                        </div>
                        
                        <!-- Horario -->
                        <div class="flex items-start bg-white p-8 shadow-lg rounded-[24px] hover:shadow-xl smooth-transition">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                <i class="fas fa-clock text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-serif text-2xl text-gray-700 mb-2">Horario de Atención</h3>
                                <p class="text-gray-600 font-light">Lunes - Viernes: 8:00 - 18:00 hrs<br>Sábados: 9:00 - 13:00 hrs</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Formulario de Contacto -->
                <div>
                    <div class="text-center mb-12">
                        <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Escríbenos</span>
                        <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Formulario de Contacto</h2>
                        <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                    </div>
                    
                    <form class="bg-white p-10 shadow-lg rounded-[24xl]">
                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <!-- Nombre -->
                            <div class="input-group">
                                <label class="block text-gray-700 font-medium mb-2">Nombre Completo *</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-green-600" placeholder="Tu nombre" required>
                            </div>
                            
                            <!-- Empresa -->
                            <div class="input-group">
                                <label class="block text-gray-700 font-medium mb-2">Empresa</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-green-600" placeholder="Tu empresa">
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <!-- Email -->
                            <div class="input-group">
                                <label class="block text-gray-700 font-medium mb-2">Email *</label>
                                <input type="email" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-green-600" placeholder="tu@email.com" required>
                            </div>
                            
                            <!-- Teléfono -->
                            <div class="input-group">
                                <label class="block text-gray-700 font-medium mb-2">Teléfono</label>
                                <input type="tel" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-green-600" placeholder="+593 ...">
                            </div>
                        </div>
                        
                        <!-- Asunto -->
                        <div class="input-group mb-8">
                            <label class="block text-gray-700 font-medium mb-2">Asunto *</label>
                            <select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-green-600" required>
                                <option value="">Selecciona un asunto</option>
                                <option value="cotizacion">Solicitud de Cotización</option>
                                <option value="informacion">Información de Productos</option>
                                <option value="pedidos">Estado de Pedidos</option>
                                <option value="sugerencias">Sugerencias</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>
                        
                        <!-- Mensaje -->
                        <div class="input-group mb-8">
                            <label class="block text-gray-700 font-medium mb-2">Mensaje *</label>
                            <textarea class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-green-600 h-40 resize-none" placeholder="Escribe tu mensaje aquí..." required></textarea>
                        </div>
                        
                        <!-- Submit -->
                        <button type="submit" class="w-full px-8 py-4 bg-green-600 text-white font-medium text-lg rounded-full hover:bg-green-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MAPA -->
    <section class="py-0 bg-gray-50">
        <div class="w-full h-96">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8144567890123!2d-78.5!3d-2.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMsKwMCcwLjAiTiA3OMKwMjkuNzkiihuZXRyb3BvbGlzKQ!5e0!3m2!1ses!2sec!4v0000000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

<?php include 'footer.php'; ?>
