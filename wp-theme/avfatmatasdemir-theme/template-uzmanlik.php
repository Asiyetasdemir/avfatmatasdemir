<?php
/*
Template Name: Uzmanlık Alanları Listesi Şablonu
*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page-hero hero-uzmanlik">
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
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="section-subtitle">SERVICES</span>
                <h2 class="section-title">GENEL HUKUKİ BİLGİLER</h2>
                <p style="color: var(--color-text-muted); max-width: 800px; margin: 0 auto; font-size: 1.05rem;">
                    Bu sayfadaki bilgiler hukuki meselelerde genel bilgilendirme ve rehberlik amacıyla sunulmuş olup; resmi bir hukuki danışmanlık niteliği taşımaz.
                </p>
            </div>
            
            <div class="uzmanlik-row">
                <!-- Card 1 -->
                <div class="uzmanlik-col">
                    <a href="<?php echo esc_url(home_url('/uzmanlik/bosanma/')); ?>" class="uzmanlik-img-link">
                        <img class="uzmanlik-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i1.png" alt="Aile Hukuku İkon">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/uzmanlik/bosanma/')); ?>">Boşanma Davalarında Yetkili Mahkemenin Belirlenmesi İkametgah mı ? Yerleşim Yeri mi?</a></h3>
                    <p>Boşanma ve ayrılık davalarında yetkili mahkeme, Türk Medeni Kanunu'nun 168.maddesinde düzenlenmiştir.</p>
                    <a href="<?php echo esc_url(home_url('/uzmanlik/bosanma/')); ?>" class="uzmanlik-more-link">daha fazlası</a>
                </div>
                <!-- Card 2 -->
                <div class="uzmanlik-col">
                    <a href="<?php echo esc_url(home_url('/uzmanlik/bosanmada-velayet-belirlenirken-dikkate-alinan-kriterler-nelerdir/')); ?>" class="uzmanlik-img-link">
                        <img class="uzmanlik-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i2.png" alt="Velayet İkon">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/uzmanlik/bosanmada-velayet-belirlenirken-dikkate-alinan-kriterler-nelerdir/')); ?>">Boşanmada Velayet Belirlenirken Dikkate Alınan Kriterler Nelerdir ?</a></h3>
                    <p>Boşanma sürecinde en hassas konulardan biri müşterek çocukların velayetidir. Türk Medeni Kanunu’na göre velayet düzenlemesi yapılırken esas alınan temel ölçüt “çocuğun üstün yararı” ilkesidir.</p>
                    <a href="<?php echo esc_url(home_url('/uzmanlik/bosanmada-velayet-belirlenirken-dikkate-alinan-kriterler-nelerdir/')); ?>" class="uzmanlik-more-link">daha fazlası</a>
                </div>
                <!-- Card 3 -->
                <div class="uzmanlik-col">
                    <a href="<?php echo esc_url(home_url('/uzmanlik/tedbir-istirak-ve-yoksulluk-nafakasi-arasindaki-farklar-nelerdir/')); ?>" class="uzmanlik-img-link">
                        <img class="uzmanlik-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i3.png" alt="Nafaka İkon">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/uzmanlik/tedbir-istirak-ve-yoksulluk-nafakasi-arasindaki-farklar-nelerdir/')); ?>">Tedbir, İştirak ve Yoksulluk Nafakası Arasındaki Farklar Nelerdir?</a></h3>
                    <p>Boşanma davalarında karşımıza çıkan en sık kavramlardan biri de nafakadır. Boşanma davaları sürecinde ve sonrasında, tarafların ve çocukların korunması amacıyla farklı nafaka türleri düzenlenmiştir.</p>
                    <a href="<?php echo esc_url(home_url('/uzmanlik/tedbir-istirak-ve-yoksulluk-nafakasi-arasindaki-farklar-nelerdir/')); ?>" class="uzmanlik-more-link">daha fazlası</a>
                </div>
            </div>
            
            <div class="uzmanlik-row" style="margin-top: 50px;">
                <!-- Card 4 -->
                <div class="uzmanlik-col">
                    <a href="<?php echo esc_url(home_url('/uzmanlik/bosanmada-kusur-kavrami-ve-onemi/')); ?>" class="uzmanlik-img-link">
                        <img class="uzmanlik-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/i3.png" alt="Kusur İkon">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/uzmanlik/bosanmada-kusur-kavrami-ve-onemi/')); ?>">Boşanmada Kusur Kavramı ve Önemi</a></h3>
                    <p>Boşanma davalarının en önemli unsurlarından biri kusur kavramıdır. Türk Medeni Kanunu’na göre boşanma, eşlerden birinin ya da her ikisinin evlilik birliğini temelinden sarsacak nitelikteki davranışları sebebiyle talep edilebilir.</p>
                    <a href="<?php echo esc_url(home_url('/uzmanlik/bosanmada-kusur-kavrami-ve-onemi/')); ?>" class="uzmanlik-more-link">daha fazlası</a>
                </div>
                <div class="uzmanlik-col empty"></div>
                <div class="uzmanlik-col empty"></div>
            </div>
            
            <?php the_content(); ?>
        </div>
    </section>

    <!-- Any Questions CTA Section -->
    <section class="cta-uzmanlik-section">
        <div class="container">
            <h2>Herhangi Bir Sorunuz Var Mı?</h2>
            <p>Hukuki süreçlerinizde yanınızda olup, size en doğru çözümleri sunmak için buradayız. Sorularınız ve danışmanlık talepleriniz için bizimle dilediğiniz zaman iletişime geçebilirsiniz.</p>
            <a href="<?php echo esc_url(home_url('/bize-ulasin')); ?>" class="btn-gold">Bizimle İletişime Geçin</a>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
