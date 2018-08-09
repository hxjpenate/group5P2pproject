$(document).ready(function () {
    $('#loginForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '用户名须在6-30位之间'
                        }
                    }
                },
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 12,
                            message: '密码最少12位数字字母'
                        },
                        regexp: {
                            regexp: /^[A-z]+[0-9]+$/i,
                            message: '密码只能由字母开始和数字结束'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function (e) {
            // Prevent form submission
            e.preventDefault();
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // 使用ajax发送提交表单的数据请求
            var postUrl="api/checkLogin.W.php";
            var postData=$form.serialize();

        
            $.post(postUrl,postData, function (result) {
                console.log(result);
                if(result.isSuccess){
                    $("#modal-msg").html('<span class="glyphicon glyphicon-ok-circle"></span><span>登陆成功</span>');
                    $("#target").html("<a href='./index.php'>首页</a>");
                    $("#popupModal").modal("show");
                    // 倒计时跳转
                    var num=3;
                    var timeid=setInterval(function(){
                        num--;
                        $("#count-down").text(num);
                        if(num==0){
                            clearInterval(timeid);
                            location.href="./index.php";
                        }
                    },1000);
                }else{
                    $("#modal-msg").html('<span class="glyphicon glyphicon-remove-circle"></span> <span>登陆失败</span>');
                    $(".modal-footer p").text("用户或者密码错误");
                    $("#popupModal").modal("show");
                }
            }, 'json');
        });
});