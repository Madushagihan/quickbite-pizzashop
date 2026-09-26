<!-- Top Flash Sale Bar -->
<div class="bg-gradient-to-r from-brandRed via-brandOrange to-brandRed text-black font-extrabold text-[11px] py-1.5 px-[5%] flex justify-between items-center tracking-wide shadow-md">
    <span class="truncate flex items-center gap-1.5">
        <i class="fa-solid fa-fire text-black animate-bounce"></i>
        <span>FLASH SALE: Use Code <strong class="inline-block bg-black text-white px-2 py-0.5 rounded ml-1 animate-wiggle shadow-sm">QUICK20</strong> for 20% OFF!</span>
    </span>
    
    <!-- Theme Toggle Button -->
    <button onclick="toggleTheme()" class="bg-black text-white dark:bg-white dark:text-black font-extrabold text-[11px] px-3 py-1 rounded-full transition duration-300 flex items-center gap-1.5 hover:scale-105 active:scale-95 shadow-md">
        <i class="fa-solid fa-moon dark:hidden transition-transform duration-300"></i>
        <i class="fa-solid fa-sun hidden dark:inline text-amber-500 transition-transform duration-300"></i>
        <span id="themeLabel">Dark Mode</span>
    </button>
</div>

<!-- Top Info Bar -->
<div class="bg-white dark:bg-[#101010] text-gray-600 dark:text-gray-400 text-xs py-2 px-[5%] flex flex-wrap justify-between items-center border-b border-gray-200 dark:border-gray-800 transition-colors">
    <div class="flex flex-wrap gap-6 text-[11px] sm:text-xs">
        <span class="hover:text-brandOrange transition duration-200"><i class="fa-solid fa-location-dot text-brandOrange mr-1.5 animate-pulse"></i> 123 Food Street, New York</span>
        <span class="hover:text-brandOrange transition duration-200"><i class="fa-regular fa-clock text-brandOrange mr-1.5"></i> Open: 10:00 AM - 11:00 PM</span>
        <a href="tel:2125557890" class="hover:text-brandOrange transition duration-200"><i class="fa-solid fa-phone text-brandOrange mr-1.5"></i> (212) 555-7890</a>
    </div>
    <div class="hidden sm:flex gap-4 text-xs">
        <a href="#" class="hover:text-brandOrange hover:scale-125 transition duration-200"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="hover:text-brandOrange hover:scale-125 transition duration-200"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="hover:text-brandOrange hover:scale-125 transition duration-200"><i class="fa-brands fa-tiktok"></i></a>
    </div>
</div>

