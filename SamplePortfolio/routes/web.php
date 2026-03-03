<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\ApplicationController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [ApplicationController::class, 'create']);
Route::post('/contact', [ApplicationController::class, 'store']);

Route::view('/NewInquiry', 'NewInquiry');

Route::get('/digitalart', function () {
    return view('DigitalArt');
});

Route::get('/gamedesign', function () {
    return view('GameDesign');
});

