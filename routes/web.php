<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cultural_tour', function () {
    return view('packages/cultural_tour/cultural_tour');
});

Route::get('/cultural_3day', function () {
    return view('packages/cultural_tour/cultural_3day');
});

Route::get('/cultural_5day', function () {
    return view('packages/cultural_tour/cultural_5day');
});

Route::get('/cultural_6day', function () {
    return view('packages/cultural_tour/cultural_6day');
});

Route::get('/cultural_7day', function () {
    return view('packages/cultural_tour/cultural_7day');
});

Route::get('/trekking_tour', function () {
    return view('packages/trekking_tour/trekking_tour');
});

Route::get('/biking_tour', function () {
    return view('packages/biking_tour/biking_tour');
});

Route::get('/cycling_tour', function () {
    return view('packages/cycling_tour/cycling_tour');
});

Route::get('/travel_info', function () {
    return view('travel_info');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/ticketing', function () {
    return view('ticketing');
});