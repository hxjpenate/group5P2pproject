<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 引入重置样式 -->
    <link rel="stylesheet" href="dist/css/reset.css">
    <!--引入bootstrap样式-->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
    <!--引入首页样式-->
    <link rel="stylesheet" type="text/css" href="dist/css/login.min.css" />
    <!-- 引入字体图标库 -->
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--兼容低版本的浏览器-->
    <!--[if lt IE 9]>
        <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- 页头 -->
    <?php
    include_once("./header.html");
    ?>
    <div class="container">
        	
	<!--登录界面面板-->
    <div class="panel panel-default">
		  <!--标题-->
		  <div class="panel-heading">
		      <h3 class="panel-title">用户登录</h3>
		  </div>
		  <!--主要内容-->
		  <div class="panel-body">
		       <!--表单部分-->
			<form>
				
				<!--小猫图片-->
				<div class="mxy">
                <img class="img-responsive" src="static/images/mxy-01.png" alt="">
			</div>
				
		  <div class="form-group">
		    <label for="usename">
		    	<span class="fa fa-user-circle">&nbsp;用户姓名</span>	
		    </label>
			 <input type="text" class="form-control" id="usename" placeholder="请输入您的用户名">
		  </div>
        <!--密码-->
		  <div class="form-group">
			<label for="password1">
		    	<span class="fa fa-key">&nbsp;输入密码</span>
			</label>
		    <input type="password" class="form-control" id="password1" placeholder="请您输入密码">
		  </div>
		  
		  <!--忘记密码?-->
		  <div class="tool">
	        <label for="remember">
	          <input type="checkbox" id="remember" checked="">
	          <span>记住用户名</span>
	        </label>
	        <a class="forget" href="#">忘记密码</a>
	      </div>
		  
	     <!--提交按钮-->
		<button type="submit" class="btn btn-danger">登录</button>
	</form>
	       
		</div>	
	</div>
   </div>
    
    
    
    <!-- 页脚 -->
    <?php
    include_once("./footer.html");
    ?>

    <!--引入jquery-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrap的js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- 引入自定义工具样式 -->
    <script src="dist/js/tools.min.js"></script>
</body>

</html>