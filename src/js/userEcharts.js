$(function(){
     // 基于准备好的dom，初始化echarts图表
     var myChart = echarts.init(document.getElementById('main')); 
        
     var option = {
         tooltip : {
             trigger: 'item',
             formatter: "{a} <br/>{b} : {c} ({d}%)"
         },
         legend: {
             orient : 'vertical',
             x : 'left',
             data:['皇立国家大学','高等贵族大学','中等贵族大学','低等贵族大学','平民及奴隶基础教育']
         },
         toolbox: {
             show : true,
             feature : {
                 mark : {show: false},
                 dataView : {show: false, readOnly: false},
                 magicType : {
                     show: false, 
                     type: ['pie', 'funnel'],
                     option: {
                         funnel: {
                             x: '25%',
                             width: '50%',
                             funnelAlign: 'center',
                             max: 1548
                         }
                     }
                 },
                 restore : {show: true},
                 saveAsImage : {show: true}
             }
         },
         calculable : true,
         series : [
             {
                 name:'访问来源',
                 type:'pie',
                 radius : ['50%', '70%'],
                 itemStyle : {
                     normal : {
                         label : {
                             show : false
                         },
                         labelLine : {
                             show : false
                         }
                     },
                     emphasis : {
                         label : {
                             show : true,
                             position : 'center',
                             textStyle : {
                                 fontSize : '30',
                                 fontWeight : 'bold'
                             }
                         }
                     }
                 },
                 data:[]
             }
         ]
     };
    //  预加载，数据未加载完成时的等待画面
     myChart.setOption(option);
     // ajax接受数据
     $.get("api/userEdu.php",function(userData){
         console.log(userData);
         option.series[0].data=userData;
         
         // 为echarts对象加载数据 
         myChart.setOption(option); 
        
         //  清除加载动画
         myChart.hideLoading();
     },"json");
     
  
     
});