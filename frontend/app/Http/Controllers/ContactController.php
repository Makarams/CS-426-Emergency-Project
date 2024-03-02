<?php

namespace App\Http\Controllers;

use App\Models\GeneralDepartment;
use app\Models\PhoneNumber;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function fireFighter()
    {
        return view('frontend.contact.fire-fighter')->with('title', 'Fire Fighter Contact');
    }

    public function policeStation()
    {
        return view('frontend.contact.police-station')->with('title', 'Police Station Contact');
    }

    public function medicalFacility()
    {
        return view('frontend.contact.medical-facility')->with('title', 'Medical Facility Contact');
    }

    public function index()
    {
        $departments = GeneralDepartment::select(
            'general_department.department_name',
            'location.location_name',
            'general_department.phone_number',
            'general_department.department_type'
        )
        ->join('location', 'general_department.location_id', '=', 'location.id')
        ->orderBy('location.location_name')
        ->get();
    
        $groupedDepartments = $departments->groupBy('location_name');
    
        return view('frontend.page.contact', compact('groupedDepartments'));
    }
}