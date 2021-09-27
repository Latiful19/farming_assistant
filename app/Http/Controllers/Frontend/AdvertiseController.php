<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\advertisement;

class AdvertiseController extends Controller
{
    public function advertise()
    {
        $advertisements=advertisement::all();
        return view ('frontend.layouts.advertise',compact('advertisements'));
    }
}
