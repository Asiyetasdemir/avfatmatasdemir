<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container hero-container">
        <!-- Overlay menu and transparent header sit on top of this -->
    </div>
</section>

<!-- Biography Section -->
<section class="biography-section">
    <div class="container">
        <div class="biography-grid">
            <div class="bio-image-col">
                <!-- Background portrait image applied here -->
            </div>
            <div class="bio-text-col">
                <span class="section-subtitle">Biyografi</span>
                <h2 class="section-title">Fatma Taşdemir Kimdir?</h2>
                <p>2013 yılında Kocaeli Üniversitesi Hukuk Fakültesi’nden mezun oldum ve 2014 yılında zorunlu avukatlık stajımı tamamlayarak aktif olarak mesleğime başladım. O tarihten bu yana ağırlıklı olarak Aile Hukuku, Ceza Hukuku ve İş Hukuku alanlarında çalışmaktayım.</p>
                <p>Hukukun sadece kanun metinlerinden ibaret olmadığına; aksine insanı, toplumu ve hayatın bütününü kapsayan bir disiplin olduğuna inanıyorum. Psikoloji ve sosyolojiye duyduğum derin ilgi, davaların sadece teknik hukuki süreçlerini değil, müvekkillerimin yaşadığı psikolojik ve sosyal boyutları da gözetmemi sağlıyor. Yıllar içinde, doğru stratejiler geliştirmede ve müvekkillerimin kendilerini gerçekten anlaşılmış hissetmelerini sağlamada bu bütünsel yaklaşımın ne kadar değerli olduğuna defalarca tanık oldum. Benim için her dava sadece bir dosya değil, bir insanın hayatına dokunan gerçek bir hikayedir. Bu bilinçle, hukuku adaletin bir aracı olarak görüyor ve müvekkillerimin haklarını en etkili şekilde savunmayı temel ilkem sayıyorum. Mesleğimi tutku, özen and derin bir sorumluluk duygusuyla sürdürmeye devam ediyorum.</p>
                <img class="signature-img" src="<?php echo get_template_directory_uri(); ?>/assets/Av.-Fatma-Tasdemir-e1758055848551.jpg" alt="Fatma Taşdemir İmza">
            </div>
        </div>
    </div>
</section>

<!-- Tech & Experience Section -->
<section class="experience-section">
    <div class="container">
        <span class="section-subtitle">daha fazla</span>
        <h2 class="section-title">Yılların Deneyimi ve Tecrübe</h2>
        <div class="experience-grid">
            <div class="exp-col">
                <div class="exp-image-box image-1"></div>
                <p>Yılların getirdiği bilgi ve deneyimle, her bir müvekkilimize en doğru hukuki çözümleri sunmayı temel ilkemiz haline getirdik. Hukukun temel değerlerinden ödün vermeden, her dava dosyasını titizlikle inceliyor ve adalet arayışında güvenilir bir yol arkadaşı olmaya devam ediyoruz. Bizimle hukuk sadece bir meslek değil; hayatın tam merkezinde yer alan derin bir sorumluluk ve köklü bir değerdir.</p>
            </div>
            <div class="exp-col">
                <div class="exp-image-box image-2"></div>
                <p>Uzmanlığımız sadece geçmiş deneyimlerimizle sınırlı değildir. Stratejik yaklaşımımız, öngörümüz ve müvekkillerimizle kurduğumuz güven ilişkisiyle daha da güçlenmektedir. Her bir müvekkilimizin haklarını en iyi şekilde savunmak adına güncel hukuki gelişmeleri yakından takip ediyor, uzmanlığımızı sürekli geliştiriyor ve adaletin tecelli etmesi için tüm gücümüzle çalışıyoruz.</p>
                <img class="signature-img" src="<?php echo get_template_directory_uri(); ?>/assets/Av.-Fatma-Tasdemir-e1758055848551.jpg" alt="Fatma Taşdemir İmza">
            </div>
        </div>
    </div>
</section>

