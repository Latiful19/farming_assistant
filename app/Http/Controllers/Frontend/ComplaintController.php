<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function complaints()
    {
        return view ('frontend.layouts.complaint');
    }
}
