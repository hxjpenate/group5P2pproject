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
    <!--引入借款中心页面样式-->
    <link rel="stylesheet" type="text/css" href="dist/css/request_list.min.css" />
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
                <div class="col-sm-9 req_right-info">
                	<div class="panel panel-default">
					  <!-- Default panel contents -->
					  <div class="panel-heading"><h4>借款项目</h4></div>
					  <div class="panel-body">
					  <!-- Table -->
					  	
					    <table class="table table-hover table-striped">
					    	<thead>
					    		<tr>
						    		<th>标题</th>
						    		<th>时间</th>
						    		<th>借款金额(元)</th>
						    		<th>期限</th>
						    		<th>利率</th>
						    		<th>状态</th>
					    		</tr>		
					    	</thead>				
					    		    
					    	<tbody>
					    		<tr>
						    		<td>江湖救急<span class="btn btn-danger btn-xs">信</span></td>
						    		<td>2016-01-02</td>
						    		<td>2000</td>
						    		<td>12月</td>
						    		<td>12%</td>
						    		<td>
						    			<span class="text-muted">待发布</span>
						    			<span class="text-success">招标中</span>
						    			<span class="text-success">满标</span>
						    			<span class="text-success">未审核</span>
						    			<span class="text-success">还款中</span>
						    			<span class="text-danger">招标拒绝</span>
						    		</td>
					    		</tr>
					    	</tbody>
					  	</table>
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
            <!--引入session验证-->
			<script src="src/js/checkSession.js"></script>
            <!-- 引入自定义工具样式 -->
            <script src="dist/js/tools.min.js"></script>
</body>

</html>