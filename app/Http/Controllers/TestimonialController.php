<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        return view('front.pages.testimonial');
    }
}
