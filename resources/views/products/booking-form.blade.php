@extends('layouts.app')

@section('content')
<section class="booking-section position-relative py-5 overflow-hidden">
    <!-- SVG Decorative Line Booking Top Left -->
    <svg class="bg-line-svg-booking-top-left" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; top: 0; left: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path" d="M0,50 C100,150 200,50 300,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- SVG Decorative Line Booking Bottom Right -->
    <svg class="bg-line-svg-booking-bottom-right" viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice" style="position: absolute; bottom: 0; right: -50px; width: 300px; height: 200px; pointer-events: none; z-index: 0;">
        <path class="bg-line-path-right" d="M300,50 C200,150 100,50 0,150" fill="none" stroke="rgba(75, 0, 130, 0.1)" stroke-width="4"></path>
    </svg>
    <!-- Decorative SVG Top Wave -->
    <div class="booking-wave-top position-absolute w-100" style="top:0;left:0;z-index:1;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:80px;">
            <path d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z" fill="#4B0082" fill-opacity="0.07" />
        </svg>
    </div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="booking-form-wrapper bg-white rounded-xl shadow-lg p-5 animate__animated animate__fadeInRight">
                    <div class="mb-4 text-center">
                        <span class="badge badge-pill px-3 py-2 mb-2 animated-badge" style="background:linear-gradient(90deg,#4B0082,#9400D3);color:#fff;font-size:1rem;box-shadow:0 2px 12px rgba(75,0,130,0.12);letter-spacing:1px;">Book Your Session</span>
                        <h2 class="font-weight-bold mb-1 text-gradient" style="background:linear-gradient(90deg,#4B0082,#9400D3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Start Your Journey</h2>
                        <p class="text-muted mb-0">Schedule your personalized coaching session today. <span class="d-none d-md-inline">Your path to happiness begins here!</span></p>
                    </div>

                    <!-- Booking Form -->
                    <form action="https://v1.gdapis.com/api/groovemail/saverawuserdetails" method="post">
                        <input type="hidden" name="formid" value="684d71b60ab5b8388a233283">
                        <input type="hidden" name="ip_address" value="false">
                        <input type="hidden" name="appUrl" value="https://app.groove.cm">
                        <input type="hidden" name="form_submit_type" value="raw_html">

                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <!-- Full Name Field -->
                                <div class="form-group mb-3">
                                    <input id="full_name_684d71b60ab5b8388a233283"
                                        pattern="^.{1,}$"
                                        type="text"
                                        placeholder="Full Name"
                                        required
                                        name="full_name"
                                        class="form-control form-control-lg rounded-pill px-4">
                                </div>

                                <!-- Email Field -->
                                <div class="form-group mb-3">
                                    <input id="email_684d71b60ab5b8388a233283"
                                        pattern="[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,4})"
                                        type="email"
                                        placeholder="Email"
                                        required
                                        name="email"
                                        class="form-control form-control-lg rounded-pill px-4">
                                </div>

                                <!-- Phone Field -->
                                <div class="form-group mb-3">
                                    <input id="phone_number_684d71b60ab5b8388a233283"
                                        pattern="[0-9]{6,12}"
                                        type="tel"
                                        placeholder="Phone"
                                        required
                                        name="phone_number"
                                        class="form-control form-control-lg rounded-pill px-4">
                                </div>

                                <!-- Coaching Type Field -->
                                <div class="form-group mb-3 position-relative">
                                    <select required name="coaching_type" class="form-control form-control-lg rounded-pill h-100 select">
                                        <option disabled selected>Select a Service</option>
                                        <option value="Anxiety Coaching" {{ request('coaching_type') == 'Anxiety Coaching' ? 'selected' : '' }}>Anxiety Coaching</option>
                                        <option value="Happiness Coaching" {{ request('coaching_type') == 'Happiness Coaching' ? 'selected' : '' }}>Happiness Coaching</option>
                                        <option value="Well For Life" {{ request('coaching_type') == 'Well For Life' ? 'selected' : '' }}>Well For Life</option>
                                        <option value="Energetic For Life" {{ request('coaching_type') == 'Energetic For Life' ? 'selected' : '' }}>Energetic For Life</option>
                                        <option value="Effective Relationships" {{ request('coaching_type') == 'Effective Relationships' ? 'selected' : '' }}>Effective Relationships</option>
                                        <option value="Happiness And Success 101" {{ request('coaching_type') == 'Happiness And Success 101' ? 'selected' : '' }}>Happiness And Success 101</option>
                                        <option value="Managing Stress" {{ request('coaching_type') == 'Managing Stress' ? 'selected' : '' }}>Managing Stress</option>
                                        <option value="Work-Life Integration" {{ request('coaching_type') == 'Work-Life Integration' ? 'selected' : '' }}>Work-Life Integration</option>
                                        <option value="Achievement Of Goals" {{ request('coaching_type') == 'Achievement Of Goals' ? 'selected' : '' }}>Achievement Of Goals</option>
                                        <option value="Shining Confidence" {{ request('coaching_type') == 'Shining Confidence' ? 'selected' : '' }}>Shining Confidence</option>
                                        <option value="Reframing For A Happy Life" {{ request('coaching_type') == 'Reframing For A Happy Life' ? 'selected' : '' }}>Reframing For A Happy Life</option>
                                    </select>
                                    <i class="fas fa-chevron-down position-absolute" style="right: 20px; top: 50%; transform: translateY(-50%); color: #4B0082; pointer-events: none;"></i>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <!-- Session Duration Field -->
                                <div class="form-group mb-3">
                                    <input id="session_duration_684d71b60ab5b8388a233283"
                                        pattern="^.{1,}$"
                                        type="text"
                                        placeholder="30min/60min"
                                        required
                                        name="session_duration"
                                        class="form-control form-control-lg rounded-pill px-4">
                                </div>

                                <!-- Preferred Day Field -->
                                <div class="form-group mb-3">
                                    <input id="preferred_days_684d71b60ab5b8388a233283"
                                        type="text"
                                        onfocusin="this.type = 'date'"
                                        onfocusout="this.value == '' ? this.type = 'text' : this.type = 'date'"
                                        placeholder="Preferred Day"
                                        required
                                        name="preferred_days"
                                        class="form-control form-control-lg rounded-pill px-4">
                                </div>

                                <!-- Country Field -->
                                <div class="form-group mb-3">
                                    <input id="country_684d71b60ab5b8388a233283"
                                        pattern="^.{1,}$"
                                        type="text"
                                        placeholder="Country"
                                        required
                                        name="country"
                                        class="form-control form-control-lg rounded-pill px-4">
                                </div>

                                <!-- Message Field -->
                                <div class="form-group mb-3">
                                    <textarea id="message_684d71b60ab5b8388a233283"
                                        rows="2"
                                        placeholder="Goals/Expectations & Current Challenges"
                                        required
                                        name="message"
                                        class="form-control form-control-lg rounded-pill px-4"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mt-4">
                            <button type="submit"
                                class="btn btn-gradient btn-lg rounded-pill btn-ripple shadow px-5"
                                style="background: linear-gradient(90deg,#4B0082,#9400D3);
                                border:none; border-radius:10px;
                                color:#fff; font-size:1.1rem; padding:18px;">
                                Book a Session <i class="fas fa-calendar-check ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .booking-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #f3f0fa 100%);
            overflow: hidden;
            position: relative;
            min-height: calc(100vh - 200px);
            padding: 80px 0;
        }

        .booking-img-main {
            max-width: 90%;
            border-radius: 1.5rem;
            box-shadow: 0 12px 32px rgba(75, 0, 130, 0.10);
        }

        .booking-visual {
            position: relative;
            min-height: 340px;
        }

        .booking-quote-card {
            position: absolute;
            bottom: 18px;
            left: 10%;
            max-width: 320px;
            box-shadow: 0 8px 32px rgba(75, 0, 130, 0.10);
            border-left: 4px solid #4B0082;
            font-size: 1rem;
            z-index: 2;
        }

        .booking-floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.13;
            z-index: 1;
        }

        .booking-floating-shape.shape1 {
            width: 40px;
            height: 40px;
            background: #4B0082;
            top: 10%;
            left: 80%;
            animation: floatShape1 5s infinite alternate;
        }

        .booking-floating-shape.shape2 {
            width: 28px;
            height: 28px;
            background: #FF7D7F;
            bottom: 18%;
            left: 12%;
            animation: floatShape2 6s infinite alternate;
        }

        .booking-floating-shape.shape3 {
            width: 60px;
            height: 60px;
            background: #6A5ACD;
            bottom: 5%;
            right: 5%;
            animation: floatShape3 7s infinite alternate;
        }

        @keyframes floatShape1 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-18px);
            }
        }

        @keyframes floatShape2 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(12px);
            }
        }

        @keyframes floatShape3 {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .booking-form-wrapper {
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 12px 32px rgba(75, 0, 130, 0.10);
            max-width: 1000px;
            margin: 0 auto;
        }

        .btn-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            color: #fff;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover,
        .btn-gradient:focus {
            background: linear-gradient(90deg, #9400D3, #4B0082);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(75, 0, 130, 0.2);
        }

        .btn-ripple {
            position: relative;
            overflow: hidden;
        }

        .btn-ripple:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            transform: scale(0);
            opacity: 0;
            transition: transform 0.5s, opacity 0.5s;
        }

        .btn-ripple:active:after {
            transform: scale(2);
            opacity: 0;
            transition: 0s;
        }

        .text-gradient {
            background: linear-gradient(90deg, #4B0082, #9400D3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Custom styles for form elements */
        .form-control-lg {
            font-size: 1.1rem !important;
            /* Ensure consistent font size for all lg form controls */
            height: calc(2.2em + 1rem + 2px);
            /* Adjust height for form-control-lg */
        }

        .form-control {
            border: 1px solid rgba(75, 0, 130, 0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #4B0082;
            box-shadow: 0 0 0 0.2rem rgba(75, 0, 130, 0.15);
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 0.7;
        }

        .select::before {
            content: '\f107';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.3s ease;
        }

        .select::before {
            transform: translateY(-50%) rotate(180deg);
        }

        textarea.form-control-lg {
            height: 8vh;
            /* resize: none; */
        }

        select.form-control-lg option {
            font-size: 1.1rem !important;
        }

        .animated-badge {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Add styles for new SVG lines */
        .bg-line-svg-booking-top-left .bg-line-path,
        .bg-line-svg-booking-bottom-right .bg-line-path-right {
            animation: drawLine 7s ease-in-out forwards infinite alternate;
        }

        @media (max-width: 991.98px) {
            .booking-section {
                padding: 60px 0;
            }

            .booking-form-wrapper {
                padding: 2rem 1rem;
            }

            .bg-line-svg-booking-top-left,
            .bg-line-svg-booking-bottom-right {
                width: 150px;
                height: 100px;
                top: 10px;
                left: 10px;
                right: 10px;
                bottom: 10px;
            }

            .bg-line-svg-booking-bottom-right {
                bottom: 10px;
                right: 10px;
                left: auto;
            }
        }

        @media (max-width: 767.98px) {
            .booking-section {
                padding: 40px 0;
            }

            .booking-form-wrapper {
                padding: 1.5rem 1rem;
            }
        }
    </style>
</section>
@endsection