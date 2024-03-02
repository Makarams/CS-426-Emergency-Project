<?php

namespace App\Http\Controllers;

use App\Models\RoadTrafficIncidentReport;
use Illuminate\Http\Request;

class RoadTrafficIncidentReportController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'reporter-name' => 'required',
            'reporter-contact' => 'required',
            'incident-location' => 'required',
            'incident-description' => 'required',
            'emergency-assistance' => 'required',
            'contact-reporter' => 'required',
            'consent' => 'required',
        ]);
    
        // Create a new instance of the model and populate its properties with the validated data
        $report = new RoadTrafficIncidentReport();
        $report->reporter_name = $validatedData['reporter-name'];
        $report->reporter_contact = $validatedData['reporter-contact'];
        $report->incident_location = $validatedData['incident-location'];
        $report->incident_description = $validatedData['incident-description'];
        $report->emergency_assistance = $validatedData['emergency-assistance'];
        $report->contact_reporter = $validatedData['contact-reporter'];
        $report->consent = true;
    
        // Save the report to the database
        $report->save();
    
  
        return redirect('/safe')->with('success', 'Report submitted successfully! Please await response from authorities.');
    }
}
