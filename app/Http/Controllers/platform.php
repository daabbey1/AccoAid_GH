<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class platform extends Controller
{
    //Platform Title
    public function platform_title()
    {
        $name = "Acco Aid GH";
        return view('platform')->with('name',$name);
    }

    // About Us
    public function about_title()
    {
        $name = "About Us";
        return view('about_us')->with('name',$name);
    }

    // FAQ
    public function faq_title()
    {
        $name = "FAQ";
        return view('faq')->with('name',$name);
    }

    // Review
    public function review_title()
    {
        $name = "Review";
        return view('review')->with('name',$name);
    }

    // Contact
    public function contact_title()
    {
        $name = "Contact";
        return view('contact')->with('name',$name);
    }

}
