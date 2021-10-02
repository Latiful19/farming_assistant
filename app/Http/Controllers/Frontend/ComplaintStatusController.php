<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintStatusController extends Controller
{
    public function Complaint()
    {
        $complaints=complaint::all();
        return view ('frontend.layouts.complaintstatus',compact('complaints'));
    }
    public function statuses($id)
    {
complaint::find($id)->update([


]);

    }
}


