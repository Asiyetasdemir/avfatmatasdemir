    <!-- Main Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1 (Left) -->
                <div class="footer-col-nav">
                    <h5 class="footer-col-title"><a href="<?php echo esc_url(home_url('/')); ?>">anasayfa</a></h5>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'footer-icon-list',
                        'fallback_cb' => 'avfatmatasdemir_default_menu'
                    ));
                    ?>
                </div>
                <!-- Column 2 (Right) -->
                <div class="footer-col-social">
                    <h5 class="footer-col-title">sosyal</h5>
                    <div class="footer-social-links">
                        <a href="https://www.instagram.com/av.fatmatasdemir?igsh=ZTZ1bWwwdXU4c2hw&utm_source=qr" class="social-btn instagram" aria-label="Instagram">
                            <svg viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.9c-41.4 0-75-33.6-75-75s33.6-75 75-75 75 33.6 75 75-33.6 75-75 75zm146.2-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM402.5 344.2c-7.2 18-22 32.8-40 40-29.6 11.8-99.9 9.1-134.4 9.1s-104.8 2.7-134.4-9.1c-18-7.2-32.8-22-40-40-11.8-29.6-9.1-99.9-9.1-134.4s-2.7-104.8 9.1-134.4c7.2-18 22-32.8 40-40 29.6-11.8 99.9-9.1 134.4-9.1s104.8-2.7 134.4 9.1c18 7.2 32.8 22 40 40 11.8 29.6 9.1 99.9 9.1 134.4s2.7 104.8-9.1 134.4z"/></svg>
                        </a>
                        <a href="mailto:avfatmatasdemir@gmail.com?subject=Hukuki%20Danışmanlık%20Talebi&body=Merhaba,%20sizinle%20iletişime%20geçmek%20istiyorum." class="social-btn mail" aria-label="Mail">
                            <svg viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Asiye Taşdemir. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <div class="video-modal-content">
            <button class="video-modal-close" id="closeVideo">&times;</button>
            <video id="popupVideo" controls>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/court_video.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
