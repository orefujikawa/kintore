<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('top');
})->name('top');
Route::post('/mypage', 'App\Http\Controllers\topController@massege')->name('mypage')->middleware('logout');
Route::post('/access', 'App\Http\Controllers\loginout@login')->name('access')->middleware('logout');
Route::get('/kintoremain', 'App\Http\Controllers\syumokuController@syumoku')->middleware('logout');
Route::post('/kintoremain', 'App\Http\Controllers\syumokuController@syumoku')->middleware('logout');

Route::get('/top',function(){
    return redirect('/');}//ログアウト処理
);//パスワードが間違っていた場合に戻る場所

// Route::get('/logout','App\Http\Controllers\loginout@logout')->name('logout');
// Route::get('/test','App\Http\Controllers\MailSendController@send');
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/send-email', function () {
   $to_email ='orefujikawa@icloud.com';
   Mail::to($to_email)->send(new TestMail());
   return $to_email;
});
