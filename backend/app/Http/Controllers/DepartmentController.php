<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('api/api/v1/department');

        $data = $response['data'];

        return view('operation.department.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operation.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department_name' => 'string|max:255',
            'department_specialty' => 'string|max:255',
            'department_type' => 'string|max:255',
            'phone_number' => 'string|max:255',
        ]);
        
        $png = '';
        if($request->department_type == "fire"){
            $png = '3';
        }elseif($request->department_type == "police"){
            $png = "1";
        }else{
            $png = "2";
        }

        $validatedData['legend_symbol'] = "images/map-marker_" . $png . ".png";
    
        // Send the validated data to the API endpoint with authorization headers
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('api/api/v1/department', $validatedData);
    
        // Check the response status
        if ($response->successful()) {
            return redirect('/department');
        } else {
            return back()->withError('Failed to create personal record on the API.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('api/api/v1/department/' . $id);

        //Check if the API request was successful
        if ($response->successful()) {
            $data = $response->json();
            return view('operation.department.edit', ['department' => $data]);
        } else {
            // Handle the error response
            $errorMessage = $response->json()['message'] ?? 'Failed to retrieve Department.';
            return back()->with('error', $errorMessage);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'department_name' => 'string|max:255',
            'department_specialty' => 'string|max:255',
            'department_type' => 'string|max:255',
            'phone_number' => 'string|max:255',
        ]);
        
        $png = '';
        if($request->department_type == "fire"){
            $png = '3';
        }elseif($request->department_type == "police"){
            $png = "1";
        }else{
            $png = "2";
        }

        $validatedData['legend_symbol'] = "images/map-marker_" . $png . ".png";

        // Update the personal record in the API
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->patch('api/api/v1/department/' . $id, $validatedData);

        return redirect('/department')->with('success', 'location updated successfully.');
    }

    public function addPersonalView($id){
        return view('operation.department.add-personal',['department_id' => $id]);
    }

    public function searchPersonal(Request $request){
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('api/api/v1/personal-record/'. $request->personal_id);

        $data = $response->json();

        return view('operation.department.add-personal', [
            'personal' => $data,
            'department_id' => $request->department_id
        ]);
    }

    public function addPersonal(Request $request){
        $token = session('token');
        $response = Http::withHeaders([
            'Accept' => 'application/vnd.api+json',
            'Content-Type' => 'application/vnd.api+json',
            'Authorization' => 'Bearer ' . $token,
        ])->patch('api/api/v1/personal-record/' . $request->personal_id, [
            'department_id' => $request->department_id,
        ]);

        $data = $response->json();

        return response()->json($data);

        return redirect('/department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->delete('api/api/v1/department/' . $id);

        return back();
    }
}
