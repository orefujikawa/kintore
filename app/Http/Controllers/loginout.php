<?php

namespace App\Http\Controllers;

use App\Models\Kintore;
use Illuminate\Http\Request;
class loginout extends Controller
{
    //

    public function login(Request $request){
        // $idname=$request->only('idname');
        // $pass=$request->only('pass');//これは何しているのか
        $dbs=Kintore::where([['idname','=',$request->idname],['pass','=',$request->pass]])->first();//idname passに一致するテーブルを拾ってくる
        //↑入力フォームの値を受け取ってふるいにかけている（ログインきこう）
        session(['login'=>1]);
         if(isset($dbs)){
        return view('access',['dbs'=>$dbs]);
    }else{return redirect('top');}
    }
    }
