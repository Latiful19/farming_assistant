<?php

use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FarmerController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RetailersController;
use App\Http\Controllers\Backend\AllRegisteredcontroller;
use App\Http\Controllers\Backend\Complaintscontroller;
use App\Http\Controllers\Backend\Advertisementscontroller;
use App\Http\Controllers\Backend\Farmingtipscontroller;
use App\Http\Controllers\Backend\UserController as BackendUser;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your appslication. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[FrontendHome::class,'home'])->name(name:'home');
Route::get('/register',[UserController::class,'register'])->name('userregister');




Route::get('admin/login',[BackendUser::class,'Login'])->name('admin.login');
// admin panel
Route::group(['prefix'=>'admin','midleware'=>'auth'],function(){


Route::get('/',[HomeController::class,'dashboard'])->name(name:'dashboard');

//farmer
Route::get('/farmer',[FarmerController::class,'list'])->name('farmer.list');
Route::get('/farmer/account',[FarmerController::class,'openacc'])->name('farmer.openacc');
Route::post('/farmer/accountopen',[FarmerController::class,'farmeropenacc'])->name('farmer.openaccount');

Route::get('/dashboard',[DashboardController::class,'dash'])->name('dashboard.dash');
Route::get('/farmingtip',[Farmingtipscontroller::class,'farmingtip'])->name('farmingtips.farmingtip');
Route::get('/retailer',[RetailersController::class,'retailer'])->name('retailers.retailer');
Route::get('/registered',[AllRegisteredcontroller::class,'registered'])->name('allregistered.registered');
Route::get('/complaint',[Complaintscontroller::class,'complaint'])->name('complaints.complaint');
Route::get('/advertisement',[Advertisementscontroller::class,'advertisement'])->name('advertisements.advertisement');
});