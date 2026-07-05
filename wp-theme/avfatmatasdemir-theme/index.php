<?php get_header(); ?>

<div class="page-hero hero-blog">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <h1>Blog Yazıları</h1>
        <div class="breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>">Anasayfa</a> &raquo; <span>Blog Yazıları</span>
        </div>
    </div>
</div>

<section style="background-color: var(--bg-cream);">
    <div class="container">
        <span class="section-subtitle">Paylaşımlar</span>
        <h2 class="section-title">Hukuk ve Toplum Üzerine Yazılar</h2>
        <div class="blog-page-list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog-page-card">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="blog-page-date"><?php echo get_the_date(); ?></span>
                    <p><?php echo wp_trim_words(get_the_content(), 45); ?></p>
                    <a href="<?php the_permalink(); ?>" class="blog-page-link">Daha fazlası</a>
                </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e('Henüz yazı eklenmemiş.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Quote Slider Section -->
<section class="quote-slider-section">
    <div class="container">
        <div class="slider-wrapper">
            <button class="slider-arrow prev" id="prevSlide" aria-label="Önceki">&#10094;</button>
            <div class="slide active">
                <img class="quote-icon" src="<?php echo get_template_directory_uri(); ?>/assets/quote.png" alt="Quote">
                <div class="slide-quote">”Devletin dini adalettir.”</div>
                <div class="slide-author">Yusuf Has Hacib, Kutadgu Bilig</div>
                <img class="slider-profile-img" src="<?php echo get_template_directory_uri(); ?>/assets/IMG_7449-scaled-e1758066392971.jpg" alt="Fatma Taşdemir">
                <div class="slider-profile-name">Fatma Taşdemir</div>
                <div class="slider-profile-role">Avukat</div>
            </div>
            <div class="slide">
                <img class="quote-icon" src="<?php echo get_template_directory_uri(); ?>/assets/quote.png" alt="Quote">
                <div class="slide-quote">”Bir yerde adalet yoksa, orada hukuk da yoktur.”</div>
                <div class="slide-author">Montesquieu</div>
                <img class="slider-profile-img" src="<?php echo get_template_directory_uri(); ?>/assets/IMG_7449-scaled-e1758066392971.jpg" alt="Fatma Taşdemir">
                <div class="slider-profile-name">Fatma Taşdemir</div>
                <div class="slider-profile-role">Avukat</div>
            </div>
            <div class="slide">
                <img class="quote-icon" src="<?php echo get_template_directory_uri(); ?>/assets/quote.png" alt="Quote">
                <div class="slide-quote">”Adalet devletin amacı değil, varlık sebebidir.”</div>
                <div class="slide-author">Aristotales</div>
                <img class="slider-profile-img" src="<?php echo get_template_directory_uri(); ?>/assets/IMG_7449-scaled-e1758066392971.jpg" alt="Fatma Taşdemir">
                <div class="slider-profile-name">Fatma Taşdemir</div>
                <div class="slider-profile-role">Avukat</div>
            </div>
            <button class="slider-arrow next" id="nextSlide" aria-label="Sonraki">&#10095;</button>
        </div>
    </div>
</section>

<?php get_footer(); ?>
