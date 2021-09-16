<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AllRegisteredcontroller extends Controller
{
    public function registered()
    {

        return view('backend.layouts.allregistered.registered');
     }
     public function list()
    {
        $users=user::all();

       return view('backend.layouts.farmer.list',compact('users'));
    }
}

