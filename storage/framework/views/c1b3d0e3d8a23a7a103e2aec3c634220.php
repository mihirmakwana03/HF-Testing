<?php $__env->startSection('title', 'Welcome to HappinessFactors'); ?>
<?php $__env->startSection('subtitle', 'Your Go-To Mental Wellness Solutions'); ?>
<?php $__env->startSection('content-title', 'Welcome to HappinessFactors'); ?>
<?php $__env->startSection('content-subtitle', 'Discover the factors that contribute to happiness and how you can incorporate them into your daily life.'); ?>
<?php $__env->startSection('content-description', 'At HappinessFactors, we believe in the power of positivity and mindfulness. Our mission is to help you discover the key elements that contribute to a happier, more fulfilling life. Join us on this journey and learn how to incorporate these factors into your daily routine.'); ?>
<?php $__env->startSection('content-keywords', 'HappinessFactors, mental wellness, happiness, mindfulness, positivity, emotional wellness, wellness solutions'); ?>
<?php $__env->startSection('content-author', 'HappinessFactors'); ?>
<?php $__env->startSection('description', 'Welcome to HappinessFactors, your go-to mental wellness solutions. Discover the factors that contribute to happiness and how you can incorporate them into your daily life.'); ?>
<?php $__env->startSection('keywords', 'HappinessFactors, mental wellness, happiness, mindfulness, positivity, emotional wellness, wellness solutions'); ?>
<?php $__env->startSection('author', 'HappinessFactors'); ?>
<?php $__env->startSection('og'); ?>
<meta property="og:title" content="Welcome to HappinessFactors" />
<meta property="og:description" content="Discover the factors that contribute to happiness and how you can incorporate them into your daily life." />
<meta property="og:image" content="<?php echo e(asset('assets/img/Logo.png')); ?>" />
<meta property="og:url" content="<?php echo e(url('/')); ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="HappinessFactors" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="en_GB" />
<meta property="og:image:width" content="1200" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
<!-- <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>"> -->
<!-- <link rel="stylesheet" href="<?php echo e(asset('css/animations.css')); ?>"> -->
<!-- Add Jarallax CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/jarallax@2/dist/jarallax.css">
<script src="https://unpkg.com/jarallax@2/dist/jarallax.min.js"></script>
<script src="https://unpkg.com/jarallax@2/dist/jarallax-element.min.js"></script>
<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<!-- New Section -->
<section class="py-5 border-bottom position-relative overflow-hidden">
    <!-- SVG Decorative Line Left -->
    <svg class="bg-line-svg" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: -100px; left: 0; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,150 C100,50 300,250 400,150" fill="none" stroke="rgba(97, 0, 155, 0.3)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Right -->
    <svg class="bg-line-svg-right" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: -100px; right: 0; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M400,150 C300,50 100,250 0,150" fill="none" stroke="rgba(97, 0, 155, 0.3)" stroke-width="4"></path>
    </svg>
    <!-- Decorative Elements -->
    <div class="decorative-shape shape-left d-none d-lg-block"></div>
    <div class="decorative-shape shape-right d-none d-lg-block"></div>

    <div class="container position-relative z-index-1">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <!-- <lottie-player src="<?php echo e(asset('assets/json/Free-Growth-Cover-Animation.json')); ?>" background="transparent" speed="0.5" style="width: 100%; max-width: 500px; height: auto;" loop autoplay></lottie-player> -->
                    <dotlottie-player class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto; object-fit: cover;" src="https://lottie.host/ce443241-60ff-406a-b984-88dad55f17f0/rgeFB54Tsm.lottie" background="transparent" speed="0.2" loop autoplay></dotlottie-player>
                </div>
            </div>

            <div class="col-lg-6 ps-lg-5">
                <div class="d-flex justify-content-start mb-3">
                    <span class="badge badge-pill px-4 py-2" style="background: linear-gradient(90deg, #4B0082, #9400D3); color: #fff; font-size: 1rem; box-shadow: 0 2px 12px rgba(75,0,130,0.12); letter-spacing: 1px;">
                        Corporate Wellness Solutions
                    </span>
                </div>
                <h1 class="display-4 mb-3" style="font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-weight: 700; line-height: 1.2; color: #2c3e50;">
                    Holistic <span style="color: #61009b; font-weight: 700;">Mental Wellness</span> Solution for Busy Professionals
                </h1>
                <p class="lead mb-4" style="color: #2c3e50; font-size: 1.25rem;">
                    <strong>Smart mental wellness for people on the move.</strong>
                </p>
                <div class="text-center">
                    <a href="#subscribe" class="btn btn-secondary btn-sm" style="color: #61009b; border-color: #ffffff; transition: background 0.2s, color 0.2s, border-color 0.2s; border: 2px solid #61009b;"
                        onmouseover="this.style.background='#61009b';this.style.color='#fff';this.style.borderColor='#61009b';"
                        onmouseout="this.style.background='';this.style.color='#61009b';this.style.borderColor='#61009b';">
                        Subscribe
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .decorative-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            z-index: 0;
            filter: blur(10px);
            /* Soften the look */
        }

        .shape-left {
            width: 180px;
            height: 180px;
            background: linear-gradient(90deg, #61009b, #9400D3);
            top: 20%;
            left: -90px;
            animation: floatShape 6s infinite ease-in-out alternate;
        }

        .shape-right {
            width: 220px;
            height: 220px;
            background: linear-gradient(90deg, #FF7D7F, #4B0082);
            bottom: 15%;
            right: -110px;
            animation: floatShape 8s infinite ease-in-out alternate-reverse;
        }

        @keyframes floatShape {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(10deg);
            }

            100% {
                transform: translateY(0) rotate(0deg);
            }
        }

        /* Ensure content visibility on small screens */
        @media (max-width: 991.98px) {
            section.py-5.border-bottom {
                margin-top: 0 !important;
                /* Remove top margin on mobile */
                padding-top: 0 !important;
                /* Remove top padding on mobile */
            }

            .ps-lg-5 {
                padding-left: 15px !important;
                /* Adjust padding for mobile */
                padding-right: 15px !important;
            }

            .display-4 {
                font-size: 2.5rem;
                /* Adjust font size for mobile */
            }

            .lead {
                font-size: 1.1rem;
                /* Adjust font size for mobile */
            }

            .text-center {
                text-align: center !important;
                /* Center the button on mobile */
            }

            .d-flex.justify-content-start.mb-3 {
                justify-content: center !important;
                /* Center the badge on mobile */
            }
        }

        .bg-line-path {
            stroke-dasharray: 2000;
            /* Needs to be larger than path length */
            stroke-dashoffset: 2000;
            /* Start invisible */
            animation: drawLine 5s ease-in-out forwards infinite alternate;
            /* Animate drawing */
        }

        .bg-line-path-right {
            stroke-dasharray: 2000;
            /* Needs to be larger than path length */
            stroke-dashoffset: 2000;
            /* Start invisible */
            animation: drawLine 5s ease-in-out forwards infinite alternate;
            /* Animate drawing */
        }

        @keyframes drawLine {
            to {
                stroke-dashoffset: 0;
            }
        }
    </style>
</section>

<!-- <section class="">
    <img class="bg-image" src="<?php echo e(asset('assets/img/1-1.jpg')); ?>" alt="">
    <div class="container hero hero-responsive" style="padding-top: 350px; margin-top: -100px;">
        <div class="row align-items-center z-index-2 position-relative text-center">
            <div class="col-12 d-flex justify-content-center mb-3">
                <span class="badge badge-pill px-4 py-2 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Corporate Wellness Solutions
                </span>
            </div>
            <div class="col-12">
                <h1 class="display-4 text-white mb-2 sparkle-text" style="font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-weight: 700; font-size: 3.5rem; line-height: 1.1; letter-spacing: -1px; text-shadow: 2px 4px 16px rgba(0,0,0,0.45), 0 2px 8px #b6e0fe;">
                    Holistic <span style="color: #61009b; font-weight: 700;">Mental Wellness</span> Solution for Busy Professionals
                </h1>
                <p class="text-black mb-5 text-12">
                    <strong style="color: #2c3e50;">Smart mental wellness for people on the move.</strong>
                </p>
                <a href="#subscribe" class="btn btn-secondary scroll" style="color: #61009b; border-color: #ffffff; transition: background 0.2s, color 0.2s, border-color 0.2s; border: 2px solid #61009b;"
                    onmouseover="this.style.background='#61009b';this.style.color='#fff';this.style.borderColor='#61009b';"
                    onmouseout="this.style.background='';this.style.color='#61009b';this.style.borderColor='#61009b';">
                    Subscribe
                </a>
            </div>
        </div>
    </div>
    <div class="curved-decoration">
        <div class="curved-decoration decoration-bottom bottom-n1">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">
                <path fill="#f3f5f8" opacity="0.3" d="M0,43V18.7c0,0,131.8-13.9,269.2,20.9C407.2,60,600.3-13.9,800,27.8V43H0z" />
                <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z" />
            </svg>
        </div>
    </div>
</section> -->

<!-- About Section -->
<section id="about" class="spacer-double-lg position-relative bg-light overflow-hidden">
    <!-- SVG Decorative Line About Top Left -->
    <svg class="bg-line-svg-about-top-left" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 0; left: -100px; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <defs>
            <linearGradient id="aboutGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color: rgba(75, 0, 130, 0.1); stop-opacity: 1" />
                <stop offset="100%" style="stop-color: rgba(148, 0, 211, 0.1); stop-opacity: 1" />
            </linearGradient>
        </defs>
        <path class="bg-line-path" d="M0,200 C100,150 200,250 300,150 C350,100 380,50 400,0" fill="none" stroke="url(#aboutGradient1)" stroke-width="3" stroke-linecap="round"></path>
        <path class="bg-line-path" d="M50,250 C150,200 250,220 350,150" fill="none" stroke="url(#aboutGradient1)" stroke-width="2" stroke-linecap="round" opacity="0.5"></path>
    </svg>
    <!-- SVG Decorative Line About Bottom Right -->
    <svg class="bg-line-svg-about-bottom-right" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 0; right: -100px; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <defs>
            <linearGradient id="aboutGradient2" x1="100%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color: rgba(148, 0, 211, 0.1); stop-opacity: 1" />
                <stop offset="100%" style="stop-color: rgba(75, 0, 130, 0.1); stop-opacity: 1" />
            </linearGradient>
        </defs>
        <path class="bg-line-path-right" d="M400,200 C300,150 200,250 100,150 C50,100 20,50 0,0" fill="none" stroke="url(#aboutGradient2)" stroke-width="3" stroke-linecap="round"></path>
        <path class="bg-line-path-right" d="M350,250 C250,200 150,220 50,150" fill="none" stroke="url(#aboutGradient2)" stroke-width="2" stroke-linecap="round" opacity="0.5"></path>
    </svg>
    <style>
        @media (max-width: 991.98px) {

            .bg-line-svg-about-top-left,
            .bg-line-svg-about-bottom-right {
                width: 300px;
                height: 250px;
                opacity: 0.7;
            }

            .bg-line-svg-about-top-left {
                top: 20px;
                left: -50px;
            }

            .bg-line-svg-about-bottom-right {
                bottom: 20px;
                right: -50px;
            }
        }

        @media (max-width: 575.98px) {

            .bg-line-svg-about-top-left,
            .bg-line-svg-about-bottom-right {
                width: 200px;
                height: 150px;
                opacity: 0.5;
            }
        }
    </style>
    <div class="container spacer-double-lg border-bottom">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-5 mb-5 mb-lg-0 text-center">
                <img class="mb-4 max-width-9" src="<?php echo e(asset('assets/img/Logo.png')); ?>" alt="" style="width: 45%; max-width: none;">
                <div class="mb-4">
                    <!-- <span class="text-uppercase font-size-12 font-weight-bold" style="color:rgb(162, 0, 255);">what we do</span> -->
                    <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">what we do</span>
                    <h1 class="mb-0">Who We Are?</h1>
                    <img class="max-width-4 title-line-animated" src="<?php echo e(asset('assets/img/title-line.svg')); ?>" alt="" style="filter: invert(16%) sepia(100%) saturate(7472%) hue-rotate(266deg) brightness(90%) contrast(110%);">
                    <style>
                        .title-line-animated {
                            animation: revealLine 5s ease-in-out infinite;
                            clip-path: polygon(0 0, 0 100%, 0 100%, 0 0);
                        }

                        @keyframes revealLine {
                            0% {
                                clip-path: polygon(0 0, 0 100%, 0 100%, 0 0);
                            }

                            50% {
                                clip-path: polygon(0 0, 0 100%, 100% 100%, 100% 0);
                            }

                            100% {
                                clip-path: polygon(0 0, 0 100%, 0 100%, 0 0);
                            }
                        }
                    </style>
                </div>
                <p class="mb-4">
                    At <span class="" style="color:rgb(255, 92, 95); font-weight: bold;">HappinessFactors</span>, we believe in the power of
                    <span class="" style="color: #61009b; font-weight: bold;">positivity</span> and
                    <span class="" style="color: #61009b; font-weight: bold;">mindfulness</span>. Our mission is to help you discover the
                    <span class="" style="color: #61009b; font-weight: bold;">key elements</span> that contribute to a
                    <span class="" style="color: #61009b; font-weight: bold;">happier</span>, more
                    <span class="" style="color: #61009b; font-weight: bold;">fulfilling life</span>. Join us on this
                    <span class="" style="color: #61009b; font-weight: bold;">journey</span> and learn how to incorporate these
                    <span class="" style="color: #61009b; font-weight: bold;">factors</span> into your daily routine.
                </p>
                <a href="#subscribe" class="btn btn-secondary btn-sm" style="color: #61009b; border-color: #ffffff; transition: background 0.2s, color 0.2s, border-color 0.2s; border: 2px solid #61009b;"
                    onmouseover="this.style.background='#61009b';this.style.color='#fff';this.style.borderColor='#61009b';"
                    onmouseout="this.style.background='';this.style.color='#61009b';this.style.borderColor='#61009b';">
                    Subscribe
                </a>
            </div>
            <div class="col-md-6">
                <div class="position-relative">
                    <div class="w-100 shape-centered-nvh">
                        <figure class="random-shape">
                            <svg version="1.1" width="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 921.6 655.9" enable-background="new 0 0 921.6 655.9" xml:space="preserve">
                                <path fill="none" stroke="#61009b" stroke-width="15" stroke-miterlimit="10" d="M792.4,64.1c17.4,14.7,33.2,31.2,47.4,49c2.2,2.7,4.3,5.5,6.4,8.3c1.3,1.7,2.5,3.4,3.7,5.1c0.8,1.1,1.6,2.2,2.4,3.3c57.1,82.2,75.8,185.1,51.3,282.1c-4,15.7-9.1,31.2-15.2,46.2c-0.9,2.3-1.9,4.6-2.9,6.8l0,0c-13.5,31-31.6,59.9-53.5,85.7c-3.1,3.7-6.3,7.3-9.5,10.7c-8.7,9.4-18,18.1-27.9,26.3c-121.4,99.7-286.4,58.9-449.2,2.5c-4-1.4-8-2.8-12-4.2c-1-0.3-1.9-0.7-2.9-1C-112,427.2-80,217.8,305.8,103.7C488.6,49.6,647.1-59.3,792.4,64.1z" />
                            </svg>
                        </figure>
                    </div>
                    <div class="row gap" data-jarallax-element="-60 0">
                        <div class="col-5 align-self-end mb-2">
                            <img class="img-fluid w-100 slide-in-image" src="<?php echo e(asset('assets/img/offset/1.jpg')); ?>" alt="">
                        </div>
                        <div class="col-7 mb-2">
                            <dotlottie-player class="img-fluid w-100 slide-in-image" src="https://lottie.host/3254fefd-ac04-4806-b012-bc5039d52331/j5pN5szXPM.lottie" background="#FFFFFF" speed="1" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                        </div>
                        <div class="col-5 offset-1 mb-2 mb-lg-0">
                            <img class="img-fluid w-100 slide-in-image" src="<?php echo e(asset('assets/img/offset/3.jpg')); ?>" alt="">
                        </div>
                        <div class="col-5 mb-2">
                            <img class="img-fluid w-100 slide-in-image" src="<?php echo e(asset('assets/img/offset/4.jpg')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-us" class="spacer-double-lg position-relative overflow-hidden">
    <!-- SVG Decorative Line Left -->
    <svg class="bg-line-svg-about-left" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 150px; left: -100px; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,150 C100,50 300,250 400,150" fill="none" stroke="rgba(97, 0, 155, 0.2)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Right -->
    <svg class="bg-line-svg-about-right" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 100px; right: -100px; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M400,150 C300,50 100,250 0,150" fill="none" stroke="rgba(97, 0, 155, 0.2)" stroke-width="4"></path>
    </svg>
    <div class="border-bottom">
        <!-- Background decorative elements -->
        <div class="decoration-wrapper">
            <div class="decoration-dot decoration-dot-1"></div>
            <div class="decoration-dot decoration-dot-2"></div>
            <div class="decoration-dot decoration-dot-3"></div>
            <div class="decoration-circle decoration-circle-1"></div>
            <div class="decoration-circle decoration-circle-2"></div>
        </div>

        <div class="container position-relative">
            <!-- Animated section header -->
            <div class="row justify-content-center mb-5 reveal-fade">
                <div class="col-lg-8 text-center">
                    <div class="badge-wrapper mb-3">
                        <!-- <span class="badge badge-pill badge-glow px-3 py-2">Discover Our Mission</span> -->
                        <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Discover Our Mission</span>
                    </div>
                    <h2 class="display-4 mb-3 font-weight-bold text-gradient">About HappinessFactors</h2>
                    <div class="divider-custom animate-pulse">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon">
                            <i class="fas fa-heart text-primary pulse-icon"></i>
                        </div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <p class="lead mb-5">We combine <span class="" style="color: #61009b; font-weight: bold;">Ancient Wisdom</span> with <span class="" style="color: #61009b; font-weight: bold;">Spiritual Science</span> to create holistic wellness solutions that transform lives.</p>
                </div>
            </div>

            
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0 reveal-slide-right text-center">
                    
                    <img src="<?php echo e(asset('assets/img/anita-kumari.png')); ?>" alt="Anita Kumari Srivastava" class="img-fluid rounded-circle shadow-lg" style="max-width: 350px; border: 5px solid #fff;">
                </div>
                <div class="col-lg-6 reveal-slide-left">
                    <h3 class="h3 font-weight-bold mb-3 text-gradient" style="background: linear-gradient(90deg, #4B0082, #9400D3); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Anita Kumari Srivastava</h3>
                    <p class="lead text-muted font-weight-bold" style="color: #61009b;">Founder and Chief Strategist</p>

                    <div class="bio-section mb-4">
                        <p class="mb-4 text-muted">
                            <span class="highlight-name" style="color: #4B0082; font-weight: 600;">Anita Kumari Srivastava</span>, an award-winning coach and author, leads <span class="company-name" style="color: #9400D3; font-weight: 600;">HappinessFactors</span> with a mission to spread emotional wellness globally.
                        </p>
                    </div>

                    <div class="expertise-section mb-4">
                        <p class="mb-4 text-muted">
                            With expertise in <span class="expertise-tag" style="background: rgba(75,0,130,0.1); padding: 2px 8px; border-radius: 4px; color: #4B0082;">NLP</span>, <span class="expertise-tag" style="background: rgba(75,0,130,0.1); padding: 2px 8px; border-radius: 4px; color: #4B0082;">Hypnotherapy</span>, and <span class="expertise-tag" style="background: rgba(75,0,130,0.1); padding: 2px 8px; border-radius: 4px; color: #4B0082;">MER practitioner</span>, combined with her experience at <span class="company-highlight" style="color: #4B0082; font-weight: 600;">Google</span>, Anita helps individuals and organizations achieve lasting happiness and motivation.
                        </p>
                    </div>

                    <div class="journey-section">
                        <p class="mb-0 text-muted">
                            Through her personal journey and mentorship from leaders like <span class="mentor-name" style="color: #61009b; font-weight: 600;">Tony Robbins</span>, Anita has developed transformative solutions for emotional wellness at <span class="company-name" style="color: #9400D3; font-weight: 600;">HappinessFactors</span>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Main content with card hover effects -->
            <div class="row align-items-center pt-5">
                <!-- Left side content card -->
                <div class="col-lg-6 mb-5 mb-lg-0 reveal-slide-right">
                    <div class="card border-0 bg-white shadow-lg rounded-lg overflow-hidden hover-lift" style="transition: all 0.3s ease;">
                        <div class="card-body p-5">
                            <!-- Enhanced Header Section -->
                            <div class="card-header-icon mb-4 d-flex align-items-center">
                                <div class="icon-wrapper responsive-icon-wrapper bg-gradient-primary-to-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, #4B0082, #9400D3); display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;  flex-shrink: 0;">
                                    <i class="fas fa-spa"></i>
                                </div>
                                <h3 class="h4 ml-3 mb-0 text-gradient" style="background: linear-gradient(90deg, #4B0082, #9400D3); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Our Approach to Mental Wellness</h3>
                            </div>

                            <!-- Main Content Section -->
                            <div class="content-wrapper">
                                <p class="text-muted">
                                    <span class="lead mb-4 d-block fw-bold" style="color: #4B0082; line-height: 1.6;">At HappinessFactors, we believe mental and emotional wellness isn't just a luxury - it's the foundation of a meaningful, purpose-driven life.</span>

                                <div class="methodology-section mb-4">
                                    <h5 class="mb-3">Our transformative methodology uniquely blends:</h5>
                                    <ul class="mt-3 mb-4 methodology-list" style="list-style: none; padding-left: 0;">
                                        <li class="mb-3 p-2 rounded hover-lift" style="transition: all 0.3s ease; background: rgba(75,0,130,0.03);">
                                            <i class="text-primary fas fa-om" style="margin-right: 0.5rem;"></i>Ancient wisdom practices
                                        </li>
                                        <li class="mb-3 p-2 rounded hover-lift" style="transition: all 0.3s ease; background: rgba(75,0,130,0.03);">
                                            <i class="text-primary fas fa-brain" style="margin-right: 0.5rem;"></i>Modern neuroscience
                                        </li>
                                        <li class="mb-3 p-2 rounded hover-lift" style="transition: all 0.3s ease; background: rgba(75,0,130,0.03);">
                                            <i class="text-primary fas fa-heart" style="margin-right: 0.5rem;"></i>Positive psychology
                                        </li>
                                    </ul>
                                </div>

                                <!-- Enhanced Results Box -->
                                <div class="highlight-box p-4 mb-4 rounded-lg" style="background: rgba(75,0,130,0.05); border-left: 4px solid #4B0082; box-shadow: 0 2px 10px rgba(75,0,130,0.05);">
                                    <h5 class="mb-3" style="color: #4B0082; font-weight: bold;">Results-Driven Approach</h5>
                                    <p class="mb-3">Our spiritual science-backed programs deliver measurable outcomes:</p>
                                    <ul class="mt-2 mb-0 results-list" style="list-style: none; padding-left: 0;">
                                        <li class="mb-3 p-2 rounded hover-lift" style="background: rgba(255,255,255,0.5);">
                                            <i class="fas fa-check-circle text-success mr-2"></i>Reduced stress & anxiety
                                        </li>
                                        <li class="mb-3 p-2 rounded hover-lift" style="background: rgba(255,255,255,0.5);">
                                            <i class="fas fa-check-circle text-success mr-2"></i>Enhanced productivity
                                        </li>
                                        <li class="mb-3 p-2 rounded hover-lift" style="background: rgba(255,255,255,0.5);">
                                            <i class="fas fa-check-circle text-success mr-2"></i>Improved emotional resilience
                                        </li>
                                        <li class="mb-3 p-2 rounded hover-lift" style="background: rgba(255,255,255,0.5);">
                                            <i class="fas fa-check-circle text-success mr-2"></i>Mood Boosts That Last
                                        </li>
                                        <li class="mb-3 p-2 rounded hover-lift" style="background: rgba(255,255,255,0.5);">
                                            <i class="fas fa-check-circle text-success mr-2"></i>Feel Good, Stay Happy
                                        </li>
                                    </ul>
                                </div>

                                <!-- Enhanced Impact Statement -->
                                <style>
                                    @media (max-width: 767.98px) {
                                        .responsive-icon-wrapper {
                                            width: 80px !important;
                                            height: 80px !important;
                                            font-size: 32px !important;
                                        }

                                        .responsive-icon-wrapper i {
                                            font-size: 32px !important;
                                        }
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side video and content -->
                <div class="col-lg-6 reveal-slide-left">
                    <!-- Core values section -->
                    <div class="core-values mb-5">
                        <div class="values-wrapper">
                            <div class="value-card mb-4">
                                <div class="value-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Mind</h4>
                                    <p class="mb-0">Cultivate mental clarity and emotional balance</p>
                                </div>
                            </div>
                            <div class="value-card mb-4">
                                <div class="value-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Body</h4>
                                    <p class="mb-0">Enhance physical wellbeing through mindful practices</p>
                                </div>
                            </div>
                            <div class="value-card mb-4">
                                <div class="value-icon">
                                    <i class="fas fa-infinity"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Spirit</h4>
                                    <p class="mb-0">Connect with your deeper purpose for lasting happiness</p>
                                </div>
                            </div>
                            <div class="value-card mb-4">
                                <div class="value-icon">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Growth</h4>
                                    <p class="mb-0">Continuous personal development and transformation</p>
                                </div>
                            </div>
                            <div class="value-card">
                                <div class="value-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="value-content">
                                    <h4>Community</h4>
                                    <p class="mb-0">Build meaningful connections and support networks</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video container with parallax effect -->
                    <div class="video-showcase"></div>
                    <div class="video-container parallax-effect"></div>
                    <div class="embed-responsive embed-responsive-16by9 rounded-lg overflow-hidden" style="border-radius: 15px;">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IcFBXsIb3TI?autoplay=0&mute=1&controls=1&modestbranding=1" title="Discover HappinessFactors" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        <!-- Animated counters with hover effects -->
        <div class="row mt-5 mx-5 pt-5 reveal-fade-up">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="counter-card">
                    <div class="counter-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <div class="counter-value">
                        <span class="counter" data-count="10">0</span><span>+</span>
                    </div>
                    <h4>Years Experience</h4>
                    <p>Dedicated to Menatal & Emotional wellness</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="counter-card">
                    <div class="counter-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <div class="counter-value" style="font-size: 38.4px;">
                        Spiritual Science Backed Solutions
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-card">
                    <div class="counter-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="counter-value">
                        <span class="counter" data-count="20">0</span><span>+</span>
                    </div>
                    <h4>Wellness Programs</h4>
                    <p>Customizable to meet your needs</p>
                </div>
            </div>
        </div>

        <!-- Vision and mission cards -->
        <div class="row mt-5 pt-4 mx-5 vision-mission-row">
            <div class="col-md-6 mb-4 mb-md-0 reveal-slide-right">
                <div class="vision-card">
                    <div class="vision-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 style="color: white;">
                        Our Vision
                    </h3>
                    <p>No. 1 holistic mental wellness solution provider to add joy in the lives of busy professionals globally through transformative mental wellness solutions bringing purpose and freedom from stress.</p>
                </div>
            </div>
            <div class="col-md-6 reveal-slide-left">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 style="color: white;">
                        Our Mission
                    </h3>
                    <p>To empower busy professionals to sustain happiness in the timeless pursuit of purpose, joy & freedom from stress, one professional, one company at a time.</p>
                </div>
            </div>
        </div>

        <style>
            /* Main Styles */
            #about-us {
                background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
                position: relative;
                overflow: hidden;
            }

            /* Decorative Elements */
            .decoration-wrapper {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                overflow: hidden;
                z-index: 0;
            }

            .decoration-dot {
                position: absolute;
                border-radius: 50%;
                opacity: 0.2;
            }

            .decoration-dot-1 {
                width: 20px;
                height: 20px;
                background-color: #4B0082;
                top: 10%;
                left: 10%;
                animation: float 4s infinite ease-in-out;
            }

            .decoration-dot-2 {
                width: 15px;
                height: 15px;
                background-color: #FF7D7F;
                bottom: 15%;
                right: 10%;
                animation: float 3.5s infinite ease-in-out;
            }

            .decoration-dot-3 {
                width: 25px;
                height: 25px;
                background-color: #6A5ACD;
                bottom: 30%;
                left: 5%;
                animation: float 5s infinite ease-in-out;
            }

            .decoration-circle {
                position: absolute;
                border-radius: 50%;
                border: 2px solid rgba(75, 0, 130, 0.1);
            }

            .decoration-circle-1 {
                width: 300px;
                height: 300px;
                top: -150px;
                right: -150px;
            }

            .decoration-circle-2 {
                width: 200px;
                height: 200px;
                bottom: -100px;
                left: -100px;
            }

            /* Text Styling */
            .text-gradient {
                background: linear-gradient(135deg, #4B0082, #9400D3);
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .highlight {
                color: #4B0082;
                font-weight: 600;
                position: relative;
                display: inline-block;
            }

            .highlight:after {
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                height: 3px;
                width: 100%;
                background: linear-gradient(90deg, #4B0082, #9400D3);
                border-radius: 2px;
            }

            /* Badge and Divider */
            .badge-wrapper {
                perspective: 1000px;
            }

            .badge-glow {
                background: linear-gradient(135deg, #4B0082, #9400D3);
                color: white;
                box-shadow: 0 5px 15px rgba(75, 0, 130, 0.2);
                animation: glow 2s infinite alternate;
            }

            .divider-custom {
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 1.5rem 0;
            }

            .divider-custom-line {
                width: 60px;
                height: 3px;
                background: linear-gradient(90deg, transparent, #4B0082, transparent);
            }

            .divider-custom-icon {
                margin: 0 1rem;
            }

            .pulse-icon {
                animation: pulse 2s infinite;
            }

            /* Card and Hover Effects */
            .hover-lift {
                transition: all 0.4s ease;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            }

            .hover-lift:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            }

            .card-header-icon {
                display: flex;
                align-items: center;
            }

            .icon-wrapper {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background: linear-gradient(135deg, #4B0082, #9400D3);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 24px;
                box-shadow: 0 10px 20px rgba(75, 0, 130, 0.2);
            }

            /* Service Items */
            .service-wrapper {
                position: relative;
            }

            .service-item {
                transition: all 0.3s ease;
            }

            .service-item:hover {
                transform: translateX(5px);
            }

            .service-icon {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: rgba(75, 0, 130, 0.1);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #4B0082;
                margin-right: 15px;
                transition: all 0.3s ease;
                flex-shrink: 0;
            }

            .service-item:hover .service-icon {
                background: linear-gradient(135deg, #4B0082, #9400D3);
                color: white;
                transform: rotate(360deg);
            }

            /* Core Values */
            .core-values {
                perspective: 1000px;
            }

            .values-wrapper {
                transform: rotateY(2deg);
            }

            .value-card {
                display: flex;
                align-items: center;
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transition: all 0.3s ease;
                transform: translateZ(0);
            }

            .value-card:hover {
                transform: translateX(10px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            }

            .value-icon {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: linear-gradient(135deg, #4B0082, #9400D3);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 20px;
                margin-right: 20px;
                flex-shrink: 0;
            }

            .value-content {
                flex: 1;
            }

            /* Video Section */
            .video-showcase {
                margin-top: 30px;
            }

            .video-container {
                position: relative;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
                transform-style: preserve-3d;
                z-index: 1;
            }

            .parallax-effect {
                transition: transform 0.2s ease;
            }

            .video-badge {
                position: absolute;
                top: 20px;
                right: 20px;
                background: linear-gradient(135deg, #4B0082, #9400D3);
                color: white;
                padding: 8px 15px;
                border-radius: 20px;
                font-weight: 600;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                z-index: 2;
            }

            /* Counter Cards */
            .counter-card {
                text-align: center;
                background-color: white;
                padding: 40px 20px;
                border-radius: 12px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                transition: all 0.3s ease;
                border-bottom: 4px solid transparent;
                height: 100%;
            }

            .counter-card:hover,
            .counter-card.active {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                border-bottom-color: #4B0082;
            }

            .counter-icon {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: rgba(75, 0, 130, 0.1);
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 20px;
                font-size: 30px;
                color: #4B0082;
                transition: all 0.3s ease;
            }

            .counter-card:hover .counter-icon {
                background: linear-gradient(135deg, #4B0082, #9400D3);
                color: white;
                transform: rotateY(180deg);
            }

            .counter-value {
                font-size: 48px;
                font-weight: 700;
                color: #4B0082;
                margin-bottom: 10px;
                line-height: 1;
            }

            .counter-card h4 {
                margin-bottom: 10px;
                font-weight: 600;
            }

            .counter-card p {
                color: #6c757d;
                margin-bottom: 0;
            }

            /* Vision Mission Cards */
            .vision-mission-row {
                perspective: 1000px;
            }

            .vision-card,
            .mission-card {
                padding: 30px;
                border-radius: 12px;
                height: 100%;
                position: relative;
                overflow: hidden;
                z-index: 1;
                color: white;
                transition: all 0.3s ease;
            }

            .vision-card {
                background: linear-gradient(135deg, #4B0082, #9400D3);
                box-shadow: 0 10px 20px rgba(75, 0, 130, 0.2);
            }

            .mission-card {
                background: linear-gradient(135deg, #6A5ACD, #4B0082);
                box-shadow: 0 10px 20px rgba(106, 90, 205, 0.2);
            }

            .vision-card:hover,
            .mission-card:hover {
                transform: translateY(-5px);
            }

            .vision-card:before,
            .mission-card:before {
                content: '';
                position: absolute;
                top: -50%;
                right: -50%;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.1);
                transform: rotate(45deg);
                z-index: -1;
                transition: all 0.3s ease;
            }

            .vision-card:hover:before,
            .mission-card:hover:before {
                top: -10%;
                right: -10%;
            }

            .vision-icon,
            .mission-icon {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 24px;
                margin-bottom: 20px;
            }

            /* Button Styles */
            .btn-gradient {
                background: linear-gradient(135deg, #4B0082, #9400D3);
                border: none;
                color: white;
                position: relative;
                overflow: hidden;
                z-index: 1;
                transition: all 0.3s ease;
            }

            .btn-gradient:before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                transition: all 0.5s ease;
                z-index: -1;
            }

            .btn-gradient:hover:before {
                left: 100%;
            }

            .btn-ripple {
                position: relative;
                overflow: hidden;
            }

            .btn-ripple:after {
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
                transform: scale(0);
                opacity: 0;
                transition: transform 0.5s, opacity 0.5s;
            }

            .btn-ripple:active:after {
                transform: scale(2);
                opacity: 0;
                transition: 0s;
            }

            /* Animation Keyframes */
            @keyframes float {
                0% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-10px);
                }

                100% {
                    transform: translateY(0px);
                }
            }

            @keyframes pulse {
                0% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.2);
                }

                100% {
                    transform: scale(1);
                }
            }

            @keyframes glow {
                from {
                    box-shadow: 0 0 10px rgba(75, 0, 130, 0.3);
                }

                to {
                    box-shadow: 0 0 20px rgba(75, 0, 130, 0.6);
                }
            }

            /* Reveal animations */
            .reveal-fade {
                opacity: 0;
                animation: revealFade 1s forwards;
            }

            .reveal-slide-right {
                opacity: 0;
                transform: translateX(-30px);
                animation: revealSlideRight 1s forwards;
            }

            .reveal-slide-left {
                opacity: 0;
                transform: translateX(30px);
                animation: revealSlideLeft 1s forwards;
            }

            .reveal-fade-up {
                opacity: 0;
                transform: translateY(30px);
                animation: revealFadeUp 1s forwards;
            }

            @keyframes revealFade {
                to {
                    opacity: 1;
                }
            }

            @keyframes revealSlideRight {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes revealSlideLeft {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes revealFadeUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Animation delay classes */
            .delay-100 {
                animation-delay: 0.1s;
            }

            .delay-200 {
                animation-delay: 0.2s;
            }

            .delay-300 {
                animation-delay: 0.3s;
            }

            .delay-400 {
                animation-delay: 0.4s;
            }

            .delay-500 {
                animation-delay: 0.5s;
            }

            /* Responsive Adjustments */
            @media (max-width: 991.98px) {
                .counter-card {
                    margin-bottom: 30px;
                }
            }

            @media (max-width: 767.98px) {
                .value-card {
                    margin-bottom: 20px;
                }

                .vision-card,
                .mission-card {
                    margin-bottom: 20px;
                }
            }

            /* Add styles for the new SVG lines in #about-us */
            .bg-line-svg-about-left .bg-line-path,
            .bg-line-svg-about-right .bg-line-path-right {
                animation: drawLine 5s ease-in-out forwards infinite alternate;
                /* Animate drawing */
            }

            /* Add styles for new SVG lines in #about */
            .bg-line-svg-about-top-left .bg-line-path,
            .bg-line-svg-about-bottom-right .bg-line-path-right {
                animation: drawLine 6s ease-in-out forwards infinite alternate;
                /* Slightly different animation speed */
            }

            @media (max-width: 991.98px) {

                .bg-line-svg-about-top-left,
                .bg-line-svg-about-bottom-right {
                    width: 200px;
                    /* Adjust size for mobile */
                    height: 150px;
                    top: 20px;
                    /* Adjust position for mobile */
                    left: -20px;
                    right: -20px;
                    bottom: 20px;
                }

                .bg-line-svg-about-bottom-right {
                    bottom: 20px;
                    right: -20px;
                    left: auto;
                }
            }
        </style>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Counter animation
                const counters = document.querySelectorAll('.counter');
                const speed = 200;

                counters.forEach(counter => {
                    const animate = () => {
                        const value = +counter.getAttribute('data-count');
                        const data = +counter.innerText;

                        const time = value / speed;
                        if (data < value) {
                            counter.innerText = Math.ceil(data + time);
                            setTimeout(animate, 20);
                        } else {
                            counter.innerText = value;
                        }
                    }
                    animate();
                });

                // Parallax effect for video
                const videoContainer = document.querySelector('.parallax-effect');
                if (videoContainer) {
                    document.addEventListener('mousemove', function(e) {
                        const mouseX = e.clientX / window.innerWidth - 0.5;
                        const mouseY = e.clientY / window.innerHeight - 0.5;

                        videoContainer.style.transform = `rotateY(${mouseX * 5}deg) rotateX(${mouseY * -5}deg)`;
                    });
                }

                // Scroll reveal animations
                const revealElements = document.querySelectorAll('.reveal-fade, .reveal-slide-right, .reveal-slide-left, .reveal-fade-up');

                const revealOnScroll = () => {
                    revealElements.forEach(element => {
                        const elementTop = element.getBoundingClientRect().top;
                        const elementVisible = 150;

                        if (elementTop < window.innerHeight - elementVisible) {
                            element.style.animationPlayState = 'running';
                        }
                    });
                }

                // Initialize animations
                window.addEventListener('scroll', revealOnScroll);
                revealOnScroll(); // Check on load
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Jarallax
                jarallax(document.querySelectorAll('[data-jarallax-element]'), {
                    speed: 0.2
                });

                // Existing Intersection Observer code
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                        }
                    });
                }, {
                    threshold: 0.1
                });

                document.querySelectorAll('.slide-in-image').forEach((image) => {
                    observer.observe(image);
                });
            });
        </script>

    </div>
</section>

<!-- Our Story -->
<section id="our-story" class="spacer-double-lg position-relative overflow-hidden bg-light">
    <!-- SVG Decorative Line Our Story Top Right -->
    <svg class="bg-line-svg-our-story-top-right" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 80px; right: -80px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M300,0 C200,100 100,100 0,200" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Our Story Bottom Left -->
    <svg class="bg-line-svg-our-story-bottom-left" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 80px; left: -80px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M0,200 C100,100 200,100 300,0" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- Decorative SVG Wave Top -->
    <div class="position-absolute w-100" style="top:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>

    <div class="container position-relative" style="z-index:2;">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <!-- <span class="badge badge-pill px-4 py-2 mb-3" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Our Journey</span> -->
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Our Journey</span>
                <h2 class="display-5 mb-3 font-weight-bold text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">This isn't just a Brand. It's a Mission with Heart <img src="assets/img/GIF/purple-heart.gif" alt="Heart" style="height: 35px; width: 35px;"> <span style="color:#4B0082;"><br>HappinessFactors</span></h2>
                <div class="divider-custom animate-pulse mb-3">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-heart text-primary pulse-icon"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="lead text-muted mx-auto" style="max-width:700px;">From a spark of inspiration to a global movement, our story is about transforming lives through science-backed happiness, mindful technology, and a heart for community.</p>
            </div>
        </div>

        <!-- Main Story Row -->
        <div class="row align-items-center mb-7">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative story-image-wrapper">
                    <img src="<?php echo e(asset('assets/img/our-story.jpg')); ?>" alt="Our Story" class="img-fluid rounded-xl shadow-lg border border-white" style="object-fit:cover;">
                    <!-- Floating quote card -->
                    <div class="floating-quote-card bg-white shadow rounded-lg p-4 d-flex align-items-center" style="position:absolute;bottom:20px;left:-30px;max-width:320px;">
                        <div class="icon-box bg-gradient-primary-to-secondary rounded-circle text-white d-flex align-items-center justify-content-center mr-3" style="width:48px;height:48px;font-size:1.5rem;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <span class="font-italic text-muted floating-quote-text">"Happiness is not something ready-made. It comes from your own actions."</span>
                        <style>
                            @media (max-width: 767.98px) {
                                .floating-quote-text {
                                    font-size: 0.92rem !important;
                                    line-height: 1.3 !important;
                                }
                            }
                        </style>
                    </div>
                    <!-- Decorative floating shapes -->
                    <div class="floating-shape shape1"></div>
                    <div class="floating-shape shape2"></div>
                    <div class="floating-shape shape3"></div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="mb-4">
                    <h3 class="font-weight-bold mb-3 text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">How It All Began</h3>
                    <p class="lead text-primary mb-2">Born from a passion for mindfulness and emotional intelligence, HappinessFactors started as a personal quest to unlock the secrets of joy and fulfillment.</p>
                    <p class="mb-4 text-muted">What began as a journey of self-discovery soon blossomed into a mission to empower others. Today, we're a vibrant community, blending ancient wisdom and modern science to help thousands find their happiest selves.</p>
                </div>
                <div class="row text-center mb-4">
                    <div class="col-6">
                        <div class="stat-card p-3 rounded shadow-sm bg-white mb-2">
                            <span class="display-4 text-gradient font-weight-bold" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">10+</span>
                            <div class="small text-uppercase font-weight-bold text-muted">Years of Experience</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card p-3 rounded shadow-sm bg-white mb-2">
                            <span class="display-4 text-gradient font-weight-bold" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">1000+</span>
                            <div class="small text-uppercase font-weight-bold text-muted">Lives Transformed</div>
                        </div>
                    </div>
                </div>
                <a href="#subscribe" class="btn btn-gradient btn-lg btn-ripple shadow-sm">
                    Ready To Feel Good? <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>

        <!-- Timeline: Animated, Modern, and Colorful -->
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <h3 class="text-center mb-5 font-weight-bold text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Stress Happens, Anxiety Happens, Life Happens! We Got You 🫶🏼</h3>
                <div class="timeline-modern position-relative mx-auto" style="max-width:900px;">
                    <!-- Timeline Line -->
                    <div class="timeline-modern-line"></div>
                    <!-- Timeline Items -->
                    <div class="timeline-modern-item left">
                        <div class="timeline-modern-dot bg-gradient-primary-to-secondary"></div>
                        <div class="timeline-modern-content shadow bg-white rounded-lg">
                            <div class="timeline-modern-date text-gradient font-weight-bold mb-2">Step 1</div>
                            <h3 class="mb-1"><img src="<?php echo e(asset('assets/img/GIF/smiling_face_with_heart_eyes.gif')); ?>" alt="Connect With HappinessFactors" style="height: 55px; width: 55px;"> Connect With HappinessFactors</h3>
                            <p class="mb-0 text-muted"> <a href="#subscribe">Subscribe</a> to App/Courses/Coaching</p>
                        </div>
                    </div>
                    <div class="timeline-modern-item right">
                        <div class="timeline-modern-dot bg-gradient-primary-to-secondary"></div>
                        <div class="timeline-modern-content shadow bg-white rounded-lg">
                            <div class="timeline-modern-date text-gradient font-weight-bold mb-2">Step 2</div>
                            <h3 class="mb-1"><img src="<?php echo e(asset('assets/img/GIF/magnifying-glass.gif')); ?>" alt="Inner Compass Activated" style="height: 55px; width: 55px;"> Inner Compass Activated</h3>
                            <p class="mb-0 text-muted">Finding your happy map.
                                Discover your stressors, motivators, and what actually makes you tick—with science-backed insights.</p>
                        </div>
                    </div>
                    <div class="timeline-modern-item left">
                        <div class="timeline-modern-dot bg-gradient-primary-to-secondary"></div>
                        <div class="timeline-modern-content shadow bg-white rounded-lg">
                            <div class="timeline-modern-date text-gradient font-weight-bold mb-2">Step 3</div>
                            <h3 class="mb-1">
                                 <span style="display: inline-block; vertical-align: middle; margin-right: 10px;">
                                 <dotlottie-player
                                         src="<?php echo e(asset('assets/json/brain.json')); ?>"
                                         background="transparent"
                                         speed="1"
                                         style="width: 65px; height: 65px;"
                                         loop
                                         autoplay>
                                     </dotlottie-player>
                                 </span>
                                 Building Mental Muscle</h3>
                            <p class="mb-0 text-muted">Flex that positivity muscle!
                                Daily habits, micro-coaching, and a dose of mindfulness = stronger emotional muscles and calmer vibes.</p>
                        </div>
                    </div>
                    <div class="timeline-modern-item right">
                        <div class="timeline-modern-dot bg-gradient-primary-to-secondary"></div>
                        <div class="timeline-modern-content shadow bg-white rounded-lg">
                            <div class="timeline-modern-date text-gradient font-weight-bold mb-2">Step 4</div>
                            <h3 class="mb-1"><img src="<?php echo e(asset('assets/img/GIF/direct_hit.gif')); ?>" alt="Relaxation/Flow Zone!" style="height: 55px; width: 55px;"> Relaxation/Flow Zone!
                                You're in the groove!</h3>
                            <p class="mb-0 text-muted">You're not just coping—you're thriving. Productivity, purpose, and people skills... all flowing with ease</p>
                        </div>
                    </div>
                    <div class="timeline-modern-item left">
                        <div class="timeline-modern-dot bg-gradient-primary-to-secondary"></div>
                        <div class="timeline-modern-content shadow bg-white rounded-lg">
                            <div class="timeline-modern-date text-gradient font-weight-bold mb-2">Step 5</div>
                            <h3 class="mb-1"><img src="<?php echo e(asset('assets/img/GIF/trophy.gif')); ?>" alt="The Glow-Up" style="height: 55px; width: 55px;"> The Glow-Up</h3>
                            <p class="mb-0 text-muted">You're shining—and lifting others up too.
                                Your happiness isn't just personal—it's contagious. You're now a wellness warrior, inspiring joy wherever you go.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5 pt-5">
            <div class="col-12 text-center">
                <div class="card bg-gradient-primary-to-secondary text-white p-5 rounded-lg shadow-lg border-0" style="border-radius: 1.5rem;">
                    <div class="card-body">
                        <h3 class="mb-4 font-weight-bold" style="background: linear-gradient(90deg, #FF7D7F, #ffffff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; color: #FF7D7F; letter-spacing: 1px; text-shadow: 0 1px 2px rgba(0,0,0,0.1);">
                            Join The HappinessFactors Movement!
                        </h3>
                        <p class="lead mb-4">Hop In—We're Writing the World's Happiest Story</p>
                        <a href="#subscribe" class="btn btn-lg btn-light btn-hover-pulse w-100 w-md-auto" style="max-width:320px;">
                            Subscribe Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <style>
                @media (max-width: 767.98px) {
                    .card.bg-gradient-primary-to-secondary.p-5 {
                        padding: 2rem 1rem !important;
                        border-radius: .75rem !important;
                    }

                    .btn-lg.w-100 {
                        font-size: 1rem;
                        padding: 14px 0;
                        max-width: 100%;
                    }
                }
            </style>
        </div>
    </div>

    <!-- Decorative SVG Wave Bottom -->
    <div class="position-absolute w-100" style="bottom:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,0 C480,80 960,-80 1440,0 L1440,80 L0,80 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>

    <style>
        #our-story {
            background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
            position: relative;
            overflow: hidden;
        }

        .story-image-wrapper {
            min-height: 350px;
        }

        .floating-quote-card {
            box-shadow: 0 8px 32px rgba(75, 0, 130, 0.10);
            border-left: 4px solid #4B0082;
            font-size: 1rem;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.18;
            z-index: 2;
        }

        .shape1 {
            width: 50px;
            height: 50px;
            background: #4B0082;
            top: 10%;
            left: 80%;
            animation: floatShape1 5s infinite alternate;
        }

        .shape2 {
            width: 30px;
            height: 30px;
            background: #FF7D7F;
            bottom: 15%;
            left: 10%;
            animation: floatShape2 6s infinite alternate;
        }

        .shape3 {
            width: 70px;
            height: 70px;
            background: #6A5ACD;
            bottom: 5%;
            right: 5%;
            animation: floatShape3 7s infinite alternate;
        }

        @keyframes floatShape1 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes floatShape2 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(15px);
            }
        }

        @keyframes floatShape3 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-25px);
            }
        }

        .stat-card {
            border: 2px solid #f3f0fa;
            transition: box-shadow 0.3s;
        }

        .stat-card:hover {
            box-shadow: 0 8px 32px rgba(75, 0, 130, 0.10);
        }

        /* Timeline Modern */
        .timeline-modern {
            position: relative;
            padding: 40px 0;
        }

        .timeline-modern-line {
            position: absolute;
            left: 50%;
            top: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #4B0082 0%, #9400D3 100%);
            transform: translateX(-50%);
            z-index: 0;
        }

        .timeline-modern-item {
            position: relative;
            width: 50%;
            padding: 30px 40px;
            box-sizing: border-box;
        }

        .timeline-modern-item.left {
            left: 0;
            text-align: right;
        }

        .timeline-modern-item.right {
            left: 50%;
            text-align: left;
        }

        .timeline-modern-dot {
            position: absolute;
            top: 40px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 0 0 4px #e9ecef;
            z-index: 2;
        }

        .timeline-modern-item.left .timeline-modern-dot {
            right: -14px;
        }

        .timeline-modern-item.right .timeline-modern-dot {
            left: -14px;
        }

        .timeline-modern-content {
            position: relative;
            background: #fff;
            padding: 24px 28px;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(75, 0, 130, 0.07);
            margin-bottom: 30px;
            margin-top: 10px;
            z-index: 1;
            transition: box-shadow 0.3s;
        }

        .timeline-modern-content:hover {
            box-shadow: 0 8px 32px rgba(75, 0, 130, 0.12);
        }

        .timeline-modern-date {
            font-size: 1.1rem;
            letter-spacing: 1px;
        }

        @media (max-width: 991.98px) {

            .timeline-modern-item,
            .timeline-modern-item.left,
            .timeline-modern-item.right {
                width: 100%;
                left: 0;
                text-align: left;
                padding: 30px 0 30px 50px;
            }

            .timeline-modern-line {
                left: 20px;
            }

            .timeline-modern-dot {
                left: 6px !important;
                right: auto !important;
            }
        }

        @media (max-width: 767.98px) {
            .story-image-wrapper {
                min-height: 220px;
            }

            .floating-quote-card {
                left: 0;
                bottom: 0;
                max-width: 90%;
            }
        }

        .btn-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            color: #fff;
            border: none;
        }

        .btn-gradient:hover,
        .btn-gradient:focus {
            background: linear-gradient(90deg, #9400D3, #4B0082);
            color: #fff;
        }

        .btn-hover-pulse:hover {
            animation: pulse 1s;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        /* Add styles for new SVG lines in #our-story */
        .bg-line-svg-our-story-top-right .bg-line-path,
        .bg-line-svg-our-story-bottom-left .bg-line-path-right {
            animation: drawLine 7s ease-in-out forwards infinite alternate;
            /* Slower animation speed */
        }

        @media (max-width: 991.98px) {

            .bg-line-svg-our-story-top-right,
            .bg-line-svg-our-story-bottom-left {
                width: 150px;
                height: 100px;
                top: 40px;
                right: -40px;
                bottom: 40px;
                left: -40px;
            }

            .bg-line-svg-our-story-bottom-left {
                bottom: 40px;
                left: -40px;
                right: auto;
            }
        }
    </style>
</section>

<section id="why-us" class="spacer-double-lg position-relative overflow-hidden">
    <!-- SVG Decorative Line Why Us Top Left -->
    <svg class="bg-line-svg-why-us-top-left" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 0; left: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,50 C100,150 200,50 300,150" fill="none" stroke="rgba(148, 0, 211, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Why Us Bottom Right -->
    <svg class="bg-line-svg-why-us-bottom-right" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 0; right: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M300,50 C200,150 100,50 0,150" fill="none" stroke="rgba(148, 0, 211, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- Decorative Background Shapes -->
    <div class="position-absolute d-none d-lg-block" style="top: -60px; right: -60px; width: 220px; height: 220px; background: radial-gradient(circle at 60% 40%, #9400D3 0%, #4B0082 80%, transparent 100%); opacity: 0.08; border-radius: 50%; z-index: 1;"></div>
    <div class="position-absolute d-none d-lg-block" style="bottom: -100px; left: -100px; width: 300px; height: 300px; background: radial-gradient(circle at 40% 60%, #FF7D7F 0%, #6A5ACD 80%, transparent 100%); opacity: 0.07; border-radius: 50%; z-index: 1;"></div>
    <div class="position-absolute floating-shape shape1"></div>
    <div class="position-absolute floating-shape shape2"></div>
    <div class="position-absolute floating-shape shape3"></div>

    <div class="container position-relative" style="z-index:2;">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 text-center">
                <!-- <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Why Us</span> -->
                <h2 class="display-4 mb-3 font-weight-bold text-gradient">Why <span style="color:#4B0082;">HappinessFactors</span>?</h2>
                <div class="divider-custom animate-pulse mb-3">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-heart text-primary pulse-icon"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="lead text-muted mb-0">Revolutionizing workplace wellness with AI-powered, Spiritual Science-backed, and human-centered solutions for real happiness and high performance.</p>
            </div>
        </div>

        <!-- Main Content: Challenge & Solution Cards -->
        <div class="row align-items-center justify-content-center mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card border-0 bg-white shadow-lg rounded-xl p-5 hover-lift h-100 gradient-border-left">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box bg-gradient-primary-to-secondary rounded-circle text-white d-flex align-items-center justify-content-center mr-3" style="width:60px;height:60px;">
                            <i class="fas fa-brain fa-2x"></i>
                        </div>
                        <h3 class="h4 mb-0 font-weight-bold">The Challenge</h3>
                    </div>
                    <p class="lead mb-0 text-muted">Modern professionals face relentless pressure, burnout, and disengagement. Old-school wellness programs just don't cut it anymore.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 bg-white shadow-lg rounded-xl p-5 hover-lift h-100 gradient-border-right">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box bg-gradient-success-to-primary rounded-circle text-white d-flex align-items-center justify-content-center mr-3" style="width:60px;height:60px;">
                            <i class="fas fa-lightbulb fa-2x"></i>
                        </div>
                        <h3 class="h4 mb-0 font-weight-bold">Our Solution</h3>
                    </div>
                    <p class="lead mb-0 text-muted">AI-powered, personalized wellness that fits your workflow. Real-time support, micro-interventions, and holistic growth—anytime, anywhere.</p>
                </div>
            </div>
        </div>

        <!-- Features Grid: Animated Cards -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="row g-4">
                    <?php
                    $features = [
                    ['icon' => 'fa-chart-line', 'title' => 'Business Impact', 'desc' => 'Boost productivity, reduce burnout, and improve retention with measurable ROI.'],
                    ['icon' => 'fa-rocket', 'title' => 'Peak Performance', 'desc' => 'Sharper focus, more energy, and less stress—your team\'s new normal.'],
                    ['icon' => 'fa-heart', 'title' => 'Whole-Person Care', 'desc' => 'Mind, body, and spirit—one platform, total wellness.'],
                    ['icon' => 'fa-clock', 'title' => 'Time-Smart', 'desc' => 'Bite-sized, AI-driven check-ins fit even the busiest schedules.'],
                    ['icon' => 'fa-shield-alt', 'title' => 'Proactive Support', 'desc' => 'Spot stress early and deliver help before it hurts performance.'],
                    ['icon' => 'fa-lock', 'title' => 'Secure, Seamless, Scalable', 'desc' => 'Secure, scalable, and customizable to fit your organization\'s unique needs.'],
                    ];
                    ?>
                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card-animated bg-white rounded-xl shadow-lg p-4 h-100 text-center animate__animated animate__fadeInUp" style="animation-delay: '<?php echo (0.1 + $i * 0.1); ?>'s;">
                            <div class="feature-icon-animated mb-3 mx-auto">
                                <i class="fas <?php echo e($feature['icon']); ?> text-gradient fa-2x"></i>
                            </div>
                            <h5 class="font-weight-bold mb-2"><?php echo e($feature['title']); ?></h5>
                            <p class="mb-0 text-muted"><?php echo e($feature['desc']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <!-- Animated Stats Section -->
        <div class="row justify-content-center py-5 mt-5 border-top border-bottom">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="stat-card text-center p-4 rounded-xl shadow-sm bg-white animate__animated animate__fadeInUp">
                    <div class="h1 mb-2" style="font-size:3rem;">
                        <img src="<?php echo e(asset('assets/img/GIF/relieved_face.gif')); ?>" alt="Less Workplace Stress" style="width: 100px; height: 100px;">
                    </div>
                    <div class="font-weight-bold mb-1">Less Workplace Stress</div>
                    <p class="text-muted mb-0">With our platform, teams feel lighter and more resilient.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="stat-card text-center p-4 rounded-xl shadow-sm bg-white animate__animated animate__fadeInUp" style="animation-delay:.2s;">
                    <div class="h1 mb-2" style="font-size:3rem;"><img src="<?php echo e(asset('assets/img/GIF/smiling_face.gif')); ?>" alt="Employee Satisfaction" style="width: 100px; height: 100px;"></div>
                    <div class="font-weight-bold mb-1">Employee Satisfaction</div>
                    <p class="text-muted mb-0">Happier, more engaged, and loyal employees.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card text-center p-4 rounded-xl shadow-sm bg-white animate__animated animate__fadeInUp" style="animation-delay:.4s;">
                    <div class="h1 mb-2" style="font-size:3rem;"><img src="<?php echo e(asset('assets/img/GIF/rocket.gif')); ?>" alt="Productivity Gain" style="width: 100px; height: 100px;"></div>
                    <div class="font-weight-bold mb-1">Productivity Gain</div>
                    <p class="text-muted mb-0">Real, measurable improvement in output and creativity.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row justify-content-center mt-5 pt-4">
            <div class="col-12 col-lg-8 text-center">
                <div class="card border-0 bg-gradient-primary-to-secondary text-white p-3 p-lg-5 rounded-xl shadow-lg animate__animated animate__pulse animate__infinite">
                    <div class="card-body">
                        <h3 class="mb-3 mb-lg-4 font-weight-bold" style="background: linear-gradient(90deg, #FF7D7F, #ffffff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; color: #FF7D7F; letter-spacing: 1px; text-shadow: 0 1px 2px rgba(0,0,0,0.1); font-size: calc(1.2rem + 0.6vw);">Ready to unlock your team's happiest, healthiest potential?</h3>
                        <p class="lead mb-3 mb-lg-4" style="font-size: calc(1rem + 0.3vw);">Join the movement—Boost resilience, productivity, and happiness starting today.</p>
                        <a href="#subscribe" class="btn btn-lg btn-light btn-hover-pulse shadow w-100 w-lg-auto">
                            Get Started Today <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        .bg-gradient-primary-to-secondary {
            background: linear-gradient(135deg, #4B0082 0%, #9400D3 100%);
        }

        .bg-gradient-success-to-primary {
            background: linear-gradient(135deg, #28a745 0%, #4B0082 100%);
        }

        .badge.animated-badge {
            animation: pulse 2s infinite;
        }

        .divider-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1.5rem 0;
        }

        .divider-custom-line {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #4B0082, transparent);
        }

        .divider-custom-icon {
            margin: 0 1rem;
        }

        .pulse-icon {
            animation: pulse 2s infinite;
        }

        .hover-lift {
            transition: all 0.4s cubic-bezier(.4, 2, .6, 1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.07);
        }

        .hover-lift:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 40px rgba(75, 0, 130, 0.12);
        }

        .rounded-xl {
            border-radius: 1.5rem !important;
        }

        .gradient-border-left {
            border-left: 6px solid #4B0082;
            border-image: linear-gradient(180deg, #4B0082, #9400D3) 1;
        }

        .gradient-border-right {
            border-right: 6px solid #9400D3;
            border-image: linear-gradient(180deg, #4B0082, #9400D3) 1;
        }

        .feature-card-animated {
            transition: box-shadow .3s, transform .3s;
            border: none;
            position: relative;
            z-index: 2;
        }

        .feature-card-animated:hover {
            box-shadow: 0 12px 32px rgba(75, 0, 130, 0.13);
            transform: translateY(-8px) scale(1.03);
        }

        .feature-icon-animated {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #f3f0fa 60%, #e9ecef 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 16px rgba(75, 0, 130, 0.07);
        }

        .stat-card {
            background: #fff;
            border-radius: 1.25rem;
            box-shadow: 0 6px 24px rgba(75, 0, 130, 0.07);
            transition: box-shadow .3s, transform .3s;
        }

        .stat-card:hover {
            box-shadow: 0 12px 32px rgba(75, 0, 130, 0.13);
            transform: translateY(-5px) scale(1.02);
        }

        .btn-hover-pulse:hover {
            animation: pulse 1s;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Floating shapes for extra engagement */
        .floating-shape {
            border-radius: 50%;
            opacity: 0.13;
            z-index: 0;
        }

        .shape1 {
            width: 60px;
            height: 60px;
            background: #4B0082;
            top: 12%;
            left: 85%;
            animation: floatShape1 5s infinite alternate;
        }

        .shape2 {
            width: 40px;
            height: 40px;
            background: #FF7D7F;
            bottom: 18%;
            left: 7%;
            animation: floatShape2 7s infinite alternate;
        }

        .shape3 {
            width: 90px;
            height: 90px;
            background: #6A5ACD;
            bottom: 7%;
            right: 8%;
            animation: floatShape3 8s infinite alternate;
        }

        @keyframes floatShape1 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-18px);
            }
        }

        @keyframes floatShape2 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(12px);
            }
        }

        @keyframes floatShape3 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        /* Animate.css fadeInUp fallback for feature cards if not loaded */
        .animate__animated.animate__fadeInUp {
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 40px, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .rounded-xl {
                border-radius: 1rem !important;
            }

            .feature-card-animated {
                margin-bottom: 1.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .rounded-xl {
                border-radius: .75rem !important;
            }

            .feature-card-animated {
                margin-bottom: 1rem;
            }
        }

        /* Add styles for new SVG lines in #why-us */
        .bg-line-svg-why-us-top-left .bg-line-path,
        .bg-line-svg-why-us-bottom-right .bg-line-path-right {
            animation: drawLine 6s ease-in-out forwards infinite alternate;
            /* Moderate animation speed */
        }

        @media (max-width: 991.98px) {

            .bg-line-svg-why-us-top-left,
            .bg-line-svg-why-us-bottom-right {
                width: 150px;
                height: 100px;
                top: 20px;
                left: -20px;
                right: -20px;
                bottom: 20px;
            }

            .bg-line-svg-why-us-bottom-right {
                bottom: 20px;
                right: -20px;
                left: auto;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Counter animation
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            counters.forEach(counter => {
                const animate = () => {
                    const value = +counter.getAttribute('data-count');
                    const data = +counter.innerText;

                    const time = value / speed;
                    if (data < value) {
                        counter.innerText = Math.ceil(data + time);
                        setTimeout(animate, 20);
                    } else {
                        counter.innerText = value;
                    }
                }
                animate();
            });

            // Parallax effect for video
            const videoContainer = document.querySelector('.parallax-effect');
            if (videoContainer) {
                document.addEventListener('mousemove', function(e) {
                    const mouseX = e.clientX / window.innerWidth - 0.5;
                    const mouseY = e.clientY / window.innerHeight - 0.5;

                    videoContainer.style.transform = `rotateY(${mouseX * 5}deg) rotateX(${mouseY * -5}deg)`;
                });
            }

            // Scroll reveal animations
            const revealElements = document.querySelectorAll('.reveal-fade, .reveal-slide-right, .reveal-slide-left, .reveal-fade-up');

            const revealOnScroll = () => {
                revealElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;

                    if (elementTop < window.innerHeight - elementVisible) {
                        element.style.animationPlayState = 'running';
                    }
                });
            }

            // Initialize animations
            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Check on load
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Jarallax
            jarallax(document.querySelectorAll('[data-jarallax-element]'), {
                speed: 0.2
            });

            // Existing Intersection Observer code
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.slide-in-image').forEach((image) => {
                observer.observe(image);
            });
        });
    </script>

