@extends('main')

@section('title', 'The Happiness Edge: Gaining Competitive Advantage Through Wellbeing - Happiness Factors')
@section('description', 'Learn how to leverage happiness and wellbeing as a strategic advantage in your organization.')
@section('keywords', 'Happiness Edge, Competitive Advantage, Workplace Wellbeing, Organizational Success, Employee Performance')
@section('og-image', asset('images/happiness-edge.jpg'))
@section('og-title', 'The Happiness Edge: Gaining Competitive Advantage Through Wellbeing - Happiness Factors')
@section('og-description', 'Learn how to leverage happiness and wellbeing as a strategic advantage in your organization.')
@section('og-url', url()->current())
@section('og-type', 'website')
@section('og-site-name', 'Happiness Factors')

@section('content')
<div class="training-detail-container">
    <!-- Hero Section -->
    <div class="training-detail-hero">
        <div class="training-detail-hero-bg">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Successful business team" />
            <div class="training-detail-hero-overlay"></div>
        </div>
        <div class="training-detail-hero-content">
            <h1>The Happiness Edge: Gaining Competitive Advantage Through Wellbeing</h1>
            <p class="quote">"Happiness is a competitive advantage in an increasingly competitive world." – Shawn Achor</p>
            <div class="training-detail-hero-cta">
                <a href="/products/trainings/packages" class="btn-primary">Book This Training</a>
                <a href="/products/trainings" class="btn-secondary">View All Trainings</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="training-detail-content">
        <div class="training-detail-grid">
            <!-- Overview Section -->
            <section class="training-detail-section">
                <h2>Overview</h2>
                <p>In today's competitive business landscape, happiness and wellbeing have become strategic advantages. This training program shows organizations how to leverage positive psychology principles to gain a competitive edge in the market.</p>
                <div class="key-benefits">
                    <h3>Key Benefits</h3>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Enhanced organizational performance</li>
                        <li><i class="fas fa-check-circle"></i> Improved employee retention</li>
                        <li><i class="fas fa-check-circle"></i> Increased customer satisfaction</li>
                        <li><i class="fas fa-check-circle"></i> Better innovation and creativity</li>
                        <li><i class="fas fa-check-circle"></i> Stronger market position</li>
                    </ul>
                </div>
            </section>

            <!-- Program Details -->
            <section class="training-detail-section">
                <h2>Program Details</h2>
                <div class="program-details-grid">
                    <div class="program-detail-card">
                        <i class="fas fa-clock"></i>
                        <h4>Duration</h4>
                        <p>3-day intensive program</p>
                    </div>
                    <div class="program-detail-card">
                        <i class="fas fa-users"></i>
                        <h4>Group Size</h4>
                        <p>15-40 participants</p>
                    </div>
                    <div class="program-detail-card">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h4>Format</h4>
                        <p>Strategic workshops, case studies, and implementation planning</p>
                    </div>
                    <div class="program-detail-card">
                        <i class="fas fa-certificate"></i>
                        <h4>Certification</h4>
                        <p>Strategic Happiness Leadership Certificate provided</p>
                    </div>
                </div>
            </section>

            <!-- Curriculum -->
            <section class="training-detail-section">
                <h2>Curriculum</h2>
                <div class="curriculum-timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Strategic Happiness</h4>
                            <p>Understanding happiness as a competitive advantage</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Organizational Impact</h4>
                            <p>Measuring and maximizing happiness ROI</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Implementation Strategy</h4>
                            <p>Creating a happiness-driven culture</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Sustaining Success</h4>
                            <p>Long-term happiness and performance strategies</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="training-detail-section">
                <h2>What Participants Say</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"This training transformed our approach to organizational success. We've seen significant improvements in employee engagement and customer satisfaction."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-initials">JW</div>
                            <div>
                                <p>CEO, Global Solutions Inc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"The strategic approach to happiness has given us a real competitive edge in our market. Our team is more innovative and our clients are more satisfied."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-initials">SC</div>
                            <div>
                                <p>Operations Director, Tech Innovators</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="training-detail-section cta-section">
                <h2>Ready to Gain the Happiness Edge?</h2>
                <p>Book this training package today and transform your organization's competitive advantage.</p>
                <div class="cta-buttons">
                    <a href="/products/trainings/packages" class="btn-primary">Book Now</a>
                    <a href="/products/trainings" class="btn-secondary">View Other Trainings</a>
                </div>
            </section>
        </div>
    </div>
