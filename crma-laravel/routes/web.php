<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewController;

Route::get('/', function () {
    return view('welcome');
});

 
Route::resource('crews', CrewController::class);