@extends('main')

@section('title', 'Workshops - Happiness Factors')
@section('description', 'Join our transformative workshops designed to enhance your personal and professional growth through interactive learning experiences.')
@section('keywords', 'Workshops, Personal Development, Professional Growth, Interactive Learning, Happiness Factors')
@section('og-image', asset('images/workshop-banner.jpg'))
@section('og-title', 'Workshops - Happiness Factors')
@section('og-description', 'Transform your life with our interactive workshops that combine science-backed strategies with practical tools for success.')
@section('og-url', url()->current())
@section('og-type', 'website')
@section('og-site-name', 'Happiness Factors')

@section('content')
<div class="container py-5" style="margin-top: 5rem;">
    <div class="text-center mb-5">
        <h1 class="display-4 font-weight-bold mb-4" style="color: #9400D3;">
            <span style="background: linear-gradient(90deg, #bbdefb 40%, #e3f2fd 100%); padding: 0 15px; border-radius: 8px;">
                Transformative Workshops
            </span>
        </h1>
        <p class="lead text-muted">Power-packed sessions for real growth and lasting change</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 mb-5" style="border-radius: 20px; overflow: hidden;">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="h1 mb-3" style="color: #4B0082;">🎯 Ready to Level Up?</h2>
                        <p class="lead">Join our power-packed workshops and walk away with real tools, fresh insights, and a whole lot of inspiration.</p>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6 mb-4">
                            <div class="feature-box p-4 h-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border-radius: 15px;">
                                <h3 class="h4 mb-3" style="color: #9400D3;">✨ Why This Workshop?</h3>
                                <p class="mb-0">Because it's not just another session—it's a game-changer. We blend science-backed strategies, real-world takeaways, and a sprinkle of fun to keep you learning and loving every minute.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-box p-4 h-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border-radius: 15px;">
                                <h3 class="h4 mb-3" style="color: #9400D3;">🔧 What You'll Walk Away With:</h3>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">✅ Proven techniques you can use right away</li>
                                    <li class="mb-2">✅ Powerful tools to boost your success</li>
                                    <li class="mb-2">✅ A clearer path to your goals</li>
                                    <li>✅ A tribe of like-minded go-getters</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mt-4 mb-4" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); border: none; border-radius: 15px;">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-calendar-alt fa-2x me-3 mr-3" style="color: #9400D3;"></i>
                            <div>
                                <h4 class="h5 mb-1" style="color: #4B0082;">Limited Spots Available!</h4>
                                <p class="mb-0">Don't miss out on this opportunity to invest in yourself or your team.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <a href="tel:+14083893073" class="btn btn-primary btn-lg px-5 py-3" style="background: linear-gradient(135deg, #9400D3, #4B0082); border: none; border-radius: 30px; font-weight: 600; box-shadow: 0 4px 15px rgba(21, 101, 192, 0.2);">
                            <i class="fas fa-phone-alt me-2"></i> Call Us to Reserve Your Spot
                        </a>
                        <p class="mt-3 text-muted">👉 Transformation starts here!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.feature-box {
    transition: transform 0.3s ease;
}
.feature-box:hover {
    transform: translateY(-5px);
}
</style>

<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
