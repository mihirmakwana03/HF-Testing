@extends('main')

@section('title', 'Business Solutions - HappinessFactors')
@section('subtitle', 'Enterprise Mental Wellness Solutions')
@section('content-title', 'Business Solutions')
@section('content-subtitle', 'Transform your workplace with our comprehensive mental wellness solutions')
@section('content-description', 'Discover how HappinessFactors can help your organization create a happier, more productive workplace through our innovative mental wellness solutions.')
@section('content-keywords', 'corporate wellness, mental health solutions, workplace wellness, employee wellbeing, business solutions')
@section('content-author', 'HappinessFactors')
@section('description', 'Transform your workplace with HappinessFactors comprehensive mental wellness solutions. Create a happier, more productive environment for your employees.')
@section('keywords', 'corporate wellness, mental health solutions, workplace wellness, employee wellbeing, business solutions')
@section('author', 'HappinessFactors')
@section('og')
<meta property="og:title" content="Business Solutions - HappinessFactors" />
<meta property="og:description" content="Transform your workplace with our comprehensive mental wellness solutions" />
<meta property="og:image" content="{{ asset('assets/img/Logo.png') }}" />
<meta property="og:url" content="{{ url('/business') }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="HappinessFactors" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="en_GB" />
<meta property="og:image:width" content="1200" />
@endsection

@section('head')
<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="py-5 border-bottom position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <svg class="position-absolute" style="top: 10%; left: 5%; opacity: 0.1;" width="100" height="100" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="40" fill="#61009b" />
        </svg>
        <svg class="position-absolute" style="top: 20%; right: 10%; opacity: 0.1;" width="150" height="150" viewBox="0 0 100 100">
            <rect x="20" y="20" width="60" height="60" fill="#61009b" transform="rotate(45 50 50)" />
        </svg>
    </div>

    <div class="container hero hero-responsive py-5" style="position: relative; z-index: 1;">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6 text-dark order-2 order-lg-1">
                <span class="badge badge-pill px-4 py-2 animated-badge mb-3" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Enterprise Solutions
                </span>
                <h1 class="display-4 mb-4 fw-bold" style="color: #2d3436; line-height: 1.2; font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-weight: 700;">
                    Transform Your Workplace with <span style="color: #61009b;">Mental Wellness</span>
                </h1>
                <p class="lead mb-5" style="color: #636e72; font-weight: 500;">
                    <span style="background-color: rgba(97, 0, 155, 0.1); padding: 10px 20px; border-radius: 10px; display: inline-block;">
                        Empower your employees with comprehensive mental wellness solutions designed for modern workplaces. Boost productivity, reduce stress, and create a positive work environment.
                    </span>
                </p>
                <div class="text-center text-lg-start">
                    <!-- <a href="#request-demo" class="btn btn-lg px-5 py-3 rounded-pill scroll"
                        style="background: linear-gradient(90deg,#4B0082,#9400D3); color: #fff; border: none; box-shadow: 0 4px 15px rgba(97, 0, 155, 0.2); transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(97, 0, 155, 0.3)';"
                        onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 15px rgba(97, 0, 155, 0.2)';">
                        Request a Demo
                    </a> -->
                    <a href="#request-demo" class="btn btn-secondary btn-sm" style="color: #61009b; border-color: #ffffff; transition: background 0.2s, color 0.2s, border-color 0.2s; border: 2px solid #61009b;"
                        onmouseover="this.style.background='#61009b';this.style.color='#fff';this.style.borderColor='#61009b';"
                        onmouseout="this.style.background='';this.style.color='#61009b';this.style.borderColor='#61009b';">
                        Request a Demo
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center order-1 order-lg-2 mb-5 mb-lg-0">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="{{ asset('assets/json/Workplace-Meditation.json') }}" background="transparent" speed="0.5" style="width: 100%; max-width: 500px; height: auto;" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
    <style>
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
    </style>
</section>

