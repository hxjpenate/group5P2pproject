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
    <link rel="stylesheet" type="text/css" href="dist/css/request_list.min.css" /> 
    <link rel="stylesheet" type="text/css" href="lib/JqueryPagination/jquery.pagination.css"/>
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
                    <button id="toggle" class="btn btn-primary btn-xs">显示列表</button>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">
                            <h4>借款项目</h4>
                        </div>
                        <div class="panel-body">
                            <!-- Table -->

                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>标题</th>
                                        <th class="hide420">时间</th>
                                        <th>借款金额(元)</th>
                                        <th class="hide420">期限</th>
                                        <th>利率</th>
                                        <th class="hide420">审核状态</th>
                                    </tr>
                                </thead>

                                <tbody id="showTmpl">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div style="text-align: center;">
		                <div id="page" class="m-pagination"></div>
			        </div>
                </div>
            </div>
            
        </section>
        <!-- 页脚 -->
        <?php
            include_once("./footer.html");
        ?>
            <script type="text/html" id="requestTmpl">
                <tr>
                    <td>${borrowTitle}
                        <span class="btn btn-danger btn-xs">信</span>
                    </td>
                    <td class="hide420">${borrowDate}</td>
                    <td>${borrowAmount}</td>
                    <td class="hide420">${monthes2Return}</td>
                    <td>${currentRate}</td>
                    <td class="hide420">${isVerify}</td>
                </tr>
            </script>

            <!--引入jquery-->
            <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
            <!--引入jq的分页插件-->
            <script src="lib/JqueryPagination/jquery.pagination-1.2.7.min.js" type="text/javascript" charset="utf-8"></script>
            <!--引入jq的tmpl模板-->
            <script src="lib/jquery/jquery.tmpl.js" type="text/javascript" charset="utf-8"></script>
            <!--引入bootstrap的js库-->
            <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
            <!--引入session验证-->
            <script src="src/js/checkSession.js"></script>
            <!-- 引入自定义工具样式 -->
            <script src="dist/js/tools.min.js"></script>
            <script src="src/js/toggle.js"></script>
            <script>
                // $.get("api/request.php", function (borrowDate) {
                //     console.log("返回的借款数据", borrowDate);
                //     for (const i of borrowDate) {
                //         if (i.isVerify == 0) {
                //             i.isVerify = "未通过";
                //         } else {
                //             i.isVerify = "已通过";
                //         }
                //     }
                //     //tmpl模板渲染    
                //     $("#requestTmpl").tmpl(borrowDate).appendTo($("#showTmpl"));
                // }, "json");


                //  $("#page").page({
                //     debug: false,
                //     showInfo: false,
                //     showJump: true,
                //     showPageSizes: true,
                //     remote: {
                //         url: 'api/request.php',
                //         success: function (borrowDate) {
                //             console.log(borrowDate);
                //             for (const i of borrowDate.data) {
                //                 if (i.isVerify == 0) {
                //                     i.isVerify = "未通过";
                //                 } else {
                //                     i.isVerify = "已通过";
                //                 }
                //             }
                //             //tmpl模板渲染    
                //             $("#requestTmpl").tmpl(borrowDate.data).appendTo($("#showTmpl"));
                //         }
                //     }
                // });

                // $("#page").on("pageClicked", function (event, pageIndex) {
                //     $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
                // }).on('jumpClicked', function (event, pageIndex) {
                //     $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
                // }).on('pageSizeChanged', function (event, pageSize) {
                //     $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
                // });

                //分页插件的参数配置
                $("#page").page({
                    debug: false,
                    showInfo: false,
                    showJump: true,
                    pageSize: 5, //自定义每页条数
                    showPageSizes: true,
                    //远程请求的地址配置
                    remote: {
                        url: 'api/request.php',
                        success: function (borrowDate) {
                            console.log(borrowDate);
                            for (const i of borrowDate.data) {
                                if (i.isVerify == 0) {
                                    i.isVerify = "未通过";
                                } else {
                                    i.isVerify = "已通过";
                                }
                            }
                            //tmpl模板渲染  

                            var htmlStr=$("#requestTmpl").tmpl(borrowDate.data);
		    		
                            $("#showTmpl").html(htmlStr);
                        }
                    }
                });

                
                $("#page").on("pageClicked", function (event, pageIndex) {
                    //单击页面的事件
                    //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
                }).on('jumpClicked', function (event, pageIndex) {
                    //跳转页面的事件
                    //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
                }).on('pageSizeChanged', function (event, pageSize) {
                    //修改每页大小的事件
                    //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
                });
            </script>
</body>

</html>