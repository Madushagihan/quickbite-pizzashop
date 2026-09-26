<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the home landing page.
     */
    public function home(): View
    {
        return view('home');
    }

    /**
     * Display the menu catalog page.
     */
    public function menu(): View
    {
        return view('menu');
    }

    /**
     * Display the about us story and team page.
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Display the contact inquiries page.
     */
    public function contact(): View
    {
        return view('contact');
    }

    /**
     * Handle incoming contact inquiry submission.
     */
    public function submitContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        return back()->with('status', 'Thank you! Your message has been received. Our team will contact you shortly.');
    }
}
