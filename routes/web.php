<?php

use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController as Frontennduser;
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

Route::get('/login',[Frontennduser::class,'userlogin'])->name('userlogin');
Route::get('/register',[Frontennduser::class,'register'])->name('userregister');
Route::post('/store',[Frontennduser::class,'registerstore'])->name('store');

Route::get('/farmingtips',[TipsController::class,'farmingtips'])->name('farmingtips.tips');
Route::get('/farmingtips/descriptions',[TipsController::class,'descriptions'])->name('descriptions');



Route::post('/farmer/login/post',[Frontennduser::class,'userloginpost'])->name('userlogin.post');


Route::group(['prefix'=>'farmer','middleware'=>'authfarmer'],function(){

    Route::get('/complaintstatus',[ComplaintStatusController::class,'complaint'])->name('ComplaintStatus');


    Route::get('/complaint',[ComplaintController::class,'complaints'])->name('complaint');
    Route::post('/complaint/store',[ComplaintController::class,'complaintstore'])->name('complaint.store');

    Route::get('/advertisements',[AdvertiseController::class,'advertisements'])->name('advertise');
    Route::get('/advertisemnts/advertisement',[Advertisecontroller::class,'advertise'])->name('advertise.advertisement');
    Route::get('/solution/{id}',[ComplaintStatusController::class,'solutions'])->name('complaints.solutions');

    Route::get('/advertise/{id}',[AdvertiseController::class,'claim'])->name('claim.status');

    Route::get('/farmer/logout',[Frontennduser::class,'logout'])->name('user.logout');
});
// Backend

Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');



// admin panel


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){  

Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');

Route::get('/logout',[BackendUser::class,'logout'])->name('logout');


Route::get('/farmingtip',[Farmingtipscontroller::class,'farmingtip'])->name('farmingtips.farmingtip');
Route::get('/tips/delete/{id}',[Farmingtipscontroller::class,'delete'])->name('delete');
Route::post('/farmingtip/store',[Farmingtipscontroller::class,'store'])->name('farmingtips.store');

Route::get('/complaints',[ComplaintsController::class,'complaints'])->name('allcomplaints.complaints');
Route::get('/complaints/description/{id}',[ComplaintsController::class,'description'])->name('description');

Route::get('/status/{id}',[ComplaintsController::class,'status'])->name('status.update');
Route::get('unsolved/status/{id}',[ComplaintsController::class,'statuses'])->name('statuses.updated');



});

Route::group(['prefix'=>'admin','middleware'=>'role'],function(){




//farmer
Route::get('/users',[BackendUser::class,'farmerlist'])->name('farmer.list');
// Route::post('/farmer/account',[FarmingtipsController::class,'farmingtips'])->name('farmingtip');
Route::get('/farmer/account',[FarmerController::class,'openacc'])->name('farmer.openacc');
Route::post('/farmer/accountopen',[FarmerController::class,'farmeropenacc'])->name('farmer.openaccount');

// complaint


Route::get('/statuses/{id}',[ComplaintStatusController::class,'status'])->name('allcomplaints.status');


// solution
Route::post('/solution',[ComplaintsController::class,'solution'])->name('solutions.solution');
Route::get('/solution',[SolutionController::class,'solved'])->name('solutions');




Route::get('/dashboard',[DashboardController::class,'dash'])->name('dashboard.dash');




// Route::get('/retailer',[RetailersController::class,'retailer'])->name('retailers.retailer');
Route::get('/registered',[BackendUser::class,'userlist'])->name('allregistered.registered');


// experts
Route::get('/expert',[BackendUser::class,'experts'])->name('farm.experts');
Route::post('/post/expert',[BackendUser::class,'postexpert'])->name('post.experts');



Route::get('/advertisement',[Advertisementscontroller::class,'advertisement'])->name('advertisements.advertisement');
Route::post('/advertisemnts/advertisementstore',[Advertisementscontroller::class,'advertisementstore'])->name('advertisements.advertisementstore');



Route::get('/delete/{id}',[AdvertisementsController::class,'delete'])->name('advertise.delete');
});

