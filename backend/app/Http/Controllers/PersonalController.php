<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PersonalController extends Controller
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
        ])->get('api/api/v1/personal-record');
        $data = $response['data'];    

        return view('operation.personal-record.index',['data' => $data]);
    }

    public function registerView($id){
        return view('operation.personal-record.register',compact('id'));
    }

    public function register(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }


        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('api/api/v1/user/register', [
            'username' => $request->username,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
            'permission_level' => "Super Admin"
        ]);
        
        $resPersonal = Http::withHeaders([
            'Accept' => 'application/vnd.api+json',
            'Content-Type' => 'application/vnd.api+json',
            'Authorization' => 'Bearer ' . $token,
        ])->patch('api/api/v1/personal-record/' . $id,[
            'account_id' => $id
        ]);

        return redirect('/personal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("operation.personal-record.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'phone_number' => 'string|max:255',
            'occupation' => 'string|max:255',
            'position' => 'string|max:255',
            'date_of_birth' => 'date',
        ]);

        // Send the validated data to the API endpoint with authorization headers
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('api/api/v1/personal-record', $validatedData);

        // Check the response status
        if ($response != null ) {
            return redirect('/personal');
        } else {
            return back()->withError('Failed to create personal record on the API.');
        }
    }

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
    public function edit($id){
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('api/api/v1/personal-record/' . $id);

        // Check if the API request was successful
        if ($response->successful()) {
            $personalRecord = $response->json();
            return view('operation.personal-record.edit', ['personalRecord' => $personalRecord]);
        } else {
            // Handle the error response
            $errorMessage = $response->json()['message'] ?? 'Failed to retrieve personal record.';
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
    public function update(Request $request, $id){
        // Validate the updated data from the request
        $validatedData = $request->validate([
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'email' => 'email|max:255',
            'phone_number' => 'string|max:255',
            'occupation' => 'string|max:255',
            'position' => 'string|max:255',
            'date_of_birth' => 'date',
        ]);

        // Update the personal record in the API
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->patch('api/api/v1/personal-record/' . $id, $validatedData);

        return redirect('/personal')->with('success', 'Personal record updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $token = session('token');
        // Send the DELETE request to the API endpoint with authorization headers
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->delete('api/api/v1/personal-record/' . $id);

        // Check the response status
        if ($response->successful()) {
            // Personal record successfully deleted on the API
            // Redirect or return a response
            return redirect('/personal')->with('success', 'Personal record deleted successfully.');
        } else {
            // Failed to delete personal record on the API
            // Handle the error here, display a message, or take appropriate action
            return back()->withError('Failed to delete personal record on the API.');
        }
    }
}