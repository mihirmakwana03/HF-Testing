@extends('main')

@section('title', 'Terms and Conditions')

@section('head')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('content')
<section class="terms-and-conditions">
    <div class="terms-hero">
        <div class="terms-hero-content">
            <i class="fa-solid fa-scale-balanced terms-hero-icon"></i>
            <h1>Terms and Conditions of Use</h1>
            <p class="terms-hero-desc">
                Please read these Terms and Conditions carefully before using our website or app. By accessing or using our services, you agree to be bound by these terms.
            </p>
        </div>
    </div>

    <div class="terms-container">
        <div class="terms-card">
            <i class="fa-solid fa-user-shield terms-icon"></i>
            <h2>Privacy Policy</h2>
            <p>Your use of the App or Website is also subject to our <a href="/privacy-policy">Privacy Policy</a>. Please review it to understand how we collect and use your data.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-circle-info terms-icon"></i>
            <h2>Disclaimer</h2>
            <p>Our Disclaimer outlines important limitations regarding the information provided on our platform. Please read it carefully.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-user-check terms-icon"></i>
            <h2>Eligibility & Use</h2>
            <p>You must be 18+ to use our services. Use our resources for lawful, non-commercial purposes only. We reserve the right to update or restrict access at any time.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-download terms-icon"></i>
            <h2>Free Downloadable Content</h2>
            <p>Some resources may be available in exchange for your contact info. Use them for personal or internal business use only. Redistribution is prohibited.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-file-signature terms-icon"></i>
            <h2>Submissions</h2>
            <p>By submitting content, you grant us a license to use it for promotional and business purposes. Ensure you own or control all rights to your submissions.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-copyright terms-icon"></i>
            <h2>Intellectual Property</h2>
            <p>All content is protected by copyright and trademark laws. Do not copy, modify, or distribute our materials without written consent.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-gavel terms-icon"></i>
            <h2>Changes to Terms</h2>
            <p>We may update these Terms at any time. Continued use of our services means you accept the revised Terms.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-shield-halved terms-icon"></i>
            <h2>Warranties & Liability</h2>
            <p>We provide our services "as is" without warranties. We are not liable for any damages arising from your use of our platform.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-link terms-icon"></i>
            <h2>Third Party Resources</h2>
            <p>We may link to third-party sites. We are not responsible for their content or policies. Use them at your own risk.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-handshake-angle terms-icon"></i>
            <h2>Indemnification</h2>
            <p>You agree to indemnify us against any claims arising from your use of our services or breach of these Terms.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-scale-unbalanced terms-icon"></i>
            <h2>Governing Law</h2>
            <p>These Terms are governed by the laws of California. Disputes will be resolved in California courts, with mediation as a first step.</p>
        </div>
        <div class="terms-card">
            <i class="fa-solid fa-envelope terms-icon"></i>
            <h2>Contact Us</h2>
            <p>Questions? Email us at <a href="mailto:funny@happinessfactors.com">funny@happinessfactors.com</a> or call (408) 389 - 3073 or by mail at PO Box 611104, San Jose, CA 95161.</p>
        </div>
    </div>

    <style>
        .terms-hero {
            background: linear-gradient(90deg, #4B0082, #9400D3);;
            color: #fff;
            padding: 4rem 0 2rem 0;
            text-align: center;
            margin-bottom: 2rem;
        }

        .terms-hero-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: #fff;
            animation: bounce 1.5s infinite;
            animation-delay: 0.5s;
            margin-top: 3rem;
            display: inline-block;
        }

        .terms-hero-content h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: #f8f9fa;
        }

        .terms-hero-desc {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.95;
        }

        .terms-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto 3rem auto;
            padding: 0 1rem;
        }

        .terms-card {
            background: #fff;
            border-radius: 1.2rem;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            padding: 2rem 1.5rem 1.5rem 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: transform 0.18s, box-shadow 0.18s;
            position: relative;
            min-height: 220px;
        }

        .terms-card:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 8px 32px rgba(79, 70, 229, 0.13);
        }

        .terms-icon {
            font-size: 2.2rem;
            color: #61009b;
            margin-bottom: 1rem;
        }

        .terms-card h2 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #22223b;
        }

        .terms-card p {
            font-size: 1.05rem;
            color: #444;
            margin-bottom: 0;
        }

        .terms-card a {
            color: #61009b;
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .terms-hero-content h1 {
                font-size: 1.5rem;
            }

            .terms-container {
                grid-template-columns: 1fr;
                padding: 0 0.5rem;
            }

            .terms-card {
                padding: 1.2rem 1rem;
            }
        }
    </style>
</section>
@endsection