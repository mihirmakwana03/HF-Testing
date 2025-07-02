<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldContent('head'); ?>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Happiness Factors - Empowering People & Organizations to Joy, Happiness, Fulfillment & Engagement!">
    <meta name="keywords" content="Happiness, Wellness, Emotional Health, Coaching, Mindfulness">
    <meta name="author" content="Happiness Factors">
    <meta property="og:title" content="Happiness Factors - Your Path to Wellness">
    <meta property="og:description" content="Helping you create a happy mindset with coaching, courses, and emotional wellness programs.">
    <meta property="og:image" content="<?php echo e(asset('assets/img/OG_Image.png')); ?>">
    <meta property="og:url" content="<?php echo e(url('/')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ------------------------------------------------------------------------ -->

    <!-- Required for Dismissable Alert -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->



    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo e(asset('css/venobox.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo e(asset('css/fonts.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo e(asset('css/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet" media="all" />
    <link href="<?php echo e(asset('css/owl-carousel/owl.theme.css')); ?>" rel="stylesheet" media="all" />
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
    <!-- <link href="<?php echo e(asset('css/animations.css')); ?>" rel="stylesheet" type="text/css" media="all" /> -->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Add this in the head section after the existing CSS links -->
    <style>
        .subscribe-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        .subscribe-modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 500px;
            width: 90%;
            position: relative;
            text-align: center;
        }

        .subscribe-modal-close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #666;
        }

        .subscribe-form {
            margin-top: 20px;
        }

        .subscribe-form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .subscribe-form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .subscribe-form button:hover {
            background-color: #45a049;
        }
    </style>

    <!-- <?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/venobox.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl-carousel/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl-carousel/owl.theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animations.css')); ?>">
    <?php $__env->stopSection(); ?> -->

</head>

<body>

    <?php if(session('success')): ?>
    <script>
        window.onload = function() {
            alert("<?php echo e(session('success')); ?>");
        }
    </script>
    <?php endif; ?>

    <?php if(session('info')): ?>
    <script>
        window.onload = function() {
            alert("<?php echo e(session('info')); ?>");
        }
    </script>
    <?php endif; ?>

    <!-- Loading Animation -->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="bounce">
                <div class="bounce-one"></div>
                <div class="bounce-two"></div>
            </div>
        </div>
    </div> -->

    <div id="wrapper" class="wrapper">
        <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <a class="scroll-to-top  scroll active" href="#wrapper"><span class=" fas fa-arrow-up top-icon "></span></a>
    </div>

    <?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/smooth-scroll.js')); ?>"></script>
    <script src="<?php echo e(asset('js/venobox.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jarallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jarallax-element.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/placeholders.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/instafeed.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="YOUR_NONCE"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <!-- jQuery (required for Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <?php $__env->stopSection(); ?>

    <!-- Chatbase Script -->
    <script>
        (function() {
            if (!window.chatbase || window.chatbase("getState") !== "initialized") {
                window.chatbase = (...args) => {
                    if (!window.chatbase.q) window.chatbase.q = [];
                    window.chatbase.q.push(args);
                };
                window.chatbase = new Proxy(window.chatbase, {
                    get(target, prop) {
                        if (prop === "q") return target.q;
                        return (...args) => target(prop, ...args);
                    }
                });
            }

            const onLoad = function() {
                const script = document.createElement("script");
                script.src = "https://www.chatbase.co/embed.min.js";
                script.id = "lCciDMGFLx_D3eGZ-wMjT";
                script.domain = "www.chatbase.co";
                document.body.appendChild(script);
            };

            if (document.readyState === "complete") {
                onLoad();
            } else {
                window.addEventListener("load", onLoad);
            }
        })();
    </script>

    <!-- Add this just before the closing body tag -->
    <!-- <div id="subscribeModal" class="subscribe-modal">
        <div class="subscribe-modal-content">
            <span class="subscribe-modal-close">&times;</span>
            <h2>Stay Updated!</h2>
            <p>Subscribe to our newsletter for the latest updates on happiness and wellness.</p>
            <form class="subscribe-form" id="subscribeForm">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <script>
        // Subscribe Modal Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('subscribeModal');
            const closeBtn = document.querySelector('.subscribe-modal-close');
            const subscribeForm = document.getElementById('subscribeForm');

            // Show modal after 5 seconds
            setTimeout(() => {
                if (!localStorage.getItem('subscribeModalShown')) {
                    modal.style.display = 'flex';
                }
            }, 5000);

            // Close modal when clicking the close button
            closeBtn.onclick = function() {
                modal.style.display = 'none';
                localStorage.setItem('subscribeModalShown', 'true');
            }

            // Close modal when clicking outside
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                    localStorage.setItem('subscribeModalShown', 'true');
                }
            }

            // Handle form submission
            subscribeForm.onsubmit = function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                // Here you would typically send the email to your backend
                alert('Thank you for subscribing!');
                modal.style.display = 'none';
                localStorage.setItem('subscribeModalShown', 'true');
            }
        });
    </script> -->

</body>

</html><?php /**PATH D:\HappinessFactors\resources\views/main.blade.php ENDPATH**/ ?>