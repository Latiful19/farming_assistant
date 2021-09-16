<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintStatusController extends Controller
{
    public function Complaint()
    {
        return view ('frontend.layouts.complaintstatus');
    }
}