</section>

<section id="services" class="spacer-double-lg position-relative overflow-hidden bg-light">
    <!-- SVG Decorative Line Services Top Left -->
    <svg class="bg-line-svg-services-top-left" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 50px; left: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,50 C100,150 200,50 300,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Services Bottom Right -->
    <svg class="bg-line-svg-services-bottom-right" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 50px; right: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M300,50 C200,150 100,50 0,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">The HappinessFactors Advantage</span>
                <h2 class="display-4 mb-3 font-weight-bold text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">HappinessFactors Products</h2>
                <div class="divider-custom animate-pulse mb-3">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-heart text-primary pulse-icon"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="lead text-muted mx-auto" style="max-width:700px;">
                    Unlock your happiest, healthiest self with our holistic suite of services—Coaching (Group & Individual), Trainings, Workshops, Offsites, Retreats & more to come!
                </p>
            </div>
        </div>
        <!-- Services Grid -->
        <div class="row justify-content-center g-4">
            <?php
            $services = [
            [
            'icon' => 'fa-chalkboard-teacher',
            'title' => 'Trainings',
            'desc' => 'Interactive training programs that build emotional resilience, mindfulness and leadership skills.',
            'color' => 'linear-gradient(135deg,#4B0082,#9400D3)',
            'link' => '/products/trainings'
            ],
            [
            'icon' => 'fa-mobile-alt',
            'title' => 'App',
            'desc' => 'Our mobile app delivers daily happiness practices, mood tracking, and guided meditations on the go.',
            'color' => 'linear-gradient(135deg,#00BCD4,#2196F3)',
            'link' => '/products/app'
            ],
            [
            'icon' => 'fa-graduation-cap',
            'title' => 'Courses',
            'desc' => 'Comprehensive online courses teaching science-backed techniques for lasting happiness and wellbeing.',
            'color' => 'linear-gradient(135deg,#FF7D7F,#4B0082)',
            'link' => '/products/courses'
            ],
            [
            'icon' => 'fa-user-friends',
            'title' => 'Coaching',
            'desc' => 'One-on-one and group coaching sessions for personalized guidance on your happiness journey.',
            'color' => 'linear-gradient(135deg,#6A5ACD,#FF7D7F)',
            'link' => '/products/coaching'
            ],
            [
            'icon' => 'fa-video',
            'title' => 'Webinars',
            'desc' => 'Live interactive online sessions featuring experts in positive psychology and emotional wellness.',
            'color' => 'linear-gradient(135deg,#28a745,#4B0082)',
            'link' => '/products/webinars'
            ],
            [
            'icon' => 'fa-ellipsis-h',
            'title' => 'More to Come',
            'desc' => 'Stay tuned for new, innovative happiness solutions launching soon!',
            'color' => 'linear-gradient(135deg,#FF7D7F,#9400D3)',
            'link' => '/products'
            ],
            ];
            ?>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <a href="<?php echo e($service['link']); ?>" class="text-decoration-none">
                    <div class="service-card-animated bg-white rounded-xl shadow-lg p-5 h-100 text-center animate__animated animate__fadeInUp" style="animation-delay: <?php echo (0.1 + $i * 0.1); ?>s;">
                        <div class="service-icon-animated mb-4 mx-auto" style="background: <?php echo $service['color']; ?>;">
                            <i class="fas <?php echo e($service['icon']); ?> text-white fa-2x"></i>
                        </div>
                        <h5 class="font-weight-bold mb-2 text-dark"><?php echo e($service['title']); ?></h5>
                        <p class="mb-0 text-muted"><?php echo e($service['desc']); ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Call to Action -->
        <div class="row justify-content-center mt-4 mt-md-5 pt-2 pt-md-3">
            <div class="col-12 col-md-8 col-lg-8 text-center">
                <a href="/products" class="btn btn-gradient btn-md btn-lg-md btn-ripple shadow w-100 w-md-auto">
                    Get Started with Happiness <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    <style>
        #services {
            background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
            position: relative;
            overflow: hidden;
        }

        .service-card-animated {
            transition: box-shadow .3s, transform .3s;
            border: none;
            position: relative;
            z-index: 2;
        }

        .service-card-animated:hover {
            box-shadow: 0 16px 40px rgba(75, 0, 130, 0.13);
            transform: translateY(-8px) scale(1.03);
        }

        .service-icon-animated {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 16px rgba(75, 0, 130, 0.10);
        }

        .btn-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            color: #fff;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover,
        .btn-gradient:focus {
            background: linear-gradient(90deg, #9400D3, #4B0082);
            color: #fff;
        }

        .btn-ripple {
            position: relative;
            overflow: hidden;
        }

        .btn-ripple:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transform: scale(0);
            opacity: 0;
            transition: transform 0.5s, opacity 0.5s;
        }

        .btn-ripple:active:after {
            transform: scale(2);
            opacity: 0;
            transition: 0s;
        }

        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        .divider-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1.5rem 0;
        }

        .divider-custom-line {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #4B0082, transparent);
        }

        .divider-custom-icon {
            margin: 0 1rem;
        }

        .pulse-icon {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .rounded-xl {
            border-radius: 1.5rem !important;
        }

        @media (max-width: 991.98px) {
            .rounded-xl {
                border-radius: 1rem !important;
            }

            .service-card-animated {
                margin-bottom: 1.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .rounded-xl {
                border-radius: .75rem !important;
            }

            .service-card-animated {
                margin-bottom: 1rem;
            }
        }

        /* Add styles for new SVG lines in #services */
        .bg-line-svg-services-top-left .bg-line-path,
        .bg-line-svg-services-bottom-right .bg-line-path-right {
            animation: drawLine 6s ease-in-out forwards infinite alternate;
            /* Moderate animation speed */
        }

        @media (max-width: 991.98px) {

            .bg-line-svg-services-top-left,
            .bg-line-svg-services-bottom-right {
                width: 150px;
                height: 100px;
                top: 20px;
                left: -20px;
                right: -20px;
                bottom: 20px;
            }

            .bg-line-svg-services-bottom-right {
                bottom: 20px;
                right: -20px;
                left: auto;
            }
        }
    </style>
</section>

<section id="video-cover" class="gradient-overlay gradient-overlay-dark video-cover mt-5 mb-5">
    <div class="curved-decoration top-n1 flip-xy">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">

            <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z"></path>

        </svg>
    </div>
    <img class="bg-image" src="assets/img/9.jpg" alt="">
    <div class="container spacer-xlg z-index-2 position-relative">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6 ">
                <!-- Video Play Button: opens YouTube video in a modal overlay on the same page -->
                <a href="#" class="play-but mt-3" id="openVideoModal">
                    <span class="play-icon play-icon-md">
                        <span class="play-icon-inner">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 158 178.4"
                                enable-background="new 0 0 158 178.4;" xml:space="preserve">
                                <polygon class="st0" points="147.8,89.2 5,169.8 5,8.6 147.8,89.2 " />
                            </svg>
                        </span>
                    </span>
                </a>

                <!-- Modal Overlay for YouTube Video -->
                <div id="videoModalOverlay" style="display:none;position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.85);align-items:center;justify-content:center;">
                    <div style="position:relative;max-width:90vw;max-height:80vh;width:640px;">
                        <button id="closeVideoModal" style="position:absolute;top:-32px;right:-8px;background:none;border:none;font-size:2rem;color:#fff;z-index:2;cursor:pointer;">&times;</button>
                        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border-radius:1rem;box-shadow:0 8px 32px rgba(0,0,0,0.25);">
                            <iframe id="videoModalIframe" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var openBtn = document.getElementById('openVideoModal');
                        var modal = document.getElementById('videoModalOverlay');
                        var closeBtn = document.getElementById('closeVideoModal');
                        var iframe = document.getElementById('videoModalIframe');
                        var youtubeUrl = "https://www.youtube.com/embed/sy8qJhHQkZI?autoplay=1&rel=0&showinfo=0";

                        openBtn.addEventListener('click', function(e) {
                            e.preventDefault();
                            iframe.src = youtubeUrl;
                            modal.style.display = 'flex';
                            document.body.style.overflow = 'hidden';
                        });

                        closeBtn.addEventListener('click', function() {
                            modal.style.display = 'none';
                            iframe.src = '';
                            document.body.style.overflow = '';
                        });

                        // Close modal on overlay click (but not when clicking inside the video)
                        modal.addEventListener('click', function(e) {
                            if (e.target === modal) {
                                modal.style.display = 'none';
                                iframe.src = '';
                                document.body.style.overflow = '';
                            }
                        });

                        // Optional: close modal on ESC key
                        document.addEventListener('keydown', function(e) {
                            if (e.key === "Escape" && modal.style.display === 'flex') {
                                modal.style.display = 'none';
                                iframe.src = '';
                                document.body.style.overflow = '';
                            }
                        });
                    });
                </script>
                <h3 class="h5 text-white mt-3 mb-0">Discover HappinessFactors</h3>
                <span class="font-size-14 text-white">Watch our introduction video</span>
            </div>
        </div>
    </div>
    <div class="curved-decoration bottom-n1">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">

            <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z"></path>

        </svg>
    </div>
