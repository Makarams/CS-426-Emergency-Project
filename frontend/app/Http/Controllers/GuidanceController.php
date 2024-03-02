<?php

namespace App\Http\Controllers;

class GuidanceController extends Controller
{
    public function userGuide()
    {
        return view('frontend.guidance.user-guide')->with('title', 'User Guide');
    }

    public function faqs()
    {
        return view('frontend.guidance.faqs')->with('title', 'FAQs');
    }

    public function safetyTips()
    {
        return view('frontend.guidance.safety-tips')->with('title', 'Safety Tips');
    }

    public function crimePrevention()
    {
        return view('frontend.guidance.crime-prevention')->with('title', 'Crime Prevention');
    }

    public function legalAdvice()
    {
        return view('frontend.guidance.legal-advice')->with('title', 'Legal Advice');
    }

    public function emergencyPreparedness()
    {
        return view('frontend.guidance.emergency-preparedness')->with('title', 'Emergency Preparedness');
    }
}