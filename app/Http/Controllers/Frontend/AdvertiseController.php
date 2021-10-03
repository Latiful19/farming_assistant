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
    public function claim($id)
    {
     
        $advertise=advertisement::find($id);
        if ($advertise) {
            $advertise->update([
                'status' =>'claimed',
                'claimed_by' =>auth()->user()->User_Name,
            ]);

            return redirect()->back()->with('message','you have claimed this Ad.');

        }
        return redirect()->back()->with('message','Nothing to updated.');

      
    }
}
