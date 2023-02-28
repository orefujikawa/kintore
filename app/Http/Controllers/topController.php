<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kintore;

class topController extends Controller
{

    public function massege(Request $request)
    {
        session()->forget('login');
        // $aaaaaa='あああ';
        // session(['login' => $aaaaaa]);
        $validaterule=$this->validate($request,[
            'idname'=>'max:10',
            'email'=>'email',
            'pass'=>'max:10']);
        if($validaterule==true){
            $kintore=new kintore;
            $kintore->idname=$request->idname;
            $kintore->email=$request->email;
            $kintore->pass=$request->pass;

            $requestdate=$request->idname;
            // session(['login' => $requestdate]);

            $kintore->save();//データーベースに追加している
        }
        session(['name'=>$requestdate]);
        session(['login'=>1]);
        return view('test',['requestdate'=>$requestdate]);
    }
}
//詰まったこと
//値渡しview('test',compact('kya'));この方法の他に連想配列view('test',['deta' => $request,'user'=>$user]
//この方法があるが　　ルーティングの流れはweb.php->view１->web.php->controller->view２などの流れ
//さらにviewでのaction属性や送り方（この場合違うとエラーが出る）に気おつけたほうがよくエラーが出ないエラーが一番詰む
//issetでエラーが出ないようにしたら仕様を勘違いしていてisset($aaa（中身あああ）)が１と表示されていてこの問題に気付くのが遅れた
//改善点
//変数名のルールやもっとコメントを入れるべき
//やること
//ミドルウェアでセッション確認
//このサイトにアクセスしてきたときにosや過去セッション破棄

//if ($kore == -1) {//マイグレーションを自動でしている$kore = Artisan::call('migrate', ['--force' => true,]);// echo ('うごいてる');echo ($kore);} else {echo ('うごいてない');echo ($kore);}
// マイグレーション自動機構if分で動作確認
