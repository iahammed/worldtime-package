<?php

use Illuminate\Support\Facades\Route;
use Dfytech\Worldtime\Http\Controllers\WorldTimeController;


Route::get('worldtime', [WorldTimeController::class, 'index'])->name('worldtime');
Route::post('worldtime', [WorldTimeController::class, 'getTime'])->name('worldtime.store');
