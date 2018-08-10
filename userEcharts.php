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
    <link rel="stylesheet" type="text/css" href="dist/css/userEcharts.min.css" />
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
        <!--借款信息页面的主题内容 -->
        <section class="container">
            <div class="row" id="mainBox">
                <!-- 左边栏的列表 -->
                <div class="col-sm-3 col-xs-6 left-list">
                    <?php
                        include_once("./leftList.html");
                        ?>
                </div>
                <!-- 右边的信息及表单 -->
                <div class="col-sm-9 col-xs-12 right-info">
                <button  id="toggle" class="btn btn-primary btn-xs">显示列表</button>
                    <div class="title">
                        <h2>用户学历统计</h2>
                    </div>
                    <h3>图形表单
                        <small>
                            <span class="label label-primary">饼状图</span>
                        </small>
                    </h3>
                    <!-- Echarts图形表 -->
                    <div id="main" style="height:500px"></div>
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
            <script src="src/js/toggle.js"></script>
            <!-- 引入Echarts库 -->
            <script src="lib/echarts/echarts-all.js"></script>

            <script src="src/js/userEcharts.js"></script>



</html>