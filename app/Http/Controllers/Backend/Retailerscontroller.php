<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Retailerscontroller extends Controller
{
    public function retailer()
    {

        return view('backend.layouts.retailers.retailer');
     }
}
