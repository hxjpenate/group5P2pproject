$(function () {
    // //验证的表单id
    // $('#borrow-info')
    //     .bootstrapValidator({
    //         //验证的字段
    //         fields: {
                               
    //             way: {
    //                 validators: {
                        
    //                 }
    //             }
    //         }
    //     })
    //     .on('success.form.bv', function (e) {
    //         //阻止浏览器的默认行为
    //         e.preventDefault();
    //         //获取目标表单
    //         var $form = $(e.target);
    //         //得到表单的实例
    //         var bv = $form.data('bootstrapValidator');
    //         //通过ajax提交数据
    //         var postUrl = "/api/userAdd.php";
    //         var postData = $form.serialize();

    //         //2.先定义好模态框的标题  
    //         $("#regmodal .modal-title").text("用户注册提示");
    //         $.post(postUrl, postData, function (result) {

    //             if (result.isSuccess) {
    //                 //console.log('返回的结果',result.msg)
    //                 //1.注册成功后,显示模态框效果
    //                 //3.定义注册成功的内容
    //                 $("#regmodal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>" + result.msg + "<span id='num'>5</span>秒后跳转....");

    //                 //4.展示模态框
    //                 $('#regmodal').modal('show');
    //                 var num = 5;
    //                 var timeid = setInterval(function () {
    //                     num--;
    //                     $("#num").text(num);
    //                     if (num == 0) {
    //                         clearInterval('timeid')
    //                         location.href = "login.php";
    //                     }

    //                 }, 1000)
    //             } else {
    //                 $("#regmodal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>" + result.msg);
    //                 $("#regmodal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>" + result.msg);
    //                 $('#regmodal').modal('show');
    //             }

    //         }, 'json');
    //     });



    // $("#popupModal").modal("show");
});