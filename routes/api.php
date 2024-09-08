<?php

use App\Http\Controllers\Api\DeskController;
use Illuminate\Support\Facades\Route;

Route::apiResource('desks', DeskController::class);