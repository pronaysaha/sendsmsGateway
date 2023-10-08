<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client;
class SmsController extends Controller
{
    public function  sendsms(){
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $sendernumber = getenv("TWILIO_PHONE");
        $twilio = new Client($sid, $token);
        
        $message = $twilio->messages->create("+8801792993208",
        ["body"=>"this is skip",
        "from"=>$sendernumber] 
    );

     dd("message sent Succesfully");
        
    }
}