</div>

<style>
/* Reusing the same styles from the previous template */
.training-detail-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
}

.training-detail-hero {
    position: relative;
    width: 100%;
    min-height: 500px;
    margin-bottom: 4rem;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.training-detail-hero-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.training-detail-hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7) saturate(1.1);
    transition: transform 0.7s cubic-bezier(.23,1.01,.32,1);
}

.training-detail-hero:hover .training-detail-hero-bg img {
    transform: scale(1.05);
}

.training-detail-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, rgba(2,117,216,0.85) 0%, rgba(0,123,255,0.65) 100%);
    mix-blend-mode: multiply;
    z-index: 2;
}

.training-detail-hero-content {
    position: relative;
    z-index: 3;
    max-width: 800px;
    margin: 0 auto;
    padding: 4rem 2rem;
    text-align: center;
    color: white;
}

.training-detail-hero-content h1 {
    color: white;
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    text-shadow: 0 2px 12px rgba(0,0,0,0.2);
}

.training-detail-hero-content .quote {
    font-size: 1.5rem;
    font-style: italic;
    margin-bottom: 2rem;
    text-shadow: 0 1px 8px rgba(0,0,0,0.15);
}

.training-detail-hero-cta {
    display: flex;
    gap: 1rem;
    justify-content: center;
}

.btn-primary, .btn-secondary {
    padding: 1rem 2rem;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-primary {
    background: white;
    color: #61009b;
    border: 2px solid #61009b;
}

.btn-secondary {
    background: white;
    color: #61009b;
    border: 2px solid #61009b;
}

.btn-primary:hover, .btn-secondary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    background-color: #61009b;
    border: 2px solid #61009b;
}


.training-detail-content {
    padding: 2rem 0;
}

.training-detail-grid {
    display: grid;
    gap: 4rem;
}

.training-detail-section {
    background: white;
    border-radius: 15px;
    padding: 2.5rem;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.training-detail-section h2 {
    color: #61009b;
    font-size: 2rem;
    margin-bottom: 1.5rem;
    font-weight: 700;
}

.key-benefits ul {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0;
}

.key-benefits li {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    font-size: 1.1rem;
    color: #343a40;
}

.key-benefits li i {
    color: #61009b;
    margin-right: 1rem;
    font-size: 1.2rem;
}

.program-details-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.program-detail-card {
    text-align: center;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.program-detail-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.program-detail-card i {
    font-size: 2rem;
    color: #61009b;
    margin-bottom: 1rem;
}

.program-detail-card h4 {
    color: #343a40;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.curriculum-timeline {
    margin-top: 2rem;
}

.timeline-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
    position: relative;
}

.timeline-number {
    width: 40px;
    height: 40px;
    background: #61009b;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    margin-right: 1.5rem;
    flex-shrink: 0;
}

.timeline-content {
    flex-grow: 1;
}

.timeline-content h4 {
    color: #343a40;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.testimonial-card {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.testimonial-content {
    margin-bottom: 1.5rem;
}

.testimonial-content p {
    font-style: italic;
    color: #495057;
    line-height: 1.6;
}

.testimonial-author {
    display: flex;
    align-items: center;
}

.testimonial-author img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 1rem;
    object-fit: cover;
}

.testimonial-author h4 {
    color: #343a40;
    margin: 0;
    font-weight: 600;
}

.testimonial-author p {
    color: #6c757d;
    margin: 0;
    font-size: 0.9rem;
}

.cta-section {
    text-align: center;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
}

.cta-section h2 {
    color: #343a40;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 2rem;
}

@media (max-width: 768px) {
    .training-detail-hero-content h1 {
    color: white;
        font-size: 2rem;
    }
    
    .training-detail-hero-content .quote {
        font-size: 1.2rem;
    }
    
    .training-detail-hero-cta {
        flex-direction: column;
    }
    
    .training-detail-section {
        padding: 1.5rem;
    }
    
    .program-details-grid {
        grid-template-columns: 1fr;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
}
</style>
@endsection 