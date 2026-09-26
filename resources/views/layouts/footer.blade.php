<!-- Main Footer -->
<footer class="bg-gray-100 dark:bg-[#060606] text-gray-600 dark:text-gray-400 pt-16 pb-8 border-t border-gray-200 dark:border-gray-800 transition-colors duration-300">
    
    <!-- Newsletter Box -->
    <div class="max-w-7xl mx-auto px-[5%] mb-12">
        <div class="bg-gradient-to-r from-brandOrange to-amber-500 rounded-3xl p-8 shadow-2xl flex flex-col md:flex-row justify-between items-center gap-6 text-black">
            <div class="space-y-1 text-center md:text-left">
                <h3 class="text-2xl font-black tracking-tight">GET SPECIAL DEALS IN YOUR INBOX!</h3>
                <p class="text-xs font-semibold text-gray-900">Subscribe to our weekly newsletter & get 15% off discount voucher.</p>
            </div>
            <form onsubmit="alert('Thank you for subscribing to QuickBite deals!'); return false;" class="flex w-full md:w-auto gap-2">
                <input type="email" placeholder="Enter your email address..." required class="px-5 py-3 rounded-xl text-xs text-black bg-white outline-none w-full sm:w-80 shadow-md">
                <button type="submit" class="bg-black text-white hover:bg-gray-900 font-extrabold text-xs px-6 py-3 rounded-xl transition shadow-lg shrink-0">SUBSCRIBE</button>
            </form>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-[5%] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 pb-10 border-b border-gray-200 dark:border-gray-800">
        
        <!-- Col 1: Brand Info -->
        <div class="space-y-4">
            <a href="{{ route('home') }}" class="logo flex items-center gap-2">
                <div class="w-9 h-9 bg-brandOrange text-black font-black text-lg rounded-xl flex items-center justify-center shadow-lg">Q</div>
                <div>
                    <h2 class="text-xl font-black tracking-tight leading-none text-gray-900 dark:text-white">Quick<span class="text-brandOrange">Bite</span></h2>
                    <span class="block text-[7px] text-gray-400 tracking-widest font-bold uppercase">Gourmet Fast Food</span>
                </div>
            </a>
            <p class="text-xs leading-relaxed text-gray-500 dark:text-gray-400">
                Crafting the crispiest crusts, juiciest burger patties, and richest shakes in town. Handcrafted fresh with daily farm-sourced ingredients.
            </p>
            <div class="flex gap-3 text-sm">
                <a href="#" class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-[#151515] flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-brandOrange hover:bg-brandOrange/10 transition"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-[#151515] flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-brandOrange hover:bg-brandOrange/10 transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-[#151515] flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-brandOrange hover:bg-brandOrange/10 transition"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-[#151515] flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-brandOrange hover:bg-brandOrange/10 transition"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div class="space-y-3">
            <h4 class="font-black text-sm text-gray-900 dark:text-white uppercase tracking-wider border-b-2 border-brandOrange pb-1 inline-block">Quick Links</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ route('home') }}" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Home Page</a></li>
                <li><a href="{{ route('menu') }}" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Full Menu</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> About Us</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Contact Us</a></li>
            </ul>
        </div>

        <!-- Col 3: Categories -->
        <div class="space-y-3">
            <h4 class="font-black text-sm text-gray-900 dark:text-white uppercase tracking-wider border-b-2 border-brandOrange pb-1 inline-block">Categories</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ route('menu') }}#pizza" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Cheesy Pizzas</a></li>
                <li><a href="{{ route('menu') }}#burger" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Gourmet Burgers</a></li>
                <li><a href="{{ route('menu') }}#chicken" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Crispy Chicken</a></li>
                <li><a href="{{ route('menu') }}#sides" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Fries & Shakes</a></li>
                <li><a href="{{ route('menu') }}#dessert" class="hover:text-brandOrange transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brandOrange"></i> Desserts</a></li>
            </ul>
        </div>

        <!-- Col 4: Store Info -->
        <div class="space-y-3">
            <h4 class="font-black text-sm text-gray-900 dark:text-white uppercase tracking-wider border-b-2 border-brandOrange pb-1 inline-block">Contact Store</h4>
            <ul class="space-y-2.5 text-xs">
                <li class="flex items-start gap-2.5">
                    <i class="fa-solid fa-location-dot text-brandOrange mt-0.5"></i>
                    <span>123 Food Street, Downtown, New York, NY 10001</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <i class="fa-solid fa-phone text-brandOrange"></i>
                    <a href="tel:2125557890" class="hover:text-brandOrange transition">+1 (212) 555-7890</a>
                </li>
                <li class="flex items-center gap-2.5">
                    <i class="fa-solid fa-envelope text-brandOrange"></i>
                    <a href="mailto:support@quickbite.com" class="hover:text-brandOrange transition">support@quickbite.com</a>
                </li>
                <li class="flex items-center gap-2.5">
                    <i class="fa-regular fa-clock text-brandOrange"></i>
                    <span>Mon - Sun: 10 AM - 11 PM</span>
                </li>
            </ul>
        </div>

    </div>

    <!-- Bottom Copyright & Payments Bar -->
    <div class="max-w-7xl mx-auto px-[5%] pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs">
        <p>&copy; {{ date('Y') }} QuickBite Group Ltd. All Rights Reserved.</p>
        <div class="flex items-center gap-4 text-xl text-gray-400">
            <i class="fa-brands fa-cc-visa hover:text-brandOrange transition"></i>
            <i class="fa-brands fa-cc-mastercard hover:text-brandOrange transition"></i>
            <i class="fa-brands fa-cc-paypal hover:text-brandOrange transition"></i>
            <i class="fa-brands fa-apple-pay hover:text-brandOrange transition"></i>
        </div>
    </div>
</footer>
