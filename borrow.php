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
    <!--引入借款页面样式-->
    <link rel="stylesheet" type="text/css" href="dist/css/borrow.min.css" />
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
                <div class="panel panel-primary col-sm-4">
                    <div class="panel-heading">
                        <h3 class="panel-title">信用贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可借金额 <i>¥ 2,000.00</i></p>
                        <a href="#">申请条件</a>
                        <p>仅限成都地区</p>
                        <div>填写基本资料</div>
                        <div>身份认证</div>
                        <div>视频认证</div>
                        <a type="button" href="borrow_apply.php" class="btn btn-primary btn-sm">立即申请</a>
                    </div>
                </div>
                <div class="panel panel-primary col-sm-4">
                    <div class="panel-heading">
                        <h3 class="panel-title">车易贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可借金额 <i>¥ 2,000.00</i></p>
                        <a href="#">申请条件</a>
                        <p>仅限成都地区</p>
                        <div>填写基本资料</div>
                        <div>身份认证</div>
                        <div>视频认证</div>
                        <button type="button" class="btn btn-primary btn-sm">立即申请</button>
                    </div>
                </div>
                <div class="panel panel-primary col-sm-4">
                    <div class="panel-heading">
                        <h3 class="panel-title">房易贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可借金额 <i>¥ 15,000.00</i></p>
                        <a href="#">申请条件</a>
                        <p>仅限成都地区</p>
                        <div>填写基本资料</div>
                        <div>身份认证</div>
                        <div>视频认证</div>
                        <button type="button" class="btn btn-primary btn-sm">立即申请</button>
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