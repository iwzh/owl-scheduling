<?php

use Iwzh\owlScheduling\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('scheduling', [Controllers\OwlSchedulingController::class, 'index'])->name('scheduling-index');
Route::post('scheduling/run', [Controllers\OwlSchedulingController::class, 'runEvent'])->name('scheduling-run');
