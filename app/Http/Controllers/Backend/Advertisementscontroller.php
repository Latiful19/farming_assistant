<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Advertisementscontroller extends Controller
{
    public function advertisement()
    {

        return view('backend.layouts.advertisements.advertisement');
    }
}
