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
    Complaint::create([

        'Category'=>$request->category,
        'User_name'=>$request->User_name,
        'problem_name'=>$request->Problem_name,
        'Image'=>$request->image,
        'Description'=>$request->description,
    ]);
    return redirect()->back();

}
}