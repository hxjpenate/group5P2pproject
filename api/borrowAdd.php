<?php
// echo "123";
   //1. 引入数据库连接
   include_once("./conn.php");
   
   //2. 接收表单变量的值
   $borrowType=$_POST["borrowType"];
   $borrowAmount=$_POST["borrowAmount"];
   $currentRate=$_POST["currentRate"];
   $monthes2Return=$_POST["monthes2Return"];
   $repayment=$_POST["repayment"];
   $minAmount=$_POST["minAmount"];
   $maxAmount=$_POST["maxAmount"];
   $rewardAmount=$_POST["rewardAmount"];
   $disableDays=$_POST["disableDays"];
   $borrowTitle=$_POST["borrowTitle"];
   $description=$_POST["description"];

   session_start();
   
   $userid=$_SESSION['userid'];
   
   //3. 构造sql语句
   $sqlStr="insert into borrowInfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";
   
   
   //4. 执行sql语句并返回执行的结果
   //返回一个布尔值，执行成功则返回true，否则返回 false
   $result=mysqli_query($conn, $sqlStr);

   //5. 根据是否执行成功，返回json对象给前端
   if($result){
   	  //发送的是json字符串，前端必须使用JSON.parse()进行转换
   	  //echo "{'isSuccess': true,'msg': '用户注册成功!'}";
   	  
   	  //如果想直接返回json到前端，必须先定义关联数组，然后再使用json_encode(关联数组)
   	  $jsonArray=["isSuccess"=>true,"msg"=>"借款申请提交成功,等待审核!"];
	  echo json_encode($jsonArray);
   }
   else{
   	  //echo "{'isSuccess': false,'msg': '用户注册失败!'}";
   	  $jsonArray=["isSuccess"=>false,"msg"=>"借款申请提交失败!"];
	  echo json_encode($jsonArray);
   }
?>