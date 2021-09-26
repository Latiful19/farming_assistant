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
    
    public function store (Request $request)
    {
       Farmingtip::create([
            'Category'=>$request->category,
            'Crop_Name'=>$request->crop_name,
            'Problem_Type'=>$request->problem_type,
            
          
               
        ]);
           
           return redirect()->back()->with('success','Tips added successfully.');
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
