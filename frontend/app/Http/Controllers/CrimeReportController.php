<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CrimeReport;


class CrimeReportController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'crime-type' => 'required',
            'description' => 'required',
        ]);
    
        // Process and store the crime report
        $crimeReport = new CrimeReport();
        $crimeReport->name = $request->input('name');
        $crimeReport->email = $request->input('email');
        $crimeReport->phone = $request->input('phone');
        $crimeReport->crime_type = $request->input('crime-type');
        $crimeReport->description = $request->input('description');
        $crimeReport->witness = $request->has('witness');
        $crimeReport->urgency = $request->has('urgency');
        $crimeReport->save();

        // Redirect after form submission
        return redirect()->route('safe')->with('success', 'Report submitted successfully!');
    }
    
}
