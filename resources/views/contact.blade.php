@extends('layouts.app')

@section('title', 'QuickBite - Contact Us')

@section('content')
    <!-- Page Banner -->
    <section class="px-[5%] py-16 lg:py-20 bg-gradient-to-b from-gray-100 via-gray-50 to-gray-50 dark:from-black dark:via-[#0a0a0a] dark:to-[#080808] text-center border-b border-gray-200 dark:border-gray-800 overflow-hidden">
        <div data-aos="zoom-in" data-aos-duration="750">
            <span class="text-brandOrange font-bold text-xs uppercase tracking-widest bg-brandOrange/10 px-3.5 py-1.5 rounded-full border border-brandOrange/20 shadow-sm inline-block">Get In Touch</span>
            <h1 class="text-3xl sm:text-5xl font-black mt-3"><span class="text-transparent bg-clip-text bg-gradient-to-r from-brandOrange to-brandRed animate-pulse">CONTACT QUICKBITE</span></h1>
            <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-2 max-w-lg mx-auto">Have questions, feedback, or need catering for an event? Drop us a line or visit our main restaurant.</p>
        </div>
    </section>

    <!-- Main Contact Grid Section -->
    <section class="px-[5%] py-16 max-w-6xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Left Info Cards -->
            <div class="space-y-4" data-aos="fade-right" data-aos-duration="900">
                <div class="hover-lift bg-white dark:bg-[#121212] p-6 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm transition">
                    <div class="w-12 h-12 bg-brandOrange/20 text-brandOrange rounded-xl flex items-center justify-center text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-location-dot animate-bounce"></i>
                    </div>
                    <h3 class="font-extrabold text-sm text-gray-900 dark:text-white">Our Main HQ</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">123 Food Street, Midtown Center</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">New York, NY 10001</p>
                </div>

                <div class="hover-lift bg-white dark:bg-[#121212] p-6 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm transition">
                    <div class="w-12 h-12 bg-brandOrange/20 text-brandOrange rounded-xl flex items-center justify-center text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-phone animate-pulse"></i>
                    </div>
                    <h3 class="font-extrabold text-sm text-gray-900 dark:text-white">Call Us Directly</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Hotline: (212) 555-7890</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Toll Free: 1-800-QUICKBITE</p>
                </div>

                <div class="hover-lift bg-white dark:bg-[#121212] p-6 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm transition">
                    <div class="w-12 h-12 bg-brandOrange/20 text-brandOrange rounded-xl flex items-center justify-center text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h3 class="font-extrabold text-sm text-gray-900 dark:text-white">Email & Inquiries</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">support@quickbite.com</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">catering@quickbite.com</p>
                </div>
            </div>

            <!-- Right Interactive Form -->
            <div class="lg:col-span-2 shimmer-card hover-lift bg-white dark:bg-[#121212] p-8 rounded-3xl border border-gray-200 dark:border-gray-800 shadow-xl" data-aos="fade-left" data-aos-duration="900">
                <h2 class="text-2xl font-black text-gray-900 dark:text-white mb-2">SEND US A MESSAGE</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mb-6">Fill out the form below and our team will get back to you within 24 hours.</p>

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    @if(session('status'))
                    <div class="bg-green-500/10 border border-green-500/30 text-green-500 p-3.5 rounded-xl text-xs font-semibold flex items-center gap-2 animate-in fade-in duration-300">
                        <i class="fa-solid fa-circle-check text-base"></i> {{ session('status') }}
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="bg-red-500/10 border border-red-500/30 text-red-500 p-3.5 rounded-xl text-xs font-semibold animate-in fade-in duration-300">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-700 dark:text-gray-300 uppercase mb-1">Your Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" required placeholder="John Doe" class="w-full bg-gray-50 dark:bg-[#1a1a1a] border border-gray-200 dark:border-gray-800 rounded-xl p-3 text-xs text-gray-900 dark:text-white outline-none focus:border-brandOrange focus:ring-2 focus:ring-brandOrange/20 transition">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-700 dark:text-gray-300 uppercase mb-1">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}" required placeholder="john@example.com" class="w-full bg-gray-50 dark:bg-[#1a1a1a] border border-gray-200 dark:border-gray-800 rounded-xl p-3 text-xs text-gray-900 dark:text-white outline-none focus:border-brandOrange focus:ring-2 focus:ring-brandOrange/20 transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-700 dark:text-gray-300 uppercase mb-1">Phone Number</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="(212) 000-0000" class="w-full bg-gray-50 dark:bg-[#1a1a1a] border border-gray-200 dark:border-gray-800 rounded-xl p-3 text-xs text-gray-900 dark:text-white outline-none focus:border-brandOrange focus:ring-2 focus:ring-brandOrange/20 transition">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-700 dark:text-gray-300 uppercase mb-1">Subject</label>
                            <select name="subject" class="w-full bg-gray-50 dark:bg-[#1a1a1a] border border-gray-200 dark:border-gray-800 rounded-xl p-3 text-xs text-gray-900 dark:text-white outline-none focus:border-brandOrange focus:ring-2 focus:ring-brandOrange/20 transition">
                                <option>General Inquiry</option>
                                <option>Order Feedback</option>
                                <option>Catering Request</option>
                                <option>Franchise Opportunities</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 dark:text-gray-300 uppercase mb-1">Your Message</label>
                        <textarea rows="5" name="message" required placeholder="How can we help you?" class="w-full bg-gray-50 dark:bg-[#1a1a1a] border border-gray-200 dark:border-gray-800 rounded-xl p-3 text-xs text-gray-900 dark:text-white outline-none focus:border-brandOrange focus:ring-2 focus:ring-brandOrange/20 transition"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-brandOrange hover:bg-yellow-500 text-black font-black text-xs py-4 rounded-xl transition shadow-lg hover:shadow-brandOrange/40 hover:scale-[1.01] active:scale-95 transform flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane animate-pulse"></i> SEND MESSAGE
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- Embedded Location Map Section -->
    <section class="px-[5%] pb-20 max-w-6xl mx-auto" data-aos="fade-up" data-aos-duration="800">
        <div class="hover-lift bg-white dark:bg-[#121212] p-4 rounded-3xl border border-gray-200 dark:border-gray-800 shadow-md overflow-hidden">
            <h3 class="font-extrabold text-sm text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                <i class="fa-solid fa-map-location-dot text-brandOrange animate-bounce"></i> FIND OUR RESTAURANT
            </h3>
            <div class="w-full h-80 rounded-2xl overflow-hidden">
                <iframe class="w-full h-full border-0 grayscale hover:grayscale-0 transition duration-700" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.217707328122!2d-73.9882396845937!3d40.75797477932684!2m3!1f0!0f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
