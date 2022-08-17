<?php

use Illuminate\Support\Facades\Route;
use Tool\Interest\Http\Controllers\CalculateController;
use Tool\Interest\Http\Controllers\InterestPersonController;
use Tool\Interest\Http\Controllers\InsuranceController;
use Tool\Interest\Http\Controllers\CompoundingController;
use Tool\Interest\Http\Controllers\UnemploymentController;
use Tool\Interest\Http\Controllers\PlanController;
use Tool\Interest\Http\Controllers\PluginInterestController;



Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/calculate', [CalculateController::class, 'index']);
Route::get('/interestperson', [InterestPersonController::class, 'index']);
Route::get('/insurance', [InsuranceController::class, 'index']);
Route::get('/compounding', [CompoundingController::class, 'index']);
Route::get('/unemployment', [UnemploymentController::class, 'index']);
Route::get('/plan', [PlanController::class, 'index']);




