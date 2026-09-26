@extends('layouts.app')

@section('title', 'QuickBite - Gourmet Fast Food & Pizza')

@section('content')
    <!-- Hero Section -->
    <section class="px-[5%] py-16 lg:py-24 bg-gradient-to-b from-gray-100 via-gray-50 to-gray-50 dark:from-black dark:via-[#0a0a0a] dark:to-[#080808] flex flex-col lg:flex-row items-center justify-between gap-12 overflow-hidden">
        <div class="lg:w-1/2 space-y-6" data-aos="fade-right" data-aos-duration="900">
            <span class="inline-flex items-center gap-2 bg-white dark:bg-gray-900 text-brandOrange font-bold text-xs px-4 py-1.5 rounded-full border border-gray-200 dark:border-gray-800 shadow-md">
                <i class="fa-solid fa-fire text-brandRed animate-bounce"></i> #1 Fast Food Delivery Service
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight tracking-tight text-gray-900 dark:text-white">
                CRAVING FOR<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brandOrange via-yellow-500 to-brandRed animate-pulse">UNMATCHED FLAVOR?</span>
            </h1>
            <p class="text-gray-600 dark:text-gray-400 text-xs sm:text-sm max-w-lg leading-relaxed">
                Experience gourmet pizzas baked in wood-fired ovens, double-stacked juicy burgers, and crispy sides delivered straight to your doorstep in under 30 minutes!
            </p>
            
            <div class="flex flex-wrap items-center gap-4 pt-2">
                <a href="#popular-menu" class="bg-brandOrange hover:bg-yellow-500 text-black font-black text-xs px-8 py-4 rounded-xl transition shadow-xl hover:scale-105 active:scale-95 transform flex items-center gap-2">
                    EXPLORE MENU <i class="fa-solid fa-arrow-right animate-pulse"></i>
                </a>
                <a href="#special-deals" class="border border-gray-300 dark:border-gray-800 hover:border-brandOrange text-gray-800 dark:text-white hover:text-brandOrange font-bold text-xs px-8 py-4 rounded-xl transition hover:scale-105 transform">
                    🔥 TODAY'S DEALS
                </a>
            </div>

            <div class="flex items-center gap-6 pt-4 border-t border-gray-200 dark:border-gray-800">
                <div>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white"><span class="counter-val" data-target="30">30</span> MINS</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 font-semibold">Fast Delivery Guaranteed</p>
                </div>
                <div class="w-px h-8 bg-gray-200 dark:bg-gray-800"></div>
                <div>
                    <h3 class="text-2xl font-black text-brandOrange"><span class="counter-val" data-target="4.9" data-decimal="true">4.9</span> ★</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 font-semibold">25,000+ Verified Reviews</p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 flex justify-center relative" data-aos="fade-left" data-aos-duration="1000">
            <div class="absolute -inset-4 bg-gradient-to-r from-brandOrange to-brandRed rounded-full blur-3xl opacity-30 animate-pulse-glow"></div>
            <img class="relative w-full max-w-md rounded-3xl shadow-2xl object-cover hover:scale-[1.03] transition duration-500 border border-gray-200 dark:border-gray-800 animate-float glow-orange" src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=800&q=80" alt="Hero Banner">
        </div>
    </section>

    <!-- Infinite Promotional Marquee Banner -->
    <div class="bg-gradient-to-r from-brandOrange via-amber-500 to-brandRed py-2.5 overflow-hidden text-black font-black text-xs uppercase tracking-widest whitespace-nowrap shadow-inner border-y border-black/10">
        <div class="inline-flex gap-8 animate-marquee">
            <span>🍕 FRESH WOOD-FIRED DOUGH</span>
            <span>⚡ 30-MINUTES LIGHTNING DELIVERY</span>
            <span>🍔 100% BLACK ANGUS BEEF</span>
            <span>🍗 CRISPY GOLDEN CHICKEN</span>
            <span>🍟 CRUNCHY HAND-CUT FRIES</span>
            <span>🥤 ARTISAN THICK SHAKES</span>
            <span>🍰 WARM MOLTEN LAVA CAKES</span>
            <span>🍕 FRESH WOOD-FIRED DOUGH</span>
            <span>⚡ 30-MINUTES LIGHTNING DELIVERY</span>
            <span>🍔 100% BLACK ANGUS BEEF</span>
            <span>🍗 CRISPY GOLDEN CHICKEN</span>
            <span>🍟 CRUNCHY HAND-CUT FRIES</span>
            <span>🥤 ARTISAN THICK SHAKES</span>
            <span>🍰 WARM MOLTEN LAVA CAKES</span>
        </div>
    </div>

    <!-- Special Offers Section -->
    <section id="special-deals" class="px-[5%] py-16 bg-gray-100/50 dark:bg-[#0c0c0c]">
        <div class="text-center max-w-xl mx-auto mb-10" data-aos="fade-up">
            <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3 py-1 rounded-full">Limited Time Offers</span>
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white mt-2">HOT COMBO DEALS</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Offer 1 -->
            <div class="shimmer-card hover-lift bg-gradient-to-br from-brandRed/10 via-white dark:via-[#121212] to-transparent p-6 rounded-3xl border border-brandRed/20 flex flex-col justify-between space-y-4 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <span class="inline-block bg-brandRed text-white text-[10px] font-black px-3 py-1 rounded-full uppercase animate-wiggle shadow-sm">Save 30%</span>
                    <h3 class="text-lg font-black text-gray-900 dark:text-white mt-3">Family Pizza Feast</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">2 Large Pepperoni Pizzas + 1 Garlic Bread + 1.5L Coke.</p>
                </div>
                <div class="flex justify-between items-center pt-3 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xl font-black text-brandOrange">$24.99 <span class="line-through text-xs text-gray-400">$35.00</span></span>
                    <button onclick="addToCart('Family Pizza Feast', 24.99, this)" class="bg-black text-white dark:bg-white dark:text-black font-extrabold text-xs px-4 py-2.5 rounded-xl hover:bg-brandOrange dark:hover:bg-brandOrange hover:scale-105 active:scale-95 transition shadow-md">CLAIM DEAL</button>
                </div>
            </div>
            <!-- Offer 2 -->
            <div class="shimmer-card hover-lift bg-gradient-to-br from-brandOrange/10 via-white dark:via-[#121212] to-transparent p-6 rounded-3xl border border-brandOrange/20 flex flex-col justify-between space-y-4 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <span class="inline-block bg-brandOrange text-black text-[10px] font-black px-3 py-1 rounded-full uppercase animate-wiggle shadow-sm">Best Seller</span>
                    <h3 class="text-lg font-black text-gray-900 dark:text-white mt-3">Burger Madness Box</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">2 Double Cheeseburgers + Large Fries + 2 Cold Drinks.</p>
                </div>
                <div class="flex justify-between items-center pt-3 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xl font-black text-brandOrange">$16.99 <span class="line-through text-xs text-gray-400">$22.00</span></span>
                    <button onclick="addToCart('Burger Madness Box', 16.99, this)" class="bg-black text-white dark:bg-white dark:text-black font-extrabold text-xs px-4 py-2.5 rounded-xl hover:bg-brandOrange dark:hover:bg-brandOrange hover:scale-105 active:scale-95 transition shadow-md">CLAIM DEAL</button>
                </div>
            </div>
            <!-- Offer 3 -->
            <div class="shimmer-card hover-lift bg-gradient-to-br from-yellow-500/10 via-white dark:via-[#121212] to-transparent p-6 rounded-3xl border border-yellow-500/20 flex flex-col justify-between space-y-4 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                <div>
                    <span class="inline-block bg-yellow-500 text-black text-[10px] font-black px-3 py-1 rounded-full uppercase animate-wiggle shadow-sm">Weekend Special</span>
                    <h3 class="text-lg font-black text-gray-900 dark:text-white mt-3">Crispy Chicken Bucket</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">10 Pcs Fried Chicken + 2 Dips + Large Potato Wedges.</p>
                </div>
                <div class="flex justify-between items-center pt-3 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xl font-black text-brandOrange">$19.99 <span class="line-through text-xs text-gray-400">$28.00</span></span>
                    <button onclick="addToCart('Crispy Chicken Bucket', 19.99, this)" class="bg-black text-white dark:bg-white dark:text-black font-extrabold text-xs px-4 py-2.5 rounded-xl hover:bg-brandOrange dark:hover:bg-brandOrange hover:scale-105 active:scale-95 transition shadow-md">CLAIM DEAL</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Menu Section -->
    <section id="popular-menu" class="px-[5%] py-16">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4" data-aos="fade-up">
            <div>
                <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3 py-1 rounded-full">Handcrafted Menu</span>
                <h2 class="text-2xl sm:text-3xl font-black tracking-wide text-gray-900 dark:text-white mt-2">OUR DELICIOUS DISHES</h2>
            </div>
            
            <!-- Category Filter Tabs -->
            <div class="flex flex-wrap gap-2 text-xs font-bold">
                <button onclick="filterMenu('all', event)" class="category-btn active bg-brandOrange text-black px-4 py-2 rounded-xl transition hover:scale-105 shadow-md">ALL</button>
                <button onclick="filterMenu('pizza', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-4 py-2 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105">PIZZA</button>
                <button onclick="filterMenu('burger', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-4 py-2 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105">BURGERS</button>
                <button onclick="filterMenu('chicken', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-4 py-2 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105">CHICKEN</button>
                <button onclick="filterMenu('sides', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-4 py-2 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105">SIDES & DRINKS</button>
                <button onclick="filterMenu('dessert', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-4 py-2 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105">DESSERTS</button>
            </div>
        </div>

        <!-- Product Grid (12 Items with Staggered AOS Animations) -->
        <div id="productGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-5">
            
            <!-- Item 1 -->
            <div class="menu-item burger shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="50">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=400&q=80" alt="Classic Beef Burger">
                        <button onclick="openQuickView('Classic Beef Burger', '$6.99', 'Juicy beef patty with fresh lettuce, melted cheddar cheese and special house sauce.', 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=400&q=80', 6.99, 'BURGER')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★★ (4.9)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Classic Beef Burger</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Juicy beef patty with cheddar & sauce.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$6.99</p>
                    <button onclick="addToCart('Classic Beef Burger', 6.99, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="menu-item pizza shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=400&q=80" alt="Double Cheesy Pizza">
                        <button onclick="openQuickView('Double Cheesy Pizza', '$8.99', 'Loaded with rich mozzarella and parmesan cheese baked to perfection.', 'https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=400&q=80', 8.99, 'PIZZA')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★★ (5.0)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Double Cheesy Pizza</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Loaded with rich mozzarella & parmesan.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$8.99</p>
                    <button onclick="addToCart('Double Cheesy Pizza', 8.99, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="menu-item chicken shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="150">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?auto=format&fit=crop&w=400&q=80" alt="Crispy Fried Wings">
                        <button onclick="openQuickView('Crispy Fried Wings', '$7.99', '6 pieces of spicy marinated crispy chicken wings with mayo dip.', 'https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?auto=format&fit=crop&w=400&q=80', 7.99, 'CHICKEN')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★☆ (4.7)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Crispy Fried Wings</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">6 pcs crispy spicy fried chicken wings.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$7.99</p>
                    <button onclick="addToCart('Crispy Fried Wings', 7.99, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="menu-item pizza shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1628840042765-356cda07504e?auto=format&fit=crop&w=400&q=80" alt="Pepperoni Feast Pizza">
                        <button onclick="openQuickView('Pepperoni Feast Pizza', '$9.99', 'Traditional wood-fired pizza topped with Italian beef pepperoni.', 'https://images.unsplash.com/photo-1628840042765-356cda07504e?auto=format&fit=crop&w=400&q=80', 9.99, 'PIZZA')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★★ (4.8)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Pepperoni Feast Pizza</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Loaded with crispy Italian beef pepperoni.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$9.99</p>
                    <button onclick="addToCart('Pepperoni Feast Pizza', 9.99, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="menu-item burger shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="250">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?auto=format&fit=crop&w=400&q=80" alt="Spicy Zinger Burger">
                        <button onclick="openQuickView('Spicy Zinger Burger', '$7.49', 'Crispy spicy chicken breast patty with mayo & fresh lettuce.', 'https://images.unsplash.com/photo-1586190848861-99aa4a171e90?auto=format&fit=crop&w=400&q=80', 7.49, 'BURGER')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★★ (4.9)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Spicy Zinger Burger</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Crispy spicy chicken breast with mayo.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$7.49</p>
                    <button onclick="addToCart('Spicy Zinger Burger', 7.49, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="menu-item sides shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="300">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-contain p-2 group-hover:scale-110 transition duration-500" src="{{ asset('assets/crispy-french-fries.svg') }}" alt="Crispy French Fries">
                        <button onclick="openQuickView('Crispy French Fries', '$2.49', 'Golden salted crispy french fries served with garlic mayo sauce.', '{{ asset('assets/crispy-french-fries.svg') }}', 2.49, 'SIDES')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★☆ (4.6)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Crispy French Fries</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Golden salted crisp potatoes with dip.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$2.49</p>
                    <button onclick="addToCart('Crispy French Fries', 2.49, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="menu-item sides shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="350">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1572490122747-3968b75cc699?auto=format&fit=crop&w=400&q=80" alt="Choco Fudge Shake">
                        <button onclick="openQuickView('Choco Fudge Shake', '$3.49', 'Thick creamy chocolate ice cream blend topped with cocoa powder.', 'https://images.unsplash.com/photo-1572490122747-3968b75cc699?auto=format&fit=crop&w=400&q=80', 3.49, 'SIDES')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★★ (4.9)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Choco Fudge Shake</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Rich creamy chocolate ice cream blend.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$3.49</p>
                    <button onclick="addToCart('Choco Fudge Shake', 3.49, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 8 -->
            <div class="menu-item pizza shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="400">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80" alt="Veggie Supreme Pizza">
                        <button onclick="openQuickView('Veggie Supreme Pizza', '$8.49', 'Topped with bell peppers, olives, sweet corn, and onions.', 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80', 8.49, 'PIZZA')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★☆ (4.5)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Veggie Supreme Pizza</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Loaded with peppers, olives & corn.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$8.49</p>
                    <button onclick="addToCart('Veggie Supreme Pizza', 8.49, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 9 -->
            <div class="menu-item burger shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="450">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=400&q=80" alt="Double BBQ Bacon Burger">
                        <button onclick="openQuickView('Double BBQ Bacon Burger', '$8.99', 'Two beef patties, crispy bacon strips, smoked BBQ sauce and cheddar.', 'https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=400&q=80', 8.99, 'BURGER')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★★ (5.0)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Double BBQ Bacon Burger</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Double beef patty with smoked BBQ sauce.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$8.99</p>
                    <button onclick="addToCart('Double BBQ Bacon Burger', 8.99, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 10 -->
            <div class="menu-item chicken shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="500">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1562967914-608f82629710?auto=format&fit=crop&w=400&q=80" alt="Crispy Chicken Tenders">
                        <button onclick="openQuickView('Crispy Chicken Tenders', '$6.49', '5 tender boneless chicken strips with honey mustard dip.', 'https://images.unsplash.com/photo-1562967914-608f82629710?auto=format&fit=crop&w=400&q=80', 6.49, 'CHICKEN')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★☆ (4.7)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Crispy Chicken Tenders</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">5 pcs boneless chicken tenders with sauce.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$6.49</p>
                    <button onclick="addToCart('Crispy Chicken Tenders', 6.49, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 11 -->
            <div class="menu-item dessert shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="550">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=400&q=80" alt="Hot Lava Lava Cake">
                        <button onclick="openQuickView('Hot Lava Lava Cake', '$4.49', 'Warm chocolate cake filled with rich molten chocolate lava inside.', 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=400&q=80', 4.49, 'DESSERT')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★★ (4.9)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Hot Lava Cake</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Molten warm chocolate cake dessert.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$4.49</p>
                    <button onclick="addToCart('Hot Lava Cake', 4.49, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Item 12 -->
            <div class="menu-item dessert shimmer-card hover-lift bg-white dark:bg-[#121212] p-3.5 rounded-2xl border border-gray-200 dark:border-gray-800/80 transition duration-300 flex flex-col justify-between group shadow-sm" data-aos="fade-up" data-aos-delay="600">
                <div>
                    <div class="relative overflow-hidden rounded-xl mb-3">
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=400&q=80" alt="Strawberry Glazed Donut">
                        <button onclick="openQuickView('Strawberry Glazed Donut', '$1.99', 'Soft fluffy baked donut topped with strawberry icing and sprinkles.', 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=400&q=80', 1.99, 'DESSERT')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
                    </div>
                    <div class="text-[10px] text-brandOrange mb-1">★★★★☆ (4.6)</div>
                    <h3 class="font-bold text-xs text-gray-900 dark:text-white group-hover:text-brandOrange transition item-name">Strawberry Glazed Donut</h3>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 my-1">Fresh donut with strawberry sprinkles.</p>
                </div>
                <div class="mt-2">
                    <p class="text-brandOrange font-black text-sm mb-2">$1.99</p>
                    <button onclick="addToCart('Strawberry Glazed Donut', 1.99, this)" class="w-full bg-brandRed hover:bg-orange-700 text-white font-extrabold text-[10px] py-2 rounded-xl transition flex items-center justify-center gap-1.5 shadow-md active:scale-95">
                        ADD TO CART <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="px-[5%] py-16 bg-gray-100/50 dark:bg-[#0c0c0c]">
        <div class="text-center max-w-xl mx-auto mb-12" data-aos="fade-up">
            <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3 py-1 rounded-full">Customer Feedback</span>
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white mt-2">WHAT OUR FOODIES SAY</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="hover-lift bg-white dark:bg-[#121212] p-6 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm space-y-3" data-aos="fade-up" data-aos-delay="100">
                <div class="text-brandOrange text-xs">★★★★★</div>
                <p class="text-xs text-gray-600 dark:text-gray-400 leading-relaxed">"The Double Cheesy Pizza arrived piping hot in less than 25 minutes! Best wood-fired pizza in NY!"</p>
                <div class="flex items-center gap-3 pt-2">
                    <div class="w-8 h-8 bg-brandOrange text-black font-bold text-xs rounded-full flex items-center justify-center shadow-md">JD</div>
                    <div>
                        <h4 class="font-bold text-xs text-gray-900 dark:text-white">John Doe</h4>
                        <span class="text-[10px] text-gray-400">Verified Buyer</span>
                    </div>
                </div>
            </div>

            <div class="hover-lift bg-white dark:bg-[#121212] p-6 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm space-y-3" data-aos="fade-up" data-aos-delay="200">
                <div class="text-brandOrange text-xs">★★★★★</div>
                <p class="text-xs text-gray-600 dark:text-gray-400 leading-relaxed">"Spicy Zinger Burger is an absolute game-changer. Crispy on the outside, juicy on the inside!"</p>
                <div class="flex items-center gap-3 pt-2">
                    <div class="w-8 h-8 bg-brandRed text-white font-bold text-xs rounded-full flex items-center justify-center shadow-md">AS</div>
                    <div>
                        <h4 class="font-bold text-xs text-gray-900 dark:text-white">Amanda Smith</h4>
                        <span class="text-[10px] text-gray-400">Food Blogger</span>
                    </div>
                </div>
            </div>

            <div class="hover-lift bg-white dark:bg-[#121212] p-6 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm space-y-3" data-aos="fade-up" data-aos-delay="300">
                <div class="text-brandOrange text-xs">★★★★★</div>
                <p class="text-xs text-gray-600 dark:text-gray-400 leading-relaxed">"Their Choco Fudge Shake is heavenly. Super fast delivery and great packaging."</p>
                <div class="flex items-center gap-3 pt-2">
                    <div class="w-8 h-8 bg-amber-500 text-black font-bold text-xs rounded-full flex items-center justify-center shadow-md">MK</div>
                    <div>
                        <h4 class="font-bold text-xs text-gray-900 dark:text-white">Michael K.</h4>
                        <span class="text-[10px] text-gray-400">Regular Customer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
