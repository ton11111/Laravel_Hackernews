
var data={"city":"abc"};
$.ajax({
 	type: 'POST',
	url:"/test",
    data:JSON.stringify(data),  //转化字符串 
    contentType: 'application/json; charset=UTF-8',
    success:function(data){ //成功的话，得到消息
        addselect(data);
    }
});


