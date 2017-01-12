'use strict';

angular.module('chatApp')
.factory('ChatRoom',function(WebService){
	return {
		getAll:function(){
			return WebService.get('caht-rooms');
		},
		show:function(id){
			return WebService.get('chat-rooms/'+id);
		},
		getAll:function(chatRoom){
			return WebService.post('caht-rooms',chatRoom);
		}
	}
});