<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class kintoreMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   $requestdate=$request->idname;//リクエストからユーザーネームを取得
        session(['login' => $requestdate]);//ログインのデータを取得
        $sessiondate=session()->get('login');//セッションのデータを取得
        $response = $next($request);//これより上は前処理したはviewcontroller読み込み後動く

        $url=url()->previous();//直前のurlを取得
        $start='http://localhost:8000/';
        $top='http://localhost:8000/top';
        $access='http://localhost:8000/access';
        $test='http://localhost:8000/test';
        if($url==$test){
            // $response=new Response('top');
            if($sessiondate==$requestdate){ return $response; }else{return redirect()->route('test')->with('re','マッチングtop');}
            // return redirect()->route('test',['sessiondate'=>$sessiondate,'url'=>$url]);
            // return $response;
        }elseif($url==$access){
            // return redirect()->route('access')->with('accesss','これはアクセス');
            if($sessiondate==$requestdate){ return $response; }else{return redirect()->route('/access')->with('re','マッチングtop');}
            // return response()->view('top',compact('aa'));
        }elseif($url==$top){
            // return redirect()->route('top')->with('tops','これはtop');
            if($sessiondate==$requestdate){ return $response; }else{return redirect()->route('top')->with('re','マッチングtop');}
        }elseif($url==$start){ if($sessiondate==$requestdate){ return $response; }else{return redirect()->route('top')->with('re','マッチングtop');}
        }else{return redirect()->route('top')->with('re',$url);}//ここをリダイレクトにすることによってページは一生リロードするためアクセスできない
    }
}

//詰まったところ
//urlはtestだけど画面表示はtopだった問題が起こったが問題は