</section>

<section id="subscribe" class="subscribe-section position-relative py-5 overflow-hidden">
    <!-- SVG Decorative Line Subscribe Top Left -->
    <svg class="bg-line-svg-subscribe-top-left" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 0; left: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,50 C100,150 200,50 300,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Subscribe Bottom Right -->
    <svg class="bg-line-svg-subscribe-bottom-right" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 0; right: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M300,50 C200,150 100,50 0,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- Decorative SVG Top Wave -->
    <div class="subscribe-wave-top position-absolute w-100" style="top:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="subscribe-visual text-center text-lg-left position-relative">
                    <img src="<?php echo e(asset('assets/img/10.jpg')); ?>" alt="Subscribe Visual" class="img-fluid rounded-xl shadow-lg subscribe-img-main">
                    <!-- Floating shapes for engagement -->
                    <div class="subscribe-floating-shape shape1"></div>
                    <div class="subscribe-floating-shape shape2"></div>
                    <div class="subscribe-floating-shape shape3"></div>
                    <!-- Motivational quote card -->
                    <div class="subscribe-quote-card bg-white shadow rounded-lg p-3 d-flex align-items-center">
                        <div class="icon-box bg-gradient-primary-to-secondary rounded-circle text-white d-flex align-items-center justify-content-center mr-3" style="width:40px;height:40px;font-size:1.2rem;">
                            <i class="fas fa-smile-beam"></i>
                        </div>
                        <span class="font-italic text-muted small">"Happiness is best when shared. Join our journey!"</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="subscribe-form-wrapper bg-white rounded-xl shadow-lg p-5 animate__animated animate__fadeInRight">
                    <div class="mb-4 text-center">
                        <span class="badge badge-pill px-3 py-2 mb-2 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Stay Connected</span>
                        <h2 class="font-weight-bold mb-1 text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Subscribe to Happiness</h2>
                        <!-- <img class="max-width-4 mb-2" src="<?php echo e(asset('assets/svg/title-line.svg')); ?>" alt=""> -->
                        <p class="text-muted mb-0">Get exclusive tips, inspiration, and updates delivered to your inbox. <span class="d-none d-md-inline">No spam, just happiness!</span></p>
                    </div>

                    <!-- Subscription Form -->
                    <form action="https://v1.gdapis.com/api/groovemail/saverawuserdetails" method="post" autocomplete="off">
                        <input type="hidden" name="formid" value="681f76698934b0197c556b95">
                        <input type="hidden" name="ip_address" value="false">
                        <input type="hidden" name="appUrl" value="https://app.groove.cm">
                        <input type="hidden" name="form_submit_type" value="raw_html">
                        <input type="hidden" name="random_hidden_key_pvICrv2M" value="">

                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg rounded-pill px-4" id="full_name_681f76698934b0197c556b95"
                                name="full_name" pattern="^.{1,}$" placeholder="Your Name" type="text" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg rounded-pill px-4" id="email_681f76698934b0197c556b95"
                                name="email" pattern="[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,4})" placeholder="Your Email" type="email" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg rounded-pill px-4" id="subject_681f76698934b0197c556b95"
                                name="subject" pattern="^.{1,}$" placeholder="Subject" type="text" required>
                        </div>

                        <div class="form-group mb-3">
                            <textarea class="form-control rounded-lg px-4" id="message_681f76698934b0197c556b95"
                                rows="4" name="message" placeholder="Goals/Expectations\nCurrent Challenges" required></textarea>
                        </div>

                        <button class="btn btn-gradient btn-lg btn-block rounded-pill btn-ripple shadow" type="submit">
                            <span class="font-weight-bold">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </span>
                        </button>

                        <div class="text-center mt-3 small text-muted">
                            <i class="fas fa-lock mr-1"></i>Your info is safe with us.
                        </div>
                        <link rel="stylesheet" href="https://app.groove.cm/groovemail/embed/app.css">
                        <script src="https://app.groove.cm/groovemail/embed/countryCodeInput.js" formId="681f76698934b0197c556b95"></script>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Decorative SVG Bottom Wave -->
    <!-- <div class="subscribe-wave-bottom position-absolute w-100" style="bottom:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,0 C480,80 960,-80 1440,0 L1440,80 L0,80 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div> -->
    <style>
        .subscribe-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
            overflow: hidden;
            position: relative;
        }

        .subscribe-img-main {
            max-width: 90%;
            border-radius: 1.5rem;
            box-shadow: 0 12px 32px rgba(75, 0, 130, 0.10);
        }

        .subscribe-visual {
            position: relative;
            min-height: 340px;
        }

        .subscribe-quote-card {
            position: absolute;
            bottom: 18px;
            left: 10%;
            max-width: 320px;
            box-shadow: 0 8px 32px rgba(75, 0, 130, 0.10);
            border-left: 4px solid #4B0082;
            font-size: 1rem;
            z-index: 2;
        }

        .subscribe-floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.13;
            z-index: 1;
        }

        .subscribe-floating-shape.shape1 {
            width: 40px;
            height: 40px;
            background: #4B0082;
            top: 10%;
            left: 80%;
            animation: floatShape1 5s infinite alternate;
        }

        .subscribe-floating-shape.shape2 {
            width: 28px;
            height: 28px;
            background: #FF7D7F;
            bottom: 18%;
            left: 12%;
            animation: floatShape2 6s infinite alternate;
        }

        .subscribe-floating-shape.shape3 {
            width: 60px;
            height: 60px;
            background: #6A5ACD;
            bottom: 5%;
            right: 5%;
            animation: floatShape3 7s infinite alternate;
        }

        @keyframes floatShape1 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-18px);
            }
        }

        @keyframes floatShape2 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(12px);
            }
        }

        @keyframes floatShape3 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .subscribe-form-wrapper {
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 12px 32px rgba(75, 0, 130, 0.10);
        }

        .btn-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            color: #fff;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover,
        .btn-gradient:focus {
            background: linear-gradient(90deg, #9400D3, #4B0082);
            color: #fff;
        }

        .btn-ripple {
            position: relative;
            overflow: hidden;
        }

        .btn-ripple:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transform: scale(0);
            opacity: 0;
            transition: transform 0.5s, opacity 0.5s;
        }

        .btn-ripple:active:after {
            transform: scale(2);
            opacity: 0;
            transition: 0s;
        }

        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .rounded-xl {
            border-radius: 1.5rem !important;
        }

        @media (max-width: 991.98px) {
            .subscribe-img-main {
                max-width: 100%;
                margin-bottom: 2rem;
            }

            .subscribe-quote-card {
                left: 0;
                bottom: 0;
                max-width: 90%;
            }

            .rounded-xl {
                border-radius: 1rem !important;
            }
        }

        @media (max-width: 767.98px) {
            .subscribe-section {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }

            .subscribe-form-wrapper {
                padding: 2rem 1rem;
            }

            .rounded-xl {
                border-radius: .75rem !important;
            }
        }

        /* Add styles for new SVG lines in #subscribe */
        .bg-line-svg-subscribe-top-left .bg-line-path,
        .bg-line-svg-subscribe-bottom-right .bg-line-path-right {
            animation: drawLine 7s ease-in-out forwards infinite alternate;
            /* Slower animation speed */
        }

        @media (max-width: 991.98px) {

            .bg-line-svg-subscribe-top-left,
            .bg-line-svg-subscribe-bottom-right {
                width: 150px;
                height: 100px;
                top: 10px;
                left: 10px;
                right: 10px;
                bottom: 10px;
            }

            .bg-line-svg-subscribe-bottom-right {
                bottom: 10px;
                right: 10px;
                left: auto;
            }
        }
    </style>
