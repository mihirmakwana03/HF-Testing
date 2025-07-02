@extends('layouts.app')

@section('content')
<div class="packages-wrapper py-5">
    <!-- Hero Section -->
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="hero-content position-relative">
                    <div class="decorative-shape-1"></div>
                    <div class="decorative-shape-2"></div>
                    <span class="badge badge-pill px-4 py-2 mb-3 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Special Offers</span>
                    <h1 class="display-4 fw-bold mb-4 text-gradient">Special Deals</h1>
                    <p class="lead mb-4">This spring, we are offering some of our premium <span class="fw-bold" style="color: #61009b;">coaching</span> and <span class="fw-bold" style="color: #61009b;">training</span> packages at <span class="fw-bold" style="color: #61009b;">50% OFF</span> and all other packages at <span class="fw-bold" style="color: #61009b;">30% OFF</span> their original prices.</p>
                    <a href="#packages" class="btn btn-gradient btn-lg px-5 py-3 rounded-pill shadow-lg hover-lift">
                        CLICK TO SEE 50% OFF PACKAGES
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bonus Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bonus-card p-4 p-md-5 text-center rounded-4 shadow-sm">
                    <div class="bonus-icon mb-3">
                        <i class="fas fa-gift fa-3x" style="color: #61009b;"></i>
                    </div>
                    <p class="h5 mb-0">Plus, with every <span class="fw-bold" style="color: #61009b;">30% off</span> package purchase, you get a <em>complimentary ticket</em> to <span class="fw-bold" style="color: #61009b;">Happiness Genius 4.0</span>, our flagship event that is coming up later this year.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Packages Grid -->
    <div id="packages" class="container mt-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="package-card h-100 p-4 rounded-4 shadow-sm hover-lift">
                    <div class="package-header mb-4">
                        <h3 class="h4 fw-bold" style="color: #61009b;">1 Session</h3>
                        <div class="package-badge">Most Popular</div>
                    </div>
                    <div class="price-section">
                        <div class="original-price text-decoration-line-through text-muted">$700</div>
                        <div class="discount-badge">30% OFF</div>
                        <div class="final-price display-6 fw-bold" style="color: #61009b;">$490</div>
                    </div>
                    <a href="#" class="btn btn-outline-primary w-100 mt-4" style="color: #61009b; border-color: #61009b;">Select Package</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="package-card h-100 p-4 rounded-4 shadow-sm hover-lift">
                    <div class="package-header mb-4">
                        <h3 class="h4 fw-bold" style="color: #61009b;">3 Sessions</h3>
                    </div>
                    <div class="price-section">
                        <div class="original-price text-decoration-line-through text-muted">$1500</div>
                        <div class="discount-badge">30% OFF</div>
                        <div class="final-price display-6 fw-bold" style="color: #61009b;">$1050</div>
                    </div>
                    <a href="#" class="btn btn-outline-primary w-100 mt-4" style="color: #61009b; border-color: #61009b;">Select Package</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="package-card h-100 p-4 rounded-4 shadow-sm hover-lift">
                    <div class="package-header mb-4">
                        <h3 class="h4 fw-bold" style="color: #61009b;">6 Sessions</h3>
                        <div class="package-badge best-value">Best Value</div>
                    </div>
                    <div class="price-section">
                        <div class="original-price text-decoration-line-through text-muted">$2400</div>
                        <div class="discount-badge">30% OFF</div>
                        <div class="final-price display-6 fw-bold" style="color: #61009b;">$1680</div>
                    </div>
                    <a href="#" class="btn btn-outline-primary w-100 mt-4" style="color: #61009b; border-color: #61009b;">Select Package</a>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center mt-0">
            <div class="col-md-6 col-lg-4">
                <div class="package-card h-100 p-4 rounded-4 shadow-sm hover-lift">
                    <div class="package-header mb-4">
                        <h3 class="h4 fw-bold" style="color: #61009b;">9 Sessions</h3>
                    </div>
                    <div class="price-section">
                        <div class="original-price text-decoration-line-through text-muted">$3600</div>
                        <div class="discount-badge">30% OFF</div>
                        <div class="final-price display-6 fw-bold" style="color: #61009b;">$2520</div>
                    </div>
                    <a href="#" class="btn btn-outline-primary w-100 mt-4" style="color: #61009b; border-color: #61009b;">Select Package</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="package-card h-100 p-4 rounded-4 shadow-sm hover-lift">
                    <div class="package-header mb-4">
                        <h3 class="h4 fw-bold" style="color: #61009b;">12 Sessions</h3>
                    </div>
                    <div class="price-section">
                        <div class="original-price text-decoration-line-through text-muted">$4200</div>
                        <div class="discount-badge">30% OFF</div>
                        <div class="final-price display-6 fw-bold" style="color: #61009b;">$2940</div>
                    </div>
                    <a href="#" class="btn btn-outline-primary w-100 mt-4" style="color: #61009b; border-color: #61009b;">Select Package</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="footer-content p-4 rounded-4 bg-light">
                    <p class="lead mb-4">Hurry! Buy now while these offers last. <span class="fw-bold" style="color: #61009b;">Additional discounts</span> available for our <span class="fw-bold" style="color: #61009b;">newsletter</span> and <span class="fw-bold" style="color: #61009b;">YouTube channel</span> subscribers!</p>
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mb-4">
                        <a href="/products/coaching" class="btn btn-outline-primary" style="color: #61009b; border-color: #61009b;">Browse coaching packages</a>
                        <a href="/products/trainings" class="btn btn-outline-primary" style="color: #61009b; border-color: #61009b;">Browse training packages</a>
                    </div>
                    <a href="/#contact" class="btn btn-gradient btn-lg px-5 py-3 rounded-pill shadow hover-lift">
                        Contact us for more information
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.packages-wrapper {
    background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
    min-height: 100vh;
    position: relative;
    overflow: hidden;
}

