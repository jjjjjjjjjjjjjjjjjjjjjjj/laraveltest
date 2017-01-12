<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChatRoomController extends Controller
{
    public function __construct(ChatRoom $chatRooms)
    {
    	$this->chatRooms=$chatRooms;
    }
    public function getAll()
    {
    	return $this->chatRooms->all();
    }
    public function create()
    {
    	return $this->chatRooms->create(Input::all());
    }
}
