<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
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
        ])->get('api/api/v1/location');

        $data = $response->json();

        return view('operation.location.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operation.location.create');
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
            'location_name' => 'string|max:255',
            'address' => 'string|max:255',
            'position_longitude' => 'numeric',
            'position_latitude' => 'numeric',
        ]);
    
        // Send the validated data to the API endpoint with authorization headers
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('api/api/v1/location', $validatedData);
    
        // Check the response status
        if ($response->successful()) {
            return redirect('/location');
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
        ])->get('api/api/v1/location/' . $id);

        //Check if the API request was successful
        if ($response->successful()) {
            $data = $response->json();
            return view('operation.location.edit', ['location' => $data]);
        } else {
            // Handle the error response
            $errorMessage = $response->json()['message'] ?? 'Failed to retrieve Location.';
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
         // Validate the updated data from the request
         $validatedData = $request->validate([
            'location_name' => 'string|max:255',
            'address' => 'string|max:255',
            'position_longitude' => 'numeric',
            'position_latitude' => 'numeric',
        ]);

        // Update the personal record in the API
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->patch('api/api/v1/location/' . $id, $validatedData);

        return redirect('/location')->with('success', 'location updated successfully.');
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
        ])->delete('api/api/v1/location/' . $id);

        return back();
    }
}
