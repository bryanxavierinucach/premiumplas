<?php
$page_title = 'Blog - PremiumPlas';
$current_page = 'blog';

$api_url = 'https://cms.premiumplas.com/wp-json/wp/v2/posts?_embed&per_page=9';

$response = false;
$http_code = 0;

if (function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => 'Mozilla/5.0',
    ]);
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
}

$posts = ($response !== false && $http_code === 200) ? json_decode($response) : [];
?>

<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 rounded-[24px] mx-2 mt-4" style="background-image: url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1920&q=80'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-blue-900/60"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-32 text-center">
            <span class="text-white/80 font-light tracking-widest uppercase text-sm">Noticias y Consejos</span>
            <h1 class="font-serif text-6xl md:text-7xl lg:text-8xl text-white mt-4 mb-6">Nuestro Blog</h1>
        </div>
    </section>

    <!-- BLOG -->
    <section class="py-32 bg-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text-amber-600 font-medium tracking-widest uppercase text-sm">Últimas Publicaciones</span>
                <h2 class="font-serif text-5xl md:text-6xl text-gray-700 mt-4 mb-6">Artículos Destacados</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <?php if (empty($posts)): ?>
                <!-- Error State -->
                <div class="text-center py-16">
                    <div class="w-24 h-24 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-exclamation-triangle text-red-600 text-3xl"></i>
                    </div>
                    <h3 class="font-serif text-3xl text-gray-700 mb-4">No se pudo cargar el contenido</h3>
                    <p class="text-gray-600 font-light mb-8">
                        <?php if ($http_code !== 200): ?>
                            Código de error: <?php echo $http_code; ?>
                        <?php else: ?>
                            Estamos experimentando problemas técnicos.
                        <?php endif; ?>
                    </p>
                    <button onclick="window.location.reload()" class="px-8 py-3 bg-green-600 text-white font-medium rounded-full hover:bg-green-700 transition-colors duration-300">
                        Reintentar
                    </button>
                </div>
            
            <?php else: ?>
                <!-- Posts Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <?php foreach ($posts as $post): ?>
                        <?php
                        // Title
                        $title = isset($post->title->rendered) ? $post->title->rendered : 'Sin título';
                        
                        // Featured Image
                        $featured_image = 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&q=80';
                        if (isset($post->_embedded->{'wp:featuredmedia'}[0]->source_url)) {
                            $featured_image = $post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                        }
                        
                        // Category
                        $category = 'Blog';
                        if (isset($post->_embedded->{'wp:term'}[0][0]->name)) {
                            $category = $post->_embedded->{'wp:term'}[0][0]->name;
                        }
                        
                        // Excerpt
                        $excerpt = isset($post->excerpt->rendered) ? strip_tags($post->excerpt->rendered) : '';
                        $excerpt = substr($excerpt, 0, 100) . '...';
                        
                        // Date
                        $date = isset($post->date) ? date('d F, Y', strtotime($post->date)) : '';
                        
                        // Link (clean URL)
                        $slug = isset($post->slug) ? $post->slug : '';
                        $link = $slug ? "blog/{$slug}" : '#';
                        ?>
                        
                        <!-- Article Card -->
                        <article class="bg-white shadow-lg overflow-hidden rounded-[24px] hover:shadow-xl transition-shadow duration-300">
                            <div class="h-56 bg-gray-100 relative overflow-hidden">
                                <img src="<?php echo $featured_image; ?>" alt="<?php echo $title; ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                                <?php if ($category): ?>
                                    <div class="absolute top-4 left-4 bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                                        <?php echo $category; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-6">
                                <?php if ($date): ?>
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <i class="far fa-calendar mr-2"></i>
                                        <span><?php echo $date; ?></span>
                                    </div>
                                <?php endif; ?>
                                <h3 class="font-serif text-2xl text-gray-700 mb-3"><?php echo $title; ?></h3>
                                <?php if ($excerpt): ?>
                                    <p class="text-gray-600 font-light mb-4"><?php echo $excerpt; ?></p>
                                <?php endif; ?>
                                <a href="<?php echo $link; ?>" class="inline-flex items-center text-green-600 font-medium hover:text-green-700 transition-colors duration-300">
                                    Leer más <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                
                <!-- Ver más -->
                <div class="text-center mt-16">
                    <a href="https://cms.premiumplas.com/blog" target="_blank" class="inline-block px-10 py-4 bg-green-600 text-white font-medium hover:bg-green-700 transition-all duration-300 rounded-full shadow-lg hover:shadow-xl">
                        Ver Más Artículos
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php include 'footer.php'; ?>
