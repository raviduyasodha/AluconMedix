<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to Database
        \App\Models\Contact::create($validated);

        // Send Email
        try {
            \Illuminate\Support\Facades\Mail::to('info@aluconmedix.lk')->send(new \App\Mail\ContactMessage($validated));
        } catch (\Exception $e) {
            // Log the error but continue to show success message to user
            \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for contacting us! Your message has been received.');
    }

    public function products()
    {
        return view('pages.products.index');
    }

    public function productDetail($slug)
    {
        // Mapping slug to specific views or data
        if ($slug === 'vita-x100') {
            return view('pages.products.product-1');
        } elseif ($slug === 'laser-s3') {
            return view('pages.products.product-2');
        } elseif ($slug === 'rent-surgical-table') {
            return view('pages.products.rent-1');
        }
        
        abort(404);
    }
}
