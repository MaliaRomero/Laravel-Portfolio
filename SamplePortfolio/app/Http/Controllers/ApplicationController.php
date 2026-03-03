<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewInquiry;

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

        $application = Application::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message')
        ]);

        Mail::to('malhasaspam@gmail.com')
            ->queue(new NewInquiry(
                $application->first_name,
                $application->last_name,
                $application->email,
                $application->phone,
                $application->message
            ));

        return redirect('/NewInquiry');
    }
}