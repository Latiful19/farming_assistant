<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\advertisement;

class Advertisementscontroller extends Controller
{
    public function advertisement()
    {
        $advertisements=advertisement::all();
        return view('backend.layouts.advertisements.advertisement',compact('advertisements'));
    }
    public function advertisementstore(Request $request)
    {
        
        advertisement::create([

            'Product_Category'=>$request->Product_Category,
            'Product_Name'=>$request->Product_Name,
            'Amount'=>$request->Amount,
            'Quality'=>$request->Quality,
            'Price'=>$request->Price,
            'date'=>$request->date,
        ]);

        
        return redirect()->back()->with('success','Post added successfully.');
    }
    
    public function delete($id)
       {
        //  dd($house_id);
         $ad=advertisement::find($id);
        if($ad)
        {
            $ad->delete();
            return redirect()->back()->with('message','Ad Deleted successfully.');
        }
        return redirect()->back()->with('message','No Ad found to delete.');
       }
}

