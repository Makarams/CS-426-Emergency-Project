<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function missionStatement()
    {
        return view('frontend.about.mission-statement')->with('title', 'Mission Statement');
    }

    public function termsOfService()
    {
        return view('frontend.about.terms-of-service')->with('title', 'Terms of Service');
    }

    public function privacyPolicy()
    {
        return view('frontend.about.privacy-policy')->with('title', 'Privacy Policy');
    }
    
}