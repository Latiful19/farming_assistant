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
    public function solution()
    {
        return view('backend.layouts.allcomplaints.description');
    }

    
    
    
}
