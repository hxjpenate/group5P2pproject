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
    <link rel="stylesheet" type="text/css" href="dist/css/invest.min.css" />
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
        	<!--投资列表展示-->
        	<div class="panel panel-default">
		  <!--标题-->
		  <div class="panel-heading">
		      <h3 class="panel-title">投资列表</h3>
		  </div>
		  <!--主要内容-->
		  <div class="panel-body">
		     <!--标的状态-->
		      <p>标的状态</p>
		  	  <div class="btn-group" role="group" aria-label="">
	              <button type="button" class="btn btn-default">全部</button>
				  <button type="button" class="btn btn-default">招标中</button>
				  <button type="button" class="btn btn-default">还款中</button>
			</div>
			
			<!--列表-->
			
			<table class="table table-hover">
                <thead>
                    <tr>
                        <th>借款人</th>
                        <th class="hide640">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th class="hide640">还款方式</th>
                        <th class="hide640">进度</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>张三</td>
                        <td class="hide640">给我2000度过难关</td>
                        <td>10.00%</td>
                        <td>2,000.00</td>
                        <td class="hide640">按月分期还款</td>
                        <td class="hide640">78.00%</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-xs">查看</button>
                        </td>
                    </tr>
                    <tr>
                        <td>王五</td>
                        <td class="hide640">江湖救急，借100吃饭</td>
                        <td>12.00%n</td>
                        <td>100.00</td>
                        <td class="hide640">按月到期还款</td>
                        <td class="hide640">100.00%</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-xs">查看</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            
            <!--分页-->
             <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
		  	  
		  	</div>
		  	
		  	
		  
			 

    </div>
    
    
    
    <!-- 页脚 -->
    <?php
    include_once("./footer.html");
    ?>

    <!--引入jquery-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrap的js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"charset="utf-8">        </script>
    <!-- 引入自定义工具样式 -->
    <script src="dist/js/tools.min.js"></script>
</body>

</html>