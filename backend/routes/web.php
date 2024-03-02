<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrimeReportController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FraudReportController;
use App\Http\Controllers\IncidentReportController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LostAndFoundReportController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth
Route::get('/login',function(){return view('auth.login');});
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['session.auth'])->group(function () {
   // Dashboard
    Route::get('/', function () {return view('index');});
    
    // Account
    Route::resource("/profile", ProfileController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // FraudReport
    Route::resource("/fraud-report", FraudReportController::class);
    Route::resource("/lost-and-found-report", LostAndFoundReportController::class);
    Route::resource("/crime-report", CrimeReportController::class);
    Route::resource("/incident-report", IncidentReportController::class);

    // Personal
    Route::resource('/personal', PersonalController::class);
    Route::get('/personal/register-form/{id}',[PersonalController::class,'registerView']);
    Route::post('/personal/register/{id}', [PersonalController::class, 'register'])->name('personal.register');

    // Department
    Route::resource('/department',DepartmentController::class);
    Route::get('/department/{id}/add-personal/',[DepartmentController::class,'addPersonalView']);
    Route::post('/department/search-personal',[DepartmentController::class,'searchPersonal']);
    Route::match(['patch', 'post'], '/department/add-personal/{id}', [DepartmentController::class, 'addPersonal']);

    // location
    Route::resource('/location',LocationController::class);
});