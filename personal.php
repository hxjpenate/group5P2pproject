<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>个人信息</title>
		<!-- 引入重置样 式 -->
		<link rel="stylesheet" href="dist/css/reset.css">
		<!--引入bootstrap样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
		<!--引入借款信息页面样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/borrow_apply.min.css" />
		<!-- 引入字体图标库 -->
		<link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="dist/css/personal.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
		<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!-- 页头 -->
		<?php
		include_once ("./header.html");
		?>
		<section class="container">
			<div class="row">

				<div class="col-sm-3 left-list">
					<?php
					include_once ("./leftList.html");
					?>
				</div>
				<div class="col-sm-9 person_right-info">
					<div class="panel panel-default">
					  <div class="panel-heading">
			  			<div class="row">
			  				<div class="col-lg-2 col-sm-12">
								<a href="#">
									<img src="static/images/head_icon.jpg"/>
								</a>
							</div>
							<div class="col-lg-10 col-sm-12">
								<p>昵 称：源代码教育</p>
								<p>用户名：<span id="username" style="font-size: 20px; color: red;"></span></p>
								<p>最后登录时间：2016-10-25 15:30:10</p>
							</div>
			  			</div>
						
					  </div>
					  <div class="panel-body">
					    <div class="row index_money">
					    	<p class="col-lg-4">总金额 :<span>10000元</span></p>
					    	<p class="col-lg-4">可用金额 :<span>8000元</span></p>
					    	<p class="col-lg-4">冻结金额 :<span>10000元</span></p>
					    </div>
					    <div class="account">
					    	<a href="#" class="btn btn-primary btn-lg">账户充值</a>
					    	<a href="#" class="btn btn-danger btn-lg">账户提现</a>
					    </div>
					    <div class="attestation">
					   		<ul class="row">
					   			<li class="col-lg-4">
					   				<div class="bg-icon bg-name">
					   					<p>实名认证</p>
					   					<p>未认证 <a href="#">马上认证</a></p>
					   				</div>
					   				<div>
					   					<p>实名认证之后才能在平台投资</p>
					   				</div>
					   			</li>
					   			<li class="col-lg-4">
					   				<div class="bg-icon bg-phone">
					   					<p>手机认证</p>
					   					<p>已认证 <a href="#">查看</a></p>
					   				</div>
					   				<div>
					   					<p>可以收到系统操作信息,并增加使用安全性</p>
					   				</div>
					   			</li>
								<li class="col-lg-4">
					   				<div class="bg-icon bg-email">
					   					<p>邮箱认证</p>
					   					<p>已认证 <a href="#">查看</a></p>
					   				</div>
					   				<div>
					   					<p>您可以设置邮箱来接收重要信息</p>
					   				</div>
					   			</li>
					   		</ul>
					   		<ul class="row">
					   			<li class="col-lg-4">
					   				<div class="bg-icon bg-vip">
					   					<p>VIP会员</p>
					   					<p>普通用户 <a href="#">查看</a></p>
					   				</div>
					   				<div>
					   					<p>VIP会员，让你更快捷的投资</p>
					   				</div>
					   			</li>
					   			
					   		</ul>
					    	
					    </div>
					    
					  </div>
					</div>
					
				</div>

			</div>
		</section>
		<!-- 页脚 -->
		<?php
		include_once ("./footer.html");
		?>

		<!--引入jquery-->
		<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
		<!--引入bootstrap的js库-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<!--引入session验证-->
		<script src="src/js/checkSession.js"></script>
		<!-- 引入自定义工具样式 -->
		<script src="dist/js/tools.min.js"></script>
		
		
	</body>

</html>