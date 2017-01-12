<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Mailer\EmailHelper;
use App\Events\EmailEvent;

use Event;
class NewsLetterController extends Controller
{
 
	
    public function send(){
        $email="sadmin@gmail.com";
        $user = User::whereEmail($email)->first();

        
        $email="sadmin@gmail.com";
        $user = User::whereEmail($email)->first();
        //$s=  new SmsNotification($user);
        //Event::fire(new EmailEvent($user));
                
            $emailData=array('fromName'=>'ashraf ',
            'fromEmail'=>'emails2ashraf@gmail.com',
            'toEmail'=>'ashraf786926@gmail.com',
            'toName'=>' ashraf ali','subject'=>' New offer in heavy ',
            'emailTemplate'=>'email',
            'emailTemplateData'=>$user
        );
        EmailHelper::sendMail($emailData);
          	
    }
    public function news(){
    	exit("added new ");
    }
}
