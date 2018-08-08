
//发起ajax请求验证session 信息是否存在

$(function(){
	
	$.get("api/checkSession.php",function(res){
		
		//根据后端返回的数据处理前端的业务逻辑
		if(res.isSuccess){
			$("#username").text(res.username)
		}
		else{
			alert(res.msg)
			location.href="login.php"
		}
		
	},"json")
	
	
})
