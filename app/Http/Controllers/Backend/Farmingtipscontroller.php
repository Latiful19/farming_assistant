<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\farmingtip;

class Farmingtipscontroller extends Controller
{
    public function farmingtip()
    {
$categories=farmingtip::get();


        return view ('backend.layouts.farmingtips.farmingtip',compact('categories'));
    } 
    public function farmingtips(Request $request)
    {
        User::create([
            'Category'=>$request->fullname,
            'Crop_Name'=>$request->username,
            'Problem_Type'=>$request->email,
            
          
               
        ]);
           
           return redirect()->back()->with('success','User Registration Succeccfully.');
    }



    // public function registerstore(Request $request)
    // {
    //     User::create([
    //         'Full_Name'=>$request->fullname,
    //         'User_Name'=>$request->username,
    //         'Email'=>$request->email,
    //         'Mobile_No'=>$request->mobile_no,
    //         'Address'=>$request->address,
    //         'role'=> 'farmer',
    //         'password'=>bcrypt($request->password),
          
               
    //     ]);
           
    //        return redirect()->back()->with('success','User Registration Succeccfully.');
    // }  
}
