<!DOCTYPE html>
<html>
<head>



<meta name="viewport" content="width=device-width, initial-scale=1">



<script type="text/javascript" src="jquery.min.js"></script>



<script type="text/javascript">



$(document).ready(function(){
  $("#buttonab").click(function(){
    



var  y1="#近光状态#";


var  y2="#远光状态#";



 
var colorsaayy=[y1,y2];




var yy=colorsaayy[(Math.floor(Math.random() * (colorsaayy.length)))]




var a="1、夜间通过急弯、坡路";


var b="2、夜间通过坡路、拱桥";


var c="3、夜间通过急弯、拱桥";


var d="4、夜间通过拱桥、人行横道";



var e="5、夜间通过没有交通信号灯控制的路口";



var f="6、夜间超越前方车辆";



var g="7、夜间同方向近距离跟车行驶";



var h="8、夜间与机动车会车";


var i="9、夜间直行通过路口";



var j="10、夜间在有路灯的道路上行驶";



var k="11、夜间在照明良好的道路上行驶";




var l="12、请打开近光灯";




var m="13、请打开远光灯";




var n="14、夜间在没有路灯。照明不良条件下行驶";



var o="15、路边临时停车";


var p="16、夜间在窄路与非机动车会车";


var q="17、夜间在窄桥与非机动车会车";



var r="18、夜间通过有交通信号灯控制的路口";




var s="19、没有路灯";


var t="20、有路灯";


var u="21、没有交通信号灯";


var v="22、路口直行，直行通过";


var w="23、通过路口";


var x="24、超越前方车辆";


var y="25、近距离跟车";


var z="26、路边停车，发生故障难以移动";


var colorsxy = [a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,'1','2','3','4','5','6','7','8','9'];



var xy = colorsxy[(Math.floor(Math.random() * (colorsxy.length)))]

var y2="+";

 


 ////以下是起点于尾巴随机

 
 
var colorsaabb = ['a1','b1'];




var xaabb = colorsaabb[(Math.floor(Math.random() * (colorsaabb.length)))]


 
$("#"+xaabb).val(Math.floor(Math.random()*35+1)+y2+xy+yy);
 
 
//以上是起点于尾巴随机



//以下是起点于尾巴随机

$("#a").attr('id','b1');

$("#b").attr('id','a1');

//以上是起点于尾巴随机



  });
});

</script>






</head>



<body>
    
    
    
<h1  style="font-size:30px;color:#FF0000" >



 <button style="font-size:58px;color:#FF0000" id="buttonab">
请点我随机，科目三点随机指令</button>


<br>
    
    



科目三模拟灯光

需要远近光交替: 夜间通过拱桥 夜间通过坡路 夜间通过急弯 夜间通过人行横道 夜间通过没有交通信号灯控制的路口 夜间超越前方车辆

(看灯光状态) 如果在远光上:(#)

(看灯光状态) 如果在近光上:(#)

(注意,如果在远光灯上听到以上语音,需要先变回近光灯再做远近光交替

如果在近光上，直接做远近光

)

——————————————————

需要开启近光灯: 夜间与机动车会车 夜间通过有交通信号灯控制的路口 夜间同方向近距离跟车行驶 夜间在照明良好的道路上行驶 夜间在有路灯的道路上行驶 /* 夜间直行通过路口 */

(看灯光状态) 如果在远光上:(#)

(看灯光状态) 如果在近光上:(#)

(注意,如果在远光灯上听到以上语音,需要变回近光灯,如果在近光灯上听到,则不用动)

—————————————————— 需要开启小灯,双闪: 路边临时停车

/ * 夜间在道路上发生交通事故(故障)妨碍交通难以移动 */

(注意,如果在远光灯上听到以上语音,需要先变回近光灯再开启小灯双闪)

——————————————————

需要开启远光灯:

夜间在没有路灯照明不良条件下行驶

(注意,仅此一句需要将灯光停留在远光灯上)

最后一句:

模拟夜间考试完成请关闭所有灯光请起步继续完成考试



