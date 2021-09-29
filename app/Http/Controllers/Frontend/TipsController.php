<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\farmingtip;

class TipsController extends Controller
{
    public function farmingtips()
    {
        $categories=farmingtip::get();
        return view ('frontend.layouts.tips',compact('categories'));
    }
    public function descriptions()
    {
        $details=farmingtip::get();
        return view ('frontend.layouts.descriptions',compact('details'));
    }
}
