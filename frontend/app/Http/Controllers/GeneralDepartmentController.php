<?php

namespace App\Http\Controllers;

use App\Models\GeneralDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use APP\Models\PhoneNumber;
use App\Models\Location;


class GeneralDepartmentController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform your search logic using the $query variable
        $results = GeneralDepartment::where('department_name', 'LIKE', '%' . $query . '%')->get();

        return view('frontend.page.search', compact('query', 'results'));
    }

    public function departmentById($id)
    {
        $department = GeneralDepartment::with(['location', 'personalRecords'])->find($id);
    
        if (!$department) {
            abort(404); // Department not found, return a 404 error
        }
    
        return view('frontend.page.department', compact('department'));
    }
    
}