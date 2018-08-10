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
    <!--引入validator表单验证css库-->
    <link rel="stylesheet" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css" />
    <!--引入借款信息页面样式-->
    <link rel="stylesheet" type="text/css" href="dist/css/borrow_apply.min.css" />
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
                        <h3>信用借款</h3>
                        <p>授信额度：
                            <span>2000</span>     可借金额：
                            <span>2000</span>
                        </p>
                    </div>
                    <h3>借款信息
                        <span class="label label-primary">信用标</span>
                    </h3>
                    <!-- 表单 -->
                    <form class="form-horizontal" id="borrow-info" method="POST">
                        <!-- 相关费用悬浮框 -->
                        <div id="correlative">
                            <h4>相关费用</h4>
                            <p>利息
                                <span>--</span>
                            </p>
                            <p>奖金
                                <span>--</span>
                            </p>
                            <p>管理费
                                <span>--</span>
                            </p>
                        </div>
                        <!-- 借款金额 -->
                        <div class="form-group row">
                            <label for="money" class="col-sm-3 control-label">借款金额</label>
                            <div class="input-group col-sm-3">
                                <input type="text" class="form-control" name="money" id="money">
                                <div class="input-group-addon">元</div>
                            </div>
                        </div>
                        <!-- 借款利息 -->
                        <div class="form-group row">
                            <label for="interest" class="col-sm-3 control-label">借款利息</label>
                            <div class="input-group col-sm-3">
                                <input type="text" class="form-control" name="interest" id="interest">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                        <!-- 借款期限 -->
                        <div class="form-group row">
                            <label for="deadline" class="col-sm-3 control-label">借款期限</label>
                            <div class="input-group col-sm-3">
                                <select class="form-control" name="deadline" id="deadline">
                                    <option>1</option>
                                    <option>3</option>
                                    <option>6</option>
                                    <option>9</option>
                                    <option selected>12</option>
                                    <option>24</option>
                                </select>
                                <div class="input-group-addon">月</div>
                            </div>
                        </div>
                        <!-- 还款方式 -->
                        <div class="form-group row">
                            <label for="way" class="col-sm-3 control-label">还款方式</label>

                            <label class="radio-inline">
                                <input type="radio" name="way" id="way" value="按月分期"> 按月分期
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="way" id="way" value="按月到期"> 按月到期
                            </label>

                        </div>

                        <!-- 最小投标 -->
                        <div class="form-group row">
                            <label for="min-money" class="col-sm-3 control-label">最小投标</label>
                            <div class="input-group col-sm-3">
                                <input type="text" class="form-control" name="min-money" id="min-money">
                                <div class="input-group-addon">元</div>
                            </div>
                        </div>
                        <!-- 投标奖金 -->
                        <div class="form-group row">
                            <label for="bonus" class="col-sm-3 control-label">投标奖金</label>
                            <div class="input-group col-sm-3">
                                <input type="text" class="form-control" name="bonus" id="bonus">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                        <!-- 招标天数 -->
                        <div class="form-group row">
                            <label for="days" class="col-sm-3 control-label">招标天数</label>
                            <div class="input-group col-sm-3">
                                <input type="text" class="form-control" name="days" id="days">
                                <div class="input-group-addon">天</div>
                            </div>
                        </div>
                        <!-- 借款标题 -->
                        <div class="form-group row">
                            <label for="title" class="col-sm-3 control-label">借款标题</label>
                            <div class="input-group col-sm-6 col-xs-12">
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                        <!-- 借款描述 -->
                        <div class="form-group row">
                            <label for="describe" class="col-sm-3 control-label">借款描述</label>
                            <div class="input-group col-sm-6 col-xs-12">
                                <textarea name="describe" id="describe" rows="4"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-sm-offset-3">提交申请</button>

                    </form>

                </div>


            </div>
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
            <!--引入session验证-->
			<script src="src/js/checkSession.js"></script>
            <!--引入validator js库文件-->
            <script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
            <!-- 引入本页的js库 -->
            <script src="src/js/borrow_apply.js" type="text/javascript" charset="utf-8"></script>
            <!-- 引入自定义工具样式 -->
            <script src="dist/js/tools.min.js"></script>
            <script src="src/js/toggle.js"></script>
</body>

</html>