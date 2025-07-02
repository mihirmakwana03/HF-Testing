@extends('main')

@section('title', 'Seminars - Happiness Factors')
@section('description', 'Join our transformative seminars designed to enhance your personal and professional growth through expert-led sessions.')
@section('keywords', 'seminars, professional development, personal growth, well-being, happiness factors')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="seminar-hero mb-5">
        <div class="seminar-hero-content">
            <h1 class="display-4 font-weight-bold mb-4" style="color: #61009b;">
                Transformative Seminars
            </h1>
            <p class="lead mb-4" style="color: #333;">
                Join our expert-led seminars and unlock your potential for personal and professional growth.
            </p>
            <a href="/#contact" class="btn btn-primary btn-lg">Book Your Seat</a>
        </div>
        <div class="seminar-hero-image">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                 alt="Seminar Session" 
                 class="img-fluid rounded shadow-lg">
        </div>
    </div>

    <!-- Featured Seminars -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Featured Seminars</h2>
        </div>
        @php
        $featuredSeminars = [
            [
                'title' => 'The Science of Happiness',
                'desc' => 'Explore the latest research in positive psychology and learn practical strategies to enhance your well-being.',
                'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Monthly',
                'duration' => 'Full Day',
                'location' => 'San Francisco'
            ],
            [
                'title' => 'Leadership Excellence',
                'desc' => 'Master the art of leadership and learn how to inspire and motivate your team to achieve exceptional results.',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Bi-monthly',
                'duration' => '2 Days',
                'location' => 'New York'
            ],
            [
                'title' => 'Work-Life Harmony',
                'desc' => 'Discover practical strategies to achieve balance and fulfillment in both your professional and personal life.',
                'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Quarterly',
                'duration' => '1 Day',
                'location' => 'Los Angeles'
            ]
        ];
        @endphp

        @foreach($featuredSeminars as $seminar)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg border-0 hover-card">
                <div class="position-relative">
                    <img src="{{ $seminar['image'] }}" class="card-img-top" alt="{{ $seminar['title'] }}" style="height: 200px; object-fit: cover;">
                    <div class="top-0 end-0 mt-3 ml-3">
                        <span class="badge" style="background: linear-gradient(90deg, #4B0082, #9400D3);">{{ $seminar['duration'] }}</span>
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3" style="color: #61009b;">{{ $seminar['title'] }}</h3>
                    <p class="card-text mb-3">{{ $seminar['desc'] }}</p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted"><i class="fas fa-calendar-alt me-2"></i>{{ $seminar['date'] }}</small>
                        <small class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>{{ $seminar['location'] }}</small>
                    </div>
                    <a href="#" class="btn btn-primary w-100">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Seminar Benefits -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Why Attend Our Seminars?</h2>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-chalkboard-teacher fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Expert Speakers</h3>
                <p>Learn from industry leaders and experienced professionals.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-hands-helping fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Interactive Sessions</h3>
                <p>Engage in hands-on activities and group discussions.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-network-wired fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Networking</h3>
                <p>Connect with like-minded professionals and expand your network.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-certificate fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Certification</h3>
                <p>Receive professional certification upon completion.</p>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">What Our Participants Say</h2>
        </div>
        @php
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'role' => 'HR Director',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'quote' => 'The Leadership Excellence seminar transformed my approach to team management. Highly recommended!'
            ],
            [
                'name' => 'Michael Chen',
                'role' => 'Tech Lead',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'quote' => 'Practical insights and actionable strategies that I could implement immediately.'
            ],
            [
                'name' => 'Emily Rodriguez',
                'role' => 'Entrepreneur',
                'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'quote' => 'The Work-Life Harmony seminar helped me find balance in my busy schedule.'
            ]
        ];
        @endphp

        @foreach($testimonials as $testimonial)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4 text-center">
                    <p class="card-text mb-3"><i class="fas fa-quote-left me-2" style="color: #61009b;"></i>{{ $testimonial['quote'] }}</p>
                    <h5 class="card-title mb-1">{{ $testimonial['role'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- CTA Section -->
    <div class="row">
        <div class="col-12">
            <div class="p-5 rounded text-center" style="background: linear-gradient(135deg, #bbdefb 0%, #e3f2fd 100%);">
                <h2 class="mb-4" style="color: #61009b;">Ready to Transform Your Life?</h2>
                <p class="lead mb-4">Join our upcoming seminars and take the first step towards personal and professional growth.</p>
                <a href="/#contact" class="btn btn-primary btn-lg">Book Your Seat Now</a>
            </div>
        </div>
    </div>
</div>

<style>
.seminar-hero {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: center;
    margin-bottom: 4rem;
}

.seminar-hero-content {
    padding-right: 2rem;
}

.seminar-hero-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
}

.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.badge {
    padding: 8px 12px;
    font-size: 0.9rem;
}

.btn-primary {
    background: linear-gradient(135deg, #61009b, #0d47a1);
    border: none;
    padding: 10px 20px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(21, 101, 192, 0.3);
}

.card {
    border-radius: 15px;
    overflow: hidden;
}

.card-img-top {
    transition: transform 0.3s ease;
}

.hover-card:hover .card-img-top {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .seminar-hero {
        grid-template-columns: 1fr;
    }
    
    .seminar-hero-content {
        padding-right: 0;
        text-align: center;
    }
    
    .seminar-hero-image img {
        height: 300px;
    }
}
</style>
@endsection
