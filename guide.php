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
	<!--引入bootstrapValidator的核心样式-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css"/>
    <!-- 引入字体图标库 -->
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- 引入 -->
    <link rel="stylesheet" href="dist/css/about.min.css">
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
    <!--登录界面面板-->
    <section class="container">
        <h3>新手指南</h3>
    </section>
        	      
    <!-- 页脚 -->
    <?php
    include_once("./footer.html");
	?>
	<?php
    include_once("./modal.html");
    ?>

    <!--引入jquery-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrap的js库-->
	<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<!--引入bootstrapValidator的插件js库-->
    <script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- 引入自定义工具样式 -->
	<script src="dist/js/tools.min.js"></script>

   
    
</body>

</html>