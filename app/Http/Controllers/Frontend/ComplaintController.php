<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;


class ComplaintController extends Controller
{
    public function complaints()
    {
        $complaints=complaint::all();
        return view ('frontend.layouts.complaint',compact('complaints'));
    }

public function complaintstore (Request $request)

{
    // dd($request->all());
    $fileName='';
            if($request->hasFile('problem_image'))
            {
                $file=$request->file('problem_image');
               //generate file name here
                $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$fileName);
            }
    // dd($request->all());
    Complaint::create([

        'Category'=>$request->category,
        'User_name'=>auth()->user()->User_Name,
        'problem_name'=>$request->Problem_name,
        'Image'=>$fileName,
        'Description'=>$request->description,
    ]);
    return redirect()->back()->with('success','problem submitted Successfully.');

 }
}