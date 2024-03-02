<?php

namespace App\Http\Controllers;

use App\Models\LostAndFoundPropertyReport;
use Illuminate\Http\Request;

class LostAndFoundPropertyReportController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'property-type' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'contact-owner' => 'required',
            'consent' => 'required',
        ]);

        $report = new LostAndFoundPropertyReport();
        $report->name = $validatedData['name'];
        $report->email = $validatedData['email'];
        $report->phone = $validatedData['phone'];
        $report->property_type = $validatedData['property-type'];
        $report->description = $validatedData['description'];
        $report->location = $validatedData['location'];
        $report->date = $validatedData['date'];
        $report->contact_owner = $validatedData['contact-owner'];
        $report->consent = true; // Assuming it's a checkbox, presence means true
        $report->save();
 
        // Redirect after form submission
        return redirect()->route('safe')->with('success', 'Lost and found property report submitted successfully!');
    }
    
}