<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('index');
});






Auth::routes();
Route::prefix('/admin')->namespace('Admin')->group(function(){
    //All the admin routes will be defined here...
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/add-department', [App\Http\Controllers\Admin\AdminController::class, 'addDept'])->name('add-department');
    Route::get('/department', [App\Http\Controllers\Admin\AdminController::class, 'showDept'])->name('department');
    Route::post('/save-dept', [App\Http\Controllers\Admin\AdminController::class, 'saveDept'])->name('save-dept');
    Route::get('/leave-type', [App\Http\Controllers\Admin\AdminController::class, 'showLeaveType'])->name('leave-type');
    Route::get('/employee', [App\Http\Controllers\Admin\AdminController::class, 'showEmployee'])->name('employee');
    Route::get('/add-employee', [App\Http\Controllers\Auth\RegisterController::class, 'getDetails'])->name('add-employee');


    // Route::post('/create', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
        Route::namespace('Auth')->group(function(){
            
    // Shipment
    Route::get('/shipment-assessment', [App\Http\Controllers\Admin\ShipmentController::class, 'create'])->name('shipment.assessment');
    Route::post('/store-shipment', [App\Http\Controllers\Admin\ShipmentController::class, 'store'])->name('store.shipment');

    
    //Login Routes
    Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin-login-form');
    Route::post('/admin-login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin-login');
    Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin-logout');

  });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/leave-application', [App\Http\Controllers\UserController::class, 'leaveApplication'])->name('leave-application');
Route::post('/save-leave', [App\Http\Controllers\UserController::class, 'saveLeave'])->name('save-leave');
Route::get('/leave-history', [App\Http\Controllers\UserController::class, 'leaveHistory'])->name('leave-history');
Route::get('/leave-details/{leave}', [App\Http\Controllers\UserController::class, 'leaveDetails'])->name('leave-details');
Route::get('/all-leave', [App\Http\Controllers\UserController::class, 'allLeave'])->name('all-leave');
Route::get('/all-leave-details/{leave}', [App\Http\Controllers\UserController::class, 'allLeaveDetails'])->name('all-leave-details');
Route::get('/pending-leave', [App\Http\Controllers\UserController::class, 'pendingLeave'])->name('pending-leave');
Route::get('/approved-leave', [App\Http\Controllers\UserController::class, 'approvedLeave'])->name('approved-leave');
Route::get('/unapproved-leave', [App\Http\Controllers\UserController::class, 'unapprovedLeave'])->name('unapproved-leave');
Route::post('/relief-approval/{leave}', [App\Http\Controllers\UserController::class, 'reliefApproval'])->name('relief-approval');


Route::get('/lm-leave', [App\Http\Controllers\LineManagerController::class, 'leave'])->name('lm-leave');
Route::get('/lm-leave-details/{leave}', [App\Http\Controllers\LineManagerController::class, 'leaveDetails'])->name('lm-leave-details');
Route::post('/lm-approval/{leave}', [App\Http\Controllers\LineManagerController::class, 'approval'])->name('lm-approval');
Route::get('/lm-pending-leave', [App\Http\Controllers\LineManagerController::class, 'pendingLeave'])->name('lm-pending-leave');
Route::get('/lm-approved-leave', [App\Http\Controllers\LineManagerController::class, 'approvedLeave'])->name('lm-approved-leave');
Route::get('/lm-unapproved-leave', [App\Http\Controllers\LineManagerController::class, 'unapprovedLeave'])->name('lm-unapproved-leave');