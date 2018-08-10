<?php
   //1. 引入公共连接配置
   include_once("conn.php");
    
   session_start();
   $userid=$_SESSION["userid"];
   //3. 构造sql语句
   $sqlStr="select * from userinfo where userid='$userid'";
   
   //4. 执行sql语句返回结果集（记录集）
   $rs=mysqli_query($conn, $sqlStr);
   
   //5. 根据执行的结果返回json到前端
   $row=mysqli_fetch_assoc($rs);

    //echo $row; //row是一个关联数组
    echo json_encode($row);

?>