<!-- Navigation Header -->
<header class="sticky top-0 z-40 bg-white/95 dark:bg-[#0d0d0d]/95 backdrop-blur-md px-[5%] py-3.5 flex justify-between items-center border-b border-gray-200 dark:border-gray-800 shadow-sm transition-all duration-300">
    <a href="{{ route('home') }}" class="logo flex items-center gap-2 group">
        <div class="w-10 h-10 bg-brandOrange text-black font-black text-xl rounded-xl flex items-center justify-center shadow-lg group-hover:rotate-6 group-hover:scale-110 transition duration-300">Q</div>
        <div>
            <h2 class="text-2xl font-black tracking-tight leading-none text-gray-900 dark:text-white group-hover:text-brandOrange transition duration-300">Quick<span class="text-brandOrange">Bite</span></h2>
            <span class="block text-[8px] text-gray-500 dark:text-gray-400 tracking-widest font-bold uppercase">Gourmet Fast Food</span>
        </div>
    </a>
    
    <!-- Live Search -->
    <div class="hidden lg:flex items-center bg-gray-100 dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-full px-3.5 py-1.5 w-64 focus-within:w-72 focus-within:border-brandOrange transition-all duration-300">
        <i class="fa-solid fa-magnifying-glass text-gray-400 text-xs mr-2"></i>
        <input type="text" id="searchInput" onkeyup="searchMenuItems()" placeholder="Search pizza, burger, shake..." class="bg-transparent text-xs text-gray-800 dark:text-white outline-none w-full">
    </div>

    <!-- Desktop Navigation Links -->
    <nav class="hidden md:block">
        <ul class="flex space-x-6 text-xs font-bold tracking-wider">
            <li>
                <a href="{{ route('home') }}" class="relative py-1 transition-colors duration-200 {{ request()->routeIs('home') ? 'text-brandOrange border-b-2 border-brandOrange' : 'hover:text-brandOrange hover:-translate-y-0.5 inline-block transform' }}">HOME</a>
            </li>
            <li>
                <a href="{{ route('menu') }}" class="relative py-1 transition-colors duration-200 {{ request()->routeIs('menu') ? 'text-brandOrange border-b-2 border-brandOrange' : 'hover:text-brandOrange hover:-translate-y-0.5 inline-block transform' }}">MENU</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="relative py-1 transition-colors duration-200 {{ request()->routeIs('about') ? 'text-brandOrange border-b-2 border-brandOrange' : 'hover:text-brandOrange hover:-translate-y-0.5 inline-block transform' }}">ABOUT</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="relative py-1 transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-brandOrange border-b-2 border-brandOrange' : 'hover:text-brandOrange hover:-translate-y-0.5 inline-block transform' }}">CONTACT</a>
            </li>
        </ul>
    </nav>

    <div class="flex items-center gap-3">
        <!-- Cart Trigger Button -->
        <button onclick="toggleCart()" class="relative bg-gray-100 dark:bg-[#181818] border border-gray-200 dark:border-gray-800 hover:border-brandOrange text-gray-800 dark:text-white p-2.5 rounded-xl transition duration-200 hover:scale-105 active:scale-95 shadow-sm group" aria-label="Open Cart">
            <i class="fa-solid fa-basket-shopping text-sm group-hover:text-brandOrange transition"></i>
            <span id="cartCount" class="absolute -top-1.5 -right-1.5 bg-brandRed text-white text-[10px] font-black w-5 h-5 rounded-full flex items-center justify-center border-2 border-white dark:border-black transition-all">0</span>
        </button>

        <!-- Order Button -->
        <a href="{{ route('menu') }}" class="hidden sm:flex bg-brandOrange hover:bg-yellow-500 text-black font-black text-xs px-5 py-2.5 rounded-xl transition-all duration-300 shadow-lg items-center gap-2 hover:scale-105 hover:shadow-brandOrange/40 hover:shadow-xl active:scale-95 transform">
            <i class="fa-solid fa-bolt animate-pulse"></i> ORDER NOW
        </a>

        <!-- Mobile Menu Toggle -->
        <button onclick="document.getElementById('mobileMenu').classList.toggle('hidden')" class="md:hidden bg-gray-100 dark:bg-[#181818] border border-gray-200 dark:border-gray-800 p-2.5 rounded-xl text-gray-800 dark:text-white text-sm hover:scale-105 transition" aria-label="Toggle mobile menu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>

<!-- Mobile Navigation Dropdown -->
<div id="mobileMenu" class="hidden md:hidden bg-white dark:bg-[#101010] border-b border-gray-200 dark:border-gray-800 px-[5%] py-4 space-y-3 animate-in fade-in slide-in-from-top-4 duration-300">
    <div class="flex items-center bg-gray-100 dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-full px-3.5 py-2">
        <i class="fa-solid fa-magnifying-glass text-gray-400 text-xs mr-2"></i>
        <input type="text" onkeyup="searchMenuItems()" placeholder="Search pizza, burger, shake..." class="bg-transparent text-xs text-gray-800 dark:text-white outline-none w-full">
    </div>
    <ul class="space-y-2 text-xs font-bold tracking-wider pt-2">
        <li>
            <a href="{{ route('home') }}" class="block py-2 {{ request()->routeIs('home') ? 'text-brandOrange font-black' : 'hover:text-brandOrange' }}">HOME</a>
        </li>
        <li>
            <a href="{{ route('menu') }}" class="block py-2 {{ request()->routeIs('menu') ? 'text-brandOrange font-black' : 'hover:text-brandOrange' }}">MENU</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="block py-2 {{ request()->routeIs('about') ? 'text-brandOrange font-black' : 'hover:text-brandOrange' }}">ABOUT</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="block py-2 {{ request()->routeIs('contact') ? 'text-brandOrange font-black' : 'hover:text-brandOrange' }}">CONTACT</a>
        </li>
        <li class="pt-2">
            <a href="{{ route('menu') }}" class="w-full bg-brandOrange text-black font-black text-xs py-3 rounded-xl flex items-center justify-center gap-2 shadow-lg">
                <i class="fa-solid fa-bolt"></i> ORDER NOW
            </a>
        </li>
    </ul>
</div>
