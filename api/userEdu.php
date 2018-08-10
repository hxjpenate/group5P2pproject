<?php

    include_once("./conn.php");


    // sql语句
    $sqlStr="select * from userinfo";


    // 执行sql语句返回结果集合
    $rs=mysqli_query($conn, $sqlStr);
	
	//设置二维数组
	$userData=[
		['name'=>"皇立国家大学", 'value'=>0],
		['name'=>"高等贵族大学", 'value'=>0],
	 	['name'=>"中等贵族大学", 'value'=>0],
	 	['name'=>"低等贵族大学", 'value'=>0],
	 	['name'=>"平民及奴隶基础教育", 'value'=>0]
	];
	
	//
	while($row=mysqli_fetch_assoc($rs)){
		if($row["education"]=="皇立国家大学"){
   	  	$userData[0]["value"]+=1;
   	  }
	  else if($row["education"]=="高等贵族大学"){
   	  	$userData[1]["value"]+=1;
   	  }
	  else if($row["education"]=="中等贵族大学"){
   	  	$userData[2]["value"]+=1;
   	  }
	  else if($row["education"]=="低等贵族大学"){
   	  	$userData[3]["value"]+=1;
   	  }
	  else if($row["education"]=="平民及奴隶基础教育"){
   	  	$userData[4]["value"]+=1;
   	  }
	}
	
	//删除没有人的类型
	for($i=count($userData)-1;$i>0;$i--){
	   if($userData[$i]["value"]==0){
	   	  //语法： array_splice(array,start,length)	
	   	  array_splice($userData,$i,1);
	   }
   }
	//把二维数组转换为一个对象数组返回给前端
   echo json_encode($userData);
?>