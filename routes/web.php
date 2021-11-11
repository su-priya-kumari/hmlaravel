<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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


// Admin
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);

// Doctor
Route::get('/login/doctor', [LoginController::class, 'showDoctorLoginForm']);
Route::get('/register/doctor', [RegisterController::class,'showDoctorRegisterForm']);

// Patient
Route::get('/login/patient', [LoginController::class, 'showPatientLoginForm']);
Route::get('/register/patient', [RegisterController::class,'showPatientRegisterForm']);
Route::post('/register/patient', [RegisterController::class,'createPatient']);
Route::post('/patient', [RegisterController::class,'createPatient']);


Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::view('/admin', 'admin.adminhomepage');
    // Clinic
    Route::get('/add/clinic', [ClinicController::class,'indexclinic'])->name('addClinic');
    Route::post('/add/clinic', [ClinicController::class,'store'])->name('addClinic');
    Route::get('/update/clinic', [ClinicController::class,'showClinicUpdatePage'])->name('updateClinic');
    Route::get('/update/delete/{id}', [ClinicController::class,'deleteClinicRecord'])->name('deleteClinicRecord');
    Route::get('/update/edit/{id}', [ClinicController::class,'editClinicRecord'])->name('editClinicRecord');
    Route::post('/update/edit', [ClinicController::class,'updateClinicRecord'])->name('updateClinicRecord');

    // Doctor
    Route::get('/update/doctor', [DoctorController::class,'showDoctorUpdatePage'])->name('updateDoctor');

    // Admin
    Route::get('/update/admin', [AdminController::class,'showAdminUpdatePage'])->name('updateAdmin');
    Route::get('/update/delete/{id}', [AdminController::class,'deleteAdminRecord'])->name('deleteAdminRecord');
    Route::get('/update/edit/{id}', [AdminController::class,'editAdminRecord'])->name('editAdminRecord');
    Route::post('/update/edit', [AdminController::class,'updateAdminRecord'])->name('updateAdminRecord');

    // Patient
    Route::get('/update/patient', [PatientController::class,'showPatientUpdatePage'])->name('updatePatient');
    Route::get('/update/delete/{id}', [PatientController::class,'deletePatientRecord'])->name('deletePatientRecord');
    Route::get('/update/edit/{id}', [PatientController::class,'editPatientRecord'])->name('editPatientRecord');
    Route::post('/update/edit', [PatientController::class,'updatePatientRecord'])->name('updatePatientRecord');
    
});

// Route::group(['middleware' => 'auth:patient'], function () {
    
//     Route::view('/patient', 'patient.patienthomepage');
// });

Route::get('logout', [LoginController::class,'logout'])->name('logout');
Route::get('/homepage',[HomeController::class,'Homepage'])->name('homepage');
Route::get('/',[IndexController::class,'index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[IndexController::class,'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[IndexController::class,'index'])->name('home');
