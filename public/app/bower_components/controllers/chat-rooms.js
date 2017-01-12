'use strict';

angular.module('chatApp')
.controller('ChatRoomsCtrl',function($scope,ChatRoom,$location)){
	
	var chatRoomsloaded=function(chatRooms){
		$scope.chatRooms=chatRooms;

	}	
	
	var handleErrors=function(response){
		console.error(response);
	}
	$scope.selectChatRoom=function(chatRoom){
		$location.path('/#/chat-room/'+ChatRoom.id ); 
	}
	$scope.createChatRoom=function(ChatRoom){
		ChatRoom.create(chatRoom).then(selectChatRoom);
	}


	 ChatRoom.getAll().
	 .then(chatRoomsloaded)
	 .catch(handleErrors);

});
