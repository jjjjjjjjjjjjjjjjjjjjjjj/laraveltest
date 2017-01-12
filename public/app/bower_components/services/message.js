'use strict';

angular.module('chatApp')

.factory('ChatRoom',function(WebService){
	
	return {
		getByChatRoom:function(chatRoom){
			return WebService.get('messages/'+chatRoom.id);
		},
		createInChatRoom:function(ChatRoom){
			return WebService.post('messages/'+chatRoom.id);
		},
		getUpdates:function(chatRoom,LastMessage){
			return WebService.post('messages/'+lastMessage.id+'/'+chatRoom.id);
		}

	}
});