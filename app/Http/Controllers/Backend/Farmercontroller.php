<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Farmeraccount;

class Farmercontroller extends Controller
{
    public function list()
    {
        $info=Farmeraccount::all();

       return view('backend.layouts.farmer.list',compact('info'));
    }

    public function openacc(){
        // dd($info->all());
        return view('backend.layouts.farmer.create_account');
    }
    public function farmeropenacc(Request $openacc){
        // dd($openacc->all());
        Farmeraccount::create([
            // field name from DB     field name from the blade file

            'name'=>$openacc->name,
            'Phone'=>$openacc->phone,
            'address'=>$openacc->address
        ]);
        return redirect()->route('farmer.openaccount');
        
    }

}
