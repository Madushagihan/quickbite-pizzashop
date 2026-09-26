@extends('layouts.app')

@section('title', 'QuickBite - Our Story & Experience')

@section('content')
    <!-- Hero Section -->
    <section class="relative px-[5%] py-20 lg:py-24 bg-gradient-to-b from-gray-100 via-gray-50 to-gray-50 dark:from-black dark:via-[#0a0a0a] dark:to-[#080808] text-center border-b border-gray-200 dark:border-gray-800 overflow-hidden">
        <div class="max-w-3xl mx-auto space-y-4 relative z-10" data-aos="zoom-in" data-aos-duration="800">
            <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3.5 py-1.5 rounded-full border border-brandOrange/20 shadow-sm inline-block">Behind The Flavors</span>
            <h1 class="text-3xl sm:text-5xl font-black text-gray-900 dark:text-white tracking-tight leading-tight">
                CRAFTING PASSION INTO EVERY <span class="text-transparent bg-clip-text bg-gradient-to-r from-brandOrange via-yellow-500 to-brandRed animate-pulse">SINGLE BITE</span>
            </h1>
            <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 leading-relaxed max-w-xl mx-auto">
                Founded with a passion for high-speed delivery without compromising handcrafted quality. Discover how QuickBite redefined gourmet fast food.
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="px-[5%] py-20 max-w-6xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="relative group" data-aos="fade-right" data-aos-duration="900">
                <div class="absolute -inset-2 bg-gradient-to-r from-brandOrange to-brandRed rounded-3xl blur-2xl opacity-30 group-hover:opacity-60 transition duration-500 animate-pulse-glow"></div>
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=80" alt="QuickBite Kitchen" class="relative rounded-2xl w-full h-80 sm:h-96 object-cover shadow-2xl hover:scale-[1.02] transition duration-500 border border-gray-200 dark:border-gray-800">
            </div>
            
            <div class="space-y-5" data-aos="fade-left" data-aos-duration="900">
                <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3 py-1 rounded-full">Since 2018</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white leading-snug">
                    From a Small Kitchen to your Favorite Food Destination
                </h2>
                <p class="text-xs text-gray-600 dark:text-gray-400 leading-relaxed">
                    QuickBite started with a simple belief: fast food shouldn't mean sacrificed quality. We combined traditional wood-fired pizza techniques with fresh local produce to create meals that are served lightning fast without compromising rich, authentic flavor.
                </p>
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="hover-lift p-4 bg-white dark:bg-[#121212] rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm" data-aos="zoom-in" data-aos-delay="100">
                        <i class="fa-solid fa-leaf text-brandOrange text-2xl mb-1.5 animate-pulse"></i>
                        <h4 class="font-bold text-xs text-gray-900 dark:text-white">100% Fresh Ingredients</h4>
                        <p class="text-[10px] text-gray-500 dark:text-gray-400">Sourced daily from local farmers.</p>
                    </div>
                    <div class="hover-lift p-4 bg-white dark:bg-[#121212] rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm" data-aos="zoom-in" data-aos-delay="200">
                        <i class="fa-solid fa-bolt text-brandOrange text-2xl mb-1.5 animate-bounce"></i>
                        <h4 class="font-bold text-xs text-gray-900 dark:text-white">30 Min Delivery</h4>
                        <p class="text-[10px] text-gray-500 dark:text-gray-400">Hot and fresh directly to your door.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Numbers / Stats Counter Bar with Animated Live Counters -->
    <section class="bg-gray-100 dark:bg-[#0c0c0c] border-y border-gray-200 dark:border-gray-800 py-16 px-[5%]">
        <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
            <div class="space-y-1 hover-lift p-4 rounded-2xl bg-white dark:bg-[#121212] border border-gray-200 dark:border-gray-800/80 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-3xl sm:text-4xl font-black text-brandOrange"><span class="counter-val" data-target="250" data-suffix="K+">250K+</span></h3>
                <p class="text-xs font-semibold text-gray-600 dark:text-gray-400">Happy Foodies</p>
            </div>
            <div class="space-y-1 hover-lift p-4 rounded-2xl bg-white dark:bg-[#121212] border border-gray-200 dark:border-gray-800/80 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-3xl sm:text-4xl font-black text-brandOrange"><span class="counter-val" data-target="45" data-suffix="+">45+</span></h3>
                <p class="text-xs font-semibold text-gray-600 dark:text-gray-400">Menu Items</p>
            </div>
            <div class="space-y-1 hover-lift p-4 rounded-2xl bg-white dark:bg-[#121212] border border-gray-200 dark:border-gray-800/80 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-3xl sm:text-4xl font-black text-brandOrange"><span class="counter-val" data-target="18">18</span></h3>
                <p class="text-xs font-semibold text-gray-600 dark:text-gray-400">City Outlets</p>
            </div>
            <div class="space-y-1 hover-lift p-4 rounded-2xl bg-white dark:bg-[#121212] border border-gray-200 dark:border-gray-800/80 shadow-sm" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-3xl sm:text-4xl font-black text-brandOrange"><span class="counter-val" data-target="4.9" data-suffix=" ★" data-decimal="true">4.9 ★</span></h3>
                <p class="text-xs font-semibold text-gray-600 dark:text-gray-400">Average Rating</p>
            </div>
        </div>
    </section>

    <!-- Master Chefs / Team Section -->
    <section class="px-[5%] py-20 max-w-6xl mx-auto">
        <div class="text-center max-w-lg mx-auto mb-12 space-y-2" data-aos="fade-up">
            <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3 py-1 rounded-full">Culinary Experts</span>
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white mt-1">MEET OUR CHEFS</h2>
            <p class="text-xs text-gray-500 dark:text-gray-400">The talented team behind your favorite burgers, pizzas, and artisan shakes.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Chef 1 -->
            <div class="shimmer-card hover-lift bg-white dark:bg-[#121212] border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="overflow-hidden h-64">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=500&q=80" alt="Executive Chef" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-sm text-gray-900 dark:text-white group-hover:text-brandOrange transition">Chef Marco Rossi</h3>
                    <p class="text-brandOrange text-[11px] font-semibold">Head Pizza Artisan</p>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 mt-2">15 years of experience crafting authentic Neapolitan dough.</p>
                </div>
            </div>

            <!-- Chef 2 -->
            <div class="shimmer-card hover-lift bg-white dark:bg-[#121212] border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="overflow-hidden h-64">
                    <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?auto=format&fit=crop&w=500&q=80" alt="Burger Specialist" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-sm text-gray-900 dark:text-white group-hover:text-brandOrange transition">Chef Sarah Jenkins</h3>
                    <p class="text-brandOrange text-[11px] font-semibold">Gourmet Burger Specialist</p>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 mt-2">Mastermind behind our signature smash patties and secret sauces.</p>
                </div>
            </div>

            <!-- Chef 3 -->
            <div class="shimmer-card hover-lift bg-white dark:bg-[#121212] border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="overflow-hidden h-64">
                    <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?auto=format&fit=crop&w=500&q=80" alt="Pastry Chef" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-sm text-gray-900 dark:text-white group-hover:text-brandOrange transition">Chef Alex Vance</h3>
                    <p class="text-brandOrange text-[11px] font-semibold">Dessert & Shake Specialist</p>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 mt-2">Creator of our molten lava cakes and thick artisan shakes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Banner -->
    <section class="px-[5%] pb-20 max-w-6xl mx-auto" data-aos="zoom-in" data-aos-duration="800">
        <div class="relative overflow-hidden bg-gradient-to-r from-brandOrange via-amber-500 to-brandRed rounded-3xl p-8 sm:p-12 text-black flex flex-col sm:flex-row justify-between items-center gap-6 shadow-2xl">
            <div class="space-y-2 text-center sm:text-left relative z-10">
                <h3 class="text-2xl sm:text-3xl font-black">Ready to Taste the Perfection?</h3>
                <p class="text-xs font-semibold opacity-95">Order online now and get fast delivery straight to your doorstep.</p>
            </div>
            <a href="{{ route('menu') }}" class="relative z-10 bg-black text-white hover:bg-gray-900 font-extrabold text-xs px-8 py-4 rounded-xl transition shadow-xl hover:scale-105 active:scale-95 transform shrink-0 flex items-center gap-2">
                <span>VIEW FULL MENU</span> <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>
@endsection
