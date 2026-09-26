@extends('layouts.app')

@section('title', 'QuickBite - Full Gourmet Menu')

@section('content')
    <!-- Page Banner Header -->
    <section class="px-[5%] py-16 bg-gradient-to-b from-gray-100 via-gray-50 to-gray-50 dark:from-black dark:via-[#0a0a0a] dark:to-[#080808] text-center border-b border-gray-200 dark:border-gray-800 overflow-hidden">
        <div data-aos="zoom-in" data-aos-duration="750">
            <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3.5 py-1.5 rounded-full border border-brandOrange/20 shadow-sm inline-block">Freshly Prepared Daily</span>
            <h1 class="text-3xl sm:text-5xl font-black mt-2"><span class="text-transparent bg-clip-text bg-gradient-to-r from-brandOrange to-brandRed animate-pulse">FULL GOURMET MENU</span></h1>
            <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-2 max-w-lg mx-auto">Explore our wide selection of artisan pizzas, flame-grilled burgers, crispy fried chicken, drinks, and delicious desserts.</p>
        </div>
    </section>

    <!-- Main Menu Area -->
    <section class="px-[5%] py-16">
        <!-- Filter Category Tabs -->
        <div class="flex flex-wrap justify-center gap-2.5 mb-12 text-xs font-bold" data-aos="fade-up" data-aos-duration="700">
            <button onclick="filterMenu('all', event)" class="category-btn active bg-brandOrange text-black px-5 py-2.5 rounded-xl transition shadow-md hover:scale-105 active:scale-95">ALL ITEMS</button>
            <button onclick="filterMenu('pizza', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-5 py-2.5 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105 active:scale-95">🍕 PIZZAS</button>
            <button onclick="filterMenu('burger', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-5 py-2.5 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105 active:scale-95">🍔 BURGERS</button>
            <button onclick="filterMenu('chicken', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-5 py-2.5 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105 active:scale-95">🍗 CHICKEN</button>
            <button onclick="filterMenu('sides', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-5 py-2.5 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105 active:scale-95">🍟 SIDES & DRINKS</button>
            <button onclick="filterMenu('dessert', event)" class="category-btn bg-white dark:bg-[#121212] text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white px-5 py-2.5 rounded-xl border border-gray-200 dark:border-gray-800 transition hover:scale-105 active:scale-95">🍰 DESSERTS</button>
        </div>

        <!-- Product Grid (Full Menu with Staggered Entrance Animations) -->
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
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1576107232684-1279f3908594?auto=format&fit=crop&w=400&q=80" alt="Crispy French Fries">
                        <button onclick="openQuickView('Crispy French Fries', '$2.49', 'Golden salted crispy french fries served with garlic mayo sauce.', 'https://images.unsplash.com/photo-1576107232684-1279f3908594?auto=format&fit=crop&w=400&q=80', 2.49, 'SIDES')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
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
                        <img class="w-full h-32 object-cover group-hover:scale-110 transition duration-500" src="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=400&q=80" alt="Hot Lava Cake">
                        <button onclick="openQuickView('Hot Lava Cake', '$4.49', 'Warm chocolate cake filled with rich molten chocolate lava inside.', 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=400&q=80', 4.49, 'DESSERT')" class="absolute top-2 right-2 bg-black/60 hover:bg-brandOrange hover:text-black text-white w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md"><i class="fa-solid fa-eye text-xs"></i></button>
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
@endsection
