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
    <!--引入借款信息页面样式-->
    <link rel="stylesheet" type="text/css" href="dist/css/borrow_apply.min.css" />
    <!--引入完善信息页面样式-->
    <link rel="stylesheet" type="text/css" href="dist/css/userInfo.min.css" />
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
        <section class="container">
            <div class="row">

                <div class="col-sm-3 left-list">
                    <?php
                    include_once("./leftList.html");
                    ?>
                </div>
                <div class="col-sm-9 user_right-info">
                	<div class="panel panel-default">
					  <div class="panel-heading"><h4>个人信息完善</h4></div>
					  <div class="panel-body">
					    <form class="form-horizontal">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">用户账户:</label>
						    <div class="col-sm-10">
								<span >xiaoqiang</span>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">真实姓名:</label>
						    <div class="col-sm-10">
								<span >小强</span>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">证件号码:</label>
						    <div class="col-sm-10">
								<span >512***********4646</span>
						    </div>
						  </div>
						   <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">手机号码:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="phoneNum" placeholder="186****3272">
						    </div>
						  </div>
						   <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label" >联系电话:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="tel" placeholder="028-****5778">
						    </div>
						  </div>
						  
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">个人学历:</label>
						    <div class="col-sm-10">
								<select class="form-control" name="education">
								  <option>小学</option>
								  <option>初中</option>
								  <option>高中</option>
								  <option>专科</option>
								  <option>本科</option>
								  <option>研究生</option>
								  <option>博士</option>
								</select>
						    </div>
						  </div>
						  
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">个人收入:</label>
						    <div class="col-sm-10">
								<select class="form-control" name="income">
								  <option>1000元以下</option>
								  <option>3000元</option>
								  <option>5000元</option>
								  <option>8000元</option>
								  <option>10000元以上</option>
								</select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label" >联系地址:</label>
						    <div class="col-sm-10 address">
						      <input type="text" class="form-control" name="address" placeholder="xx省xx市xx区xx街道xx号" >
						    </div>
						  </div>
						  
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-danger">保存数据</button>
						    </div>
						  </div>
						</form>
					  </div>
					</div>
                </div>

            </div>
        </section>
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