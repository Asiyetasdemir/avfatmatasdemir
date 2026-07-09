document.addEventListener('DOMContentLoaded', () => {
    // --- Mobile Navigation Menu ---
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');
    const overlay = document.createElement('div');
    overlay.className = 'elementskit-menu-overlay';
    document.body.appendChild(overlay);

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            mainNav.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.classList.toggle('overflow-hidden');
        });

        // Close menu when clicking overlay
        overlay.addEventListener('click', () => {
            menuToggle.classList.remove('active');
            mainNav.classList.remove('active');
            overlay.classList.remove('active');
            document.body.classList.remove('overflow-hidden');
        });

        // Close menu when clicking a link
        const navLinks = mainNav.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                overlay.classList.remove('active');
                document.body.classList.remove('overflow-hidden');
            });
        });
    }

    // --- Header Scrolled Effect ---
    const header = document.getElementById('siteHeader');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // --- Video Modal Popup ---
    const playVideoBtn = document.getElementById('playVideoBtn');
    const videoModal = document.getElementById('videoModal');
    const closeVideo = document.getElementById('closeVideo');
    const popupVideo = document.getElementById('popupVideo');

    if (playVideoBtn && videoModal && closeVideo && popupVideo) {
        playVideoBtn.addEventListener('click', () => {
            videoModal.classList.add('active');
            popupVideo.play();
        });

        const handleClose = () => {
            videoModal.classList.remove('active');
            popupVideo.pause();
            popupVideo.currentTime = 0; // reset video to start
        };

        closeVideo.addEventListener('click', handleClose);
        
        // Close modal when clicking outside of content
        videoModal.addEventListener('click', (e) => {
            if (e.target === videoModal) {
                handleClose();
            }
        });
    }

    // --- Quote Slider ---
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.querySelector('.slider-dots');
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0) {
        // Generate dots if container is present
        if (dotsContainer) {
            slides.forEach((_, index) => {
                const dot = document.createElement('div');
                dot.className = `dot ${index === 0 ? 'active' : ''}`;
                dot.addEventListener('click', () => {
                    goToSlide(index);
                    resetInterval();
                });
                dotsContainer.appendChild(dot);
            });
        }

        const dots = document.querySelectorAll('.dot');

        function goToSlide(n) {
            slides[currentSlide].classList.remove('active');
            if (dots.length > currentSlide) {
                dots[currentSlide].classList.remove('active');
            }
            
            currentSlide = (n + slides.length) % slides.length;
            
            slides[currentSlide].classList.add('active');
            if (dots.length > currentSlide) {
                dots[currentSlide].classList.add('active');
            }
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function startInterval() {
            slideInterval = setInterval(nextSlide, 2000); // Change slide every 2 seconds
        }

        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        // Initialize
        startInterval();

        // Arrow Controls
        const prevBtn = document.getElementById('prevSlide');
        const nextBtn = document.getElementById('nextSlide');
        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                goToSlide(currentSlide - 1);
                resetInterval();
            });
            nextBtn.addEventListener('click', () => {
                goToSlide(currentSlide + 1);
                resetInterval();
            });
        }
    }

    // --- Mobile Parallax Effect ---
    const parallaxElements = document.querySelectorAll('.page-hero, .hero-section, .post-header, .disclaimer-section');
    if (parallaxElements.length > 0) {
        function runParallax() {
            if (window.innerWidth <= 1024) {
                const scrollY = window.pageYOffset || document.documentElement.scrollTop;
                parallaxElements.forEach(el => {
                    const rect = el.getBoundingClientRect();
                    const elemTop = rect.top + scrollY;
                    const viewHeight = window.innerHeight;
                    
                    if (rect.top < viewHeight && rect.bottom > 0) {
                        const scrolledOffset = scrollY - (elemTop - viewHeight);
                        const speed = 0.25; // Smooth parallax speed
                        const yPos = -(scrolledOffset * speed);
                        
                        el.style.backgroundPosition = `center ${yPos}px`;
                    }
                });
            } else {
                // Clear inline style so native CSS fixed attachment takes over on desktop
                parallaxElements.forEach(el => {
                    el.style.backgroundPosition = '';
                });
            }
        }
        
        window.addEventListener('scroll', runParallax, { passive: true });
        window.addEventListener('resize', runParallax, { passive: true });
        runParallax();
    }
});
