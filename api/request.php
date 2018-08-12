<?php
//    //1. 引入公共连接配置
//    include_once("conn.php");

//    //前端传入
//    $pagesize=$_GET["pageSize"];
//    $pageIndex=$_GET["pageIndex"];

//    //计算得来
//    $skipNum=$pageIndex*$pagesize;

//    $rst=mysqli_query($conn, $sqlStr);


//    session_start();
//    $userid=$_SESSION["userid"];
//    //2. 构造sql语句
//    $sqlStr="select * from borrowinfo where userid=$userid";
//    $rst=mysqli_query($conn, $sqlStr);

//    //获取总的记录数
//    $totalCount=mysqli_num_rows($rst);
    

//    //3. 构造sql语句
//    $sqlStr.=" limit $skipNum,$pagesize";
//    $rs=mysqli_query($conn, $sqlStr);
   

//    $borrowDate=[];
//    //5. 根据执行的结果返回json到前端
//    while($row=mysqli_fetch_assoc($rs)){
//     array_push($borrowDate,$row);
//    }
   

//     //echo $row; //row是一个关联数组
//     echo json_encode(["total"=>$totalCount,"data"=>$borrowDate]);

   //1. 引入公共连接配置
   include_once("conn.php");

   //前端传入
   $pagesize=$_GET["pageSize"];
   $pageIndex=$_GET["pageIndex"];
   //计算得来
   $skipNum=$pageIndex*$pagesize;
   

   session_start();
   $userid=$_SESSION["userid"];
   //2. 构造sql语句
   $sqlStr="select * from borrowinfo where userid='$userid'";
   $rst=mysqli_query($conn, $sqlStr);
   //获取总的记录数
   $totalCount=mysqli_num_rows($rst);
   
   //3. 执行sql语句返回结果集（记录集）
   $sqlStr.=" limit $skipNum,$pagesize";
   $rs=mysqli_query($conn, $sqlStr);
   
   $dataJson=[];
   //不为null就执行循环
   while($row=mysqli_fetch_assoc($rs)){
	  array_push($dataJson,$row);
   }
  
   //把二维数组转换为一个对象数组返回给前端
   $result=["total" => $totalCount,"data" => $dataJson];
   echo json_encode($result);

?>