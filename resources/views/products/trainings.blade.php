@extends('main')

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

<div class="training-container">
    <!-- Hero Section -->
    <div class="training-hero-section">
        <div class="training-hero-bg">
            <img src="https://images.unsplash.com/photo-1522071901873-411886a10004?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Group Happiness Training" />
            <div class="training-hero-overlay"></div>
        </div>
        <div class="training-hero-content">
            <h1 class="training-hero-title">Unlock Team Happiness &amp; Performance</h1>
            <p class="training-hero-subtitle">Transform your workplace with science-backed, interactive group trainings that spark joy, boost productivity, and build resilient teams.</p>
            <ul class="training-hero-benefits">
                <li><i class="fas fa-smile-beam"></i> Stress less, smile more</li>
                <li><i class="fas fa-users"></i> Collaborate &amp; connect</li>
                <li><i class="fas fa-bolt"></i> Energize leadership</li>
                <li><i class="fas fa-fire"></i> Prevent burnout</li>
                <li><i class="fas fa-chart-line"></i> Drive real results</li>
            </ul>
            <a href="/#contact" class="training-hero-cta">Book a Free Consultation</a>
        </div>
    </div>
    <style>
    .training-hero-section {
        position: relative;
        width: 100%;
        min-height: 480px;
        margin-bottom: 3.5rem;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 40px rgba(0,0,0,0.13);
        display: flex;
        align-items: stretch;
    }

    .training-hero-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
    }

    .training-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.7) blur(1px) saturate(1.1);
        transition: transform 0.7s cubic-bezier(.23,1.01,.32,1);
        will-change: transform;
    }

    .training-hero-section:hover .training-hero-bg img {
        transform: scale(1.04) rotate(-1deg);
    }

    .training-hero-overlay {
        position: absolute;
        inset: 0;
        /* background: linear-gradient(120deg, rgba(2,117,216,0.85) 0%, rgba(0,123,255,0.65) 100%); */
        mix-blend-mode: multiply;
        z-index: 2;
    }

    .training-hero-content {
        position: relative;
        z-index: 3;
        max-width: 650px;
        margin: max(3rem, 12vh) 0 3rem 4vw;
        padding: 2.5rem 2.5rem 2.5rem 2rem;
        background: rgba(255,255,255,0.92);
        border-radius: 18px;
        box-shadow: 0 6px 32px rgba(0,0,0,0.08);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        animation: fadeInUp 1.1s cubic-bezier(.23,1.01,.32,1);
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px);}
        to { opacity: 1; transform: translateY(0);}
    }

    .training-hero-title {
        font-size: 2.7rem;
        font-weight: 800;
        color: #61009b;
        margin-bottom: 1.1rem;
        letter-spacing: -1px;
        text-shadow: 0 2px 12px rgba(2,117,216,0.08);
        line-height: 1.1;
    }

    .training-hero-subtitle {
        font-size: 1.25rem;
        color: #343a40;
        margin-bottom: 1.4rem;
        font-weight: 500;
        line-height: 1.6;
        text-shadow: 0 1px 8px rgba(2,117,216,0.07);
    }

    .training-hero-benefits {
        list-style: none;
        padding: 0;
        margin: 0 0 2rem 0;
        display: flex;
        flex-wrap: wrap;
        gap: 1.1rem 2.2rem;
    }

    .training-hero-benefits li {
        font-size: 1.08rem;
        color: #61009b;
        font-weight: 600;
        display: flex;
        align-items: center;
        background: rgba(2,117,216,0.07);
        border-radius: 22px;
        padding: 0.45rem 1.2rem 0.45rem 0.9rem;
        margin-bottom: 0.2rem;
        box-shadow: 0 2px 8px rgba(2,117,216,0.06);
        transition: background 0.2s;
    }

    .training-hero-benefits li i {
        margin-right: 0.7em;
        font-size: 1.3em;
        color: #61009b;
        filter: drop-shadow(0 1px 2px rgba(2,117,216,0.12));
    }

    .training-hero-benefits li:hover {
        background: rgba(2,117,216,0.18);
    }

    .training-hero-cta {
        display: inline-block;
        background: linear-gradient(90deg, #61009b 0%, #0056b3 100%);
        color: #fff;
        font-weight: 700;
        font-size: 1.13rem;
        padding: 0.85rem 2.2rem;
        border-radius: 30px;
        text-decoration: none;
        box-shadow: 0 4px 18px rgba(2,117,216,0.13);
        transition: background 0.22s, transform 0.18s, box-shadow 0.18s;
        margin-top: 0.7rem;
        letter-spacing: 0.5px;
    }

    .training-hero-cta:hover {
        background: linear-gradient(90deg, #0056b3 0%, #61009b 100%);
        color: #fff;
        transform: translateY(-2px) scale(1.04);
        box-shadow: 0 8px 28px rgba(2,117,216,0.19);
        text-decoration: none;
    }

    @media (max-width: 900px) {
        .training-hero-content {
            margin: max(2rem, 7vh) 0 2rem 0.5rem;
            padding: 2rem 1.2rem 2rem 1.2rem;
            max-width: 98vw;
        }
        .training-hero-title {
            font-size: 2rem;
        }
        .training-hero-section {
            min-height: 340px;
        }
    }

    @media (max-width: 600px) {
        .training-hero-section {
            min-height: 220px;
            border-radius: 10px;
        }
        .training-hero-content {
            margin: 1.2rem 0.2rem;
            padding: 1.1rem 0.7rem;
            border-radius: 10px;
        }
        .training-hero-title {
            font-size: 1.25rem;
        }
        .training-hero-benefits {
            flex-direction: column;
            gap: 0.5rem 0;
        }
        .training-hero-cta {
            font-size: 1rem;
            padding: 0.7rem 1.3rem;
        }
    }
    </style>

    <div class="training-grid">
        <!-- Training Cards -->
        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Happy team collaborating" class="card-image">
            <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
            <h3>🧠 From Blah to Boom: Disrupting Unhappiness at Work</h3>
            <p><em>"Happiness is not by chance, but by choice."</em> – Jim Rohn</p>
            <p>Happy employees are motivated, loyal, engaged and productive.</p>
            <a href="{{ url('products/trainings/disrupting-unhappiness') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1499209974431-9dddcece7f88?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Person practicing mindfulness" class="card-image">
            <div class="card-icon"><i class="fas fa-brain"></i></div>
            <h3>🌪️ Calm in the Chaos: Mental Wellness for Uncertain Times</h3>
            <p>In these times of a global pandemic, people are forced to stay at home, only go out when necessary, maintain social distancing, wear masks while outside.</p>
            <a href="{{ url('products/trainings/mental-wellness') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Leadership meeting" class="card-image">
            <div class="card-icon"><i class="fas fa-users"></i></div>
            <h3>🌟 Leading with Positivity: Building Happy Teams</h3>
            <p><em>"The role of a leader is not to put greatness into people, but to elicit it, for the greatness is there already."</em> – John Buchan</p>
            <p>Discover how positive leadership inspires trust, boosts morale, and creates a culture where teams thrive and happiness drives results.</p>
            <a href="{{ url('products/trainings/leading-positivity') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Person relaxing in nature" class="card-image">
            <div class="card-icon"><i class="fas fa-balance-scale"></i></div>
            <h3>😄 Lead with a Smile: The Happiness-Driven Leadership Advantage</h3>
            <p><em>"If you cannot manage stress, you will not manage success."</em> – Buddhist proverb</p>
            <p>Many times, life throws us curveballs or unexpected things happen, that lead us to stress...</p>
            <p class="note">*Offered as both a group training and one-on-one coaching package</p>
            <a href="{{ url('products/trainings/lead-with-smile') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Team resolving conflict" class="card-image">
            <div class="card-icon"><i class="fas fa-handshake"></i></div>
            <h3>💥 Stressed But Still Awesome: Mastering Stress Like a Pro</h3>
            <p><em>"Conflict is inevitable, but combat is optional."</em> – Max Lucardo</p>
            <p>By our very nature, human beings are unique. They have their own thought patterns, opinions, lifestyle and deciding what's wrong or what's right...</p>
            <a href="{{ url('products/trainings/stress-mastery') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Productive workspace" class="card-image">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <h3>🤝 Squash the Drama: Conflict to Connection in Teams</h3>
            <p><em>"Productivity is less about what you do with your time. And more about how you run your mind."</em> – Robin Sharma</p>
            <a href="{{ url('products/trainings/conflict-resolution') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Modern office culture" class="card-image">
            <div class="card-icon"><i class="fas fa-building"></i></div>
            <h3>🚀 Joy = Results: The Happy Path to High Performance</h3>
            <p>A company's culture defines the company's success, employee motivation, core beliefs, behavior norms, accepted work practices and the different styles of operation.</p>
            <a href="{{ url('products/trainings/happiness-advantage') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Innovation concept" class="card-image">
            <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
            <h3>🎉 Ready to Energize Your Workplace?</h3>
            <p>Innovation is the bottom line for the success of any organization. It can transform insights into growth, build and launch new products, transform customer experiences.</p>
            <a href="{{ url('products/trainings/happiness-edge') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Engaged team members" class="card-image">
            <div class="card-icon"><i class="fas fa-hands-helping"></i></div>
            <h3>🙌 Building Engagement: Fostering a Happy Workplace</h3>
            <p><em>"To win in the marketplace you must first win in the workplace."</em> – Doug Conant</p>
            <p>Discover actionable strategies to boost employee engagement, create a sense of belonging, and inspire teams to contribute their best every day.</p>
            <a href="{{ url('products/trainings/happiness-factor') }}" class="read-more">Read more</a>
        </div>

        <div class="training-card">
            <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Goal setting concept" class="card-image">
            <div class="card-icon"><i class="fas fa-bullseye"></i></div>
            <h3>🎯 Purposeful Progress: Goal Setting for Team Success</h3>
            <p><em>"Setting goals is the first step in turning the invisible into the visible."</em> – Tony Robbins</p>
            <p>Learn how to set meaningful goals, align team objectives, and drive motivation through clarity and shared purpose.</p>
            <a href="{{ url('products/trainings/happiness-formula') }}" class="read-more">Read more</a>
        </div>
    </div>
</div>

<style>
    /* Additional styles for images */
    .card-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
        margin-bottom: 1.5rem;
    }

    .training-card {
        padding: 0 0 2rem 0;
    }

    .training-card .card-icon,
    .training-card h3,
    .training-card p,
    .training-card .read-more {
        padding: 0 2rem;
    }

    .training-card .card-icon {
        margin-top: 1.5rem;
    }

    .training-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .banner-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border-radius: 15px;
        padding: 4rem 2rem;
        margin-bottom: 3rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .main-title {
        color: #343a40;
        font-size: 2.8rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
    }

    .description {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #495057;
        max-width: 800px;
        margin: 0 auto;
    }

    .cta-box {
        margin-top: 2.5rem;
        padding: 1.5rem;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 12px;
        display: inline-block;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .btn-primary {
        background-color: #61009b;
        color: white;
        padding: 12px 24px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .training-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 2rem;
    }

    .training-card {
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

    .training-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .training-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 5px;
        width: 100%;
        background: linear-gradient(to right, #61009b, #5bc0de);
    }

    .card-icon {
        font-size: 2.5rem;
        color: #61009b;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .training-card h3 {
        color: #343a40;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .training-card p {
        color: #6c757d;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .training-card .note {
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
        .training-grid {
            grid-template-columns: 1fr;
        }

        .main-title {
            font-size: 2.2rem;
        }
    }
</style>

@endsection