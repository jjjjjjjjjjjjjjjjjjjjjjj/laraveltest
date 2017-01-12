'use strict';

angular.module('chatApp')
.controller('ChatRoomCtrl',function($scope,Message,ChatRoom,$routeParams){
   	var chatRoomLoaded=function(chatRoom){
   		$scope.chatRoom=chatRoom;
   		return chatRoom;
   	}
   	var getMessageInRoom=function(chatRoom){
   		$scope.chatRoom=chatRoom;
   		return chatRoom;
   	}
   	var MessagesLoaded=function(chatRoom){
   		$scope.chatRoom=chatRoom;
   		return chatRoom;
   	}
   	var handleErrors=function(chatRoom){
   		$scope.chatRoom=chatRoom;
   		return chatRoom;
   	}
    $scope.createMessage=function(messsage)
    {
    
    } 

    ChatRoom.show($routeParams.id)
   .then(chatRoomLoaded)
   .then(getMessageInRoom)
   .then(MessagesLoaded)
   .catch(handleErrors);

});