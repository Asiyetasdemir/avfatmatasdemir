<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container">
            <div>
                <a href="mailto:avfatmatasdemir@gmail.com">
                    <svg style="width: 14px; height: 14px; fill: currentColor; vertical-align: middle;" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                    avfatmatasdemir@gmail.com
                </a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="site-header transparent-header" id="siteHeader">
        <div class="container">
            <div class="logo-wrapper">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center; gap: 16px;">
                    <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/Black-Gold-Elegant-Lawyer-Firm-Business-Card-1-3.png" alt="Avukat Fatma Taşdemir Logo">
                    <div class="logo-text">
                        <h2>Av. FATMA TAŞDEMİR</h2>
                        <span>Kocaeli Barosu</span>
                    </div>
                </a>
            </div>
            <button class="menu-toggle" id="menuToggle" aria-label="Menü">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="main-nav" id="mainNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => false
                ));
                ?>
            </nav>
        </div>
    </header>
