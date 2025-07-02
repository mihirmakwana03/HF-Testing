@extends('main')

@section('title', 'Products - Happiness Factors')
@section('description', 'Explore our range of products designed to enhance well-being and productivity. From training programs to wellness retreats, discover how we can support your journey towards a happier workplace.')
@section('keywords', 'Happiness Factors, Products, Training, App, Courses, Coaching, Webinars, Seminars, Workshops, Offsites, Retreats')
@section('canonical', url()->current())
@section('og-title', 'Happiness Factors - Products')
@section('og-description', 'Explore our range of products designed to enhance well-being and productivity. From training programs to wellness retreats, discover how we can support your journey towards a happier workplace.')
@section('og-image', asset('assets/img/business-bg.jpg'))
@section('og-url', url()->current())
@section('og-type', 'website')
@section('og-site_name', 'Happiness Factors')
@section('og-image-width', '1200')
@section('og-image-height', '630')

@section('head')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<style>
    html {
        scroll-behavior: smooth;
    }

    body {
        padding-top: 70px;
    }

    .products-hero {
        background: url("{{ asset('assets/img/business-bg.jpg') }}") no-repeat center center/cover;
        color: #fff;
        padding: 6rem 0 4rem 0;
        text-align: center;
        height: 100vh;
        margin-top: -50px;
        position: relative;
    }

    .products-hero h1 {
        font-size: 2.8rem;
        font-weight: 800;
        margin-bottom: 1rem;
        letter-spacing: 1px;
    }

    .products-hero p {
        font-size: 1.3rem;
        margin-bottom: 2rem;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2.5rem;
        margin: 0 auto;
        max-width: 1200px;
        padding: 3rem 1rem;
    }

    .product-card {
        background: #fff;
        border-radius: 1.2rem;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
        position: relative;
        opacity: 0;
        transform: translateY(20px);
    }

    .product-card.animate__animated {
        opacity: 1;
        transform: translateY(0);
    }

    .product-card:hover {
        transform: translateY(-8px) scale(1.025);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.13);
    }

    .product-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .product-card:hover .product-img {
        transform: scale(1.05);
    }

    .product-content {
        padding: 2rem 1.5rem 1.5rem 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .product-icon {
        font-size: 2.5rem;
        color: #61009b;
        margin-bottom: 1rem;
        transition: transform 0.3s ease;
    }

    .product-card:hover .product-icon {
        transform: scale(1.1);
    }

    .product-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.7rem;
        transition: color 0.3s ease;
    }

    .product-card:hover .product-title {
        color: #61009b;
    }

    .product-desc {
        font-size: 1.05rem;
        color: #444;
        margin-bottom: 1.2rem;
    }

    .product-btn {
        align-self: flex-start;
        background: #61009b;
        color: #fff;
        border: none;
        border-radius: 0.5rem;
        padding: 0.6rem 1.3rem;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        text-decoration: none;
        position: relative;
        overflow: hidden;
    }

    .product-btn:hover {
        background: #3730a3;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
    }

    .product-btn::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s ease, height 0.6s ease;
    }

    .product-btn:hover::after {
        width: 300px;
        height: 300px;
    }

    @media (max-width: 600px) {
        .products-hero h1 {
            font-size: 2rem;
        }

        .products-grid {
            padding: 2rem 0.5rem;
        }
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="products-hero position-relative" style="min-height: 60vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1920&q=80') center/cover;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-3 text-white mb-4 fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                    Transform Your Life with Our Products
                </h1>
                <p class="lead text-white mb-4" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
                    Discover transformative services to nurture your mental wellness and cultivate lasting happiness
                </p>
                <a href="#products" class="btn btn-primary btn-lg px-5 py-3" style="background: linear-gradient(90deg, #4B0082, #9400D3); border: none; border-radius: 30px; font-weight: 600; box-shadow: 0 4px 15px rgba(21, 101, 192, 0.2); text-decoration: none;">
                    Explore Products
                </a>
                <div class="mt-6" style="display: flex; justify-content: center; align-items: center;">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="{{ asset('assets/json/Scroll-Down.json') }}" background="transparent" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Lottie Player Script -->
<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

<!-- Products Grid Section -->
<section class="products-section bg-gray-50 py-5" id="products">
    <div class="products-grid">

        <!-- Trainings -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.1s" id="trainings">
            <img src="https://images.pexels.com/photos/1181355/pexels-photo-1181355.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Trainings" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-users-cog"></i></span>
                    <div class="product-title">Trainings</div>
                    <div class="product-desc">Custom training programs for organizations and teams. Interactive, results-oriented sessions on leadership and technical skills.</div>
                </div>
                <a href="/products/trainings" class="product-btn">Book Training</a>
            </div>
        </div>

        <!-- App -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.2s" id="app">
            <img src="../assets/img/products/app.jpg" alt="App" class="product-img" style="object-fit:contain;">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-mobile-alt"></i></span>
                    <div class="product-title">App</div>
                    <div class="product-desc">Keep your learning journey on track wherever you go. Access content, track progress, and get reminders on iOS and Android.</div>
                </div>
                <!-- <a href="https://apps.apple.com/us/app/happiness-factors/id1575587044?platform=iphone" class="product-btn">Get the App</a> -->
                <a href="/products/app" class="product-btn">Get the App</a>
            </div>
        </div>

        <!-- Courses -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.3s" id="courses">
            <img src="https://images.pexels.com/photos/4443162/pexels-photo-4443162.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Courses" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-graduation-cap"></i></span>
                    <div class="product-title">Courses</div>
                    <div class="product-desc">Structured online courses with comprehensive lessons, practical exercises, and assessments. Learn at your own pace with expert guidance.</div>
                </div>
                <a href="/products/courses" class="product-btn">Browse Courses</a>
            </div>
        </div>

        <!-- Coaching -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.4s" id="coaching">
            <img src="https://images.pexels.com/photos/1181715/pexels-photo-1181715.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Coaching" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-user-tie"></i></span>
                    <div class="product-title">Coaching</div>
                    <div class="product-desc">Personalized coaching for individuals and teams. Our experienced coaches provide one-on-one guidance, support, and accountability for lasting growth.</div>
                </div>
                <a href="/products/coaching" class="product-btn">Learn More</a>
            </div>
        </div>

        <!-- Webinars -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.5s" id="webinars">
            <img src="https://images.pexels.com/photos/3727459/pexels-photo-3727459.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Webinars" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-video"></i></span>
                    <div class="product-title">Webinars</div>
                    <div class="product-desc">Live online webinars with Q&A, expert presentations, and interactive discussions—all from your home or office.</div>
                </div>
                <a href="/products/webinars" class="product-btn">Join a Webinar</a>
            </div>
        </div>

        <!-- Seminars -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.6s" id="seminars">
            <img src="https://images.pexels.com/photos/3321796/pexels-photo-3321796.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Seminars" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                    <div class="product-title">Seminars</div>
                    <div class="product-desc">In-person seminars with industry leaders. Learn, network, and gain hands-on knowledge in a collaborative environment.</div>
                </div>
                <a href="/products/seminars" class="product-btn">View Seminars</a>
            </div>
        </div>

        <!-- Workshops -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.7s" id="workshops">
            <img src="https://images.pexels.com/photos/3184328/pexels-photo-3184328.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Workshops" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-tools"></i></span>
                    <div class="product-title">Workshops</div>
                    <div class="product-desc">Hands-on workshops for practical skill-building and real-world problem solving. Collaborate and apply new techniques.</div>
                </div>
                <a href="/products/workshops" class="product-btn">See Workshops</a>
            </div>
        </div>

        <!-- Offsites -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.8s" id="offsites">
            <img src="https://images.pexels.com/photos/7551465/pexels-photo-7551465.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Offsites" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-mountain"></i></span>
                    <div class="product-title">Offsites</div>
                    <div class="product-desc">Corporate offsite events for team-building, strategy, and renewal. Foster collaboration in inspiring environments.</div>
                </div>
                <a href="/products/offsites" class="product-btn">Plan Offsite</a>
            </div>
        </div>

        <!-- Retreats -->
        <div class="product-card animate__animated animate__fadeInUp" data-wow-delay="0.9s" id="retreats">
            <img src="https://images.pexels.com/photos/31925758/pexels-photo-31925758.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Retreats" class="product-img">
            <div class="product-content">
                <div>
                    <span class="product-icon"><i class="fas fa-leaf"></i></span>
                    <div class="product-title">Retreats</div>
                    <div class="product-desc">Focused retreat experiences in serene locations. Combine learning, relaxation, and personal development in nature.</div>
                </div>
                <a href="/products/retreats" class="product-btn">Explore Retreats</a>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerOffset = 70; // Adjust this value based on your header height
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    const cards = document.querySelectorAll('.product-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    cards.forEach(card => {
        observer.observe(card);
    });
});
</script>
@endsection