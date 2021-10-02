<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view ('frontend.layouts.userregister');
    }
    public function registerstore(Request $request)
    {
       
        // dd($request->all());
        
        $request->validate([
            'fullname'=>'required',
            'username'=>'required',
            'email'=>'required|email|unique:users,email',
            'mobile_no'=>'required',
            'address'=>'required',
            'password' => 'required|confirmed|min:6',
        ]);




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
    public function userlogin()
{ 
    return view('Frontend.layouts.loginuser');

}
public function userloginpost(Request $request)
{
    // dd($request->all()); 

    $credentials=$request->except('_token');
    
    if(Auth::attempt($credentials))
    {
        return redirect()->route('home');
        //user logged in
    }
    return redirect()->back()->with('message','invalid user info.');
}
public function logout()
{
    Auth::logout();
    return redirect()->route('home');
}
}
    
   

