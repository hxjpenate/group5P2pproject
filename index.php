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
    <link rel="stylesheet" type="text/css" href="dist/css/index.min.css" />
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


        <!-- 轮播图 -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="static/images/banner01.jpg" alt="这是banner1">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="static/images/banner02.jpg" alt="这是banner2">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--三大特色-->
        <section class="container" id="three-equities">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                </div>
            </div>
        </section>
        <!--投资信息列表-->
        <section class="container" id="invest-list">
            <div class="title">
                <h3>进行中的借款</h3>
                <p>
                    <a href="#">进入投资列表</a>
                </p>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>借款人</th>
                        <th class="hide640">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th class="hide640">还款方式</th>
                        <th class="hide400">进度</th>
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
                        <td class="hide400">78.00%</td>
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
                        <td class="hide400">100.00%</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-xs">查看</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!--文章信息-->
        <article class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="title">
                        <h3>企业最新资讯</h3>
                        <p>
                            <a href="#">更多资讯</a>
                        </p>
                    </div>
                    <ul class="article-info">
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="title">
                        <h3>用户反馈</h3>
                        <p>
                            <a href="#">更多资讯</a>
                        </p>
                    </div>
                    <ul class="article-info">
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="title">
                        <h3>理财经验</h3>
                        <p>
                            <a href="#">更多资讯</a>
                        </p>
                    </div>
                    <ul class="article-info">
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="title">
                        <h3>活动分享</h3>
                        <p>
                            <a href="#">更多资讯</a>
                        </p>
                    </div>
                    <ul class="article-info">
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">央视力挺互联网金融
                                <span>发表日期：2015-03-23</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>

        </article>

        <!-- 页脚 -->
        <?php
            include_once("./footer.html");
        ?>


            <!--引入jquery-->
            <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
            <!--引入bootstrap的js库-->
            <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
            <!-- 引入自定义工具样式 -->
            <script src="src/js/tools.js"></script>
</body>

</html>