<!-- Key Benefits Section -->
<section class="py-5 position-relative overflow-hidden" style="background: #ffffff;">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 end-0 w-100 h-100" style="z-index: 0;">
        <svg class="position-absolute" style="top: 10%; right: 5%; opacity: 0.05;" width="200" height="200" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45" fill="#61009b" />
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 animated-badge mb-3" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Why Choose Us
                </span>
                <h2 class="display-4 mb-3 fw-bold" style="color: #2d3436;">Key Benefits</h2>
                <p class="lead" style="color: #636e72;">Transform your organization with our proven mental wellness solutions</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                            <dotlottie-player src="https://lottie.host/62494fe8-5da6-463b-abc5-4c11b10ca6a7/K6fVYQ8TWq.lottie"
                                background="transparent" speed="0.3" style="width: 100%; height: 200px" loop autoplay>
                            </dotlottie-player>
                        </div>
                        <h3 class="h4 mb-3 fw-bold" style="color: #2d3436;">Increased Productivity</h3>
                        <p class="text-muted">Our solutions have been proven to increase employee productivity by up to 30% through improved mental wellbeing and reduced stress levels.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                            <dotlottie-player src="https://lottie.host/11dd784d-2981-455c-af2a-03858152bb06/ryS8JT4J9g.lottie"
                                background="transparent" speed="0.3" style="width: 100%; height: 200px" loop autoplay>
                            </dotlottie-player>
                        </div>
                        <h3 class="h4 mb-3 fw-bold" style="color: #2d3436;">Better Team Collaboration</h3>
                        <p class="text-muted">Foster a positive work environment that encourages open communication and stronger team relationships.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4">
                            <dotlottie-player src="https://lottie.host/a3e66079-63bd-41de-b215-c3fa23893d51/XSQpd5HOKX.lottie"
                                background="transparent" speed="0.3" style="width: 100%; height: 200px" loop autoplay>
                            </dotlottie-player>
                        </div>
                        <h3 class="h4 mb-3 fw-bold" style="color: #2d3436;">Reduced Absenteeism</h3>
                        <p class="text-muted">Companies using our solutions report up to 40% reduction in stress-related absenteeism and improved employee retention.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <svg class="position-absolute" style="top: 20%; left: 10%; opacity: 0.05;" width="150" height="150" viewBox="0 0 100 100">
            <polygon points="50,10 90,90 10,90" fill="#61009b" />
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 animated-badge mb-3" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Our Solutions
                </span>
                <h2 class="display-4 mb-3 fw-bold" style="color: #2d3436;">Comprehensive Mental Wellness Solutions</h2>
                <p class="lead" style="color: #636e72;">Tailored solutions for every organization's unique needs</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Employers -->
            <div class="col-md-4 mb-4 mb-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4 text-center">
                            <i class="fas fa-building fa-3x" style="color: #61009b;"></i>
                        </div>
                        <h3 class="h4 mb-3 fw-bold text-center" style="color: #2d3436;">For Employers</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Employee Wellness Programs</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Stress Management Tools</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Productivity Enhancement</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Team Building Activities</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Leadership Development</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Work-Life Balance Support</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Consultants -->
            <div class="col-md-4 mb-4 mb-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4 text-center">
                            <i class="fas fa-user-tie fa-3x" style="color: #61009b;"></i>
                        </div>
                        <h3 class="h4 mb-3 fw-bold text-center" style="color: #2d3436;">For Consultants</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Professional Development</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Client Management Tools</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Resource Library</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Networking Opportunities</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Certification Programs</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Business Growth Support</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Health Plans -->
            <div class="col-md-4 mb-4 mb-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="icon-wrapper mb-4 text-center">
                            <i class="fas fa-heartbeat fa-3x" style="color: #61009b;"></i>
                        </div>
                        <h3 class="h4 mb-3 fw-bold text-center" style="color: #2d3436;">For Health Plans</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Integrated Care Solutions</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Preventive Care Tools</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Outcome Tracking</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Member Engagement</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Cost Reduction Programs</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2 mr-2"></i>
                                <span style="color: #636e72;">Quality Metrics</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 position-relative overflow-hidden" style="background: #ffffff;">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 end-0 w-100 h-100" style="z-index: 0;">
        <svg class="position-absolute" style="top: 30%; right: 15%; opacity: 0.05;" width="200" height="200" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45" fill="#61009b" />
        </svg>
        <svg class="position-absolute" style="bottom: 20%; left: 10%; opacity: 0.05;" width="150" height="150" viewBox="0 0 100 100">
            <polygon points="50,10 90,90 10,90" fill="#61009b" />
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 animated-badge mb-3" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Key Features
                </span>
                <h2 class="display-4 mb-3 fw-bold" style="color: #2d3436;">Comprehensive Wellness Platform</h2>
                <p class="lead" style="color: #636e72;">Discover the powerful features that make our platform stand out</p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <div class="position-absolute" style="top: -20px; left: -20px; z-index: 0;">
                        <svg width="100" height="100" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="45" fill="#61009b" opacity="0.1" />
                        </svg>
                    </div>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Team Collaboration"
                        class="img-fluid rounded-4 shadow-lg position-relative"
                        style="border-radius: 20px; z-index: 1;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-list">
                    <div class="d-flex mb-4">
                        <div class="feature-icon me-3">
                            <div class="rounded-circle p-3 mr-4" style="background: rgba(97, 0, 155, 0.1);">
                                <i class="fas fa-mobile-alt fa-lg" style="color: #61009b;"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="h6 mb-2 fw-bold" style="color: #2d3436; font-size: 1.1rem;">Mobile-First Design</h4>
                            <p class="text-muted mb-0" style="font-size: 0.95rem;">Access wellness tools and resources anytime, anywhere through our intuitive mobile platform.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="feature-icon me-3">
                            <div class="rounded-circle p-3 mr-4" style="background: rgba(97, 0, 155, 0.1);">
                                <i class="fas fa-chart-bar fa-lg" style="color: #61009b;"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="h6 mb-2 fw-bold" style="color: #2d3436; font-size: 1.1rem;">Analytics Dashboard</h4>
                            <p class="text-muted mb-0" style="font-size: 0.95rem;">Track progress and measure impact with detailed analytics and reporting tools.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="feature-icon me-3">
                            <div class="rounded-circle p-3 mr-4" style="background: rgba(97, 0, 155, 0.1);">
                                <i class="fas fa-lock fa-lg" style="color: #61009b;"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="h6 mb-2 fw-bold" style="color: #2d3436; font-size: 1.1rem;">Enterprise Security</h4>
                            <p class="text-muted mb-0" style="font-size: 0.95rem;">Bank-level security and compliance with industry standards for data protection.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="feature-icon me-3">
                            <div class="rounded-circle p-3 mr-4" style="background: rgba(97, 0, 155, 0.1);">
                                <i class="fas fa-users fa-lg" style="color: #61009b;"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="h6 mb-2 fw-bold" style="color: #2d3436; font-size: 1.1rem;">Team Collaboration</h4>
                            <p class="text-muted mb-0" style="font-size: 0.95rem;">Foster a supportive environment with built-in team engagement features.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <svg class="position-absolute" style="top: 20%; left: 15%; opacity: 0.05;" width="150" height="150" viewBox="0 0 100 100">
            <polygon points="50,10 90,90 10,90" fill="#61009b" />
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge badge-pill px-4 py-2 animated-badge mb-3" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                    Success Stories
                </span>
                <h2 class="display-4 mb-3 fw-bold" style="color: #2d3436;">What Our Clients Say</h2>
                <p class="lead" style="color: #636e72;">Join hundreds of satisfied organizations using our solutions</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4" style="color: #636e72;">"HappinessFactors has transformed our workplace culture. Our employees are more engaged and productive than ever. The mental wellness tools have been a game-changer for our organization."</p>
                        <div class="d-flex align-items-center">
                            <!-- <div class="rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: #61009b; color: #fff; font-weight: bold; font-size: 1.2rem; border: 3px solid #61009b; margin-right: 1rem;">
                                SJ
                            </div> -->
                            <div>
                                <h5 class="mb-0 fw-bold" style="color: #2d3436;">
                                HR Director, TechCorp</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4" style="color: #636e72;">"The mental wellness tools provided by HappinessFactors have been invaluable for our consulting practice. Our clients love the comprehensive approach to employee wellbeing."</p>
                        <div class="d-flex align-items-center">
                            <!-- <div class="rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: #61009b; color: #fff; font-weight: bold; font-size: 1.2rem; border: 3px solid #61009b; margin-right: 1rem;">
                                MC
                            </div> -->
                            <div>
                                <h5 class="mb-0 fw-bold" style="color: #2d3436;">
                                Lead Consultant, Wellness</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; transition: all 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4" style="color: #636e72;">"As a health plan provider, we've seen remarkable improvements in member satisfaction since implementing HappinessFactors. The platform's analytics have helped us optimize our wellness programs."</p>
                        <div class="d-flex align-items-center">
                            <!-- <div class="rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: #61009b; color: #fff; font-weight: bold; font-size: 1.2rem; border: 3px solid #61009b; margin-right: 1rem;">
                                ER
                            </div> -->
                            <div>
                                <h5 class="mb-0 fw-bold" style="color: #2d3436;">
                                Director, HealthFirst</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Request Demo Form Section -->
<section id="request-demo" class="py-5 position-relative overflow-hidden" style="background: #ffffff;">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 end-0 w-100 h-100" style="z-index: 0;">
        <svg class="position-absolute" style="top: 10%; right: 10%; opacity: 0.05;" width="200" height="200" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45" fill="#61009b" />
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">
                                Get Started
                            </span>
                            <h2 class="display-4 mb-3 fw-bold" style="color: #2d3436;">Request a Demo</h2>
                            <p class="lead" style="color: #636e72;">Experience how HappinessFactors can transform your organization</p>
                        </div>

                        <form action="{{ route('request.demo') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label fw-bold" style="color: #2d3436;">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="name" name="name" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="work_email" class="form-label fw-bold" style="color: #2d3436;">Work Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-lg" id="work_email" name="work_email" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label fw-bold" style="color: #2d3436;">Phone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="job_title" class="form-label fw-bold" style="color: #2d3436;">Job Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="job_title" name="job_title" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company_name" class="form-label fw-bold" style="color: #2d3436;">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="company_name" name="company_name" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company_size" class="form-label fw-bold" style="color: #2d3436;">Company Size <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-lg" id="company_size" name="company_size" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 12px; font-size: 14px;">
                                        <option value="">Select company size</option>
                                        <option value="1-50">1-50 employees</option>
                                        <option value="51-200">51-200 employees</option>
                                        <option value="201-500">201-500 employees</option>
                                        <option value="501-1000">501-1000 employees</option>
                                        <option value="1000+">1000+ employees</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label fw-bold" style="color: #2d3436;">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="country" name="country" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 12px;">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label fw-bold" style="color: #2d3436;">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control form-control-lg" id="message" name="message" rows="6" required
                                        style="border-radius: 10px; border: 2px solid #e9ecef; padding: 16px; min-height: 150px;"></textarea>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn btn-lg px-5 py-3 rounded-pill"
                                        style="background: linear-gradient(90deg,#4B0082,#9400D3); color: #fff; border: none; box-shadow: 0 4px 15px rgba(97, 0, 155, 0.2); transition: all 0.3s ease;"
                                        onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(97, 0, 155, 0.3)';"
                                        onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 15px rgba(97, 0, 155, 0.2)';">
                                        Request Demo
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Form validation
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()

    // Add hover effect to cards
    document.querySelectorAll('.hover-lift').forEach(card => {
        card.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
        });
        card.addEventListener('mouseout', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 6px rgba(0,0,0,0.1)';
        });
    });
</script>
@endsection