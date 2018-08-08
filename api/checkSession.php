<?php
	
	//开启session
   session_start();
   
   //判断用户名是否存在
   
   if(isset($_SESSION['username'])){
   	
   	  $jsonArray=["isSuccess"=>true,"msg"=>"用户身份验证成功!",'username'=>$_SESSION['username']];
	  echo json_encode($jsonArray);
   }
   else{
   	
   	$jsonArray=["isSuccess"=>false,"msg"=>"用户身份验证失败!请先注册或者登录"];
	  echo json_encode($jsonArray);
   }
   
   
   
?>