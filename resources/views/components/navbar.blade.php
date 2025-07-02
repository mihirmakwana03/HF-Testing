<header class="header default">
    <div class="header-section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg header-navbar ml-0 ml-lg-5">
                <a class="navbar-brand navbar-logo scroll" href="/">
                    <img class="mb-0 logo-light" src="{{ asset('assets/img/Logo.png') }}" alt="Logo Light">
                    <img class="mb-0 logo-dark" src="{{ asset('assets/img/Logo.png') }}" alt="Logo Dark">
                </a>
                <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-menu collapse navbar-collapse justify-content-end mr-5">
                    <ul class="navbar-nav header-navbar-nav">
                        <li class="nav-item"><a class="nav-link scroll" href="{{ url('/') }}"><span>Home</span></a></li>
                        <li class="nav-item"><a class="nav-link scroll" href="{{ url('/business') }}"><span>Business</span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#products" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Products</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="productsDropdown">
                                <a class="dropdown-item" href="{{ url('products/#trainings') }}">
                                    <i class="fa fa-graduation-cap mr-2"></i> Trainings
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#app') }}">
                                    <i class="fa fa-mobile-alt mr-2"></i> App
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#Courses') }}">
                                    <i class="fa fa-book-open mr-2"></i> Courses
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#coaching') }}">
                                    <i class="fa fa-user-graduate mr-2"></i> Coaching
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#webinars') }}">
                                    <i class="fa fa-video mr-2"></i> Webinars
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#seminars') }}">
                                    <i class="fa fa-chalkboard-teacher mr-2"></i> Seminars
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#workshops') }}">
                                    <i class="fa fa-wrench mr-2"></i> Workshops
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#offsites') }}">
                                    <i class="fa fa-building mr-2"></i> Offsites
                                </a>
                                <a class="dropdown-item" href="{{ url('products/#retreats') }}">
                                    <i class="fa fa-umbrella-beach mr-2"></i> Retreats
                                </a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link scroll" href="{{ url('/quiz') }}"><span>Quiz</span></a></li>
                        <li class="nav-item"><a class="nav-link scroll" href="{{ url('/#why-us') }}"><span>Why Us</span></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#about" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>About</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="dropdown-item" href="{{ url('/#about-us') }}">
                                    <i class="fa fa-info-circle mr-2"></i> About Us
                                </a>
                                <a class="dropdown-item" href="{{ url('/#our-story') }}">
                                    <i class="fa fa-book mr-2"></i> Our Story
                                </a>
                                <a class="dropdown-item" href="{{ url('/#why-us') }}">
                                    <i class="fa fa-question-circle mr-2"></i> Why Us
                                </a>
                                <a class="dropdown-item" href="{{ url('/#testimonials') }}">
                                    <i class="fa fa-star mr-2"></i> Testimonials
                                </a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link scroll" href="/#contact"><span>Contact</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<style>
    /* Add body padding to prevent content from hiding under fixed navbar */
    body {
        padding-top: 15vh;
        /* Height of navbar + some extra space */
        padding-bottom: 15vh;
        min-height: 100vh;
        position: relative;
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        /* Ensure navbar stays on top */
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.98), rgba(255, 255, 255, 0.95));
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15), 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .header-section {
        height: 100%;
        display: flex;
        align-items: center;
    }

    .header-navbar {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .navbar-logo img {
        width: 176.7px;
        height: 60px;
        opacity: 1;
        filter: drop-shadow(4px 4px 8px rgba(199, 30, 25, 0.3));
        animation: logoAnimation 3s infinite alternate;
        transition: all 0.3s ease;
    }

    .navbar-logo:hover img {
        transform: scale(1.05);
        filter: drop-shadow(6px 6px 12px rgba(199, 30, 25, 0.4));
    }

    @keyframes logoAnimation {
        0% {
            transform: scale(1);
            filter: drop-shadow(4px 4px 8px rgba(199, 30, 25, 0.3));
        }

        50% {
            transform: scale(1.03);
            filter: drop-shadow(2px 2px 4px rgba(199, 30, 25, 0.3));
        }

        100% {
            transform: scale(1);
            filter: drop-shadow(4px 4px 8px rgba(199, 30, 25, 0.3));
        }
    }

    .nav-link {
        color: #1a1a1a !important;
        font-weight: 600;
        padding: 0.8rem 1.2rem !important;
        position: relative;
        transition: all 0.3s ease;
        text-shadow: 0 1px 1px rgba(255, 255, 255, 0.5);
        letter-spacing: 0.3px;
    }

    /* Special styling for Products and About dropdowns */
    .nav-item.dropdown .nav-link {
        padding-right: 2rem !important;
    }

    .nav-item.dropdown .nav-link::before {
        content: '\f107';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }

    .nav-item.dropdown:hover .nav-link::before {
        transform: translateY(-50%) rotate(180deg);
    }

    .nav-item.dropdown .nav-link span {
        color: #1a1a1a !important;
        font-weight: 600;
        color: #1a1a1a;
        -webkit-background-clip: text;
        background-clip: text;
        transition: all 0.3s ease;
    }

    /* color: #61009b !important;
        font-weight: 600;
        color: #1a1a1a;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-background-clip: text;
    } */

    .nav-link span {
        position: relative;
        z-index: 1;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #4B0082, #9400D3);
        transition: all 0.3s ease;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .nav-link:hover {
        color: #61009b !important;
        transform: translateY(-1px);
        font-weight: bold;
    }

    .nav-link:hover::after {
        width: 80%;
    }

    /* Remove underline effect for dropdown items */
    .nav-item.dropdown .nav-link::after {
        display: none;
    }

    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        background: rgba(255, 255, 255, 0.98);
        border: none;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        padding: 1rem 0;
        animation: dropdownFade 0.3s ease;
        backdrop-filter: blur(10px);
    }

    @keyframes dropdownFade {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-menu a {
        color: #1a1a1a !important;
        padding: 0.7rem 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        font-weight: 500;
        letter-spacing: 0.2px;
    }

    .dropdown-menu a:hover {
        color: #61009b !important;
        background: rgba(199, 30, 25, 0.05);
        padding-left: 2rem;
        transform: translateX(5px);
    }

    .dropdown-menu a i {
        transition: all 0.3s ease;
        color: #61009b;
        margin-right: 8px;
    }

    .dropdown-menu a:hover i {
        transform: scale(1.2) rotate(5deg);
    }

    .navbar-toggler {
        border: none;
        padding: 0.5rem;
        transition: all 0.2s ease-out;
        background: transparent;
        will-change: transform;
    }

    .navbar-toggler:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(199, 30, 25, 0.25);
    }

    .navbar-toggler .fa-bars {
        color: #1a1a1a;
        font-size: 1.5rem;
        transition: transform 0.2s ease-out;
        transform: rotate(0deg);
        will-change: transform;
    }

    .navbar-toggler:hover .fa-bars {
        color: #61009b;
        transform: scale(1.1);
    }

    .navbar-toggler[aria-expanded="true"] .fa-bars {
        transform: rotate(90deg);
    }

    .navbar-toggler[aria-expanded="false"] .fa-bars {
        transform: rotate(0deg);
    }

    /* Mobile Responsive Styles */
    @media (max-width: 991.98px) {
        body {
            padding-top: 70px;
        }

        .header {
            background: rgba(255, 255, 255, 0.98);
        }

        .navbar-logo img {
            width: 150px;
            height: 50px;
        }

        .nav-menu {
            background: rgba(255, 255, 255, 0.98);
            padding: 1rem;
            margin: 1rem;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            margin-top: 1rem;
            max-height: calc(100vh - 80px);
            overflow-y: auto;
            backdrop-filter: blur(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: top;
            will-change: transform, opacity;
            transform: translateY(0);
            opacity: 1;
        }

        .nav-menu.collapsing {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-menu.show {
            transform: translateY(0);
            opacity: 1;
        }

        .nav-menu.collapse:not(.show) {
            transform: translateY(-20px);
            opacity: 0;
            pointer-events: none;
            visibility: hidden;
        }

        .nav-link {
            padding: 0.8rem 1rem !important;
        }

        .nav-link::after {
            display: none;
        }

        .dropdown-menu {
            border: none;
            box-shadow: none;
            padding-left: 1rem;
            background: transparent;
        }

        .nav-item.dropdown .nav-link::before {
            right: 0.5rem;
        }

        .nav-item.dropdown .nav-link {
            padding-right: 2.5rem !important;
        }

        .dropdown-menu a {
            padding: 0.6rem 1rem;
        }

        .dropdown-menu a:hover {
            padding-left: 1.5rem;
            transform: none;
        }
    }

    /* Small Mobile Devices */
    @media (max-width: 576px) {
        body {
            padding-top: 60px;
        }

        .navbar-logo img {
            width: 150px;
            height: 50px;
        }

        .nav-menu {
            margin-top: 0.5rem;
        }

        .nav-link {
            padding: 0.6rem 0.8rem !important;
            font-size: 0.95rem;
        }
    }
</style>