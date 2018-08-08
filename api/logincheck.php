<?php
	//验证登录用户名是否合法
	
	
	
    //1. 引入数据库连接
   include_once("./conn.php");
    //2. 接收表单变量的值
   $username=$_POST["username"];
   $password=$_POST["password"];
   
  
   
   //3. 构造sql语句
    $sqlStr="select * from userinfo where username='$username' and password='$password'";
    
    //echo  $sqlStr
    
    //4. 执行sql语句并返回执行的结果
    $res=mysqli_query($conn,$sqlStr);
    
    $row =mysqli_fetch_assoc($res);
    
    

 //5. 根据是否执行成功，返回json对象给前端
if ($row){
     $jsonArray=["isSuccess"=>true,"msg"=>"用户登录成功!"];
	  echo json_encode($jsonArray);
    //如果登录成功   写入session
    //开始
     session_start();
     //写入
     $_SESSION['username']=$row['username'];
     $_SESSION['userid']=$row['userid'];
     
     
}
else{
    $jsonArray=["isSuccess"=>false,"msg"=>"登录失败,请检查用户名或密码是否输入正确!"];
	  echo json_encode($jsonArray);
}
   
   
  
  
?>