<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\PersonalAccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\GeneralDepartmentController;
use App\Http\Controllers\PersonalRecordController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuidanceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CrimeReportController;
use App\Http\Controllers\FraudReportController;
use App\Http\Controllers\RoadTrafficIncidentReportController;
use App\Http\Controllers\LostAndFoundPropertyReportController;
use App\Http\Controllers\DistrictController;

Route::get('/', [MapController::class, 'showMaps'])->name('home');

Route::get('/search', [GeneralDepartmentController::class, 'search'])->name('search');

Route::get('/report', function () {
    return view('frontend.page.report');
})->name('report');

Route::post('/submit-report', [ReportController::class, 'submit'])->name('submit-report');

Route::prefix('/report')->group(function () {
    Route::get('/crime', [ReportController::class, 'crime'])->name('crime');
    Route::get('/road-traffic-incident', [ReportController::class, 'roadTrafficIncident'])->name('road-traffic-incident');
    Route::get('/missing-person', [ReportController::class, 'missingPerson'])->name('missing-person');
    Route::get('/civil-disputes', [ReportController::class, 'civilDisputes'])->name('civil-disputes');
    Route::get('/lost-stolen-vehicles', [ReportController::class, 'lostStolenVehicles'])->name('lost-stolen-vehicles');
    Route::get('/domestic-abuse', [ReportController::class, 'domesticAbuse'])->name('domestic-abuse');
    Route::get('/report-antisocial-behavior', [ReportController::class, 'reportAntisocialBehavior'])->name('report-antisocial-behavior');
    Route::get('/fraud', [ReportController::class, 'fraud'])->name('fraud');
    Route::get('/lost-found-property', [ReportController::class, 'lostFoundProperty'])->name('lost-found-property');
    Route::get('/explosive-incident', [ReportController::class, 'explosiveIncident'])->name('explosive-incident');
    Route::get('/public-disturbance', [ReportController::class, 'publicDisturbance'])->name('public-disturbance');
    Route::get('/hate-crime', [ReportController::class, 'hateCrime'])->name('hate-crime');
    Route::get('/environmental-concern', [ReportController::class, 'environmentalConcern'])->name('environmental-concern');
    Route::get('/cybercrime', [ReportController::class, 'cybercrime'])->name('cybercrime');
    Route::get('/harassment', [ReportController::class, 'harassment'])->name('harassment');
});

Route::post('/crime-reports', [CrimeReportController::class, 'store'])->name('crime-reports.store');
Route::post('/fraud-reports', [FraudReportController::class, 'store'])->name('fraud-reports.store');
Route::post('/lost-and-found-property-reports', [LostAndFoundPropertyReportController::class, 'store'])->name('lost-and-found-property-reports.store');
Route::post('/road-traffic-incident-reports', [RoadTrafficIncidentReportController::class, 'store'])->name('road-traffic-incident-reports.store');

Route::get('/guidance', function () {
    return view('frontend.page.guidance')->with('title', 'Guidance and Support');
})->name('guidance');

Route::prefix('/guidance')->group(function () {
    Route::get('/user-guide', [GuidanceController::class, 'userGuide'])->name('user-guide');
    Route::get('/faqs', [GuidanceController::class, 'faqs'])->name('faqs');
    Route::get('/safety-tips', [GuidanceController::class, 'safetyTips'])->name('safety-tips');
    Route::get('/emergency-preparedness', [GuidanceController::class, 'emergencyPreparedness'])->name('emergency-preparedness');
    Route::get('/crime-prevention', [GuidanceController::class, 'crimePrevention'])->name('crime-prevention');
    Route::get('/legal-advice', [GuidanceController::class, 'legalAdvice'])->name('legal-advice');
});

Route::get('/emergency', function () {
    return view('frontend.page.emergency')->with('title', 'Emergency');
})->name('emergency');

Route::prefix('/emergency')->group(function () {
    Route::get('/emergency-hotline', [EmergencyController::class, 'emergencyHotline'])->name('emergency-hotline');
    Route::get('/fire-emergency', [EmergencyController::class, 'fireEmergency'])->name('fire-emergency');
    Route::get('/medical-emergency', [EmergencyController::class, 'medicalEmergency'])->name('medical-emergency');
    Route::get('/medical-transport', [EmergencyController::class, 'medicalTransport'])->name('medical-transport');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::prefix('/contact')->group(function () {
    Route::get('/fire-fighter', [ContactController::class, 'fireFighter'])->name('fire-fighter');
    Route::get('/police-station', [ContactController::class, 'policeStation'])->name('police-station');
    Route::get('/medical-facility', [ContactController::class, 'medicalFacility'])->name('medical-facility');
});

Route::get('/about', function () {
    return view('frontend.page.about')->with('title', 'About');
})->name('about');

Route::prefix('/about')->group(function () {
    Route::get('/mission-statement', [AboutController::class, 'missionStatement'])->name('mission-statement');
    Route::get('/terms-of-service', [AboutController::class, 'termsOfService'])->name('terms-of-service');
    Route::get('/privacy-policy', [AboutController::class, 'privacyPolicy'])->name('privacy-policy');
});

Route::get('/safe', [ReportController::class, 'safe'])->name('safe');
Route::get('/department/{id}', [GeneralDepartmentController::class, 'departmentById'])->name('department');