.hero-content {
    padding: 3rem 0;
}

.decorative-shape-1 {
    position: absolute;
    width: 300px;
    height: 300px;
    border: 2px solid rgba(97, 0, 155, 0.1);
    border-radius: 50%;
    top: -150px;
    right: -150px;
    z-index: 0;
}

.decorative-shape-2 {
    position: absolute;
    width: 200px;
    height: 200px;
    border: 2px solid rgba(97, 0, 155, 0.1);
    border-radius: 50%;
    bottom: -100px;
    left: -100px;
    z-index: 0;
}

.bonus-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    border: 1px solid rgba(97, 0, 155, 0.1);
}

.package-card {
    background: white;
    border: 1px solid rgba(97, 0, 155, 0.1);
    transition: all 0.3s ease;
}

.package-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(97, 0, 155, 0.1) !important;
}

.package-header {
    position: relative;
}

.package-badge {
    position: absolute;
    top: -10px;
    right: -10px;
    background: linear-gradient(90deg, #4B0082, #9400D3);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
}

.package-badge.best-value {
    background: linear-gradient(90deg, #FF7D7F, #4B0082);
}

.price-section {
    text-align: center;
}

.original-price {
    font-size: 1.25rem;
}

.discount-badge {
    display: inline-block;
    background: linear-gradient(90deg, #FF7D7F, #4B0082);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    margin: 0.5rem 0;
}

.final-price {
    color: #61009b;
}

.hover-lift {
    transition: transform 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-2px);
}

.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(97, 0, 155, 0.1);
}

.btn-gradient {
    background: linear-gradient(90deg, #4B0082, #9400D3);
    color: #fff;
    border: none;
}

.btn-gradient:hover {
    background: linear-gradient(90deg, #9400D3, #4B0082);
    color: #fff;
}

.btn-outline-primary:hover {
    background: linear-gradient(90deg, #4B0082, #9400D3);
    color: #fff !important;
    border-color: transparent !important;
}

.text-gradient {
    background: linear-gradient(90deg, #4B0082, #9400D3);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

@media (max-width: 768px) {
    .hero-content {
        padding: 2rem 0;
    }
    
    .decorative-shape-1,
    .decorative-shape-2 {
        display: none;
    }
}
</style>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
