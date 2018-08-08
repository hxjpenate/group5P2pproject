<?php
	//要写中文
      header("Content-Type:text/html;charset=utf-8");
     //开启
     session_start();
     //销毁session
     session_destroy();
     
     //跳转首页
     echo "<script> alert('退出成功!欢迎再次登录');location.href='/'</script>";
     
     
?>