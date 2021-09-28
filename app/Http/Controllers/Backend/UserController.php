<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.layouts.login');
    }

    public function loginPost(Request $request)
    {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        
           {
               return redirect()->route('dashboard');
          
           }


        return redirect()->back()->with('message','invalid user info.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route(route:'admin.login');
    }
    
    public function farmerlist()
    {
        $farmers=user::where('role','=','farmer')->get();

       return view('backend.layouts.farmer.list',compact('farmers'));
    }
    public function userlist()
    {
        $users=user::all();

       return view('backend.layouts.allregistered.registered',compact('users'));
    }
}
