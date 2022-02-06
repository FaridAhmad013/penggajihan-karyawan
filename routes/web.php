<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeSalaryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

// Route::get('/absen', function(){
//     return view('absensi.login');
// })->name('absen-masuk');

// Route::get('/', HomeController::class)->name('home');
// Route::post('absen', [AttendanceController::class, 'login'])->name('absen-masuk');
Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::resource('/job', JobController::class);

    Route::resource('/employee', EmployeeController::class);
    Route::get('/surat-berhenti/{employee}', [SuratController::class, 'create'])->name('surat');
    Route::post('/surat-berhenti/{employee}', [SuratController::class, 'store'])->name('surat');


    Route::get('/salary', SalaryController::class)->name('report');
    Route::post('/salary', SalaryController::class)->name('report');
    Route::resource('/schedule', ScheduleController::class)->except('show', 'create', 'store', 'destroy');

    Route::prefix('{employee}/')->group(function() {
        Route::get('salary/create', [EmployeeSalaryController::class, 'create'])->name('employee-salary.create');
        Route::post('salary/store', [EmployeeSalaryController::class, 'store'])->name('employee-salary.store');
        Route::get('salary', [EmployeeSalaryController::class, 'index'])->name('employee-salary.index');
        Route::get('/salary/{salary}', [EmployeeSalaryController::class, 'show'])->name('employee-salary.show');
    });
});

require __DIR__.'/auth.php';
