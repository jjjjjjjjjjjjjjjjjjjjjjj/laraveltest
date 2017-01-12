<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Verification;
use App\Http\Requests\MobileVerification;
use Session;

use App\User;
class VerificationController extends Controller
{
    public function genrateCode($length =6){
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $refrenceCode = '';
		    for ($i = 0; $i < $length; $i++) {
		        $refrenceCode .= $characters[rand(0, $charactersLength - 1)];
		    }
		    Session::put('refrenceCode',$refrenceCode);
    		$charactersLength = strlen($characters);
		    $verificationCode = '';
		    for ($i = 0; $i < $length; $i++) {
		        $verificationCode .= $characters[rand(0, $charactersLength - 1)];
		    }
    		Session::put('verificationCode', $verificationCode);
    }
    public function genrateMobileCode($length =6){
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $refrenceCode = '';
		    for ($i = 0; $i < $length; $i++) {
		        $refrenceCode .= $characters[rand(0, $charactersLength - 1)];
		    }
		    Session::put('refrenceMobileCode',$refrenceCode);
    		$charactersLength = strlen($characters);
		    $verificationCode = '';
		    for ($i = 0; $i < $length; $i++) {
		        $verificationCode .= $characters[rand(0, $charactersLength - 1)];
		    }
    		Session::put('verificationMobileCode', $verificationCode);
    }

    public function emailCode(Verification $request){
    		
    			$this->genrateCode();
	    		$message='Check your email inbox or spam verification code with reference Code '.Session::get('refrenceCode');
	    		return response()->json([
				'refrenceCode' =>Session::get('refrenceCode'),
				'verificationCode' =>Session::get('verificationCode'),
				'message'=>$message,
				]);	
    		
    }

    public function verifyEmailCode(Request $request){
	    	$emailCode=$request->get('emailcode');
	    	if(Session::get('verificationCode')==$emailCode){
	    		return response()->json([
	    		'vstatus'=>"1"	
	    		]);
	    	}else{
	    		return response()->json([
	    		'vstatus'=>"0"
	    		]);
	    	}
    }
    public function sendMobileCode(MobileVerification $request){
    			$this->genrateMobileCode();
	    		$message=' verification code is '.Session::get('verificationMobileCode').'  with reference Code on screen '.Session::get('refrenceMobileCode');
	    		return response()->json([
				'refrenceCode' =>Session::get('refrenceMobileCode'),
				'verificationCode' =>Session::get('verificationMobileCode'),
				'message'=>$message,
				]);
    }


}
