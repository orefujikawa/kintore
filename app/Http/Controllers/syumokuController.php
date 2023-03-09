<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\Kintore;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class syumokuController extends Controller
{
    //
    protected function syumoku(Request $request){
    $syumoku = new event();
    $idname=session('name');
    $name=$syumoku::select('idname')->value();

    if($name==$idname){
        $name->all();
        dd($name);
    $syumoku->benchpress=$request->benchpressnumber+33;
    $syumoku->dumbbellfly=$request->dumbbellflynumber;
    $syumoku->pushup=$request->pushupnumber;
    $syumoku->sideraise=$request->sideraisenumber;
    $syumoku->save();
    }else{
        $syumoku->idname=$idname;
        $syumoku->benchpress=$request->benchpressnumber+33;
        $syumoku->dumbbellfly=$request->dumbbellflynumber;
        $syumoku->pushup=$request->pushupnumber;
        $syumoku->sideraise=$request->sideraisenumber;
        $syumoku->save();}
        dd($name,$idname);
        // $syumoku->save();
    return view('kintoremain',[$syumoku]);
    }

}
