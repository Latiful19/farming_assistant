<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return view ('frontend.layouts.userregister');
    }
    public function registerstore(Request $request)
    {
        User::create([
            'Full_Name'=>$request->fullname,
            'User_Name'=>$request->username,
            'Email'=>$request->email,
            'Mobile_No'=>$request->mobile_no,
            'Address'=>$request->address,
            'role'=> 'farmer',
            'password'=>bcrypt($request->password),
          
               
        ]);
           
           return redirect()->back()->with('success','User Registration Succeccfully.');
    }  
}
    
   

