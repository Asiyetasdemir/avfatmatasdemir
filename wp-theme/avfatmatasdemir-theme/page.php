<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $hero_class = 'hero-fallback';
    $post_name = get_post_field('post_name', get_the_ID());
    if ($post_name === 'hakkmizda' || $post_name === 'hakkimizda') {
        $hero_class = 'hero-hakkimizda';
    } elseif ($post_name === 'uzmanlik-alanlarimiz' || $post_name === 'uzmanlik') {
        $hero_class = 'hero-uzmanlik';
    } elseif ($post_name === 'blog-yazilari' || $post_name === 'blog') {
        $hero_class = 'hero-blog';
    } elseif ($post_name === 'bize-ulasin') {
        $hero_class = 'hero-bize-ulasin';
    }
    ?>
    <div class="page-hero <?php echo $hero_class; ?>">
        <div class="page-hero-overlay"></div>
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <div class="breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>">Anasayfa</a> &raquo; <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>

    <section style="background-color: var(--bg-cream);">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
