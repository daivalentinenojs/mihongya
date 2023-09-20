<?php

namespace App\Http\Controllers\Guest\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function IndexAbout()
    {
        return view('guest.menu.about.index-about');
    }

    public function IndexTeam()
    {
        return view('guest.menu.about.index-team');
    }

    public function IndexTestimonials()
    {
        return view('guest.menu.about.index-testimonials');
    }

    public function IndexFAQs()
    {
        return view('guest.menu.about.index-faqs');
    }
}
