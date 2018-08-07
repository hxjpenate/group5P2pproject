
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
                username: {
                  
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
                mobile: {
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
            var postUrl="/api/userAdd.php";
            var postData=$form.serialize();
            
           //2.先定义好模态框的标题  
            $("#regmodal .modal-title").text("用户注册提示"); 
            $.post(postUrl, postData, function(result) {
                 
                 if(result.isSuccess){
                 	  //console.log('返回的结果',result.msg)
                 	  //1.注册成功后,显示模态框效果
                 	  //3.定义注册成功的内容
                 	  $("#regmodal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>"+result.msg+"<span id='num'>5</span>秒后跳转....");
                 	  
                 	  //4.展示模态框
                 $('#regmodal').modal('show');
                 	  var num=5;
                 	  var timeid=setInterval(function(){
                 	       num--;
                 	       $("#num").text(num);
                 	       if(num==0){
                 	       	clearInterval('timeid')
                 	        location.href="login.php";
                 	       }
                           
                 	  },1000) 
                 }
                 else{
                 	$("#regmodal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>"+result.msg);
                 	  $("#regmodal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>"+result.msg);
                 	$('#regmodal').modal('show');
                 }
                 
            }, 'json');
        });
});