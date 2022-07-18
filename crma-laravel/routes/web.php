<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewController;
use Illuminate\Http\Client\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('crews.test');
});
Route::post('/post-test', function (Request $request) {
    return $request;
});
 
Route::resource('crews', CrewController::class);