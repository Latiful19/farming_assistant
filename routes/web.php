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
use App\Http\Controllers\Backend\SolutionController;
use App\Http\Controllers\Backend\UserController as BackendUser;




// Frontend

Route::get('/',[FrontendHome::class,'home'])->name(name:'home');

Route::get('/login',[UserController::class,'userlogin'])->name('userlogin');
Route::get('/register',[UserController::class,'register'])->name('userregister');
Route::post('/store',[UserController::class,'registerstore'])->name('store');

Route::get('/farmingtips',[TipsController::class,'farmingtips'])->name('farmingtips.tips');
Route::get('/farmingtips/descriptions',[TipsController::class,'descriptions'])->name('descriptions');



Route::post('/farmer/login/post',[UserController::class,'userloginpost'])->name('userlogin.post');
Route::group(['prefix'=>'farmer','middleware'=>'authfarmer'],function(){

Route::get('/complaintstatus',[ComplaintStatusController::class,'complaint'])->name('ComplaintStatus');


Route::get('/complaint',[ComplaintController::class,'complaints'])->name('complaint');
Route::post('/complaint/store',[ComplaintController::class,'complaintstore'])->name('complaint.store');

Route::get('/advertisements',[AdvertiseController::class,'advertisements'])->name('advertise');
Route::get('/advertisemnts/advertisement',[Advertisecontroller::class,'advertise'])->name('advertise.advertisement');



Route::get('/farmer/logout',[UserController::class,'logout'])->name('user.logout');
});
// Backend

Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');
// admin panel
Route::group(['prefix'=>'admin','middleware'=>['auth','role']],function(){


Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/logout',[BackendUser::class,'logout'])->name('logout');

//farmer
Route::get('/users',[BackendUser::class,'farmerlist'])->name('farmer.list');
// Route::post('/farmer/account',[FarmingtipsController::class,'farmingtips'])->name('farmingtip');
Route::get('/farmer/account',[FarmerController::class,'openacc'])->name('farmer.openacc');
Route::post('/farmer/accountopen',[FarmerController::class,'farmeropenacc'])->name('farmer.openaccount');

// complaint
Route::get('/complaints',[ComplaintsController::class,'complaints'])->name('allcomplaints.complaints');
Route::get('/complaints/description/{id}',[ComplaintsController::class,'description'])->name('description');

Route::get('/statuses/{id}',[ComplaintStatusController::class,'status'])->name('allcomplaints.status');

// solution
Route::post('/solution',[ComplaintsController::class,'solution'])->name('solutions.solution');
Route::get('/solution',[SolutionController::class,'solved'])->name('solutions');



Route::get('/dashboard',[DashboardController::class,'dash'])->name('dashboard.dash');
Route::get('/farmingtip',[Farmingtipscontroller::class,'farmingtip'])->name('farmingtips.farmingtip');
Route::get('/delete/{id}',[Farmingtipscontroller::class,'delete'])->name('delete');

Route::post('/farmingtip/store',[Farmingtipscontroller::class,'store'])->name('farmingtips.store');
Route::get('/retailer',[RetailersController::class,'retailer'])->name('retailers.retailer');
Route::get('/registered',[BackendUser::class,'userlist'])->name('allregistered.registered');
Route::get('/advertisement',[Advertisementscontroller::class,'advertisement'])->name('advertisements.advertisement');
Route::post('/advertisemnts/advertisementstore',[Advertisementscontroller::class,'advertisementstore'])->name('advertisements.advertisementstore');
Route::get('/delete/{id}',[AdvertisementsController::class,'delete'])->name('advertise.delete');
});