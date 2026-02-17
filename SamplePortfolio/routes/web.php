<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\ApplicationController;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->get();

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

/*Route::get('/contact', function () {
    return view('contact');
});*/

Route::get('/contact', [ApplicationController::class, 'create']);
Route::post('/contact', [ApplicationController::class, 'store']);


Route::get('/digitalart', function () {
    return view('DigitalArt');
});

Route::get('/gamedesign', function () {
    return view('GameDesign');
});

