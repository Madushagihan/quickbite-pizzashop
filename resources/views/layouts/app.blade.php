<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'QuickBite - Gourmet Fast Food & Pizza')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brandOrange: '#ff9900',
                        brandRed: '#ff3300',
                    },
                    fontFamily: { 
                        poppins: ['Poppins', 'sans-serif'] 
                    },
                    animation: {
                        'float': 'floatSlow 4s ease-in-out infinite',
                        'float-reverse': 'floatReverse 5s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 2.5s ease-in-out infinite',
                        'spin-slow': 'spin 18s linear infinite',
                        'wiggle': 'badgeWiggle 1.5s ease-in-out infinite',
                        'marquee': 'marquee 25s linear infinite',
                    }
                }
            }
        }
    </script>
    <style>
        /* Glow and Drop Shadow Effects */
        .glow-orange { filter: drop-shadow(0 0 18px rgba(255, 153, 0, 0.45)); }
        .glow-red { filter: drop-shadow(0 0 18px rgba(255, 51, 0, 0.45)); }

        /* Keyframes */
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-14px) rotate(1.5deg); }
        }

        @keyframes floatReverse {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(14px) rotate(-1.5deg); }
        }

        @keyframes pulseGlow {
            0%, 100% {
                box-shadow: 0 0 15px rgba(255, 153, 0, 0.35);
            }
            50% {
                box-shadow: 0 0 32px rgba(255, 153, 0, 0.75), 0 0 50px rgba(255, 51, 0, 0.4);
            }
        }

        @keyframes badgeWiggle {
            0%, 100% { transform: rotate(-3deg); }
            50% { transform: rotate(3deg) scale(1.05); }
        }

        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }

        @keyframes cartBump {
            0% { transform: scale(1); }
            35% { transform: scale(1.4) rotate(-8deg); }
            70% { transform: scale(0.9) rotate(5deg); }
            100% { transform: scale(1) rotate(0deg); }
        }

        .animate-cart-bump {
            animation: cartBump 0.45s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Hover elevation and micro transitions */
        .hover-lift {
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .hover-lift:hover {
            transform: translateY(-8px) scale(1.015);
            box-shadow: 0 20px 35px -10px rgba(255, 153, 0, 0.2);
        }

        /* Shimmer reflection effect */
        .shimmer-card {
            position: relative;
            overflow: hidden;
        }
        .shimmer-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.12) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: skewX(-25deg);
            transition: left 0.85s ease;
            pointer-events: none;
            z-index: 5;
        }
        .shimmer-card:hover::before {
            left: 200%;
        }

        /* Flying item clone animation */
        .flying-cart-item {
            position: fixed;
            z-index: 9999;
            pointer-events: none;
            transition: all 0.75s cubic-bezier(0.2, 0.8, 0.2, 1);
            border-radius: 50%;
            box-shadow: 0 10px 25px rgba(255, 153, 0, 0.6);
        }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-900 dark:bg-[#080808] dark:text-white font-poppins selection:bg-brandOrange selection:text-black transition-colors duration-300 overflow-x-hidden">

    <!-- Header & Navigation Bar -->
    @include('layouts.navigation')

    <!-- Main Dynamic Content -->
    <main>
        @yield('content')
    </main>

    <!-- Slide-out Cart Sidebar & Quick View Modal -->
    @include('layouts.cart-sidebar')
    @include('layouts.quick-view-modal')

    <!-- Floating Back to Top Button -->
    <button id="backToTopBtn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-6 left-6 z-40 bg-white/90 dark:bg-[#181818]/90 text-brandOrange border border-brandOrange/30 w-11 h-11 rounded-full shadow-2xl flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 hover:scale-110 hover:bg-brandOrange hover:text-black">
        <i class="fa-solid fa-arrow-up text-sm"></i>
    </button>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- AOS JS Engine -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom Script Engine -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // Initialize AOS animations
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 750,
                once: true,
                offset: 50,
                easing: 'ease-out-cubic'
            });

            // Back to top scroll listener
            const backToTop = document.getElementById('backToTopBtn');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 400) {
                    backToTop.classList.remove('opacity-0', 'pointer-events-none');
                    backToTop.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    backToTop.classList.add('opacity-0', 'pointer-events-none');
                    backToTop.classList.remove('opacity-100', 'pointer-events-auto');
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
