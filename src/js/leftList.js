

$(function(){

	// 左边导航栏的动态激活状态
	var reqPath=location.href;
	
    var aid=reqPath.split("?")[1].split("&")[0].split("=")[1];
    var lid=reqPath.split("?")[1].split("&")[1].split("=")[1];
    
    console.log(reqPath);
    console.log(aid,lid);
    
    $(".panel").eq(aid).find(".panel-collapse").addClass("in").closest(".panel").siblings().find(".panel-collapse").removeClass("in");
    
    $(".panel").eq(aid).find(".panel-collapse ul li").eq(lid).addClass("active").siblings().removeClass("active");
    $(".panel").eq(aid).siblings().find(".panel-collapse ul li").removeClass("active");

    
	
			
})