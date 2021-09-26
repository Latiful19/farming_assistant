<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintsController extends Controller
{
    public function complaints()
    {
        $complaints=complaint::all();
        return view ('backend.layouts.allcomplaints.complaints',compact('complaints'));
    }
    
}
