<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function complaints()
    {
        return view ('backend.layouts.allcomplaints.complaints');
    }
    
}
