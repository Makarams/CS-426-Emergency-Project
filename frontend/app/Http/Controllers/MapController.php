<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\location;
use App\Models\general_department;
use App\Models\phone_number;
use App\Models\personal_record;

class MapController extends Controller
{
    public function showMaps()
{
    // Fetch the marker info from the database
    $markers = DB::table('general_department')
        ->join('location', 'general_department.location_id', '=', 'location.id')
        ->select('general_department.department_name', 'location.position_latitude', 'location.position_longitude', 'general_department.legend_symbol')
        ->get();

    // Fetch the info-window data from the database
    $infoWindowContent = DB::table('general_department')
        ->join('location', 'general_department.location_id', '=', 'location.id')
        ->select('general_department.department_name', 'general_department.department_type', 'general_department.department_specialty', 'location.location_name', 'location.address', 'general_department.phone_number')
        ->get();

    return view('frontend.page.home')->with(compact('markers', 'infoWindowContent'));
}

}
