<?php
/*
Template Name: Hakkımızda Sayfası Şablonu
*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page-hero hero-hakkimizda">
        <div class="page-hero-overlay"></div>
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <div class="breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>">Anasayfa</a> &raquo; <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>

    <section style="background-color: var(--bg-cream); padding: 80px 0;">
        <div class="container">
            <div class="hakkimizda-content-wrapper">
                <?php the_content(); ?>
                
                <h3 style="font-family: var(--font-serif); font-size: 2rem; color: var(--color-gold); margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 1px solid var(--color-cream-light); padding-bottom: 10px;">UZMANLIK ALANLARIM</h3>
                
                <div class="hakkimizda-block">
                    <h4 class="hakkimizda-subheading">Aile Hukuku</h4>
                    <p>Avukatlık meslek yolculuğumun en önemli duraklarından biri aile hukuku oldu. Çünkü aile, toplumun en küçük ama en güçlü yapı taşıdır. Aile içindeki çatışmalar yalnızca hukuki bir mesele değil, çoğu zaman derin duygusal boyutları da olan süreçlerdir. Bu nedenle;</p>
                    <ul class="hakkimizda-list">
                        <li>Boşanma davaları,</li>
                        <li>Velayet ve nafaka düzenlemeleri,</li>
                        <li>Kişisel ilişki tesisi,</li>
                        <li>Mal rejimi uyuşmazlıkları</li>
                    </ul>
                    <p>konularında, sadece hukukun gereklerini yerine getirmekle yetinmem; aynı zamanda müvekkillerimin yaşamlarının en hassas dönemlerinde yanlarında olurum. Burada önceliğim, yıpratıcı süreçleri mümkün olduğunca güvenli, sağlıklı ve adil bir şekilde yönetmektir.</p>
                </div>

                <div class="hakkimizda-block">
                    <h4 class="hakkimizda-subheading">Ceza Hukuku</h4>
                    <p>Ceza hukuku, insanın özgürlüğüyle doğrudan bağlantılı en ciddi alanlardan biridir. Bu alanda yapılan her savunma, sadece bir müvekkili değil, aynı zamanda adaletin temelini ilgilendirir. Ceza davalarında müvekkilimin haklarını kararlılıkla savunurken, masumiyet karinesinin ve adil yargılanma hakkının en güçlü şekilde korunmasına önem veririm. Çünkü bir insanın özgürlüğü, hukukta en kıymetli emanetlerden biridir.</p>
                </div>

                <div class="hakkimizda-block">
                    <h4 class="hakkimizda-subheading">İş Hukuku</h4>
                    <p>Modern hayatın en önemli alanlarından biri çalışma hayatıdır. İşçi ve işveren arasındaki denge, toplumsal huzurun da temelidir. Müvekkillerimin hak ettikleri emeğin karşılığını almaları ve iş hukukunun öngördüğü adil dengenin korunması, bu alandaki çalışmalarımın merkezindedir.</p>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
