<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllRegisteredcontroller extends Controller
{
    public function registered()
    {

        return view('backend.layouts.allregistered.registered');
     }
}
