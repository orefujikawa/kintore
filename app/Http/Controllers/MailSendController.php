<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailSendController extends Controller
{
    //
    public  function send()
    {
    $data=[];
    Mail::send('test',$data,function($message){
        $message->to('watasifujikawa@gmail.com', 'Test')
                ->from('orefujikawa@icloud.com')
        ->subject('This is a test mail');
    });
    }
}
