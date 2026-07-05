<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <div class="post-header">
            <div class="post-header-overlay"></div>
            <div class="container">
                <span class="post-meta"><?php echo get_the_date(); ?> &bull; Hukuk & Adalet</span>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="container">
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
