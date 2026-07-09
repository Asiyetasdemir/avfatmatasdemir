<?php
/*
Template Name: Bize Ulaşın Sayfası Şablonu
*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page-hero hero-bize-ulasin">
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
            <div class="contact-grid">
                <!-- Left Column (Contact Info) -->
                <div class="contact-info-col">
                    <div class="contact-header-block">
                        <span class="section-subtitle">Hakkımızda</span>
                        <h2 class="section-title" style="margin-bottom: 24px; text-align: left;">İletişim Bilgileri</h2>
                    </div>
                    
                    <div class="contact-intro-text">
                        <p style="font-size: 1.15rem; color: var(--color-text-dark); margin-bottom: 24px; line-height: 1.8;">“Hukuki süreçlerinizde güvenilir ve şeffaf hizmet sunmak için bizimle iletişime geçebilirsiniz. Bize ulaştığınızda en kısa sürede dönüş yapıyoruz.”</p>
                        <div class="contact-legal-warning">
                            <strong>BİLGİLENDİRME:</strong> Avukatın her çeşit mesleki faaliyetinde olduğu gibi, <span style="text-decoration: underline;"><strong>avukata yazılı ve sözlü olarak danışmak da ücrete tabi olup;</strong></span> bu ücretin Avukatlık Asgari Ücret Tarifesinin Birinci Kısmının Birinci Bölümünde yer alan ücret çizelgesinde yazılı miktardan az olmamak üzere danışan taraftan tahsil edilmesi 1136 Sayılı Avukatlık Kanunun 163’üncü maddeleri uyarınca <strong>KANUNİ ZORUNLULUKTUR.</strong>
                        </div>
                    </div>
                    
                    <div class="contact-detail-items">
                        <div class="contact-detail-item">
                            <span class="item-subtitle">Adres</span>
                            <h3 class="item-title">Hacıhalil Mahallesi Hükümet Caddesi No:69 Kocaeli/Türkiye</h3>
                        </div>
                        <div class="contact-detail-item">
                            <span class="item-subtitle">E-Posta</span>
                            <h3 class="item-title"><a href="mailto:avfatmatasdemir@gmail.com">avfatmatasdemir@gmail.com</a></h3>
                        </div>
                        <div class="contact-detail-item">
                            <span class="item-subtitle">Çalışma Saatleri</span>
                            <h3 class="item-title">8:30 AM - 6:00 PM ; Haftaiçi Her Gün</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column (Google Map) -->
                <div class="contact-map-col">
                    <div class="contact-map-wrapper">
                        <iframe src="https://maps.google.com/maps?q=%C4%B0zmit%20Kocaeli&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
