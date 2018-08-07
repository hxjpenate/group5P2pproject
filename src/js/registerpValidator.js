$(document).ready(function () {
    $('#registerpValidator')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                usename: {
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
                },
                password2: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        identical: {
                            field: 'password1',
                            message: '密码不一致'
                        }

                    }
                },
                tel: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        regexp: {
                            regexp: /^[1][3,4,5,6,7,8,9][0-9]{9}$/i,
                            message: '手机号码格式不正确'
                        }

                    }
                },
                read:{
                    validators: {
                        notEmpty: {
                            message: '请仔细阅读相关协议，同意后方可注册'
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

            // console.log($form,bv);

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function (result) {
                console.log(result);
            }, 'json');
        });
});