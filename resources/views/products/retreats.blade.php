@extends('main')

@section('title', 'Retreats - Happiness Factors')
@section('description', 'Discover transformative wellness and personal development retreats designed to rejuvenate your mind, body, and spirit.')
@section('keywords', 'retreats, wellness retreats, personal development, mindfulness, happiness factors')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="retreat-hero mb-5">
        <div class="retreat-hero-content">
            <h1 class="display-4 font-weight-bold mb-4" style="color: #61009b;">
                Transformative Retreat Experiences
            </h1>
            <p class="lead mb-4" style="color: #333;">
                Escape the ordinary and embark on a journey of self-discovery and personal growth through our carefully curated retreats.
            </p>
            <div class="d-flex gap-3">
                <a href="/#contact" class="btn btn-primary btn-lg mr-4">Book Your Retreat</a>
                <a href="#programs" class="btn btn-outline-primary btn-lg">Explore Programs</a>
            </div>
        </div>
        <div class="retreat-hero-image">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                 alt="Wellness Retreat" 
                 class="img-fluid rounded shadow-lg">
        </div>
    </div>

    <!-- Featured Retreats -->
    <div id="programs" class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Featured Retreat Programs</h2>
        </div>
        @php
        $featuredRetreats = [
            [
                'title' => 'Mindfulness & Meditation',
                'desc' => 'A 5-day immersive retreat focused on mindfulness practices and meditation techniques.',
                'image' => 'https://images.unsplash.com/photo-1508672019048-805c876b67e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'duration' => '5 Days',
                'location' => 'Mountain Resort',
                'features' => ['Daily Meditation', 'Yoga Sessions', 'Nature Walks']
            ],
            [
                'title' => 'Personal Growth',
                'desc' => 'Transform your life through intensive personal development workshops and coaching.',
                'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'duration' => '7 Days',
                'location' => 'Beach Resort',
                'features' => ['Life Coaching', 'Group Workshops', 'One-on-One Sessions']
            ],
            [
                'title' => 'Wellness & Healing',
                'desc' => 'Rejuvenate your mind and body through holistic wellness practices and healing therapies.',
                'image' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'duration' => '4 Days',
                'location' => 'Spa Resort',
                'features' => ['Spa Treatments', 'Nutrition Workshops', 'Fitness Classes']
            ]
        ];
        @endphp

        @foreach($featuredRetreats as $retreat)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg border-0 hover-card">
                <div class="position-relative">
                    <img src="{{ $retreat['image'] }}" class="card-img-top" alt="{{ $retreat['title'] }}" style="height: 200px; object-fit: cover;">
                    <div class="top-0 end-0 m-3">
                        <span class="badge" style="background: linear-gradient(90deg, #4B0082, #9400D3);">{{ $retreat['duration'] }}</span>
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3" style="color: #61009b;">{{ $retreat['title'] }}</h3>
                    <p class="card-text mb-3">{{ $retreat['desc'] }}</p>
                    <div class="mb-3">
                        <small class="text-muted"><i class="fas fa-map-marker-alt me-2 mr-2"></i>{{ $retreat['location'] }}</small>
                    </div>
                    <ul class="list-unstyled mb-4">
                        @foreach($retreat['features'] as $feature)
                        <li class="mb-2"><i class="fas fa-check-circle me-2 mr-2" style="color: #61009b;"></i>{{ $feature }}</li>
                        @endforeach
                    </ul>
                    <a href="#" class="btn btn-primary w-100">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Program Benefits -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Benefits of Our Retreats</h2>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-brain fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Mental Clarity</h3>
                <p>Gain mental clarity and reduce stress through mindfulness practices.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-heart fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Emotional Balance</h3>
                <p>Develop emotional intelligence and find inner peace.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-dumbbell fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Physical Wellness</h3>
                <p>Improve physical health through guided exercise and nutrition.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-users fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Community</h3>
                <p>Connect with like-minded individuals on a similar journey.</p>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Retreat Experiences</h2>
        </div>
        @php
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'role' => 'Mindfulness Retreat Participant',
                'quote' => 'The mindfulness retreat was life-changing. I learned techniques that I use daily to maintain inner peace.'
            ],
            [
                'name' => 'Michael Chen',
                'role' => 'Personal Growth Retreat',
                'quote' => 'The personal growth retreat helped me break through barriers and discover my true potential.'
            ],
            [
                'name' => 'Emma Thompson',
                'role' => 'Wellness Retreat',
                'quote' => 'The wellness retreat was the perfect balance of relaxation and personal development.'
            ]
        ];
        @endphp

        @foreach($testimonials as $testimonial)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <p class="card-text mb-3"><i class="fas fa-quote-left me-2" style="color: #61009b;"></i>{{ $testimonial['quote'] }}</p>
                    <div class="d-flex align-items-center mb-1">
                        <h5 class="card-title mb-0">{{ $testimonial['role'] }}</h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- CTA Section -->
    <div class="row">
        <div class="col-12">
            <div class="p-5 rounded text-center" style="background: linear-gradient(135deg, #bbdefb 0%, #e3f2fd 100%);">
                <h2 class="mb-4" style="color: #61009b;">Ready to Begin Your Journey?</h2>
                <p class="lead mb-4">Join us for a transformative retreat experience that will change your life.</p>
                <a href="/#contact" class="btn btn-primary btn-lg">Book Your Retreat</a>
            </div>
        </div>
    </div>
</div>

<style>
.retreat-hero {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: center;
    margin-bottom: 4rem;
}

.retreat-hero-content {
    padding-right: 2rem;
}

.retreat-hero-image img {
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

.btn-outline-primary {
    border: 2px solid #61009b;
    color: #61009b;
    padding: 10px 20px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover, .btn-outline-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(21, 101, 192, 0.3);
    color: white;
    background-color: #61009b;
    border: #61009b;
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
    .retreat-hero {
        grid-template-columns: 1fr;
    }
    
    .retreat-hero-content {
        padding-right: 0;
        text-align: center;
    }
    
    .retreat-hero-image img {
        height: 300px;
    }
}
</style>
@endsection
