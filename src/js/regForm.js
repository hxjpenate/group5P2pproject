
//注册表单验证

//页面加载完成    目的: js可以写在任何位置
$(function(){
  //验证的表单id
   $('#regFrom')
        .bootstrapValidator({
            //验证状态显示的图标
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            //验证的字段
            fields: {
                usename: {
                  
                    validators: {
                    	//非空验证
                        notEmpty: {
                            message: '用户名必填!'
                        },
                        //长度验证
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6-18位'
                        },
                       /* regexp: {
					         regexp: /^[A-Z\s]+$/i,
					         message: '名字只能由字母字符和空格组成。'
			            }*/
                        
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空!'
                        },
                        stringLength: {
				          min: 6,
				          message: '密码长度至少6位'
				        },
                    }
                },
                //确认密码验证
                password2: {
                    validators: {
                        notEmpty: {
                            message: '请再次输入密码!'
                        },
                        //确认密码
                        identical: {
	                        field: 'password1',
	                        message: '两次密码输入不一致!'
	                    },
                    }
                },
                
                //真实姓名验证
                realname: {
              		validators: {
                    	//非空验证
                        notEmpty: {
                            message: '请填写真实姓名!'
                        },   
                    }
                },
                
                //手机号码验证
                tel: {
              		validators: {
                    	//非空验证
                        notEmpty: {
                            message: '请填写您的手机号码!'
                        }, 
                        regexp: {
					          regexp: /^1[34578]\d{9}$/,
					          message: '请输入正确的号码格式  例:13x-xxxx-xxxx'
	                    }
                    }
                },
                
                //是否同意协议的验证
                isAgree:{
                	validators: {
                    	//非空验证
                        notEmpty: {
                            message: '请仔细阅读并同意相关协议规定!'
                        }
                    }
                }
                
                
                
            }
        })
        .on('success.form.bv', function(e) {
            //阻止浏览器的默认行为
            e.preventDefault();
           //获取目标表单
            var $form = $(e.target);
            //得到表单的实例
            var bv = $form.data('bootstrapValidator');
           //通过ajax提交数据
            var postUrl="";
            var postData="";
            
            $.post(postUrl, postData, function(result) {
                console.log(result);
            }, 'json');
        });
});