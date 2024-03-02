<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthTasksController;
use App\Http\Controllers\CrimeReportController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FraudReportController;
use App\Http\Controllers\IncidentReportController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LostAndFoundController;
use App\Http\Controllers\PersonalRecordController;

// Route::get('/test', function () {return response()->json(["message" => "Hello World"]);});

// Public routes
Route::group(['prefix'=>'/user'],function(){
    Route::post("login",[AuthController::class,'login']);
    Route::post("register",[AuthController::class,'register']);
    Route::get('list-user',[AuthController::class,'List']);
    Route::post('update/{id}',[AuthController::class,'update']);
});

// Protected routes
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post("/user/logout",[AuthController::class,'logout']);
    Route::resource("/tasks",AuthTasksController::class);
    Route::resource("/crime-report",CrimeReportController::class);
    Route::resource("/fraud-report",FraudReportController::class);
    Route::resource("/lostFound-report",LostAndFoundController::class);
    Route::resource("/incident-report",IncidentReportController::class);
    Route::resource("/personal-record",PersonalRecordController::class);
    Route::resource("/department",DepartmentController::class);
    Route::resource("/location",LocationController::class);
});