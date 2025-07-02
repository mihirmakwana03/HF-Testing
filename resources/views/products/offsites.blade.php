@extends('main')

@section('title', 'Offsites - Happiness Factors')
@section('description', 'Transform your team with our immersive offsite experiences designed to build stronger connections and enhance team performance.')
@section('keywords', 'offsites, team building, corporate retreats, team development, happiness factors')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="offsite-hero mb-5">
        <div class="offsite-hero-content">
            <h1 class="display-4 font-weight-bold mb-4" style="color: #61009b;">
                Transformative Offsite Experiences
            </h1>
            <p class="lead mb-4" style="color: #333;">
                Create lasting connections and boost team performance through our carefully curated offsite programs.
            </p>
            <div class="d-flex gap-3">
                <a href="/#contact" class="btn btn-primary btn-lg mr-4">Plan Your Offsite</a>
                <a href="#programs" class="btn btn-outline-primary btn-lg">View Programs</a>
            </div>
        </div>
        <div class="offsite-hero-image">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                 alt="Team Building" 
                 class="img-fluid rounded shadow-lg">
        </div>
    </div>

    <!-- Featured Programs -->
    <div id="programs" class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Featured Offsite Programs</h2>
        </div>
        @php
        $featuredPrograms = [
            [
                'title' => 'Team Synergy Retreat',
                'desc' => 'A 3-day immersive experience designed to strengthen team bonds and enhance collaboration.',
                'image' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'duration' => '3 Days',
                'location' => 'Various Locations',
                'features' => ['Team Building Activities', 'Strategic Planning', 'Leadership Development']
            ],
            [
                'title' => 'Innovation Workshop',
                'desc' => 'Spark creativity and drive innovation through hands-on workshops and collaborative exercises.',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'duration' => '2 Days',
                'location' => 'Urban Centers',
                'features' => ['Design Thinking', 'Problem Solving', 'Creative Collaboration']
            ],
            [
                'title' => 'Wellness & Connection',
                'desc' => 'Promote team well-being and build stronger relationships through wellness-focused activities.',
                'image' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'duration' => '2-3 Days',
                'location' => 'Resort Destinations',
                'features' => ['Mindfulness Sessions', 'Team Challenges', 'Wellness Activities']
            ]
        ];
        @endphp

        @foreach($featuredPrograms as $program)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg border-0 hover-card">
                <div class="position-relative">
                    <img src="{{ $program['image'] }}" class="card-img-top" alt="{{ $program['title'] }}" style="height: 200px; object-fit: cover;">
                    <div class="top-0 end-0 m-3">
                        <span class="badge" style="background: linear-gradient(90deg, #4B0082, #9400D3);">{{ $program['duration'] }}</span>
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3" style="color: #61009b;">{{ $program['title'] }}</h3>
                    <p class="card-text mb-3">{{ $program['desc'] }}</p>
                    <div class="mb-3">
                        <small class="text-muted"><i class="fas fa-map-marker-alt me-2 mr-2"></i>{{ $program['location'] }}</small>
                    </div>
                    <ul class="list-unstyled mb-4">
                        @foreach($program['features'] as $feature)
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
            <h2 class="text-center mb-4" style="color: #61009b;">Why Choose Our Offsites?</h2>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-users fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Team Building</h3>
                <p>Strengthen relationships and build trust among team members.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-lightbulb fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Innovation</h3>
                <p>Spark creativity and drive innovation through collaborative activities.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-chart-line fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Performance</h3>
                <p>Enhance team performance and productivity through strategic planning.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-heart fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h5 mb-3">Well-being</h3>
                <p>Promote team well-being and work-life balance.</p>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Success Stories</h2>
        </div>
        @php
        $testimonials = [
            [
                'name' => 'TechCorp Inc.',
                'role' => 'Software Development Team',
                'quote' => 'The Team Synergy Retreat transformed our team dynamics and significantly improved our collaboration.'
            ],
            [
                'name' => 'Innovate Solutions',
                'role' => 'Product Development Team',
                'quote' => 'The Innovation Workshop helped us break through creative barriers and develop new solutions.'
            ],
            [
                'name' => 'Global Services',
                'role' => 'Customer Success Team',
                'quote' => 'The Wellness & Connection program improved team morale and reduced stress levels.'
            ]
        ];
        @endphp

        @foreach($testimonials as $testimonial)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <p class="card-text mb-3"><i class="fas fa-quote-left me-2" style="color: #61009b;"></i>{{ $testimonial['quote'] }}</p>
                    <h5 class="card-title mb-1">{{ $testimonial['name'] }}</h5>
                    <small class="text-muted">{{ $testimonial['role'] }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- CTA Section -->
    <div class="row">
        <div class="col-12">
            <div class="p-5 rounded text-center" style="background: linear-gradient(135deg, #bbdefb 0%, #e3f2fd 100%);">
                <h2 class="mb-4" style="color: #61009b;">Ready to Transform Your Team?</h2>
                <p class="lead mb-4">Let's create a custom offsite experience that meets your team's unique needs.</p>
                <a href="/#contact" class="btn btn-primary btn-lg">Contact Us Today</a>
            </div>
        </div>
    </div>
</div>

<style>
.offsite-hero {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: center;
    margin-bottom: 4rem;
}

.offsite-hero-content {
    padding-right: 2rem;
}

.offsite-hero-image img {
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
    .offsite-hero {
        grid-template-columns: 1fr;
    }
    
    .offsite-hero-content {
        padding-right: 0;
        text-align: center;
    }
    
    .offsite-hero-image img {
        height: 300px;
    }
}
</style>
@endsection
