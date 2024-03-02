<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ReportController extends Controller
{
    public function index()
    {
        return view('frontend.page.report')->with('title', 'Report');
    }
    public function crime()
    {
        return view('frontend.report.crime')->with('title', 'Crime Report');
    }

    public function roadTrafficIncident()
    {
        return view('frontend.report.road-traffic-incident')->with('title', 'Road Traffic Incident Report');
    }

    public function missingPerson()
    {
        return view('frontend.report.missing-person')->with('title', 'Missing Person Report');
    }

    public function civilDisputes()
    {
        return view('frontend.report.civil-disputes')->with('title', 'Civil Disputes Report');
    }

    public function lostStolenVehicles()
    {
        return view('frontend.report.lost-stolen-vehicles')->with('title', 'Lost/Stolen Vehicles Report');
    }

    public function domesticAbuse()
    {
        return view('frontend.report.domestic-abuse')->with('title', 'Domestic Abuse Report');
    }

    public function reportAntisocialBehavior()
    {
        return view('frontend.report.report-antisocial-behavior')->with('title', 'Report Antisocial Behavior');
    }

    public function fraud()
    {
        return view('frontend.report.fraud')->with('title', 'Fraud Report');
    }

    public function lostFoundProperty()
    {
        return view('frontend.report.lost-found-property')->with('title', 'Lost/Found Property Report');
    }

    public function explosiveIncident()
    {
        return view('frontend.report.explosive-incident')->with('title', 'Explosive Incident Report');
    }

    public function publicDisturbance()
    {
        return view('frontend.report.public-disturbance')->with('title', 'Public Disturbance Report');
    }

    public function hateCrime()
    {
        return view('frontend.report.hate-crime')->with('title', 'Hate Crime Report');
    }

    public function environmentalConcern()
    {
        return view('frontend.report.environmental-concern')->with('title', 'Environmental Concern Report');
    }

    public function cybercrime()
    {
        return view('frontend.report.cybercrime')->with('title', 'Cybercrime Report');
    }

    public function harassment()
    {
        return view('frontend.report.harassment')->with('title', 'Harassment Report');
    }

    public function submit(Request $request)
    {
        $reportType = $request->input('reportType');
        
        // Redirect based on the selected report type
        switch ($reportType) {
            case 'crime':
                return redirect()->route('crime');
            case 'road-traffic-incident':
                return redirect()->route('road-traffic-incident');
            case 'missing-person':
                return redirect()->route('missing-person');
            case 'civil-disputes':
                return redirect()->route('civil-disputes');
            case 'lost-stolen-vehicles':
                return redirect()->route('lost-stolen-vehicles');
            case 'domestic-abuse':
                return redirect()->route('domestic-abuse');
            case 'report-antisocial-behavior':
                return redirect()->route('report-antisocial-behavior');
            case 'fraud':
                return redirect()->route('fraud');
            case 'lost-found-property':
                return redirect()->route('lost-found-property');
            case 'explosive-incident':
                return redirect()->route('explosive-incident');
            case 'public-disturbance':
                return redirect()->route('public-disturbance');
            case 'hate-crime':
                return redirect()->route('hate-crime');
            case 'environmental-concern':
                return redirect()->route('environmental-concern');
            case 'cybercrime':
                return redirect()->route('cybercrime');
            case 'harassment':
                return redirect()->route('harassment');
            default:
                // Handle unrecognized report type
                break;
        }
        
        // Handle unrecognized report type
        return response()->json(['message' => 'Unrecognized report type'], 400);
    }
    
    public function safe()
{
    $data = [
        'message' => 'Welcome to the safe page!',
    ];
    return view('frontend.page.safe', $data);
}

}