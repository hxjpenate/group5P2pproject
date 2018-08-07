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
    <link rel="stylesheet" type="text/css" href="dist/css/register.min.css" />
    <!-- 引入字体图标库 -->
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--引入validator表单验证css库-->
    <link rel="stylesheet" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css" />
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
        	
        	<!--注册界面面板-->
		<div class="panel panel-default">
			<!--标题-->
			  <div class="panel-heading">
			      <h3 class="panel-title">用户注册</h3>
			  </div>
			  <!--主要内容-->
			  <div class="panel-body">
			       <!--表单部分-->
				<form  id="regFrom" method="post">
					
			  <div class="form-group">
			    <label for="username">用户姓名</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="请输入您的用户名">
			  </div>
			  
			    <!--密码-->
				  <div class="form-group">
				    <label for="password1">输入密码</label>
				    <input type="password" class="form-control" id="password1" name="password1" placeholder="请您输入密码">
				  </div>
			    <!--确认密码-->
				  <div class="form-group">
				    <label for="password2">确认密码</label>
				    <input type="password" class="form-control" id="password2" name="password2" placeholder="请您再次输入密码">
				  </div>
				  
				  
			    <!--姓名-->
				  <div class="form-group">
				    <label for="realname">真实姓名</label>
				    <input type="text" class="form-control" id="realname" name="realname" placeholder="请输入您的姓名">
				  </div>
				 <!--手机号码-->
				  <div class="form-group">
				    <label for="mobile">手机号码</label>
				    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="请输入您的手机号码">
				  </div>
			    <!--性别-->
				  <div class="form-group">
				    <label for="tel">用户性别</label>
				    <label class="radio-inline">
					  <input type="radio" name="sex" checked="checked" value="男">男
					</label>
					<label class="radio-inline">
					  <input type="radio" name="sex"  value="女">女
				    </label>
				  </div>
				  <!--协议签订-->
                <div class="form-group">
				    <label>
				      <input type="checkbox" name="isAgree">我已阅读并同意遵守相关协议
				    </label>
				</div>
				  <!--提交按钮-->
				<button type="submit" class="btn btn-danger">注册</button>
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
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"charset="utf-8"></script>
    <!--引入validator js库文件-->
    <script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
    <!-- 引入自定义工具样式 -->
    <script src="dist/js/tools.min.js"></script>
    <!--引入regForm js文件库-->
    <script src="src/js/regForm.js"></script>
    
<!--蒙层效果 (模态框)-->  


<!-- Modal -->
<div class="modal fade" id="regmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!--模态框标题-->
        <h4 class="modal-title"></h4>
      </div>
      <!--模态框内容-->
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
      	<!--关闭按钮-->
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
    
    
</body>

</html>