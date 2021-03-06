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

    // Terms & Conditions 
    public function terms_title()
    {
        $name = "Terms & Conditions";
        return view('terms_and_conditions')->with('name',$name);
    }

    // Privacy policy
    public function privacy_title()
    {
        $name = "Privacy policy";
        return view('privacy_policy')->with('name',$name);
    }

    // Book a room
    public function book_title()
    {
        $name = "Book a room";
        return view('book_a_room')->with('name',$name);
    }

}
