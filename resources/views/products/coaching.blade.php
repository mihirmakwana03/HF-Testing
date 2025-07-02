@extends('main')

@section('title', 'One-on-One Coaching - Happiness Factors')
@section('description', 'Personalized one-on-one coaching sessions to help you achieve your goals and improve your well-being. Tailored guidance for your unique journey.')
@section('keywords', 'one-on-one coaching, personal development, well-being, happiness factors, coaching services')

@section('content')

<div class="coaching-container">
    <!-- Hero Section -->
    <div class="coaching-hero-section">
        <div class="coaching-hero-bg">
            <img src="https://images.unsplash.com/photo-1475506631979-72412c606f4d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="One-on-One Coaching" />
            <div class="coaching-hero-overlay"></div>
        </div>
        <div class="coaching-hero-content">
            <h1 class="coaching-hero-title">Transform Your Life with Personalized Coaching</h1>
            <p class="coaching-hero-subtitle">Experience tailored guidance designed to help you achieve your goals, overcome challenges, and create lasting positive change in your life.</p>
            <ul class="coaching-hero-benefits">
                <li><i class="fas fa-heart"></i> Personalized approach</li>
                <li><i class="fas fa-bullseye"></i> Goal achievement</li>
                <li><i class="fas fa-brain"></i> Mental clarity</li>
                <li><i class="fas fa-balance-scale"></i> Life balance</li>
                <li><i class="fas fa-chart-line"></i> Measurable results</li>
            </ul>
            <a href="/#contact" class="coaching-hero-cta">Book a Free Consultation</a>
        </div>
    </div>

    <div class="coaching-grid">
        <!-- Core Coaching Programs -->
        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Anxiety Coaching">
            <div class="card-icon"><i class="fas fa-heart-pulse"></i></div>
            <h3>Anxiety Coaching</h3>
            <p class="quote">"The way you speak to yourself matters." – Unknown</p>
            <p>Learn effective strategies to manage anxiety and build resilience in challenging situations.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Anxiety Coaching']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Happiness Coaching">
            <div class="card-icon"><i class="fas fa-smile"></i></div>
            <h3>Happiness Coaching</h3>
            <p class="quote">"I try to keep everyone happy but that makes me unhappy." – Anita, Happiness Factors</p>
            <p>Discover the path to authentic happiness and learn to prioritize your own well-being.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Happiness Coaching']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Well For Life">
            <div class="card-icon"><i class="fas fa-spa"></i></div>
            <h3>Well For Life</h3>
            <p class="quote">"The higher your energy level, the more efficient your body. The more efficient your body, the better you feel and the more you will use your talent to produce outstanding results." – Tony Robbins</p>
            <p>Develop sustainable habits for lifelong wellness and vitality.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Well For Life']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1507120410856-1f35574c3b45?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Energetic For Life">
            <div class="card-icon"><i class="fas fa-bolt"></i></div>
            <h3>Energetic For Life</h3>
            <p class="quote">"The energy of the mind is the essence of life." – Aristotle</p>
            <p>For people who have met our founder, they know what energy looks like! Energy is the very essence for a happy life.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Energetic For Life']) }}" class="read-more">Book a Session</a>
        </div>

        <!-- Specialized Programs -->
        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Effective Relationships">
            <div class="card-icon"><i class="fas fa-users"></i></div>
            <h3>Effective Relationships</h3>
            <p class="quote">"A great relationship is about two things: first, appreciating the similarities and second, respecting the differences." – Unknown</p>
            <p>Build stronger, more meaningful connections in all areas of your life.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Effective Relationships']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Happiness And Success">
            <div class="card-icon"><i class="fas fa-trophy"></i></div>
            <h3>Happiness And Success 101</h3>
            <p class="quote">"Your success and happiness lie in you." – Helen Keller</p>
            <p>Having goals and a purpose in life are essential to happiness and success.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Happiness And Success 101']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1512438248247-f0f2a5a8b7f0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Managing Stress">
            <div class="card-icon"><i class="fas fa-wind"></i></div>
            <h3>Managing Stress*</h3>
            <p class="quote">"If you cannot manage stress, you will not manage success." – Buddhist proverb</p>
            <p>Many times, life throws us curveballs or unexpected things happen, that lead us to stress and if it is not managed well, it can lead to both physical and emotional issues.</p>
            <p class="note">*Offered as both a one-on-one coaching and group training package</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Managing Stress']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Work-Life Integration">
            <div class="card-icon"><i class="fas fa-briefcase"></i></div>
            <h3>Work-Life Integration</h3>
            <p class="quote">"Don't get so busy making a living that you forget to make a life." – Dolly Parton</p>
            <p>Managing responsibilities at work and chores and errands at home, while making time for family, friends and self-care, are difficult enough on regular days.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Work-Life Integration']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1507120410856-1f35574c3b45?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Achievement Of Goals">
            <div class="card-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Achievement Of Goals</h3>
            <p class="quote">"You should set goals beyond your reach so you always have something to live for." – Ted Turner</p>
            <p>Setting a goal and a timeline to achieve it is very important, and if your goal is really big, chunking it down...</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Achievement Of Goals']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Shining Confidence">
            <div class="card-icon"><i class="fas fa-star"></i></div>
            <h3>Shining Confidence</h3>
            <p class="quote">"Confidence is the most beautiful thing you can possess." – Sabrina Carpenter</p>
            <p>When we have confidence in ourselves, we trust our own abilities and when we have confidence in others, we have faith that they will deliver what they promised.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Shining Confidence']) }}" class="read-more">Book a Session</a>
        </div>

        <div class="coaching-card">
            <img src="https://images.unsplash.com/photo-1526045612212-70caf35c14df?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-image" alt="Reframing For A Happy Life">
            <div class="card-icon"><i class="fas fa-sync"></i></div>
            <h3>Reframing For A Happy Life</h3>
            <p class="quote">"Our key to transforming anything lies in our ability to reframe it." – Marianne Williamson</p>
            <p>There are many situations in life that are beyond our control.</p>
            <a href="{{ route('booking.form', ['coaching_type' => 'Reframing For A Happy Life']) }}" class="read-more">Book a Session</a>
        </div>
    </div>

    <div id="youtube-videos" class="youtube-videos-section" style="margin: 2rem 0; padding: 2.5rem 0; background: linear-gradient(90deg, #4B0082, #9400D3); border-radius: 18px; box-shadow: 0 8px 32px rgba(97,0,155,0.07); position: relative; overflow: hidden;"></div>

    <div class="row mt-5">
        <div class="col-md-8 mx-auto text-center">
            <div class="bg-light p-4 rounded-3 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#61009b" class="bi bi-chat-heart mb-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15Zm0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                </svg>
                <h3>Ready to transform your life?</h3>
                <p>Schedule a free consultation to learn how our coaching services can help you achieve your goals.</p>
                <a href="/#contact" class="btn btn-lg" style="background: linear-gradient(90deg, #4B0082, #9400D3); color: white;">Contact Us Today</a>
            </div>
        </div>
    </div>
