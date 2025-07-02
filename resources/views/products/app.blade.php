@extends('main')

@section('title', 'HappinessFactors App – Launching Soon!')
@section('description', 'The HappinessFactors App is coming soon. Experience holistic mental wellness on the go!')
@section('content')
<section class="d-flex align-items-center justify-content-center min-vh-100 position-relative bg-light overflow-hidden py-5" style="background: linear-gradient(135deg, #f8f6ff 0%, #e9e4f0 100%); height: 100vh;">
    <!-- Decorative SVG Top Left -->
    <svg style="position: absolute; top: 0px; left: -80px; width: 300px; height: 300px; z-index: 0; opacity: 0.18;" viewBox="0 0 400 400">
        <circle cx="200" cy="200" r="200" fill="#61009b" />
    </svg>
    <!-- Decorative SVG Bottom Right -->
    <svg style="position: absolute; bottom: -100px; right: -100px; width: 350px; height: 350px; z-index: 0; opacity: 0.13;" viewBox="0 0 400 400">
        <circle cx="200" cy="200" r="200" fill="#9400D3" />
    </svg>
    <div class="container position-relative z-index-1">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 text-center mb-5 mb-lg-0">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="{{ asset('assets/json/App.json') }}" background="transparent" speed="0.5" style="width: 100%; max-width: 340px; height: auto; margin: 0 auto;" loop autoplay></lottie-player>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <span class="badge px-4 py-2 mb-3" style="background: linear-gradient(90deg, #4B0082, #9400D3); color: #fff; font-size: 1.1rem; letter-spacing: 1px; box-shadow: 0 2px 12px rgba(75,0,130,0.10);">HappinessFactors App</span>
                <h1 class="display-4 fw-bold mb-3" style="color: #2c3e50; font-family: 'Inter', sans-serif;">Your Pocket Guide to <span style="color: #61009b;">Happiness</span> & Wellbeing</h1>
                <p class="lead mb-4" style="color: #444; font-size: 1.25rem;">
                    <strong>Launching Soon:</strong> Experience holistic mental wellness, daily positivity, and mindful growth—anytime, anywhere. Stay tuned for the HappinessFactors App!
                </p>
                <div class="mt-4">
                    <a href="/#subscribe" class="btn btn-lg btn-primary px-5 py-3" style="background: linear-gradient(90deg, #61009b, #9400D3); border: none; border-radius: 30px; font-weight: 600; box-shadow: 0 4px 15px rgba(97,0,155,0.10);">Notify Me</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .z-index-1 {
            z-index: 1;
        }
        body {
            padding-top: 0 !important;
        }
        @media (max-width: 991.98px) {
            .display-4 {
                font-size: 2.2rem;
            }
            .lead {
                font-size: 1.1rem;
            }
        }
    </style>
</section>
@endsection