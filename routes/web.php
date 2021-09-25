<?php

use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\ComplaintStatusController;
use App\Http\Controllers\Frontend\ComplaintController;
use App\Http\Controllers\Frontend\TipsController;
use App\Http\Controllers\Frontend\AdvertiseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ComplaintsController;
use App\Http\Controllers\Backend\FarmerController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RetailersController;
use App\Http\Controllers\Backend\AllRegisteredcontroller;
use App\Http\Controllers\Backend\Advertisementscontroller;
use App\Http\Controllers\Backend\Farmingtipscontroller;
use App\Http\Controllers\Backend\UserController as BackendUser;




// Frontend

Route::get('/',[FrontendHome::class,'home'])->name(name:'home');
Route::get('/register',[UserController::class,'register'])->name('userregister');
Route::get('/farmingtips',[TipsController::class,'farmingtips'])->name('farmingtips.tips');
Route::post('/store',[UserController::class,'registerstore'])->name('store');
Route::get('/complaintstatus',[ComplaintStatusController::class,'complaint'])->name('ComplaintStatus');
Route::get('/complaint',[ComplaintController::class,'complaints'])->name('complaint');

Route::post('/complaint/store',[ComplaintController::class,'complaintstore'])->name('complaint.store');

Route::get('/advertisements',[AdvertiseController::class,'advertisements'])->name('advertise');

// Backend

Route::get('admin/login',[BackendUser::class,'Login'])->name('admin.login');
// admin panel
Route::group(['prefix'=>'admin','midleware'=>'auth'],function(){


Route::get('/',[HomeController::class,'dashboard'])->name(name:'dashboard');

//farmer
Route::get('/users',[BackendUser::class,'farmerlist'])->name('farmer.list');
// Route::post('/farmer/account',[FarmingtipsController::class,'farmingtips'])->name('farmingtip');
Route::get('/farmer/account',[FarmerController::class,'openacc'])->name('farmer.openacc');
Route::post('/farmer/accountopen',[FarmerController::class,'farmeropenacc'])->name('farmer.openaccount');

// complaint
Route::get('/complaints',[ComplaintsController::class,'complaints'])->name('allcomplaints.complaints');


Route::get('/dashboard',[DashboardController::class,'dash'])->name('dashboard.dash');
Route::get('/farmingtip',[Farmingtipscontroller::class,'farmingtip'])->name('farmingtips.farmingtip');
Route::post('/farmingtip/store',[Farmingtipscontroller::class,'store'])->name('farmingtips.store');
Route::get('/retailer',[RetailersController::class,'retailer'])->name('retailers.retailer');
Route::get('/registered',[BackendUser::class,'userlist'])->name('allregistered.registered');
Route::get('/advertisement',[Advertisementscontroller::class,'advertisement'])->name('advertisements.advertisement');
});