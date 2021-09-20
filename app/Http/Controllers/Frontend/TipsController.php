<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function farmingtips()
    {
        return view ('frontend.layouts.tips');
    }
}
