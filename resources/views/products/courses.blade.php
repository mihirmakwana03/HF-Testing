@extends('main')

@section('title', 'Courses - Happiness Factors')
@section('title', 'Trainings - Happiness Factors')
@section('description', 'Explore our Group Happiness Training designed to enhance team wellbeing and productivity through research-backed workshops.')
@section('keywords', 'Group Happiness Training, Team Wellbeing, Workplace Culture, Employee Engagement, Professional Development')
@section('og-image', asset('images/group-happiness-training.jpg'))
@section('og-title', 'Group Happiness Training - Happiness Factors')
@section('og-description', 'Enhance team wellbeing and productivity through our research-backed group happiness workshops that transform workplace culture.')
@section('og-url', url()->current())
@section('og-type', 'website')
@section('og-site-name', 'Happiness Factors')
@section('og-image-width', 1200)

@section('content')
<div class="container py-5">
    @section('courses-header')
    <div class="text-center mb-5 position-relative pb-4">
        <div class="d-inline-block position-relative">
            <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=900&q=80" 
             alt="Happiness Courses Banner" 
             class="img-fluid rounded shadow-lg mb-4"
             style="max-height: 320px; object-fit: cover; border-radius: 10px;">
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill shadow" style="font-size: 1rem; padding: 0.7em 1.2em; left: 90%; top: 20%; background: linear-gradient(90deg, #4B0082, #9400D3);">
            <i class="fa-solid fa-star"></i> New!
            </span>
        </div>
        <h1 class="display-4 font-weight-bold mt-3" style="color: #61009b; letter-spacing: 2px;">
            <span style="background: linear-gradient(90deg, #bbdefb 40%, #e3f2fd 100%); padding: 0 15px; border-radius: 8px;">
                Discover Our Courses
            </span>
        </h1>
        <p class="lead mt-3 mb-4" style="color: #555; max-width: 600px; margin: 0 auto;">
            Unlock your potential and boost your happiness with our <span style="color: #61009b; font-weight: 600;">expertly designed</span> courses.<br>
            <span style="color: #61009b;"><i class="fa-solid fa-arrow-down"></i> Start your journey today!</span>
        </p>
    </div>
    @endsection

    @yield('courses-header')
    <div class="row justify-content-center">
        @php
        $courses = [
        [
        'title' => 'Stressed No More',
        'desc' => "😩 Stressed spelled backwards is desserts... but let's fix the stress part first. Learn practical strategies to turn meltdown moments into calm, focused, feel-good days. Master stress triggers, relaxation techniques, and build your personal chill-out plan.",
        'icon' => 'fa-solid fa-spa',
        'color' => '#bbdefb',
        'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80'
        ],
        [
        'title' => 'Impactful Leadership',
        'desc' => '🚀 Lead Like a Legend: Unlock the Leader in You! Leadership isn\'t just about titles—it\'s about people, purpose, and power moves with heart. Build high-performing teams, master influence, and make confident decisions while staying true to your unique style.',
        'icon' => 'fa-solid fa-chess-king',
        'color' => '#e3f2fd',
        'image' => 'https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&w=600&q=80'
        ],
        [
        'title' => 'Unstoppable Confidence',
        'desc' => '✨ Break through self-doubt and build unshakeable confidence to achieve your goals. Learn how to transform fear into power, embrace challenges, and become the best version of yourself.',
        'icon' => 'fa-solid fa-bolt',
        'color' => '#90caf9',
        'image' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80'
        ],
        [
        'title' => 'Influence & Negotiation Power',
        'desc' => '💬 Win Hearts. Seal Deals. Lead with Influence. Master the art of influence with kindness, negotiate with empathy, build lasting trust, and handle tough conversations like a pro.',
        'icon' => 'fa-solid fa-handshake',
        'color' => '#b3e5fc',
        'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80'
        ],
        [
        'title' => 'Effective Anxiety Management',
        'desc' => '😰 Feeling anxious? Let\'s unstick that stuck feeling. Learn science-backed, soul-soothing strategies to breathe easier, sleep better, and take back control of your life.',
        'icon' => 'fa-solid fa-heartbeat',
        'color' => '#e1f5fe',
        'image' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80'
        ],
        ];
        @endphp

        @foreach($courses as $course)
        <div class="col-md-6 col-lg-4 mb-4 d-flex align-items-stretch">
            <div class="card shadow-lg border-0 w-100 hover-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); border-radius: 15px; transition: transform 0.3s ease;">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}" style="height: 220px; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="{{ $course['icon'] }} fa-3x" style="color: #61009b; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);"></i>
                    </div>
                    <h5 class="card-title font-weight-bold mb-3" style="color: #0d47a1; font-size: 1.4rem;">{{ $course['title'] }}</h5>
                    <p class="card-text mb-4" style="color: #333; font-size: 1rem; line-height: 1.6;">{{ $course['desc'] }}</p>
                    <a href="#" class="btn btn-primary mt-2 px-4 py-2" style="background: linear-gradient(135deg, #61009b, #0d47a1); border: none; border-radius: 25px; font-weight: 600; box-shadow: 0 4px 15px rgba(21, 101, 192, 0.2);">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}
</style>

<!-- Font Awesome CDN for icons (if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection