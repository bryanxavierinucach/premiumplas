<?php
$slug = $_GET['slug'] ?? '';

$api_url = "https://cms.premiumplas.com/wp-json/wp/v2/posts?slug={$slug}&_embed";

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

if (empty($posts)) {
    http_response_code(404);
    $page_title = '404 - Página no encontrada';
    $current_page = 'blog';
    $post_exists = false;
} else {
    $post = $posts[0];
    $title = isset($post->title->rendered) ? $post->title->rendered : 'Sin título';
    $content = isset($post->content->rendered) ? $post->content->rendered : '';
    $date = isset($post->date) ? date('d F, Y', strtotime($post->date)) : '';
    $featured_image = '';
    if (isset($post->_embedded->{'wp:featuredmedia'}[0]->source_url)) {
        $featured_image = $post->_embedded->{'wp:featuredmedia'}[0]->source_url;
    }
    $category = 'Blog';
    if (isset($post->_embedded->{'wp:term'}[0][0]->name)) {
        $category = $post->_embedded->{'wp:term'}[0][0]->name;
    }
    $page_title = $title . ' - PremiumPlas';
    $post_exists = true;
}
?>

<?php include 'header.php'; ?>

<?php if (!$post_exists): ?>
    <!-- 404 ERROR -->
    <section class="py-32 bg-cream">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="mb-8">
                <span class="font-serif text-9xl text-green-600">404</span>
            </div>
            <h1 class="font-serif text-5xl text-gray-700 mb-6">Página no encontrada</h1>
            <p class="text-gray-600 text-xl font-light mb-10">
                Lo sentimos, el artículo que buscas no existe o ha sido eliminado.
            </p>
            <a href="blog.php" class="inline-flex items-center px-10 py-4 bg-green-600 text-white font-medium hover:bg-green-700 transition-all duration-300 rounded-full shadow-lg hover:shadow-xl">
                <i class="fas fa-arrow-left mr-3"></i>Volver al Blog
            </a>
        </div>
    </section>

<?php else: ?>
    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 rounded-[24px] mx-2 mt-4" style="background-image: url('<?php echo $featured_image; ?>'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-blue-900/70"></div>
        <div class="relative z-10 max-w-5xl mx-auto px-6 py-32 text-center">
            <?php if ($category): ?>
                <span class="inline-block bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-full mb-6">
                    <?php echo $category; ?>
                </span>
            <?php endif; ?>
            <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl text-white mb-6 leading-tight">
                <?php echo $title; ?>
            </h1>
            <?php if ($date): ?>
                <div class="flex items-center justify-center text-white/80 font-light">
                    <i class="far fa-calendar mr-3"></i>
                    <span><?php echo $date; ?></span>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CONTENIDO DEL POST -->
    <section class="py-24 bg-cream">
        <div class="max-w-4xl mx-auto px-6">
            <article class="bg-white p-10 md:p-16 shadow-lg rounded-[24px]">
                <div class="prose prose-lg prose-stone max-w-none">
                    <?php echo $content; ?>
                </div>
            </article>
            
            <!-- CTA: Volver al blog -->
            <div class="text-center mt-12">
                <a href="blog.php" class="inline-flex items-center px-8 py-4 bg-blue-900 text-white font-medium hover:bg-blue-800 transition-all duration-300 rounded-full">
                    <i class="fas fa-arrow-left mr-3"></i>
                    Ver Más Artículos
                </a>
            </div>
        </div>
    </section>

    <!-- ESTILOS PROSA -->
    <style>
        .prose h1, .prose h2, .prose h3, .prose h4 {
            font-family: 'Cormorant Garamond', serif;
            color: #1e3a5f;
            margin-top: 2em;
            margin-bottom: 1em;
        }
        .prose p {
            font-family: 'Inter', sans-serif;
            color: #4b5563;
            line-height: 1.875;
            margin-bottom: 1.5em;
        }
        .prose a {
            color: #d97706;
            text-decoration: underline;
        }
        .prose a:hover {
            color: #059669;
        }
        .prose img {
            border-radius: 12px;
            margin: 2em 0;
            width: 100%;
            height: auto;
        }
        .prose ul, .prose ol {
            margin: 1.5em 0;
            padding-left: 2em;
        }
        .prose li {
            color: #4b5563;
            margin-bottom: 0.5em;
            line-height: 1.75;
        }
        .prose blockquote {
            border-left: 4px solid #059669;
            padding-left: 1.5em;
            margin: 2em 0;
            font-style: italic;
            color: #6b7280;
        }
        .prose hr {
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 2em 0;
        }
    </style>

<?php endif; ?>

<?php include 'footer.php'; ?>