<!-- Trust Section with Video Popup -->
<section class="trust-section">
    <div class="trust-overlay"></div>
    <div class="container trust-container">
        <div class="trust-grid">
            <div class="trust-text-block">
                <h2>Avukatınıza Daima Güvenin</h2>
                <p>Avukatınıza güvenin ve gerçeği paylaşın; çünkü en güçlü savunma, mutlak gerçekler üzerine inşa edilir. Unutmayın, avukatınız sizin en büyük sırdaşınız ve yol arkadaşınızdır. Paylaştığınız her bilgi, avukat-müvekkil gizliliği kapsamında kesin bir şekilde korunmaktadır.</p>
            </div>
            <div class="trust-video-block">
                <button class="video-play-btn" id="playVideoBtn" aria-label="Video Oynat">
                    <span class="play-icon">&#9658;</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Why Attorney Section -->
<section class="why-attorney-section">
    <div class="container narrow-container">
        <span class="section-subtitle">bize ulaşın</span>
        <h2>Neden Avukat Desteği Almanız Gerekiyor?</h2>
        <p>Bir davanın açılması, sadece tarafların iddialarına ve haklılıklarına değil; yasal gerekliliklere, usul kurallarına ve delillerin yeterliliğine de bağlıdır. Bir avukat tarafından sunulan “dava açma olasılığı görüşü” (hukuki mütalaa), bir uyuşmazlığın mahkemeye taşınıp taşınamayacağını, yasal parametreleri, hangi koşullar altında başarıya ulaşılabileceğini ve olası riskleri net bir şekilde ortaya koyar. Bu sayede hem müvekkil hem de hukuki süreç, gereksiz zaman ve maliyet kayıplarından korunmuş olur.</p>
        <div style="margin-top: 30px;">
            <a href="<?php echo esc_url(home_url('/bize-ulasin')); ?>" class="btn-gold">İletişime Geçmek İçin Tıklayın</a>
        </div>
    </div>
</section>

<!-- Featured Blogs Section -->
<section class="home-blog-section">
    <div class="home-blog-overlay"></div>
    <div class="container home-blog-container">
        <h2 class="home-blog-section-title">Blog Yazıları</h2>
        <div class="home-blog-grid">
            <?php
            $query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 4
            ));
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="home-blog-box">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="home-blog-date"><?php echo get_the_date(); ?></span>
                    <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                    <a href="<?php the_permalink(); ?>" class="home-blog-link">Daha fazlası</a>
                </div>
            <?php
            endwhile; wp_reset_postdata();
            else :
            ?>
                <p style="color: white; text-align: center; width: 100%; grid-column: 1/-1;"><?php esc_html_e('Henüz blog yazısı eklenmemiş.'); ?></p>
            <?php endif; ?>
        </div>
        <div class="home-blog-footer">
            <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="btn-gold-outline">Tümünü Gör</a>
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

<!-- Bir Sorunuz Mu Var? (CTA Section) -->
<section class="cta-question-section">
    <div class="container">
        <div class="cta-question-grid">
            <div class="cta-question-image-col">
                <!-- Background image assets/img4.jpg with border-radius: 0 0 0 120px -->
            </div>
            <div class="cta-question-text-col">
                <h2>Bir sorunuz mu var?</h2>
                <p>Hukuki süreçleriniz boyunca yanınızda olmak ve en doğru çözümleri sunmak için buradayız. Sorularınız ve danışmanlık talepleriniz için bizimle dilediğiniz zaman iletişime geçebilirsiniz.</p>
                <a href="<?php echo esc_url(home_url('/bize-ulasin')); ?>" class="btn-gold">Bizimle İletişime Geçin</a>
            </div>
        </div>
    </div>
</section>

<!-- Disclaimer Section -->
<section class="disclaimer-section">
    <div class="disclaimer-overlay"></div>
    <div class="container">
        <p>Bu web sitesi yalnızca genel bilgilendirme amacıyla hazırlanmıştır. Hukuk mesleğinin meslek etik ilkelerine ve Türkiye Barolar Birliği’nin Reklam Yasağı Yönetmeliği’ne kesin bir şekilde uyumlu olarak yapılandırılmıştır. Burada yer alan hiçbir içerik; reklam, ticari davet veya müvekkil edinme amacı taşımamaktadır. Ayrıca, bu sitede sunulan bilgiler hukuki danışmanlık teşkil etmez; her somut olay ayrı bir değerlendirme gerektirdiğinden, profesyonel bir hukuki yardım alınması önemle tavsiye edilir.</p>
    </div>
</section>

<?php get_footer(); ?>
