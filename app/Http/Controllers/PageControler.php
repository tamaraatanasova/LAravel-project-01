<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControler extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }
    
    public function submit(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'first_name' => 'required|alpha|max:15',
            'last_name' => 'required|alpha|max:25',
            'email' => 'nullable|email|unique:users,email',
        ]);
    
        // Store the validated data in the session
        session(['user_data' => $validated]);
    
        // Redirect to the 'info' route
        return redirect()->route('info');
    }
    

    public function info(){
        return view('info');
    }

    public function logout()
    {
        session()->forget(['user_data']);
        session()->invalidate();
        return redirect()->route('home');
    }
    
}