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
                        <li class="hover:text-white">Home</li>
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
                        <div class="absolute -top-8 right-0 hidden sm:flex items-center gap-3 px-4 py-2 rounded-full bg-black/50 text-sm text-white rating-bubble">
                            <div class="flex -space-x-2">
                                <img src="{{ asset('images/avatar1.png') }}" class="w-7 h-7 rounded-full border-2 border-black" alt="a">
                                <img src="{{ asset('images/avatar2.png') }}" class="w-7 h-7 rounded-full border-2 border-black" alt="b">
                                <img src="{{ asset('images/avatar3.png') }}" class="w-7 h-7 rounded-full border-2 border-black" alt="c">
                            </div>
                            <div class="text-xs text-gray-200">115+ happy clients</div>
                        </div>

                        <div class="max-w-2xl">
                    <h1 class="text-5xl font-bold leading-tight">
                        Automate <span class="text-orange-500">Intelligence.</span><br>
                        Accelerate Growth.
                    </h1>

                    <p class="text-gray-300 mt-6">
                        Our AI-powered SaaS platform empowers businesses to streamline
                        operations, automate repetive tasks, and make smarter, data-driven
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

        </div>
    </div>

</body>
</html>
