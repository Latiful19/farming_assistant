<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\solution;

class ComplaintsController extends Controller
{
    public function complaints()
    {
        $complaints=complaint::all();
        return view ('backend.layouts.allcomplaints.complaints',compact('complaints'));
    }
    public function description($id)
    {
        $description=complaint::find($id);
        return view ('backend.layouts.allcomplaints.description',compact('description'));
    }
    public function solution(Request $request)
    {
        solution::create([
            'solution'    =>$request->solution,
            'complaint_id'=>$request->complaint_id,

        ]);

        return Redirect()->back();
    }
    public function status(Request $request,$id)
    {
        $complaint=Complaint::find($id);
        if ($complaint->status) {
            $complaint->update([
                'status' =>'solved',
            ]);
        }
        return redirect()->back()->with('message','problem solved.');

    }
    public function statuses(Request $request,$id)
    {
        $complaint=Complaint::find($id);
        if ($complaint->status) {
            $complaint->update([
                'status' =>'unsolved',
            ]);
        }
        return redirect()->back()->with('message','problem is not solved.');

    }


    
    
    
}