</div>

<style>
    .coaching-container {
        max-width: 1200px;
        margin: 0 auto;
        /* padding: 2rem 1rem; */
    }

    .coaching-hero-section {
        position: relative;
        width: 100%;
        min-height: 480px;
        margin-bottom: 3.5rem;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.13);
        display: flex;
        align-items: stretch;
    }

    .coaching-hero-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
    }

    .coaching-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.7) saturate(1.1);
        transition: transform 0.7s cubic-bezier(.23, 1.01, .32, 1);
    }

    .coaching-hero-section:hover .coaching-hero-bg img {
        transform: scale(1.05);
    }

    .coaching-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, rgba(97, 0, 155, 0.85) 0%, rgba(91, 192, 222, 0.65) 100%);
        mix-blend-mode: multiply;
        z-index: 2;
    }

    .coaching-hero-content {
        position: relative;
        z-index: 3;
        max-width: 800px;
        margin: 0 auto;
        padding: 4rem 2rem;
        text-align: center;
        color: white;
    }

    .coaching-hero-title {
        color: white;
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
    }

    .coaching-hero-subtitle {
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        opacity: 0.9;
    }

    .coaching-hero-benefits {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        list-style: none;
        padding: 0;
    }

    .coaching-hero-benefits li {
        background: rgba(255, 255, 255, 0.1);
        padding: 0.5rem 1rem;
        border-radius: 30px;
        font-size: 0.9rem;
        backdrop-filter: blur(5px);
    }

    .coaching-hero-benefits i {
        margin-right: 0.5rem;
    }

    .coaching-hero-cta {
        display: inline-block;
        background: white;
        color: #61009b;
        padding: 1rem 2rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .coaching-hero-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        color: #61009b;
    }

    .coaching-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 2rem;
    }

    .coaching-card {
        background: #fff;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .coaching-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .coaching-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 5px;
        width: 100%;
        background: linear-gradient(to right, #61009b, #5bc0de);
    }

    .card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }

    .card-icon {
        font-size: 2.5rem;
        color: #61009b;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .coaching-card h3 {
        color: #343a40;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .coaching-card .quote {
        font-style: italic;
        color: #6c757d;
        margin-bottom: 1rem;
        font-size: 0.95rem;
    }

    .coaching-card p {
        color: #6c757d;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .coaching-card .note {
        font-style: italic;
        font-size: 0.9rem;
        color: #868e96;
    }

    .read-more {
        color: #61009b;
        text-decoration: none;
        font-weight: 600;
        margin-top: auto;
        padding-top: 1rem;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .read-more::after {
        content: ' →';
        transition: all 0.3s ease;
    }

    .read-more:hover {
        color: #0069d9;
    }

    .read-more:hover::after {
        margin-left: 5px;
    }

    @media (max-width: 768px) {
        .coaching-grid {
            grid-template-columns: 1fr;
        }

        .coaching-hero-title {
            font-size: 2.2rem;
        }

        .coaching-hero-benefits {
            flex-direction: column;
            align-items: center;
        }

        .coaching-hero-benefits li {
            width: 100%;
            text-align: center;
        }
    }

    .youtube-videos-section h2 {
        font-size: 2.1rem;
        font-weight: 800;
        letter-spacing: -1px;
        margin-bottom: 2.2rem;
        color: white;
        text-shadow: 0 2px 12px rgba(97, 0, 155, 0.07);
    }

    .youtube-video-card {
        width: 260px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(97, 0, 155, 0.09);
        overflow: hidden;
        text-align: center;
        margin-bottom: 1.5rem;
        position: relative;
        transition: transform 0.22s cubic-bezier(.23, 1.01, .32, 1), box-shadow 0.22s;
        opacity: 0;
        animation: fadeInCard 0.7s forwards;
    }

    .youtube-video-card:hover {
        transform: translateY(-7px) scale(1.03);
        box-shadow: 0 8px 32px rgba(97, 0, 155, 0.15);
    }

    .youtube-video-thumb {
        width: 100%;
        height: 150px;
        object-fit: cover;
        display: block;
        position: relative;
    }

    .youtube-play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 54px;
        height: 54px;
        background: rgba(97, 0, 155, 0.85);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        transition: background 0.2s;
        box-shadow: 0 2px 8px rgba(97, 0, 155, 0.13);
    }

    .youtube-video-card:hover .youtube-play-btn {
        background: white;
    }
    .youtube-video-card:hover .youtube-play-btn svg {
        fill: #61009b;
    }

    .youtube-play-btn svg {
        fill: #fff;
        width: 28px;
        height: 28px;
    }

    .youtube-video-title {
        font-size: 1.08rem;
        font-weight: 700;
        color: #343a40;
        margin: 1.1rem 0 0.7rem 0;
        min-height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    @media (max-width: 900px) {
        .youtube-video-card {
            width: 90vw;
            max-width: 340px;
        }
    }

    @media (max-width: 600px) {
        .youtube-videos-section {
            padding: 1.2rem 0;
        }

        .youtube-video-card {
            width: 98vw;
            max-width: 98vw;
        }
    }

    @keyframes fadeInCard {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/api/youtube-videos')
            .then(res => res.json())
            .then(videos => {
                if (!Array.isArray(videos)) return;
                const container = document.getElementById('youtube-videos');
                container.innerHTML = `
                <h2 align="center">Watch Our Coaching Videos</h2>
                <div style="display:flex; flex-wrap:wrap; gap:2rem; justify-content:center;">
                    ${videos.map((video, idx) => `
                        <div class="youtube-video-card" style="animation-delay:${idx * 0.08}s;">
                            <a href="https://www.youtube.com/watch?v=${video.videoId}" target="_blank" style="display:block; position:relative;">
                                <img src="${video.thumbnail}" alt="${video.title}" class="youtube-video-thumb">
                                <span class="youtube-play-btn">
                                    <svg viewBox="0 0 64 64"><polygon points="24,16 56,32 24,48"/></svg>
                                </span>
                            </a>
                            <div class="youtube-video-title">${video.title}</div>
                        </div>
                    `).join('')}
                </div>
            `;
            });
    });
</script>

@endsection