<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Job;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    
    // Store the application
    public function store()
    {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phone' => ['required']
        ]);

        Application::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message')
        ]);

        return redirect('/contact')->with('success', 'Application submitted!');
    }
}