<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SolutionController extends Controller
{
    public function solved()
    {
        return view('backend.layouts.solutions.solution');
    }
    public function registerstore(Request $request)
    {
       
        // dd($request->all());
        


        User::create([
            
            'solution'=>$request->solution,
            
          
               
        ]);
    }
    
}
