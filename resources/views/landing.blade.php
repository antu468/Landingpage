<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Landing Page</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}

    <style>
        
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
            height: 0.5px;              
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
            background: rgba(255,255,255,0.2); 
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

        .features-section h2 { font-size: 64px; line-height: 1; font-family: 'Sk-Modernist', Arial, Helvetica, sans-serif; }

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
        .numbers-section { padding-top: 2.5rem; padding-bottom: 3rem; }
        .numbers-container { max-width: 1200px; margin: 0 auto; }
        .numbers-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 48px; align-items: start; }

        .numbers-col { position: relative; color: #fff; }
        .numbers-row .numbers-col:nth-child(odd) { transform: translateY(0); }
        .numbers-row .numbers-col:nth-child(even) { transform: translateY(88px); }
        .numbers-col .num { font-size: 67.15px; font-weight: 700; line-height: 1; }
        .numbers-col .num-label { margin-top: 8px; font-size: 20px; font-weight: 600; }
        .numbers-col .num-sub { margin-top: 6px; color: #cbd5e1; font-size: 14px; }

        .line-wrap { position: relative; margin-top: 28px; height: 36px; }
        .avatars-inline { display: inline-flex; align-items:center; }
        .avatars-inline img { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-left: -10px; box-shadow: 0 6px 12px rgba(0,0,0,0.22);}

        .img-box { display:inline-block; border-radius:8px; overflow:hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.6); }
        .img-box img { width: 86px; height:46px; object-fit:cover; display:block; }

        .img-box.overlap { position: absolute; top: 50%; left: -80px; transform: translateY(-50%); padding: ; border-radius: 8px; display: flex; align-items: center; gap: 0; rgba(0,0,0,0.36); z-index: 3; }
        .img-box.overlap img { width: 50px; height: 46px; object-fit: cover; border-radius: 10px; margin-left: -10px; box-shadow: 0 6px 12px rgba(0,0,0,0.22); }
        .img-box.overlap img:first-child { margin-left: 0; }

        .h-line { position: absolute; left: 0; right: 0; height: 1px; background: rgba(255,255,255,0.15); top: 50%; transform: translateY(-50%); z-index: 1; }
        .cross { display: none; }
        .decoration {
            position: absolute;
            right: 10%;
            top: 50%;
            transform: translateY(-50%);
            width: 56px;
            height: 56px;
            z-index: 2;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .decoration::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 6%;
            bottom: 15%;
            width: 1px;
            background: rgba(255,255,255,50);
            transform: translateX(-50%);
        }
        .decoration::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 12%;
            right: 12%;
            height: 1px;
            background: rgba(255,255,255,50);
            transform: translateY(-90%);
        }

        .decoration .chev {
            position: relative;
            z-index: 3;
            color: rgba(255,255,255,0.95);
            font-weight: 700;
            font-size: 12px;
            letter-spacing: 2px;
            background: rgba(0,0,0,0.6);
            padding: 2px 6px;
            border-radius: 4px;
        }

        .cta-section { padding: 8rem 0; }
        .cta-section .cta-wrap { display:flex; gap:12px; align-items:center; justify-content:center; }
        .cta-section .btn-primary { background:#ff6a00; color:#fff; padding:14px 36px; border-radius:10px; font-weight:700; box-shadow:0 8px 24px rgba(255,106,0,0.18); border:none; cursor:pointer; }
        .cta-section .cta-note { color:#cbd5e1; margin-left:12px; font-size:14px; display:flex; align-items:center; gap:8px; }

        .toggle-wrapper{
            background: #1c1f22;
            padding:10px;
            border-radius:333px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap:45px;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.05);
            margin: 0 auto;
            width: fit-content;
        }

        .toggle-btn{
            padding: 10px 28px;
            border-radius: 999px;
            font-size: 16px;
            cursor: default;
            user-select: none;
            color: #9ca3af;
            transition: all 0.25s ease;
        }

        .toggle-btn.active{
            background: linear-gradient(
                180deg,
                rgba(255,255,255,0.15),
                rgba(255,255,255,0.05)
            );
            color: #ffffff;
            box-shadow:
                0 6px 18px rgba(0,0,0,0.45),
                inset 0 1px 0 rgba(255,255,255,0.18);
        }

        .pricing-section{
            padding:100px 0;
        }

        .pricing-wrapper{
            display:flex;
            justify-content:center;
            
            align-items:flex-start;
            max-width:1200px;
            margin:0 auto;
        }

        .pricing-card{
            background:#1b1d1f;
            width:350px;
            padding:40px;
            border-radius:24px;
            flex-shrink:0;
            box-shadow:0 30px 60px rgba(0,0,0,0.6);
            position:relative;
        }

        .side-card{
            margin-top:40px; 
            z-index:1;
        }

        .pro-card{
            transform: translateY(-40px); /* 👈 middle card up */
            border:2px solid #ff6a2b;
            z-index:10;
        }
        .pro-title{
            color:#ff6a2b;
        }

        .desc{
            color:#b5b5b5;
            margin:12px 0 24px;
            line-height:1.5;
        }

        .price{
            font-size:36px;
            font-weight:700;
        }

        .price span{
            font-size:14px;
            color:#aaa;
        }

        .badge{
            background:#ff6a2b;
            color:#fff;
            font-size:12px;
            padding:4px 10px;
            border-radius:999px;
            margin-left:8px;
        }

        hr{
            border:none;
            border-top:1px solid rgba(255,255,255,0.08);
            margin:24px 0;
        }

        h4{
            margin-bottom:16px;
        }

        ul{
            list-style:none;
            padding:0;
            margin:0 0 32px;
        }

        ul li{
            margin-bottom:12px;
            color:#ddd;
        }

        .btn{
            width:100%;
            padding:14px;
            border-radius:14px;
            border:none;
            cursor:pointer;
            background:linear-gradient(180deg,#3a1f14,#1c0f0a);
            color:#fff;
            font-size:16px;
        }

        .faq-container{
            position: relative;
            max-width: 1000px;
            margin: 80px auto;
            padding: 0 20px;
        }

        /* FAQ decorative rectangles (use images from public/images exactly) */
        .faq-deco {
            position: absolute;
            z-index: 0;
            pointer-events: none;
            opacity: 0.95;
        }

        /* left top rectangle */
        .faq-deco.lt {
            left: -555px;
            top: -300px;
            width: 500px;
            height: 226.26px;
            radius: 117.24px
            border: 23.45px
            rotation: -90deg;
            background: url('{{ asset("images/Rounded rectangle (1).png") }}') no-repeat center/contain;
        }

        /* left bottom rectangle */
        .faq-deco.lb {
            left: -500px;
            bottom: -35px;
            width: 423.22px;
            height: 150px;
            radius: 117.24px
            border: 23.45px
            rotation: -90deg;
            background: url('{{ asset("images/Rounded rectangle.png") }}') no-repeat center/contain;
        }

        /* right middle rectangle */
        .faq-deco.rm {
            right: -510px;
            top: 50%;
            transform: translateY(-50%);
            width: 423.22px;
            height: 226.26px;
            radius: 117.24px
            border: 23.45px
            rotation: -90deg;
            background: url('{{ asset("images/Circle.png") }}') no-repeat center/contain;
        }
        .faq-item{
            border-bottom: 1px solid rgba(255,255,255,0.25);
        }
        .faq-item input{
            display:none;
        }
        .faq-question{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding: 26px 0;
            cursor:pointer;
            font-size:18px;
            font-weight:500;
        }
        .faq-question span{
            font-size:22px;
            transition: transform 0.3s ease;
        }
        .faq-answer{
            max-height:0;
            overflow:hidden;
            color:#cfcfcf;
            font-size:15px;
            line-height:1.6;
            transition: max-height 0.4s ease;
        }
        .faq-item input:checked ~ .faq-answer{
            max-height:200px;
            padding-bottom:20px;
        }

        .faq-item input:checked + label span{
            transform: rotate(180deg);
        }
        
        .curved-cta { position: relative; margin: 48px 0; border-radius: 28px; overflow: hidden; }
        .curved-cta .bg { position: absolute; left: 50%; top: -40%; width: 80%; height: 220%; transform: translateX(-50%); background: radial-gradient(ellipse at center top, rgba(255,106,0,0.95) 0%, rgba(62,18,18,0.9) 30%, rgba(12,12,12,0.95) 60%); filter: blur(0.4px); z-index: 0; }
        .curved-cta .grid { position:; inset:0; background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px); background-size: 48px 48px; mix-blend-mode: overlay; opacity:0.18; z-index:1; }
        .curved-cta .container { position: relative; z-index: 2; padding: 64px ; text-align: center; }
        .curved-cta h2 { color: #fff; font-size: 48px; margin: 0 0 12px; font-weight:700; }
        .curved-cta p { color: #f0f3f7; opacity:0.95; max-width: 900px; margin: 0 auto 22px; }
        .curved-cta .cta-btn { display:inline-block; background: #ff6a00; color:#fff; padding:14px 28px; border-radius:10px; font-weight:700; box-shadow: 0 12px 40px rgba(255,106,0,0.16); text-decoration:none; }
    </style>

    
</head>

<body class="bg-black text-white">

    <div class="relative min-h-screen overflow-hidden bg-black">

        
        <div class="absolute inset-0 bg-black" style="z-index:0"></div>

        
        <img src="{{ asset('images/image 87.png') }}" alt="hero-left" class="pointer-events-none absolute left-0 top-0 h-full max-w-[48%] object-cover opacity-90" style="z-index:5">
        <img src="{{ asset('images/image 85.png') }}" alt="hero-right" class="pointer-events-none absolute right-0 top-0 h-full max-w-[48%] object-cover opacity-90" style="z-index:5">

        <img src="{{ asset('images/image.png') }}" alt="stars-1" class="pointer-events-none absolute inset-0 w-full h-full object-cover opacity-25" style="z-index:9">
        <img src="{{ asset('images/image (1).png') }}" alt="stars-2" class="pointer-events-none absolute inset-0 w-full h-full object-cover opacity-20" style="z-index:9">

        <div class="absolute inset-0" style="background-color: rgba(0,0,0,0.28); z-index:8"></div>

        <div class="relative z-10">

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

            <section class="flex items-center min-h-[80vh] px-6">
                <div class="mx-auto hero-container">
                    <div class="relative">
                        
                        <div class="rating-pill">
                            <div class="avatars">
                                <img src="images/Container (4).png" alt="client">
                                <img src="images/Container (3).png" alt="client">
                                <img src="images/Container (2).png" alt="client">
                                <img src="images/Container (1).png" alt="client">
                                <img src="images/Container.png" alt="client">
                            </div>

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

            <section class="numbers-section px-6">
                <div class="mx-auto numbers-container">
                    <div class="numbers-row">
                        <div class="numbers-col">
                            <div class="num">2014</div>
                            <div class="num-label">Year of establishment</div>
                            <div class="num-sub">More than 10 years in the field</div>

                            <div class="line-wrap">
                                <div class="avatars-inline">
                                    <img src="{{ asset('images/3 (1).png') }}" alt="a1">
                                    <img src="{{ asset('images/2 (1).png') }}" alt="a2">
                                    <img src="{{ asset('images/1 (1).png') }}" alt="a3">
                                </div>
                                <div class="h-line"></div>
                                <div class="decoration"><span class="chev">&gt;&lt;</span></div>
                            </div>
                        </div>

                        <div class="numbers-col">
                            <div class="num">304</div>
                            <div class="num-label">Projects are launched</div>
                            <div class="num-sub">A lot of projects are done</div>

                            <div class="line-wrap">
                                <div class="img-box overlap">
                                    <img src="{{ asset('images/3.png') }}" alt="thumb1">
                                    <img src="{{ asset('images/2.png') }}" alt="thumb2">
                                    <img src="{{ asset('images/1.png') }}" alt="thumb3">
                                </div>
                                <div class="h-line"></div>
                                <div class="decoration"><span class="chev">&gt;&lt;</span></div>
                            </div>
                        </div>

                        <div class="numbers-col">
                            <div class="num">189</div>
                            <div class="num-label">Clients are satisfied</div>
                            <div class="num-sub">These people love us</div>

                            <div class="line-wrap">
                                <div class="avatars-inline">
                                    <img src="{{ asset('images/3 (2).png') }}" alt="c1">
                                    <img src="{{ asset('images/2 (2).png') }}" alt="c2">
                                    <img src="{{ asset('images/1 (2).png') }}" alt="c2">
                                </div>
                                <div class="h-line"></div>
                                <div class="decoration"><span class="chev">&gt;&lt;</span></div>
                            </div>
                        </div>

                        <div class="numbers-col">
                            <div class="num">12</div>
                            <div class="num-label">Projects in work</div>
                            <div class="num-sub">What we do right now</div>

                            <div class="line-wrap">
                                <div class="img-box overlap">
                                    <img src="{{ asset('images/3 (3).png') }}" alt="thumb2">
                                    <img src="{{ asset('images/2 (3).png') }}" alt="thumb2">
                                    <img src="{{ asset('images/1.png') }}" alt="thumb2">

                                </div>
                                <div class="h-line"></div>
                                <div class="decoration"><span class="chev">&gt;&lt;</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            
            <section class="cta-section">
                <div class="mx-auto hero-container">
                    <div class="cta-wrap">
                        <button class="btn-primary">Get Started →</button>
                        <div class="cta-note">Slots are available <span style="width:8px;height:8px;background:#22c55e;border-radius:50%;display:inline-block;margin-left:6px;"></span></div>
                    </div>
                </div>
            </section>

            <section class="plans-header px-4">
                <div class="mx-auto hero-container">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 style="color:#ffffff; font-size:48px; line-height:1; margin:0 0 16px; font-weight:700;">Choose the Plan<br>That’s Right for You</h2>
                        <p style="color:#cbd5e1; font-size:16px; margin:0 auto; max-width:760px;">Giving you access to essential features and over 1,000 creative tools. Upgrade to the<br> Pro Plan to unlock powerful AI capabilities, cloud syncing, and a whole new level of<br> creative freedom.</p>
                    </div>
                </div>
            </section>

            <div class="toggle-wrapper">
                <div class="toggle-btn active">Monthly</div>
                <div class="toggle-btn">Yearly</div>
            </div>

            <section class="pricing-section">
                <div class="pricing-wrapper">
                    <div class="pricing-card side-card">
                        <h3>Free</h3>
                        <p class="desc">Everything you need to supercharge your productivity.</p>

                        <div class="price">$0 <span>/ month</span></div>

                        <hr>

                        <h4>What's included</h4>
                        <ul>
                            <li>20 design generations/month</li>
                            <li>Low-res downloads</li>
                            <li>Basic style presets</li>
                            <li>Limited customization options</li>
                        </ul>

                        <button class="btn">Subscribe →</button>
                    </div>

                    <div class="pricing-card pro-card">
                            <h3 class="pro-title">Pro</h3>
                            <p class="desc">Unlock a new level of your personal productivity.</p>

                        <div class="price">
                            $17 <span>/ month</span>
                            <span class="badge">-20%</span>
                        </div>

                        <hr>

                        <h4>What's included</h4>
                        <ul>
                            <li>Everything in Free</li>
                            <li>Enigma AI</li>
                            <li>Unlimited design generations</li>
                            <li>Custom Themes</li>
                            <li>High-resolution exports</li>
                            <li>Custom Extensions</li>
                            <li>Developer Tools</li>
                        </ul>

                        <button class="btn">Subscribe →</button>
                    </div>

                    <div class="pricing-card side-card">
                        <h3>Team</h3>
                        <p class="desc">Everything you need to supercharge your productivity.</p>

                        <div class="price">
                            $37 <span>/ month</span>
                            <span class="badge">-20%</span>
                        </div>

                        <hr>

                        <h4>What's included</h4>
                        <ul>
                            <li>Everything in Free</li>
                            <li>Unlimited Shared Commands</li>
                            <li>Unlimited Shared Quicklinks</li>
                            <li>Priority support</li>
                        </ul>       
                        <button class="btn">Subscribe →</button>
                    </div>

                </div>
            </section>

            <section class="plans-header px-4">
                <div class="mx-auto hero-container">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 style="color:#ffffff; font-size:48px; line-height:1; margin:0 0 16px; font-weight:700;">Frequently Asked<br> Questions</h2>
                        <p style="color:#cbd5e1; font-size:16px; margin:0 auto; max-width:760px;">Got questions? We've got answers. Find everything you need to know about using our <br>platform, plans, and features.</p>
                    </div>
                </div>
            </section>

            <div class="faq-container">
                <!-- Decorative rectangles: left-top, left-bottom, right-middle -->
                <div class="faq-deco lt" aria-hidden="true"></div>
                <div class="faq-deco lb" aria-hidden="true"></div>
                <div class="faq-deco rm" aria-hidden="true"></div>
                <div class="faq-item">
                    <input type="checkbox" id="faq1">
                    <label class="faq-question" for="faq1">
                        What is this platform used for?
                        <span>⌄</span>
                    </label>
                    <div class="faq-answer">
                        It's an AI-powered design assistant that helps you generate, customize,
                        and export creative assets in seconds—whether for personal projects,
                        brand work, or commercial use.
                    </div>
                </div>

                
                <div class="faq-item">
                    <input type="checkbox" id="faq2">
                    <label class="faq-question" for="faq2">
                        What happens if I hit my free generation limit?
                        <span>⌄</span>
                    </label>
                    <div class="faq-answer">
                        You can upgrade to a paid plan to continue generating designs without limits.
                    </div>
                </div>

                
                <div class="faq-item">
                    <input type="checkbox" id="faq3">
                    <label class="faq-question" for="faq3">
                        Do I need design experience to use it?
                        <span>⌄</span>
                    </label>
                    <div class="faq-answer">
                        No design experience is required. The platform is built to be intuitive
                        for beginners and powerful for professionals.
                    </div>
                </div>

                
                <div class="faq-item">
                    <input type="checkbox" id="faq4">
                    <label class="faq-question" for="faq4">
                        Can I collaborate with my team?
                        <span>⌄</span>
                    </label>
                    <div class="faq-answer">
                        Yes, team collaboration features are available on selected plans.
                    </div>
                </div>

                
                <div class="faq-item">
                    <input type="checkbox" id="faq5">
                    <label class="faq-question" for="faq5">
                        Is it really free to use?
                        <span>⌄</span>
                    </label>
                    <div class="faq-answer">
                        Yes, a free plan is available with limited features.
                    </div>
                </div>

            </div>

            
            <section class="curved-cta">
                <div class="bg"></div>
                <div class="grid"></div>
                <div class="container">
                    <h2>Ready to Design Smarter?</h2>
                    <p>Whether you're a freelancer, a team, or a growing agency—our tools adapt to your workflow. Design faster. Deliver better.</p>
                    <a class="cta-btn" href="#">Get Started →</a>
                </div>
            </section>

            
            <footer style="color:#9ca3af; padding:60px 0;">
                <div class="mx-auto hero-container" style="display:flex; gap:24px; align-items:flex-start; justify-content:space-between;">
                    <div style="flex:1; max-width:360px;">
                        <h1  style="height:36px; margin-bottom:18px; font-weight:bold;font-color:#fff;font-size: 32px;">About Us</h1>
                        <p style="color:#cfcfcf; line-height:1.6;">We're a team of designers, engineers, and innovators building AI tools that empower anyone to turn imagination into stunning visuals—faster, smarter, and effortlessly.</p>
                    </div>

                    <div style="flex:0 0 160px;">
                        <h4 style="color:#ff6a00; margin-bottom:12px;">Useful Links</h4>
                        <ul style="list-style:none; padding:0; margin:0; color:#bfc7cb;">
                            <li style="margin:8px 0;">About</li>
                            <li style="margin:8px 0;">Services</li>
                            <li style="margin:8px 0;">Team</li>
                            <li style="margin:8px 0;">Prices</li>
                        </ul>
                    </div>

                    <div style="flex:0 0 160px;">
                        <h4 style="color:#ff6a00; margin-bottom:12px;">Help</h4>
                        <ul style="list-style:none; padding:0; margin:0; color:#bfc7cb;">
                            <li style="margin:8px 0;">Customer Support</li>
                            <li style="margin:8px 0;">Terms &amp; Conditions</li>
                            <li style="margin:8px 0;">Privacy Policy</li>
                            <li style="margin:8px 0;">Contact Us</li>
                        </ul>
                    </div>

                    <div style="flex:0 0 220px; text-align:right;">
                        <h4 style="color:#ff6a00; margin-bottom:12px;">Connect With Us</h4>
                        <div style="color:#bfc7cb; font-size:14px; line-height:1.6;">27 Division St, New York, NY 10002, USA<br>+123 324 2653<br>username@mail.com</div>
                        <div style="margin-top:18px; display:flex; gap:10px; justify-content:flex-end;">
                            <img src="{{ asset('images/facebook.png') }}" alt="fb" style="width:36px;height:36px;border-radius:999px;padding:6px;border:1px solid rgba(255,106,0,0.12);" />
                            <img src="{{ asset('images/github.png') }}" alt="pt" style="width:36px;height:36px;border-radius:999px;padding:6px;border:1px solid rgba(255,106,0,0.12);" />
                            <img src="{{ asset('images/twitter.png') }}" alt="tw" style="width:36px;height:36px;border-radius:999px;padding:6px;border:1px solid rgba(255,106,0,0.12);" />
                            <img src="{{ asset('images/google.png') }}" alt="g" style="width:36px;height:36px;border-radius:999px;padding:6px;border:1px solid rgba(255,106,0,0.12);" />
                        </div>
                    </div>
                </div>

                <div style="max-width:1100px; margin:24px auto 0; border-top:1px solid rgba(255,255,255,0.06); padding-top:18px; display:flex; justify-content:space-between; align-items:center;">
                    <div style="color:#8b9396;">© {{ date('Y') }} Your Company. All rights reserved.</div>
                    
                </div>
            </footer>

        </div>
    </div>
</body>
</html>
