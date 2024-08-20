<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;




Route::resource('tasks', \App\Http\Controllers\TaskController::class);

