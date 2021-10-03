<?php

namespace App\Http\Controllers\Backend;
use App\Models\advertisement;
use App\Models\Complaint;
use App\Models\User;
use App\Models\farmingtip;
use App\Models\solution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dash()
    {
        $complaint=Complaint::count();
        $user=User::count();
        $farmingtip=farmingtip::count();
        $advertisement=advertisement::count();
        
        

        return view('backend.layouts.dashboard.dash',compact('user','complaint','farmingtip','advertisement'));
    }
}
