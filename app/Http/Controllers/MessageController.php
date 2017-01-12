<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MessageController extends Controller
{
     public funciton __construct(Message $message)
     {	
     	$this->messages=$messages;
     }
     pulblic function getByChatRoom(ChatRoom $chatRoom)
     {
     	return $chatRoom->messages; 
     }
     public function createInChatRoom(ChatRoom $chatRoom)
     {
     	$mssage=$this->messaegs->newINstance(Input::all());   
     	$mssages->chatRoom()->associate($chatRoom);
     	$mssages->user()->associate($this->me);
     	$mssage->save();
     	return $message;
     }
}
