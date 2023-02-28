<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class kintoremaincontroller extends Controller
{
    //
    public function kintoremain(Request $request){
        return view('kintoremain');
    }
}
