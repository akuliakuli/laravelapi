<?php

use App\Http\Controllers\Api\DeskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/desks", [DeskController::class, 'index']);