</section>

<!-- Testimonials Full Section -->
<section id="testimonials" class="spacer-double-lg position-relative bg-light overflow-hidden">
    <!-- SVG Decorative Line Testimonials Top Left -->
    <svg class="bg-line-svg-testimonials-top-left" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 0; left: -100px; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <defs>
            <linearGradient id="testimonialGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color: rgba(75, 0, 130, 0.15); stop-opacity: 1" />
                <stop offset="100%" style="stop-color: rgba(148, 0, 211, 0.15); stop-opacity: 1" />
            </linearGradient>
        </defs>
        <path class="bg-line-path" d="M0,200 C100,100 200,250 300,150 C350,100 380,50 400,0" fill="none" stroke="url(#testimonialGradient1)" stroke-width="3" stroke-linecap="round"></path>
        <path class="bg-line-path" d="M50,250 C150,150 250,200 350,100" fill="none" stroke="url(#testimonialGradient1)" stroke-width="2" stroke-linecap="round" opacity="0.5"></path>
    </svg>
    <!-- SVG Decorative Line Testimonials Bottom Right -->
    <svg class="bg-line-svg-testimonials-bottom-right" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 0; right: -100px; width: 400px; height: 300px; pointer-events: none; z-index: 0;">
        <defs>
            <linearGradient id="testimonialGradient2" x1="100%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color: rgba(148, 0, 211, 0.15); stop-opacity: 1" />
                <stop offset="100%" style="stop-color: rgba(75, 0, 130, 0.15); stop-opacity: 1" />
            </linearGradient>
        </defs>
        <path class="bg-line-path-right" d="M400,200 C300,100 200,250 100,150 C50,100 20,50 0,0" fill="none" stroke="url(#testimonialGradient2)" stroke-width="3" stroke-linecap="round"></path>
        <path class="bg-line-path-right" d="M350,250 C250,150 150,200 50,100" fill="none" stroke="url(#testimonialGradient2)" stroke-width="2" stroke-linecap="round" opacity="0.5"></path>
    </svg>
    <style>
        @media (max-width: 991.98px) {

            .bg-line-svg-testimonials-top-left,
            .bg-line-svg-testimonials-bottom-right {
                width: 250px;
                height: 200px;
                opacity: 0.7;
            }

            .bg-line-svg-testimonials-top-left {
                top: 20px;
                left: -50px;
            }

            .bg-line-svg-testimonials-bottom-right {
                bottom: 20px;
                right: -50px;
            }
        }

        @media (max-width: 575.98px) {

            .bg-line-svg-testimonials-top-left,
            .bg-line-svg-testimonials-bottom-right {
                width: 200px;
                height: 150px;
                opacity: 0.5;
            }
        }
    </style>
    <div class="container position-relative z-index-2">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Testimonials</span>
                <h2 class="display-4 mb-3 font-weight-bold text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">What Our Clients Say</h2>
                <div class="divider-custom animate-pulse mb-3">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-heart text-primary pulse-icon"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="lead text-muted mb-0">Real stories from real people who found happiness and transformation with us.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Testimonial Card 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="testimonial-card bg-white rounded-xl shadow-lg p-5 h-100 text-center position-relative animate__animated animate__fadeInUp" style="animation-delay:0.1s;">
                    <!-- <div class="testimonial-avatar mx-auto mb-3 d-flex align-items-center justify-content-center" style="background: #4B0082; color: #fff; width: 72px; height: 72px; border-radius: 50%; font-size: 2rem; font-weight: bold; box-shadow: 0 4px 16px rgba(75, 0, 130, 0.10);">
                        E R
                    </div> -->
                    <p class="testimonial-quote mb-4 font-italic text-primary">"HappinessFactors helped us cultivate a more positive and productive workplace. Their training was life-changing!"</p>
                    <div class="testimonial-meta">
                        <span class="font-weight-bold d-block">Wellness Director</span>
                    </div>
                    <span class="testimonial-quote-icon"><i class="fas fa-quote-left"></i></span>
                </div>
            </div>
            <!-- Testimonial Card 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="testimonial-card bg-white rounded-xl shadow-lg p-5 h-100 text-center position-relative animate__animated animate__fadeInUp" style="animation-delay:0.2s;">
                    <!-- <div class="testimonial-avatar mx-auto mb-3 d-flex align-items-center justify-content-center" style="background: #9400D3; color: #fff; width: 72px; height: 72px; border-radius: 50%; font-size: 2rem; font-weight: bold; box-shadow: 0 4px 16px rgba(75, 0, 130, 0.10);">
                        C T
                    </div> -->
                    <p class="testimonial-quote mb-4 font-italic text-primary">"From stress management to emotional intelligence, our team learned valuable tools that made an immediate impact."</p>
                    <div class="testimonial-meta">
                        <span class="font-weight-bold d-block">HR Manager</span>
                    </div>
                    <span class="testimonial-quote-icon"><i class="fas fa-quote-left"></i></span>
                </div>
            </div>
            <!-- Testimonial Card 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="testimonial-card bg-white rounded-xl shadow-lg p-5 h-100 text-center position-relative animate__animated animate__fadeInUp" style="animation-delay:0.3s;">
                    <!-- <div class="testimonial-avatar mx-auto mb-3 d-flex align-items-center justify-content-center" style="background: #6A5ACD; color: #fff; width: 72px; height: 72px; border-radius: 50%; font-size: 2rem; font-weight: bold; box-shadow: 0 4px 16px rgba(75, 0, 130, 0.10);">
                        S L
                    </div> -->
                    <p class="testimonial-quote mb-4 font-italic text-primary">"The coaching sessions were inspiring and practical. I feel more confident and resilient every day."</p>
                    <div class="testimonial-meta">
                        <span class="font-weight-bold d-block">Team Lead</span>
                    </div>
                    <span class="testimonial-quote-icon"><i class="fas fa-quote-left"></i></span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-auto">
                <a href="#contact" class="btn btn-gradient btn-lg btn-ripple shadow">
                    Share Your Story <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Decorative floating shapes -->
    <div class="testimonial-floating-shape shape1"></div>
    <div class="testimonial-floating-shape shape2"></div>
    <div class="testimonial-floating-shape shape3"></div>
    <style>
        #testimonials {
            background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
            position: relative;
            overflow: hidden;
        }

        .testimonial-card {
            position: relative;
            overflow: visible;
            transition: box-shadow .3s, transform .3s;
        }

        .testimonial-card:hover {
            box-shadow: 0 16px 40px rgba(75, 0, 130, 0.13);
            transform: translateY(-8px) scale(1.03);
        }

        .testimonial-avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #fff;
            box-shadow: 0 4px 16px rgba(75, 0, 130, 0.10);
        }

        .testimonial-quote {
            font-size: 1.1rem;
            color: #4B0082;
        }

        .testimonial-meta {
            margin-top: 10px;
        }

        .testimonial-quote-icon {
            position: absolute;
            top: 18px;
            left: 18px;
            font-size: 2rem;
            color: #9400D3;
            opacity: 0.12;
            z-index: 0;
        }

        .divider-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1.5rem 0;
        }

        .divider-custom-line {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #4B0082, transparent);
        }

        .divider-custom-icon {
            margin: 0 1rem;
        }

        .pulse-icon {
            animation: pulse 2s infinite;
        }

        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .rounded-xl {
            border-radius: 1.5rem !important;
        }

        .btn-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            color: #fff;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover,
        .btn-gradient:focus {
            background: linear-gradient(90deg, #9400D3, #4B0082);
            color: #fff;
        }

        .btn-ripple {
            position: relative;
            overflow: hidden;
        }

        .btn-ripple:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transform: scale(0);
            opacity: 0;
            transition: transform 0.5s, opacity 0.5s;
        }

        .btn-ripple:active:after {
            transform: scale(2);
            opacity: 0;
            transition: 0s;
        }

        /* Floating shapes for extra engagement */
        .testimonial-floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.13;
            z-index: 0;
        }

        .testimonial-floating-shape.shape1 {
            width: 60px;
            height: 60px;
            background: #4B0082;
            top: 12%;
            left: 85%;
            animation: floatShape1 5s infinite alternate;
        }

        .testimonial-floating-shape.shape2 {
            width: 40px;
            height: 40px;
            background: #FF7D7F;
            bottom: 18%;
            left: 7%;
            animation: floatShape2 7s infinite alternate;
        }

        .testimonial-floating-shape.shape3 {
            width: 90px;
            height: 90px;
            background: #6A5ACD;
            bottom: 7%;
            right: 8%;
            animation: floatShape3 8s infinite alternate;
        }

        @keyframes floatShape1 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-18px);
            }
        }

        @keyframes floatShape2 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(12px);
            }
        }

        @keyframes floatShape3 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @media (max-width: 991.98px) {
            .rounded-xl {
                border-radius: 1rem !important;
            }

            .testimonial-card {
                margin-bottom: 1.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .rounded-xl {
                border-radius: .75rem !important;
            }

            .testimonial-card {
                margin-bottom: 1rem;
            }
        }

        /* Add styles for new SVG lines in #testimonials */
        .bg-line-svg-testimonials-top-left .bg-line-path,
        .bg-line-svg-testimonials-bottom-right .bg-line-path-right {
            animation: drawLine 6s ease-in-out forwards infinite alternate;
            /* Moderate animation speed */
        }

        @media (max-width: 991.98px) {

            .bg-line-svg-testimonials-top-left,
            .bg-line-svg-testimonials-bottom-right {
                width: 150px;
                height: 100px;
                top: 20px;
                left: -20px;
                right: -20px;
                bottom: 20px;
            }

            .bg-line-svg-testimonials-bottom-right {
                bottom: 20px;
                right: -20px;
                left: auto;
            }
        }
    </style>
</section>

<!-- FAQ Section -->
<section id="faq" class="spacer-double-lg position-relative overflow-hidden bg-light">
    <!-- SVG Decorative Line FAQ Top Left -->
    <svg class="bg-line-svg-faq-top-left" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 0; left: 0; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,50 C100,150 200,50 300,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line FAQ Bottom Right -->
    <svg class="bg-line-svg-faq-bottom-right" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 0; right: 0; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M300,50 C200,150 100,50 0,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- Decorative SVG Top Wave -->
    <div class="faq-wave-top position-absolute w-100" style="top:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Got Questions?</span>
                <h2 class="display-4 mb-3 font-weight-bold text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent; font-size: calc(1.8rem + 1.2vw);">Frequently Asked Questions</h2>
                <div class="divider-custom animate-pulse mb-3">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-heart text-primary pulse-icon"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="lead text-muted mb-0" style="font-size: calc(1rem + 0.2vw);">Find quick answers to common questions about our services, mission, and how we can help you.</p>
            </div>
        </div>

        <!-- FAQ Items -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="faqList">
                    <!-- FAQ Item 1 -->
                    <div class="card mb-3 shadow-sm rounded-lg faq-item">
                        <div class="card-header bg-white border-0 py-4" id="headingOne" style="border-bottom: none !important;">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-left text-decoration-none d-flex justify-content-between align-items-center collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="faq-question font-weight-bold">What products/services does HappinessFactors offer?</span>
                                    <i class="fas fa-chevron-down ml-2"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqList">
                            <div class="card-body text-muted pt-0">
                                HappinessFactors offers a holistic suite of services including Trainings, a mobile App, online Courses, one-on-one and group Coaching, and Webinars. We also have more innovative solutions coming soon!
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="card mb-3 shadow-sm rounded-lg faq-item">
                        <div class="card-header bg-white border-0 py-4" id="headingTwo" style="border-bottom: none !important;">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-left text-decoration-none d-flex justify-content-between align-items-center collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="faq-question font-weight-bold">What is the approach of HappinessFactors?</span>
                                    <i class="fas fa-chevron-down ml-2"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqList">
                            <div class="card-body text-muted pt-0">
                                We combine Ancient Wisdom with Spiritual Science, modern neuroscience, and positive psychology to create holistic wellness solutions that deliver measurable outcomes like reduced stress, enhanced productivity, and improved emotional resilience.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="card mb-3 shadow-sm rounded-lg faq-item">
                        <div class="card-header bg-white border-0 py-4" id="headingThree" style="border-bottom: none !important;">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-left text-decoration-none d-flex justify-content-between align-items-center collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="faq-question font-weight-bold">How do I contact HappinessFactors?</span>
                                    <i class="fas fa-chevron-down ml-2"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqList">
                            <div class="card-body text-muted pt-0">
                                You can reach us via email at <a href="mailto:funny@happinessfactors.com" class="text-gradient">funny@happinessfactors.com</a>, by phone at 1 (408) 389 - 3073, or visit our office at PO Box 611104, San Jose, CA 95161. You can also connect with us on our social media channels linked in the contact section.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="card mb-3 shadow-sm rounded-lg faq-item">
                        <div class="card-header bg-white border-0 py-4" id="headingFour" style="border-bottom: none !important;">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-left text-decoration-none d-flex justify-content-between align-items-center collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="faq-question font-weight-bold">Is there a subscription or membership required?</span>
                                    <i class="fas fa-chevron-down ml-2"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqList">
                            <div class="card-body text-muted pt-0">
                                Yes, a subscription is required to access our full range of services including the App, Courses, and Coaching after your free trial period ends. You can find more details in the <a href="#subscribe" class="text-gradient">Subscribe</a> section of this page. We respect your privacy, and you may unsubscribe at any time. For more information, please refer to our <a href="/terms-and-conditions" class="text-gradient">Terms and Privacy pages</a>.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="card mb-3 shadow-sm rounded-lg faq-item">
                        <div class="card-header bg-white border-0 py-4" id="headingFive" style="border-bottom: none !important;">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-left text-decoration-none d-flex justify-content-between align-items-center collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="faq-question font-weight-bold">💡 Is HappinessFactors right for me?</span>
                                    <i class="fas fa-chevron-down ml-2"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqList">
                            <div class="card-body text-muted pt-0">
                                HappinessFactors is built for anyone ready to break free from stress and unlock lasting well-being, personally or professionally.
                                Whether you're a:<br>
                                💼 Corporate leader or HR professional looking to boost employee engagement, reduce burnout, and foster a thriving work culture...<br>
                                🚀 Entrepreneur juggling stress and vision while trying to scale sustainably...<br>
                                🧘 Wellness seeker craving a deeper, more balanced emotional life...<br>
                                🏡 Busy parent or caregiver managing the chaos of daily life and looking for calm...<br>
                                🌍 Organization or team ready to prioritize mental health without sacrificing productivity...
                                HappinessFactors meets you where you are and guides you to where you want to be.
                                We combine holistic practices with neuroscience-backed techniques and cutting-edge tech to help individuals and teams feel better, perform better, and live with purpose.<br>
                                <p class="fw-bold">
                                    If you're ready to transform stress into clarity, burnout into balance, and pressure into purpose: HappinessFactors is for you.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Decorative SVG Bottom Wave -->
    <div class="faq-wave-bottom position-absolute w-100" style="bottom:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,0 C480,80 960,-80 1440,0 L1440,80 L0,80 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>
    <style>
        #faq {
            background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
            position: relative;
            overflow: hidden;
        }

        #faq .card {
            border: none;
            transition: box-shadow 0.3s ease;
        }

        #faq .card:hover {
            box-shadow: 0 8px 24px rgba(75, 0, 130, 0.08) !important;
        }

        #faq .card-header {
            cursor: pointer;
            padding: 1.5rem 2rem;
            position: relative;
        }

        #faq .card-header h5 {
            width: 100%;
        }

        #faq .btn-link {
            color: #212529;
            /* Dark text for question */
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Restore space-between */
            flex-wrap: wrap;
            /* Allow text to wrap */
        }

        #faq .btn-link:hover {
            color: #4B0082;
            /* Highlight color on hover */
        }

        #faq .btn-link i {
            transition: transform 0.3s ease;
            color: #4B0082;
            flex-shrink: 0;
            /* Prevent icon from shrinking */
        }

        #faq .btn-link.collapsed i {
            transform: rotate(0deg);
        }

        #faq .btn-link:not(.collapsed) i {
            transform: rotate(180deg);
        }

        #faq .faq-question {
            font-size: 1.1rem;
            /* Default font size */
            color: #4B0082;
            flex: 1;
            /* Simplified flex shorthand for robust wrapping */
            min-width: 0;
            /* Allow content to shrink below its intrinsic size */
            text-align: left;
            word-break: break-word;
            white-space: normal;
            /* Ensure text wraps */
        }

        #faq .card-body {
            padding: 1rem 2rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, .125);
            color: #6c757d;
            /* Muted text for answer */
        }

        #faq .input-group.rounded-pill {
            border-radius: 50rem !important;
        }

        #faq .form-control.rounded-pill {
            border-radius: 50rem !important;
            padding-left: 1.5rem;
        }

        #faq .input-group-text.rounded-pill {
            border-radius: 0 50rem 50rem 0 !important;
            background-color: #fff;
        }

        #faqSearch {
            box-shadow: none !important;
            /* Remove default form control shadow */
        }

        #faqSearch:focus {
            box-shadow: none !important;
            border-color: transparent !important;
        }

        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        .divider-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1.5rem 0;
        }

        .divider-custom-line {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #4B0082, transparent);
        }

        .divider-custom-icon {
            margin: 0 1rem;
        }

        .pulse-icon {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .rounded-lg {
            border-radius: 0.75rem !important;
        }


        /* Responsive Adjustments */
        @media (max-width: 767.98px) {
            #faq .card-header {
                padding: 1rem 1.5rem;
            }

            #faq .card-body {
                padding: 0.5rem 1.5rem 1rem;
                font-size: 0.95rem;
                /* Adjusted font size for mobile answers */
            }

            #faq .btn-link {
                /* font-size: 1rem; Adjusted font size for mobile questions - removed as it's set on faq-question */
            }

            #faq .faq-question {
                font-size: 1rem;
                /* Adjusted font size for mobile questions */
                margin-right: 10px;
                /* Add space between text and icon */
                width: 100%;
                /* Force question to take full width and wrap */
            }
        }

        /* Add styles for new SVG lines in #faq */
        .bg-line-svg-faq-top-left .bg-line-path,
        .bg-line-svg-faq-bottom-right .bg-line-path-right {
            animation: drawLine 6s ease-in-out forwards infinite alternate;
            /* Moderate animation speed */
        }

        @media (max-width: 991.98px) {

            .bg-line-svg-faq-top-left,
            .bg-line-svg-faq-bottom-right {
                width: 150px;
                height: 100px;
                top: 20px;
                left: -20px;
                right: -20px;
                bottom: 20px;
            }

            .bg-line-svg-faq-bottom-right {
                bottom: 20px;
                right: -20px;
                left: auto;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple search/filter functionality
            const searchInput = document.getElementById('faqSearch');
            const faqItems = document.querySelectorAll('.faq-item');

            searchInput.addEventListener('input', function() {
                const filter = searchInput.value.toLowerCase();
                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question').textContent.toLowerCase();
                    const answer = item.querySelector('.card-body') ? item.querySelector('.card-body').textContent.toLowerCase() : '';
                    if (question.includes(filter) || answer.includes(filter)) {
                        item.style.display = ''; // Show item
                    } else {
                        item.style.display = 'none'; // Hide item
                    }
                });
            });

            // Initialize collapse state - ensure all are collapsed on load
            $('#faqList .collapse').collapse('hide');
        });
    </script>

