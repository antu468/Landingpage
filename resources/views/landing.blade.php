<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
</head>

<body class="bg-black text-white">

    <!-- Background Wrapper -->
    <div 
        class="relative min-h-screen bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/image 85.png') }}');"
    >

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/70"></div>

        <!-- Content -->
        <div class="relative z-10">

            <!-- Navbar -->
            <nav class="flex items-center justify-between px-10 py-6">
                <!-- <div class="text-xl font-bold ">LOGO</div> -->
                <img src="{{ asset('images/Logo (1).png') }}" alt="Logo" class="h-8">

                <ul class="hidden md:flex space-x-8 text-sm">
                    <li>Home</li>
                    <li>Services</li>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>

                <button class="bg-orange-500 hover:bg-orange-600 px-5 py-2 rounded-md">
                    Login
                </button>
            </nav>

            <!-- Hero Section -->
            <section class="flex items-center min-h-[80vh] px-10">
                <div class="max-w-2xl">
                    <h1 class="text-5xl font-bold leading-tight">
                        Automate <span class="text-orange-500">Intelligence.</span><br>
                        Accelerate Growth.
                    </h1>

                    <p class="text-gray-300 mt-6">
                        Our AI-powered SaaS platform empowers businesses to streamline
                        operations and make smarter decisions.
                    </p>

                    <div class="mt-8 flex gap-4">
                        <button class="bg-orange-500 px-6 py-3 rounded-md">
                            Get Started
                        </button>
                        <button class="border border-gray-500 px-6 py-3 rounded-md">
                            See Details
                        </button>
                    </div>
                </div>
            </section>

        </div>
    </div>

</body>
</html>
