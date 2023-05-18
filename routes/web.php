<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuireyController;
use App\Http\Controllers\PrivacyController;

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

Route::get('/', function () {return view('frontend.index');});
Route::get('/contact',[ContactController::class, 'Contact'])->name('contact');
Route::get('/about',[ContactController::class, 'Homeabout'])->name('about');
Route::post('/store/message',[ContactController::class, 'StoreMessage'])->name('store.message');
Route::get('/Arrival_plans',[PlansController::class, 'HomePlans'])->name('home.plans');
Route::get('/plan/details/{id}',[PlansController::class, 'PlanDetails'])->name('plane.details');
Route::get('/privicies', function () { return view('frontend.privicies'); });

//------------------------------------Admin -----------------------------------------------
Route::prefix('admin')->group(function(){
	Route::get('login',[AdminController::class,'Index'])->name('login_form');
	Route::post('/login/admin',[AdminController::class,'Login'])->name('admin.login');
	Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/change/password',[AdminController::class, 'ChangePassword'])->name('change.password')->middleware('admin');
    Route::post('/update/password',[AdminController::class, 'UpdatePassword'])->name('update.password')->middleware('admin');
    Route::get('/admin/profile',[AdminController::class, 'Profile'])->name('admin.profile')->middleware('admin');
    Route::post('/store/profile',[AdminController::class, 'StoreProfile'])->name('store.profile')->middleware('admin');
 
   //==============================Admins============================
    Route::get('/alladmins',[AdminController::class,'AdminAll'])->name('admin.all')->middleware('admin');
    Route::post('/admin/add',[AdminController::class,'AdminAdd'])->name('admin.add')->middleware('admin');
    Route::post('/delete/admin/{id}',[AdminController::class, 'DeleteAdmin'])->name('delete.admin')->middleware('admin');

    //==============================Employees============================
    Route::get('/allemployees',[AdminController::class,'EmployeeAll'])->name('employee.all')->middleware('admin');
    Route::post('/employee/add',[AdminController::class,'AdminEmployeeAdd'])->name('admin.employee.add')->middleware('admin');
    Route::post('/delete/employee/{id}',[AdminController::class, 'DeleteEmployee'])->name('delete.employee')->middleware('admin');
    Route::post('/edit/employee/{id}',[AdminController::class, 'EditEmployee'])->name('edit.employee')->middleware('admin');

    //==============================Plans============================
    Route::get('/allplans',[PlansController::class,'PlansAll'])->name('all.plan')->middleware('admin');
    Route::post('/plan/add',[PlansController::class,'AddPlan'])->name('add.plan')->middleware('admin');
    Route::post('/delete/plan/{id}',[PlansController::class, 'DeletePlan'])->name('delete.plan')->middleware('admin');
    Route::post('/edit/plan/{id}',[PlansController::class, 'EditPlane'])->name('edit.plan')->middleware('admin');
    Route::get('/report/plan',[PlansController::class, 'ReportPlan'])->name('report.plan');
    Route::post('report/search',[PlansController::class, 'SearchPlan'])->name('search.plan');

    //==============================Gallery============================
    Route::get('/allgallary',[GalleryController::class,'AllGallary'])->name('all.gallary')->middleware('admin');
    Route::post('/gallary/add',[GalleryController::class,'AddGallary'])->name('add.gallary')->middleware('admin');
    Route::post('/delete/gallary/{id}',[GalleryController::class, 'DeleteGallary'])->name('delete.gallary')->middleware('admin');

    //==============================Contact Messages & Info============================
    Route::get('/contact/message',[ContactController::class, 'ContactMessage'])->name('contact.message');
    Route::post('/delete/message/{id}',[ContactController::class, 'DeleteMessage'])->name('delete.message');
    Route::get('/contact/quirey',[QuireyController::class, 'ContacQuery'])->name('contact.quirey');
    Route::post('/edit/quirey/{id}',[QuireyController::class, 'EditQuery'])->name('edit.quiery');

    //==============================Privacy============================
    Route::resource('Privacy', PrivacyController::class);
});


//------------------------------------Employee -----------------------------------------------
Route::prefix('employee')->group(function(){
	Route::get('login',[EmployeeController::class,'Index'])->name('login_form1');
	Route::post('/login/employee',[EmployeeController::class,'Login'])->name('employee.login');
	Route::get('/dashboard',[EmployeeController::class,'Dashboard'])->name('employee.dashboard')->middleware('employee');
    Route::get('/logout',[EmployeeController::class,'EmployeeLogout'])->name('employee.logout')->middleware('employee');
    Route::get('/change/password',[EmployeeController::class, 'ChangePassword'])->name('change.password1')->middleware('employee');
    Route::post('/update/password',[EmployeeController::class, 'UpdatePassword'])->name('update.password1')->middleware('employee');
    Route::get('/employee/profile',[EmployeeController::class, 'Profile'])->name('employee.profile')->middleware('employee');
    Route::post('/store/profile',[EmployeeController::class, 'StoreProfile'])->name('store.profile1')->middleware('employee');

    //==============================Plans============================
    Route::get('/allplans',[PlansController::class,'MyPlans'])->name('my.plans')->middleware('employee');
    Route::post('/plan/add',[PlansController::class,'AddNewPlan'])->name('add.newplan')->middleware('employee');
    Route::post('/delete/1plan/{id}',[PlansController::class, 'Delete1Plan'])->name('delete.1plan')->middleware('employee');
});

require __DIR__.'/auth.php';
