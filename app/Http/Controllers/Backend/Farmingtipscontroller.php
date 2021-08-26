<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Farmingtipscontroller extends Controller
{
    public function farmingtip()
    {
        return view ('backend.layouts.farmingtips.farmingtip');
    }
}
