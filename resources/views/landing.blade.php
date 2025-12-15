<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Landing Page</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}

    <style>
        /* small helpers to better match the provided design */
        .hero-container { max-width: 1100px; }
        .rating-bubble { backdrop-filter: blur(6px); }
        body {
            margin: 0;
            background: #000;
            font-family: Arial, Helvetica, sans-serif;
        }

        .stats-wrapper {
            position: relative;
        }
        

        .stats {
             max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 40px 20px;
        }

        .stats-wrapper::after {
            content: "";
            display: block;
            height: 0.5px;              /* use 0.5px if you want thinner */
            max-width: 1100px;
            margin: 0 auto;
            background: linear-gradient(
                to right,
                transparent,
                rgba(255,255,255,0.4),
                transparent
            );
        }

        .stat {
            text-align: center;
            flex: 1;
            position: relative;
        }

        .stat:not(:last-child)::after {
            content: "";
            position: absolute;
            right: 0;
            top: 10%;
            height: 80%;
            width: 1px;
            background: rgba(255,255,255,0.2); /* increased opacity so the thin line is visible */
        }

        .label {
            color: #ff6a00;
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .value {
            color: #fff;
            font-size: 42px;
            font-weight: bold;
        }
            /*frame with rounded corners and gradient background for rating bubble*/
        .rating-pill {
            display: inline-flex;
            align-items: center;
            gap: 30px;
            padding: 10px 20px;
            border-radius: 999px;
            background: linear-gradient( #FF541F21, #FF541F0A);
           
        }

        .avatars {
            display: flex;
            align-items: center;
        }

        .avatars img {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            object-fit: cover;
            
            margin-left: -10px;
        }

        .avatars img:first-child {
            margin-left: 0;
        }

        .rating-text {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            white-space: nowrap;
        }

        /* Navbar active underline */
        .nav-item { position: relative; }
        .nav-item.active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -8px;
            height: 4px;
            background: #ff6a00;
            border-radius: 3px;
            box-shadow: 0 2px 6px rgba(255,106,0,0.18);
        }

        .happy-badge {
            display: inline-flex;
            flex-direction: column;
            gap: 8px;
            padding: 6px 12px;
           
        }

        /* Feature section styles */
        .features-section { padding-top: 2.5rem; padding-bottom: 2.5rem; }
        .feature-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 1.25rem;
            align-items: start;
        }

        .feature-card {
            position: relative;
            background: linear-gradient(rgba(39, 40, 41, 0.7), rgba(0, 0, 0, 0), rgba(255, 60, 0, 0.5));
           
            padding: 1.5rem 1.75rem;
            border-radius: 12px;
            min-height: 150px;
            min-width: 480px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.6);
            overflow: visible;
        }

        .feature-card.large { min-height: 180px; }
        .feature-card .title { font-size: 1.5rem; margin-top: 1rem; font-weight: 600; }
        .feature-card .desc { color: #d1d5db; font-size: 0.95rem; line-height: 1.4; }

        .feature-card .badge {
            position: absolute;
            right: 16px;
            top: 12px;
            width: 40px;
            height: 40px;
            rotate: -45deg;
            background: linear-gradient(135deg,#ff6a00,#ff3b00);
            border-radius: 999px;
            display:flex;align-items:center;justify-content:center;color:white;font-weight:700;
            box-shadow: 0 6px 18px rgba(255,106,0,0.18);
            overflow: visible;
        }

        /* diagonal line under the circular badge */
        /* .feature-card .badge::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 100%;
            width: 3px;
            height: 84px;
            background: linear-gradient(180deg, rgba(255,122,58,1), rgba(255,59,0,1));
            transform: translateX(-50%) rotate(-32deg);
            transform-origin: top center;
            border-radius: 2px;
            z-index: 0;
        } */

        /* Heading font and size for features */
        .features-section h2 { font-size: 64px; line-height: 1; font-family: 'Sk-Modernist', Arial, Helvetica, sans-serif; }

        /* Paragraph below the feature containers */
        .features-section1 { position: relative; padding-top: 1.5rem; padding-bottom: 2rem; }

        .features-section1 .lead {
            font-family: 'Sk-Modernist', Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: 27.98px;
            line-height: 39.17px;
            color: #ffffff;
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .features-section1 .lead-year {
            position: absolute;
            left: 0;
            top: 0.6rem;
            font-family: 'Sk-Modernist', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #ffffff;
            opacity: 0.95;
        }

    </style>
</head>

<body class="bg-black text-white">

    <!-- Background Wrapper -->
    <div class="relative min-h-screen overflow-hidden bg-black">

        <!-- Base background canvas -->
        <div class="absolute inset-0 bg-black" style="z-index:0"></div>

        <!-- Left and right hero images (image 87 on left, image 85 on right) -->
        <img src="{{ asset('images/image 87.png') }}" alt="hero-left" class="pointer-events-none absolute left-0 top-0 h-full max-w-[48%] object-cover opacity-90" style="z-index:5">
        <img src="{{ asset('images/image 85.png') }}" alt="hero-right" class="pointer-events-none absolute right-0 top-0 h-full max-w-[48%] object-cover opacity-90" style="z-index:5">

        <!-- Stars / speck overlays (multiple layers for depth) -->
        <img src="{{ asset('images/image.png') }}" alt="stars-1" class="pointer-events-none absolute inset-0 w-full h-full object-cover opacity-25" style="z-index:9">
        <img src="{{ asset('images/image (1).png') }}" alt="stars-2" class="pointer-events-none absolute inset-0 w-full h-full object-cover opacity-20" style="z-index:9">

        <!-- Decorative curve pieces (left / right) -->
        <!-- <img src="{{ asset('images/Rounded rectangle (1).png') }}" alt="curve-left" class="pointer-events-none absolute left-0 top-1/4 w-40 md:w-72 opacity-95 -z-4 -translate-x-6">
        <img src="{{ asset('images/Rounded rectangle.png') }}" alt="curve-right" class="pointer-events-none absolute right-0 bottom-1/6 w-40 md:w-96 opacity-95 -z-4 translate-x-6"> -->

        <!-- Faint overlay to darken hero for readable text (below stars, above side images) -->
        <div class="absolute inset-0" style="background-color: rgba(0,0,0,0.28); z-index:8"></div>

        <!-- Content -->
        <div class="relative z-10">

            <!-- Navbar -->
            <nav class="px-6 py-6">
                <div class="mx-auto hero-container flex items-center justify-between">
                    <img src="{{ asset('images/Logo (1).png') }}" alt="Logo" class="h-8">

                    <ul class="hidden md:flex space-x-8 text-sm text-gray-200">
                        <li class="nav-item active text-white">Home</li>
                        <li class="hover:text-white">Services</li>
                        <li class="hover:text-white">Contact us</li>
                        <li class="hover:text-white">About us</li>
                    </ul>

                    <button class="bg-orange-500 hover:bg-orange-600 px-5 py-2 rounded-md text-sm">
                        Login
                    </button>
                </div>
            </nav>

            <!-- Hero Section -->
            <section class="flex items-center min-h-[80vh] px-6">
                <div class="mx-auto hero-container">
                    <div class="relative">
                        <!-- small rating bubble over hero text -->
                        <div class="rating-pill">
                            <div class="avatars">
                                <img src="images/Container (4).png" alt="client">
                                <img src="images/Container (3).png" alt="client">
                                <img src="images/Container (2).png" alt="client">
                                <img src="images/Container (1).png" alt="client">
                                <img src="images/Container.png" alt="client">
                            </div>

                            <!-- Happy Clients Badge: stars above, text below -->
                            <div class="happy-badge">
                                <div class="flex gap-1">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img 
                                            src="{{ asset('images/Vector1.png') }}" 
                                            alt="star"
                                            class="w-4 h-4"
                                        >
                                    @endfor
                                </div>

                                <!-- Text directly under the stars -->
                                <div class="text-sm font-medium text-orange-400">115+ happy clients</div>
                            </div>

                        </div>


                        <div class="max-w-2xl">
                            <h1 class="text-5xl font-bold leading-tight items-center justify-between">
                                Automate <span class="text-orange-500">Intelligence</span>.<br>
                                    Accelerate Growth.
                            </h1>

                            <p class="text-gray-300 mt-6">
                                Our AI-powered SaaS platform empowers businesses to streamline<br>
                                operations, automate repetive tasks, and make smarter, data-driven<br>
                                decisions-all from one intuitive dashboard.
                            </p>

                            <div class="mt-8 flex gap-4 items-center justify-center">
                                <button class="bg-orange-500 px-10 py-3 rounded-md">
                                    Get Started
                                </button>
                                <button class="border border-gray-500 px-10 py-3 rounded-md">
                                    See Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Bordered stats box under hero (centered, with vertical dividers) -->
            <div class="stats-wrapper">
                <div class="stats">
                    <div class="stat">
                        <div class="label">Clients</div>
                        <div class="value">120K+</div>
                    </div>

                    <div class="stat">
                        <div class="label">Projects</div>
                        <div class="value">150+</div>
                    </div>

                    <div class="stat">
                        <div class="label">5-Star Reviews</div>
                        <div class="value">32K+</div>
                    </div>
                </div>
            </div>

            <!-- Feature Section (matches provided design) -->
            <section class="features-section px-6">
                <div class="mx-auto hero-container">
                    <div class="flex items-start justify-between gap-6">
                        <div class="max-w-720px">
                            <h2 class="text-xl font-bold leading-tight">
                                Designed for Designers.<br>
                                Powered by <span class="text-orange-500">AI.</span>
                            </h2>
                            <p class="text-gray-300 mt-4">Unlock the full potential of your creativity with our AI-powered design assistant.<br>
                             Explore new dimensions of design.</p>
                        </div>

                        <!-- vector logo (PNG placed in public/images). Replace filename if different. -->
                        <div class="hidden md:flex items-center justify-center">
                            <img src="{{ asset('images/Vector.png') }}" alt="Vector logo" style="width:180px;height:100px;object-fit:contain;" />
                        </div>
                    </div>

                    <div class="mt-8 feature-grid">
                        <div class="feature-card small">
                            <div class="desc">Skip the blank canvas and spark creativity <br>
                            instantly. Our AI generates high-quality, on-<br>
                            brand design concepts within seconds</div>
                            <div class="title">Instant Ideation</div>
                            <div class="badge rotate-45">➜</div>
                        </div>

                        <div class="feature-card large">
                            <div class="desc">No two creators are the same, and neither are their <br>
                            styles. Our AI learns from your inputs, understands your<br>
                             aesthetic preferences, and fine-tunes every design</div>
                            <div class="title">Smart Adaptability</div>
                            <div class="badge">➜</div>
                        </div>

                        <div class="feature-card large">
                            <div class="desc">Design once, export anywhere. Whether you need high<br>
                            -res graphics for print, responsive visuals for the web, <br>
                            or mobile-optimized assets</div>
                            <div class="title">Multi-Format Export</div>
                            <div class="badge">➜</div>
                        </div>

                        <div class="feature-card small">
                            <div class="desc">Say goodbye to repetitive tweaks <br>
                            and endless back-and-forths. With intuitive<br>
                             prompt-based editing</div>
                            <div class="title">Seamless Revisions</div>
                            <div class="badge">➜</div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="features-section1 px-6">
                <div class="mx-auto hero-container relative">
                    <div class="lead-year">2025</div>
                    <p class="lead">Whether you're designing for personal projects, creative teams, or large-scale campaigns, our AI-powered platform is built to bring your ideas to life—quickly, beautifully, and intelligently. And the results? The numbers speak for themselves:</p>
                </div>
            </section>

        </div>
    </div>

</body>
</html>
