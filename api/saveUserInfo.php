<?php
   //1. 引入数据库连接
   include_once("./conn.php");
   


   session_start();
   $userid=$_SESSION["userid"];
   //2. 接收表单变量的值
   $mobile=$_POST["mobile"];
   $tel=$_POST["tel"];
   $education=$_POST["education"];
   $monthlyincome=$_POST["monthlyincome"];
   $address=$_POST["address"];
   
   //3. 构造sql语句
//    update users set stu_name='隔壁老王',stu_age=50 where stu_id=3;
   $sqlStr="update userinfo set mobile='$mobile',tel='$tel',education='$education',monthlyincome='$monthlyincome',address='$address' where userid='$userid'";
   
   //4. 执行sql语句并返回执行的结果
   //返回一个布尔值，执行成功则返回true，否则返回 false
   $result=mysqli_query($conn, $sqlStr);

   //5. 根据是否执行成功，返回json对象给前端
   if($result){
   	  //发送的是json字符串，前端必须使用JSON.parse()进行转换
   	  //echo "{'isSuccess': true,'msg': '用户注册成功!'}";
   	  
   	  //如果想直接返回json到前端，必须先定义关联数组，然后再使用json_encode(关联数组)
	  echo "<h3>数据保存成功</h3>";
   }
   else{
   	  //echo "{'isSuccess': false,'msg': '用户注册失败!'}";
   	//   $jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败!"];
         echo "<h3>数据保存失败</h3>";
   }
?>