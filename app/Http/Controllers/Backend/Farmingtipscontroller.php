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
            'description'=>$request->description,
          
               
        ]);
           
           return redirect()->back()->with('success','Tips added successfully.');
    }
    public function delete($id)
       {
        //  dd($ad_id);
         $tip=farmingtip::find($id);
        if($tip)
        {
            $tip->delete();
            return redirect()->back()->with('message','tips Deleted successfully.');
        }
        return redirect()->back()->with('message','No tips found to delete.');
       }

}
