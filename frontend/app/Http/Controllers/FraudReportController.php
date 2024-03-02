<?php

namespace App\Http\Controllers;

use App\Models\FraudReport;
use Illuminate\Http\Request;

class FraudReportController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'required',
            'fraud-type' => 'required',
            'description' => 'required',
            'emergency-services-contacted' => 'required',
            'consent' => 'required',
        ]);

        // Create a new FraudReport instance and save it to the database
        $fraudReport = new FraudReport();
        $fraudReport->name = $validatedData['name'];
        $fraudReport->email = $validatedData['email'];
        $fraudReport->phone = $validatedData['phone'];
        $fraudReport->location = $validatedData['location'];
        $fraudReport->fraud_type = $validatedData['fraud-type'];
        $fraudReport->description = $validatedData['description'];
        $fraudReport->emergency_services_contacted = $validatedData['emergency-services-contacted'];
        $fraudReport->consent = true;
        $fraudReport->report_anonymously = $request->has('report-anonymously');
        $fraudReport->save();

            // Redirect after form submission
            return redirect()->route('safe')->with('success', 'Fraud report submitted successfully!');
        }
}