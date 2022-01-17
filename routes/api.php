<?php

use App\Http\Controllers\Api\JobController;
use Illuminate\Support\Facades\Route;


Route::resource('job', JobController::class);
