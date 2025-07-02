@extends('main')

@section('title', 'Webinars - Happiness Factors')
@section('description', 'Join our interactive webinars designed to enhance your well-being and professional growth through expert-led sessions.')
@section('keywords', 'webinars, online learning, professional development, well-being, happiness factors')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
             alt="Webinars Banner" 
             class="img-fluid rounded shadow-lg mb-4"
             style="max-height: 400px; object-fit: cover; width: 100%;">
        <h1 class="display-4 font-weight-bold mb-3" style="color: #61009b;">
            <span style="background: linear-gradient(90deg, #bbdefb 40%, #e3f2fd 100%); padding: 0 15px; border-radius: 8px;">
                Expert-Led Webinars
            </span>
        </h1>
        <p class="lead" style="color: #555; max-width: 800px; margin: 0 auto;">
            Join our interactive online sessions led by industry experts. Learn, engage, and transform your life from the comfort of your home.
        </p>
    </div>

    <!-- Featured Webinars -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Featured Webinars</h2>
        </div>
        @php
        $featuredWebinars = [
            [
                'title' => 'Mindfulness in the Digital Age',
                'desc' => 'Learn practical techniques to stay present and focused in our increasingly digital world. Perfect for professionals seeking work-life balance.',
                'image' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Every Tuesday, 7 PM EST',
                'duration' => '60 minutes'
            ],
            [
                'title' => 'Building Resilient Teams',
                'desc' => 'Discover strategies to foster team resilience and maintain high performance during challenging times.',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Every Thursday, 6 PM EST',
                'duration' => '90 minutes'
            ],
            [
                'title' => 'Stress Management Masterclass',
                'desc' => 'Master proven techniques to manage stress effectively and maintain peak performance in your professional and personal life.',
                'image' => 'https://images.unsplash.com/photo-1516302758847-719703c10b28?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Every Saturday, 10 AM EST',
                'duration' => '75 minutes'
            ]
        ];
        @endphp

        @foreach($featuredWebinars as $webinar)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg border-0 hover-card">
                <img src="{{ $webinar['image'] }}" class="card-img-top" alt="{{ $webinar['title'] }}" style="height: 200px; object-fit: cover;">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3" style="color: #61009b;">{{ $webinar['title'] }}</h3>
                    <p class="card-text mb-3">{{ $webinar['desc'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge" style="background: linear-gradient(90deg, #4B0082, #9400D3);">{{ $webinar['duration'] }}</span>
                        <small class="text-muted">{{ $webinar['date'] }}</small>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 w-100">Register Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Upcoming Webinars -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Upcoming Webinars</h2>
        </div>
        @php
        $upcomingWebinars = [
            [
                'title' => 'Emotional Intelligence at Work',
                'desc' => 'Enhance your emotional intelligence to build better relationships and advance your career.',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Next Monday, 5 PM EST',
                'duration' => '60 minutes'
            ],
            [
                'title' => 'Work-Life Integration',
                'desc' => 'Learn practical strategies to balance professional success with personal fulfillment.',
                'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Next Wednesday, 6 PM EST',
                'duration' => '75 minutes'
            ],
            [
                'title' => 'Leadership in Times of Change',
                'desc' => 'Develop the skills to lead effectively through organizational and market changes.',
                'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'date' => 'Next Friday, 4 PM EST',
                'duration' => '90 minutes'
            ]
        ];
        @endphp

        @foreach($upcomingWebinars as $webinar)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-lg border-0 hover-card">
                <img src="{{ $webinar['image'] }}" class="card-img-top" alt="{{ $webinar['title'] }}" style="height: 200px; object-fit: cover;">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3" style="color: #61009b;">{{ $webinar['title'] }}</h3>
                    <p class="card-text mb-3">{{ $webinar['desc'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge" style="background: linear-gradient(90deg, #4B0082, #9400D3);">{{ $webinar['duration'] }}</span>
                        <small class="text-muted">{{ $webinar['date'] }}</small>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 w-100">Register Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Benefits Section -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4" style="color: #61009b;">Why Join Our Webinars?</h2>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-users fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h4 mb-3">Expert-Led Sessions</h3>
                <p>Learn from industry experts with years of experience in their respective fields.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-comments fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h4 mb-3">Interactive Learning</h3>
                <p>Engage in real-time discussions and get your questions answered directly.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-4">
                <i class="fas fa-certificate fa-3x mb-3" style="color: #61009b;"></i>
                <h3 class="h4 mb-3">Certification</h3>
                <p>Receive certificates of completion to enhance your professional profile.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="row">
        <div class="col-12 text-center">
            <div class="p-5 rounded" style="background: linear-gradient(135deg, #bbdefb 0%, #e3f2fd 100%);">
                <h2 class="mb-4" style="color: #61009b;">Ready to Transform Your Life?</h2>
                <p class="lead mb-4">Join our community of learners and start your journey to personal and professional growth.</p>
                <a href="/#contact" class="btn btn-primary btn-lg">Contact Us Today</a>
            </div>
        </div>
    </div>
</div>

<style>
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
</style>
@endsection
