
//头部导航栏的修改思路   
//根据用户的登录状态 显示相应的导航模块  

$(function(){
	//发起ajax到后台验证用户的登录状态
	
	$.get('api/checkSession.php',function(res){
		
		console.log("头部验证session",res)
		
		var htmlStr;
		
		if(res.isSuccess){
			//如果验证成功   显示 用户名  充值 注销等导航栏
			
			htmlStr=`<li>
                    <a href="personal.php"><i class="fa fa-sign-in" aria-hidden="true"></i>${res.username}</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i>赶快充值</a>
                </li>
                <li>
                    <a href="/api/loginout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>注销</a>
                </li>`
			
			$("#homepage").after(htmlStr);
			
			
		}
		else{
			
			htmlStr=`<li>
                    <a href="login.php"><i class="fa fa-user-circle" aria-hidden="true"></i>登录</a>
                </li>
                <li>
                    <a href="register.php"><i class="fa fa-sign-in" aria-hidden="true"></i>注册</a>
                </li>`
			$("#homepage").after(htmlStr);
		}
		
	},'json')



	// 主导航栏的动态激活状态
	var reqPath=location.href;
	
	var mid=reqPath.split("=")[1];

	$("#main_Menu ul li").eq(mid).addClass("active").siblings().removeClass("active");
	
		
})