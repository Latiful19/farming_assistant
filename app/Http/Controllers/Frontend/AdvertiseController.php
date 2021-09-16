<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function advertisements()
    {
        return view ('frontend.layouts.advertise');
    }
}
