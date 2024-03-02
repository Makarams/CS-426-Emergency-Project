<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $response = Http::withHeaders(config('api.headers'))->post('api/api/v1/user/login', [
            'username' => $validatedData['username'],
            'password' => $validatedData['password'],
        ]);

        $res = $response->json();

        if (isset($res['status']) && $res['status'] == 200) {
            $userData = $res['data']['user'];
            $token = $res['data']['token'];

            // Store the token securely in the session
            session([
                'token' => $token,
                'user' => $userData,
                'authenticated' => true,
            ]);

            return redirect('/');
        } else {
            return response()->json([
                'status' => 'error',
                'message' => $res['message'] ?? 'Unknown error',
            ], $res['status'] ?? 400);
        }
    }

    public function Logout(Request $request){
        // Send an API request to clear the session on the external API
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('api/api/v1/user/logout');

        if ($response->successful()) {
            // Logout the user in your Laravel application
            Auth::logout();

            // Clear the session data
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Redirect to the desired page or display a success message
            return redirect('/login')->with('success', 'Logged out successfully.');
        } else {
            // Handle logout failure
            return redirect('/login')->with('error', 'Logout failed. Please try again.');
        }
    }
}