<?php

namespace App\Http\Controllers;

class EmergencyController extends Controller
{
    public function emergencyHotline()
    {
        return view('frontend.emergency.emergency-hotline')->with('title', 'Emergency Hotline');
    }

    public function fireEmergency()
    {
        return view('frontend.emergency.fire-emergency')->with('title', 'Fire Emergency');
    }

    public function medicalEmergency()
    {
        return view('frontend.emergency.medical-emergency')->with('title', 'Medical Emergency');
    }

    public function medicalTransport()
    {
        return view('frontend.emergency.medical-transport')->with('title', 'Medical Transport');
    }
}