</section>

<section id="contact" class="contact-section position-relative overflow-hidden py-5">
    <!-- SVG Decorative Line Contact Top Left -->
    <svg class="bg-line-svg-contact-top-left" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 50px; left: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,150 C100,50 200,150 300,50" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Contact Bottom Right -->
    <svg class="bg-line-svg-contact-bottom-right" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 50px; right: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M300,150 C200,50 100,150 0,50" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- Decorative SVG Top Wave -->
    <div class="contact-wave-top position-absolute w-100" style="top:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center justify-content-between">
            <!-- Left: Contact Info & Social -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="contact-info-wrapper bg-white rounded-xl shadow-lg p-5 animate__animated animate__fadeInLeft">
                    <div class="mb-4">
                        <span class="badge badge-pill px-3 py-2 mb-2 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">For Your HappinessFactors!</span>
                        <h2 class="font-weight-bold mb-1 text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Let's Connect!</h2>
                        <!-- <img class="max-width-4 mb-2" src="<?php echo e(asset('assets/svg/title-line.svg')); ?>" alt=""> -->
                        <p class="text-muted mb-0"><img src="<?php echo e(asset('assets/img/GIF/heart-letter.gif')); ?>" alt="Got questions, big dreams, or just want to say hi?" style="height: 20px; width: 20px;"> Got questions, big dreams, or just want to say hi? <br>
                            We're here for all of it—and for <span class="font-weight-bold text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">you</span>.<br>
                            <span class="d-block mt-2">
                                <img src="<?php echo e(asset('assets/img/GIF/sparkle.gif')); ?>" alt="Sparkle" style="height: 20px; width: 20px;">
                                Let's turn your "meh" days into magic.
                                <img src="<?php echo e(asset('assets/img/GIF/purple-heart.gif')); ?>" alt="Purple heart" style="height: 20px; width: 20px;">
                            </span>
                        </p>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 mb-3 d-flex align-items-center">
                            <span class="contact-icon shadow-inner rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:48px;height:48px;background:linear-gradient(135deg,#4B0082,#9400D3);">
                                <img class="max-width-1" src="<?php echo e(asset('assets/svg/address.svg')); ?>" alt="" style="width:28px;filter:brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(200%) contrast(100%);">
                            </span>
                            <div>
                                <div class="font-weight-bold text-dark">Address</div>
                                <div class="small text-muted">PO Box 611104, San Jose, CA 95161</div>
                            </div>
                        </div>
                        <div class="col-12 mb-3 d-flex align-items-center">
                            <span class="contact-icon shadow-inner rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:48px;height:48px;background:linear-gradient(135deg,#6A5ACD,#FF7D7F);">
                                <img class="max-width-1" src="<?php echo e(asset('assets/svg/phone.svg')); ?>" alt="" style="width:28px;filter:brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(200%) contrast(100%);">
                            </span>
                            <div>
                                <div class="font-weight-bold text-dark">Phone</div>
                                <div class="small text-muted">1 (408) 389 - 3073</div>
                            </div>
                        </div>
                        <div class="col-12 mb-3 d-flex align-items-center">
                            <span class="contact-icon shadow-inner rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:48px;height:48px;background:linear-gradient(135deg,#FF7D7F,#4B0082);">
                                <img class="max-width-1" src="<?php echo e(asset('assets/svg/email.svg')); ?>" alt="" style="width:28px;filter:brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(200%) contrast(100%);">
                            </span>
                            <div>
                                <div class="font-weight-bold text-dark">Email</div>
                                <div class="small text-muted">
                                    <a href="mailto:funny@happinessfactors.com" class="text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">funny@happinessfactors.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-links mt-4">
                        <span class="font-weight-bold text-muted mr-2">Connect:</span>
                        <a href="https://www.facebook.com/HappinessFactors/" class="social-icon mr-2" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/happinessfaster" class="social-icon mr-2" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/18749650/admin/dashboard/" class="social-icon mr-2" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/happinessfactors/" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Right: Contact Form -->
            <div class="col-lg-5">
                <div class="contact-form-wrapper bg-white rounded-xl shadow-lg p-5 animate__animated animate__fadeInRight">
                    <div class="mb-4 text-center">
                        <span class="badge badge-pill px-3 py-2 mb-2 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Contact Us</span>
                    </div>

                    <form action="https://v1.gdapis.com/api/groovemail/saverawuserdetails" method="post">
                        <input type="hidden" name="formid" value="681f76698934b0197c556b95">
                        <input type="hidden" name="ip_address" value="false">
                        <input type="hidden" name="appUrl" value="https://app.groove.cm">
                        <input type="hidden" name="form_submit_type" value="raw_html">
                        <input type="hidden" name="random_hidden_key_pvICrv2M" value="">

                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg rounded-pill px-4" id="full_name_681f76698934b0197c556b95"
                                name="full_name" pattern="^.{1,}$" placeholder="Your Name" type="text" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg rounded-pill px-4" id="email_681f76698934b0197c556b95"
                                name="email" pattern="[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,4})" placeholder="Your Email" type="email" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg rounded-pill px-4" id="subject_681f76698934b0197c556b95"
                                name="subject" pattern="^.{1,}$" placeholder="Subject" type="text" required>
                        </div>

                        <div class="form-group mb-3">
                            <textarea class="form-control rounded-lg px-4" id="message_681f76698934b0197c556b95"
                                rows="4" name="message" placeholder="Your Message..." required></textarea>
                        </div>

                        <button class="btn btn-gradient btn-lg btn-block rounded-pill btn-ripple shadow" type="submit">
                            <span class="font-weight-bold">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </span>
                        </button>

                        <div class="text-center mt-3 small text-muted">
                            <i class="fas fa-lock mr-1"></i>Your info is safe with us.
                        </div>
                        <link rel="stylesheet" href="https://app.groove.cm/groovemail/embed/app.css">
                        <script src="https://app.groove.cm/groovemail/embed/countryCodeInput.js" formId="681f76698934b0197c556b95"></script>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Decorative SVG Bottom Wave -->
    <div class="contact-wave-bottom position-absolute w-100" style="bottom:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,0 C480,80 960,-80 1440,0 L1440,80 L0,80 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>
    <!-- Floating shapes for engagement -->
    <div class="contact-floating-shape shape1"></div>
    <div class="contact-floating-shape shape2"></div>
    <div class="contact-floating-shape shape3"></div>
    <style>
        .contact-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
            position: relative;
            overflow: hidden;
        }

        .contact-info-wrapper,
        .contact-form-wrapper {
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 12px 32px rgba(75, 0, 130, 0.10);
        }

        .rounded-xl {
            border-radius: 1.5rem !important;
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 16px rgba(75, 0, 130, 0.10);
        }

        .social-links {
            margin-top: 1.5rem;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4B0082, #9400D3);
            color: #fff;
            font-size: 1.2rem;
            margin-right: 8px;
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0 2px 8px rgba(75, 0, 130, 0.10);
            text-decoration: none;
        }

        .social-icon:hover {
            background: linear-gradient(135deg, #FF7D7F, #6A5ACD);
            color: #fff;
            transform: scale(1.12) rotate(-8deg);
        }

        .btn-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            color: #fff;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover,
        .btn-gradient:focus {
            background: linear-gradient(90deg, #9400D3, #4B0082);
            color: #fff;
        }

        .btn-ripple {
            position: relative;
            overflow: hidden;
        }

        .btn-ripple:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transform: scale(0);
            opacity: 0;
            transition: transform 0.5s, opacity 0.5s;
        }

        .btn-ripple:active:after {
            transform: scale(2);
            opacity: 0;
            transition: 0s;
        }

        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Floating shapes for extra engagement */
        .contact-floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.13;
            z-index: 0;
        }

        .contact-floating-shape.shape1 {
            width: 60px;
            height: 60px;
            background: #4B0082;
            top: 12%;
            left: 85%;
            animation: floatShape1 5s infinite alternate;
        }

        .contact-floating-shape.shape2 {
            width: 40px;
            height: 40px;
            background: #FF7D7F;
            bottom: 18%;
            left: 7%;
            animation: floatShape2 7s infinite alternate;
        }

        .contact-floating-shape.shape3 {
            width: 90px;
            height: 90px;
            background: #6A5ACD;
            bottom: 7%;
            right: 8%;
            animation: floatShape3 8s infinite alternate;
        }

        @keyframes floatShape1 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-18px);
            }
        }

        @keyframes floatShape2 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(12px);
            }
        }

        @keyframes floatShape3 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @media (max-width: 991.98px) {
            .rounded-xl {
                border-radius: 1rem !important;
            }

            .contact-info-wrapper,
            .contact-form-wrapper {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .rounded-xl {
                border-radius: .75rem !important;
            }

            .contact-info-wrapper,
            .contact-form-wrapper {
                padding: 2rem 1rem;
            }
        }

        /* Add styles for new SVG lines in #contact */
        .bg-line-svg-contact-top-left .bg-line-path,
        .bg-line-svg-contact-bottom-right .bg-line-path-right {
            animation: drawLine 6s ease-in-out forwards infinite alternate;
            /* Moderate animation speed */
        }

        @media (max-width: 991.98px) {

            .bg-line-svg-contact-top-left,
            .bg-line-svg-contact-bottom-right {
                width: 150px;
                height: 100px;
                top: 20px;
                left: -20px;
                right: -20px;
                bottom: 20px;
            }

            .bg-line-svg-contact-bottom-right {
                bottom: 20px;
                right: -20px;
                left: auto;
            }
        }
    </style>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HappinessFactors\resources\views/home.blade.php ENDPATH**/ ?>