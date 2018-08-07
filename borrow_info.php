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
    <!--引入个人中心页面样式-->
    <link rel="stylesheet" type="text/css" href="dist/css/borrow_info.min.css" />
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
        <!--个人中心页面的主题内容 -->
        <section class="container">
            <!-- 个人信息 -->
            <div class="row sin-info">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">借款人</div>
                        <div class="panel-body">
                            <img src="static/images/head_icon.jpg" alt="头像">
                            <a href="#">
                                <span>埃利斯</span>
                            </a>
                            <p>籍贯： 四川 - 成都</p>
                            <p>专职客服：
                                <a href="#">码妹妹</a>
                            </p>
                            <p>认证信息：
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3>埃利斯借款
                        <small>
                            <span class="label label-primary">信</span>
                        </small>
                    </h3>
                    <div class="row">
                        <p class="col-sm-3">
                            借款金额
                        </p>
                        <p class="col-sm-9">
                            2,000.00
                        </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">
                            年化利率
                        </p>
                        <p class="col-sm-9">
                            10.00%
                        </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">
                            借款期限
                        </p>
                        <p class="col-sm-9">
                            3月
                        </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">
                            投标奖励
                        </p>
                        <p class="col-sm-9">
                            0.00
                        </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">
                            还款方式
                        </p>
                        <p class="col-sm-9">
                            按月分期还款
                        </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">
                            最小投标
                        </p>
                        <p class="col-sm-9">
                            20.00
                        </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">
                            剩余时间
                        </p>
                        <p class="col-sm-9">

                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <p class="col-sm-6">投标总数</p>
                        <p class="col-sm-6">2</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-6">还需金额</p>
                        <p class="col-sm-6">0.00元</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-6">投标进度</p>
                        <p class="col-sm-6"></p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <h4>还款中</h4>
                </div>
            </div>
            <!-- 借款人信息 -->
            <div class="panel panel-default borrower-info">
                <div class="panel-heading">借款人信息</div>
                <div class="panel-body">
                    <div class="row">
                        <p class="col-sm-1">注册时间</p>
                        <p class="col-sm-2">2015-03-30</p>
                        <p class="col-sm-1">借款额度</p>
                        <p class="col-sm-2">2000</p>
                        <p class="col-sm-1">性别</p>
                        <p class="col-sm-2">男</p>
                        <p class="col-sm-1">年龄</p>
                        <p class="col-sm-2">25</p>
                        <p class="col-sm-1">文化程度</p>
                        <p class="col-sm-2">硕士研究生</p>
                        <p class="col-sm-1">每月收入</p>
                        <p class="col-sm-2">3000-4999</p>
                    </div>
                </div>
            </div>
            <!-- 审核认证信息 -->
            <div class="panel panel-default approve-info">
                <div class="panel-heading">审核认证信息</div>
                <div class="panel-body">
                    <div class="row">
                        <p class="col-sm-2">认证时态度</p>
                        <p class="col-sm-1">优</p>
                        <p class="col-sm-2">信贷知识掌握情况</p>
                        <p class="col-sm-1">优</p>
                        <p class="col-sm-2">借款感言</p>
                        <p class="col-sm-4">给我2000度过难关</p>
                        <p class="col-sm-2">审核员认证意见</p>
                        <p class="col-sm-10">啊啊啊啊啊</p>
                    </div>
                </div>
            </div>
            <!-- 材料信息 -->
            <div class="panel panel-default">
                <div class="panel-heading">材料信息</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>材料类型</th>
                                <th>材料数量</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>本人身份证</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 还款情况 -->
            <div class="panel panel-default">
                <div class="panel-heading">还款情况</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>还款状态</th>
                                <th>最近一周</th>
                                <th class="hide420">最近1月</th>
                                <th class="hide420">最近6月</th>
                                <th class="hide420">6个月前</th>
                                <th>总计[?]</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>提前还款</td>
                                <td>0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>准时还款</td>
                                <td>0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>逾期已还</td>
                                <td>0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>逾期未还</td>
                                <td>0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td class="hide420">0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 投标记录 -->
            <div class="panel panel-default">
                <div class="panel-heading">投标记录</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>投标人</th>
                                <th>年利率</th>
                                <th>有效金额(¥)</th>
                                <th class="hide420">投标时间</th>
                                <th class="hide420">类型</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>si*****</td>
                                <td>10%</td>
                                <td>1,000.00</td>
                                <td class="hide420">2016-05-11 06:42:11</td>
                                <td class="hide420">手动投标</td>
                            </tr>
                            <tr>
                                <td>xia*****</td>
                                <td>10%</td>
                                <td>1,000.00</td>
                                <td class="hide420">2016-05-12 13:44:01</td>
                                <td class="hide420">手动投标</td>
                            </tr>
                        </tbody>
                    </table>
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