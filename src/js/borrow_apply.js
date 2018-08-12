$(function () {
    $('#borrow-info')
        .bootstrapValidator({
            fields: {
                // 借款金额
                borrowAmount: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        },
                         //数字
                         digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                // 借款利息
                currentRate: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        },
                         //数字
                         digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                // 最小投标
                minAmount: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        },
                         //数字
                         digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                // 最大投标
                maxAmount: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        },
                         //数字
                         digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                // 投标奖金
                rewardAmount: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        },
                         //数字
                         digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                // 招标天数
                disableDays: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        },
                         //数字
                         digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                // 借款标题
                borrowTitle: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        }
                    }
                },
                // 借款描述
                description: {
                    validators: {
                        notEmpty: {
                            message: '此项必须填写'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function (e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');


            var postUrl="api/borrowAdd.php";
            var postData=$form.serialize();

            // console.log($form,bv);

            // Use Ajax to submit form data
            console.log("提交的数据",postData);
            $.post(postUrl,postData, function (result) {
                $(".modal-title").text("借款提交信息");
                console.log(result);
                if(result.isSuccess){
                    $("#modal-msg").html('<span class="glyphicon glyphicon-ok-circle"></span><span>借款提交成功</span>');
                    $("#target").html("<a href='./request_list.php?aid=1&lid=1'>借款页面</a>");
                    $("#popupModal").modal("show");
                    // 倒计时跳转
                    var num=3;
                    var timeid=setInterval(function(){
                        num--;
                        $("#count-down").text(num);
                        if(num==0){
                            clearInterval(timeid);
                            location.href="./request_list.php?aid=1&lid=1";
                        }
                    },1000);
                }else{
                    $("#modal-msg").html('<span class="glyphicon glyphicon-remove-circle"></span> <span>借款提交失败</span>');
                    $(".modal-footer p").text("借款提交失败");
                    $("#popupModal").modal("show");
                }
            },"json");
        });




    
});