<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Complaintscontroller extends Controller
{
    public function complaint()
    {

        return view('backend.layouts.complaints.complaint');
    }
}
