<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="COSCUP, COSCUP2010, COSCUP Cheese, TOGETHER say Cheese, coscup2u, 開源人年會, 开源人年会" />
<meta name="description" content="TOGETHER say Cheese!-- 请大家上传最帅最正的社群或者历届 COSCUP 照片到 Picasa，并且加上 #coscup2u 标签。透过 Google +1 button 投票，最高者将有意想不到的惊喜！" />
<meta name="robots" content="index, allow" />
<meta name="google-site-verification" content="dQCRnqBuMTfC4th8pDO8P-uq_B94p-fpieGQ9kuImrQ" />
<link type="image/x-icon" href="<?php echo base_url();?>image/cheese.ico" rel="shortcut icon" />
<title>COSCUP Cheese - TOGETHER say Cheese !</title>
<style>
body{
	overflow:hidden;
	color:#BE1622;
	margin-left: 0px;
	font-family: "Apple LiGothic", "LiHei Pro", "文泉驿微米黑", "Droid Sans Fallback", "微软正黑体", "Lucida Sans", FreeSans, sans-serif, "细明体";
	font-size: 15px;
}
a{
	color:#990000;
}
a:hover{
	color:#ffffff;
}
#banner{
	width: 100%;
	position:absolute;
	z-index: 1;
}
#banner_coscup{
	background-image: url(<?php echo base_url() ;?>image/banner_coscup.png);
	width: 180px;
	height: 180px;
	z-index: 6;
	left: 20px;
	position:absolute;
	top: -20px;
}
#banner_cheese{
	background-image: url(<?php echo base_url() ;?>image/TSC_banner.png);
	width: 389px;
	height: 88px;
	z-index: 2;
	position:absolute;
	left: 183px;
	top: -11px;
}
#banner_menu{
	background-color:	#F39200;
	border: 5px solid #F39200;
	border-radius: 10px;
	height: 30px;
    position: absolute;
    right: 0;
    top: 30px;
    width: 480px;
}
#help{
	width: 20px;
	background-color: #BE1622;
	color: #EFCD9C;
}
#canvas{
	display:block;
	overflow:scroll;
	overflow-y:hidden;
	width: 100%;
	height: 90%;
	position:absolute;
	margin-top: 60px;
}
#container{
	height: 500px;
	width: 100%;
	display: block;
	clear: both;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: 100% auto;
	background-image: url(<?php echo base_url() ;?>image/container_bg.png);
	background-color: #CEA967;
	background-position: 11% 0%;
	cursor:move;
}
#container p{
	position:absolute;
	vertical-align: middle;
	text-align: center;
	top: 52%;
	left: 38%;
}
#timeline{
	clear: both;
	height: 20px;
}
#loading{
	position: absolute;
	border: 0px;
	top: 50%;
	left: 50%;
	background-image: url(<?php echo base_url()?>image/ajax-loader.gif);
	width: 42px;
	height: 42px;
	margin: -21px 0px 0px -21px;
}
#showEvent{
	position: absolute;
	bottom: 40px;
	height: 20px;
}
#eventline{
	clear: both;
	height: 20px;
    position: absolute;
    top: 490px;
    width: 100px;
    z-index: 4;
}
#wrap{
	width: 100%;
	height: 100%;
	background-color:#666;
	opacity: 0.6;
	display: none;
	z-index: 1000;
	position: absolute;
	left:0px;
	top:0px;
}
#wrap2{
	opacity:1;
	width:100%;
	height:100%;
	z-index:2000;
	position:absolute;
	left: 0px;
	top: 0px;
}
#photobox{
	display: none;
	width: 750px;
	height: 580px;
	margin: -300px 0px 0px -375px;
	position: absolute;
	top: 50%;
	left: 50%;
	z-index: 1001;
	padding: 10px;
	border-radius: 10px;
	background-color: #F39200;
	border: 3px solid #F39200;
}
#photo_link{
	bottom: 10px;
    clear: right;
    cursor: pointer;
    float: right;
    position: absolute;
    right: 10px;
}
#shareLink{
	width: 250px;
}
#close{
	width:50px;
	height:50px;
	background-color:#BE1622;
	border-radius: 10px;
	border: 5px solid #BE1622;
	color:#FFFFFF;
	text-align: center;
	vertical-align: middle;
	position:absolute; top: -20px; left: 98%;
	font-size: 50px;
	cursor:pointer;
}
#innerbanner{
	background-color: #EFCD9C;
	border-radius: 10px;
	border: 5px solid #EFCD9C;
	height: 30px;
	width: 700px;
	margin-left: 20px;
	vertical-align: middle;
}
#innerbanner_left{
	float: left;
	font-size: 30px;
}
#innerbanner_right{
	float: right;
}
#innerbox{
	margin-top: 20px;
	margin-bottom: 10px;
	position: absolute;
	left: 50%;
}
#photo_line{
	margin-right: 10px
}
#footer{
	width: 600px;
	height: 20px;
	position: fixed;
	bottom: 13px;
	margin-left: -300px;
	left: 50%;
	border-radius: 10px 10px 0px 0px;
	background-color: #F39200;
    border: 3px solid #F39200;
	text-align: center;
}
#getInvolvedInfo{
	width:350px;
	border:5px solid #BE1622;
	border-top: 0px;
	border-radius: 0px 10px 10px 10px;
	position: absolute;
	padding: 5px;
	display: none;
	background-color: #BE1622;
	z-index: 900;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
}
#timeselect{
	width: 150px;
	border:5px solid #BE1622;
	border-top: 0px;
	border-radius: 0px 10px 10px 10px;
	position: absolute;
	padding: 5px;
	display: none;
	background-color: #BE1622;
	z-index: 900;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
	font-size: 18px;
}
#timeselect div{
	width: 30px;
	float: left;
	padding-left: 10px;
	clear: none;
}
#langselect{
	height: 100px;
	border:5px solid #BE1622;
	border-top: 0px;
	border-radius: 0px 10px 10px 10px;
	position: absolute;
	padding: 5px;
	display: none;
	background-color: #BE1622;
	z-index: 900;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
}
#langselect div{
	text-align:center;
	width: 80px;
}
#getInvolvedInfo p{
	color:#EFCD96;
}
#desc p{
	margin-left: 20px;
	margin-right: 20px;
	font-size: 18px;
}
#desc p img{
	float: left;
	margin: 10px;
}
#gplusone{
	bottom: 10px;
    position: absolute;
}
#arrow, #return{
	background-color: #F39200;
    border: 5px solid #F39200;
	color: #BE1622;
    font-family: Verdana,Geneva,sans-serif;
	font-weight: bolder;
	position: absolute;
	z-index: 100;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
	cursor: pointer;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	user-select: none;
	vertical-align: middle;
}
#arrow{
	border-radius: 50px 0 0 50px;
	padding-bottom: 4px;
    font-size: 80px;
    height: 100px;
    right: 0;
    text-align: left;
    top: 45%;
    width: 100px;
	padding-left: 10px;
}
#arrow:hover{
	width: 150px;
	background-color: #BE1622;
	border-color: #BE1622;
	color: #EFCD9C;
}
#return{
	width: 50px;
	height: 50px;
    border-radius: 0px 25px 25px 0px;
    font-size: 40px;
	text-align: right;
	left: 0px;
	bottom: 30%;
	padding-right: 5px;
}
#return:hover{
	width: 80px;
	background-color: #BE1622;
	border-color: #BE1622;
	color: #EFCD9C;
}
.banner_menu_option{
	background-color:#EFCD9C;
	border: 1px solid #EFCD9C;
	border-radius: 10px;
	height: 20px;
	margin-left: 8px;
    text-align: center;
    width: 100px;
	float: left;
	cursor: pointer;
}
.banner_menu_option:hover{
	background-color:#BE1622;
	border: 1px solid #BE1622;
	border-radius: 10px;
	height: 20px;
	margin-left: 8px;
    text-align: center;
    width: 100px;
	float: left;
	color:#EFCD9C;
	cursor: pointer;
}
.photo_grid{
	/*border: 1px solid;*/
	position:absolute;
	margin-top: 10px;
	/*disable select*/
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	user-select: none;
	
}
.timetag{
    background-color: #F39200;
    border: 3px solid #F39200;
    border-radius: 0px 0px 5px 5px;
    position: absolute;
}
.thumbnail{
	width: 144px;
	float:right;
	border-radius: 10px;
	border:10px solid #F39200;
	z-index:3;
	-moz-box-shadow: 5px 5px 5px black;
	-webkit-box-shadow: 5px 5px 5px black;
	box-shadow: 5px 5px 5px black;
}
.author{
	float: left;
	position:absolute;
	border-radius: 5px;
	border: 5px solid #F39200;
	background-color:#EFCD9C;
	margin-left: 3px;
	margin-top: 8px;
	-moz-transform:rotate(10deg);
	-webkit-transform:rotate(10deg);
	-o-transform:rotate(10deg);
    width: 90px;
    z-index: 0;
}
.eventTag{
	position:absolute;
	border: 1px solid;
	text-align: center;
	height: 18px;
	overflow: hidden;
	background-color: #F39200;
    border: 3px solid #F39200;
    border-radius: 5px 5px 0px 0px;
}
.eventShower{
	position:absolute;
	width: 700px;
	overflow: visible;
	display: inline;
}
.photoview{
	margin-left: 2.5%;
}
.seperator{
	width: 100%;
	height: 10px;
	background-color: #F39200;
}
.select_option{
	margin-left: 5px;
	margin-top: 10px;
	background-color: #EFCD9C;
	border: 1px solid #EFCD9C;
	border-radius: 10px;
	border-bottom: 2px dotted #F39200;
	cursor: pointer;
	clear: both;
}
</style>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.min.js" ></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script>

var arrX = new Array();
var arrY = new Array();

var data;
var data_length;
var least_spacing;
var size_x;
var size_y;

var draging = false;

var footer_flag = 1;

var COSCUP_api;
var site_url = "<?php echo site_url();?>cheese/";
var base_url = "<?php echo base_url();?>";
var img_url = "<?php echo base_url();?>image/";

var day1 = new Array();
var day2 = new Array();

var getInvolved_flag = 0;
var bounceTo_flag = 0;
var lang_flag = 0;
var pan_ID = 0;

$.getJSON(base_url+"api",
        function(returnData){
			enableButton();
			if(returnData[0] == null){
				$("#bounceTo, #about, #help").attr("onclick", "");
				getInvolved();
				$("#container").empty().append("<p>目前尚无照片，请参考“融入起司”，一起加入 COSCUP Cheese 吧！</p>");
				return;
			}
		  	data = returnData;
			$("#container").empty();
		  	arrangePhoto();
			assignPhoto();
			pushEventTag();
			setInterval("footerSwitcher()", 10000);
			return;
        });
		
function enableButton(){
	$("#wrap2").css("display", "none");
	$(window).keypress(function(event){
		if(event.keyCode == 39 || event.keyCode == 32){
			document.getElementById('canvas').scrollLeft += 50;
		}else if(event.keyCode == 37){
			document.getElementById('canvas').scrollLeft -= 50;
		}else if(event.keyCode == 38 || event.keyCode == 40){
			document.getElementById('canvas').scrollLeft = 0;
		}
	});
}

function addZero(i){
	if(i<10){
		return "0"+i;
	}else{
		return i;
	}
}
//
function arrangePhoto(){
	data_length = $(data).length;
	
	var start_timestamp = data[0].timestamp;
	var end_timestamp = data[data_length-1].timestamp;
	least_spacing = 20;
	var max_x = 10000;
	var max_y = 500;
	size_x = 260;
	size_y = 170;
	var tmp = new Date();
	var tmp_left;
	var startX;
	var startLeft;
	//var footer_left = $("#footer").offset().left+300;
	
	arrX[0] = 0;
	arrY[0] = Math.floor(Math.random()*(max_y+1-size_y));
	tmp = new Date(parseInt(data[0].timestamp)*1000 + tmp.getTimezoneOffset() * 60000); //second -> millisecond
	if(data[0].time_flag){
		tmp = new Date(parseInt(data[0].timestamp)*1000);
	}
	$("#container").append('<div class="photo_grid" style="width: '+size_x+'px ; height: '+size_y+'px ; left: '+arrX[0]+'px ; top: '+arrY[0]+'px; "><div class="author">'+data[0].author+'</div><a onclick="openPhoto('+0+');" href="#"><img class="thumbnail" onmouseover="inPhotobox(0);" onmouseout="outPhotobox(0);" src="'+data[0].thumbnail+'" /></a></div>');
	$("#timeline").append('<div class="timetag" style="left: '+arrX[0]+'px;">'+addZero(tmp.getHours())+':'+addZero(tmp.getMinutes())+'</div>');
	
	for(var i = 1; i<data_length-1; i++){
		arrX[i] = arrX[i-1] + size_x * Math.floor(Math.random()*9+5)*0.1;
		var j = 0;
		do{
			arrY[i] = Math.floor(Math.random()*(max_y+1-size_y));
			j++;
			if(j>10){
				arrX[i] = arrX[i-1]+size_x+least_spacing;
				arrY[i] = Math.floor(Math.random()*(max_y+1-size_y));
				break;
			}
		}while(checkpt(arrX[i], arrY[i], i))
		//document.write(arrX[i]+' '+arrY[i]+'\n');
		tmp = new Date(parseInt(data[i].timestamp)*1000 + tmp.getTimezoneOffset() * 60000);
		if(data[i].time_flag){
			tmp = new Date(parseInt(data[0].timestamp)*1000);
		}
		$("#container").append('<div class="photo_grid" style="width: '+size_x+'px ; height: '+size_y+'px ; left: '+arrX[i]+'px ; top: '+arrY[i]+'px; "><div class="author">'+data[i].author+'</div><a onclick="openPhoto('+i+');" href="#"><img class="thumbnail" onmouseover="inPhotobox('+i+');" onmouseout="outPhotobox('+i+');" src="'+data[i].thumbnail+'" /></a></div>');
		$("#timeline").append('<div class="timetag" style="left: '+arrX[i]+'px;">'+addZero(tmp.getHours())+':'+addZero(tmp.getMinutes())+'</div>');
		
	}
	if(arrX[i-1]+size_x > $("#canvas").width()){
		$("#container").css('width', arrX[i-1]+size_x);
		$(".seperator").css('width', arrX[i-1]+size_x);
	}
        $("#canvas").mousedown(function(event){  
			/*if (document.documentElement && document.documentElement.scrollTop) {
				startLeft = document.documentElement.scrollLeft;
			} else if (document.body) {
				startLeft = document.body.scrollLeft;
			} else {
				startLeft= window.pageYOffset;
			}*/
            //startLeft = document.documentElement.scrollLeft; 
			startLeft = $("#canvas").scrollLeft();  
            startX = event.clientX;
			//$("#text").append(startLeft+' '+startX+'<br />');  
            draging = true;  
			//document.selection.empty();
        }).mousemove(function(event){  
            if (draging == false)return;  
            var deltaX = startX -  event.clientX;    
            tmp_left = startLeft + deltaX;  
            //$(this).css('left',tmp_left+'px');
			//document.getElementById('canvas').scrollTo(tmp_left, 0);
			document.getElementById('canvas').scrollLeft = tmp_left;
			//$("#footer").css("left", tmp_left+footer_left);
			//document.selection.empty();
        }).mouseup(function(event){  
            //window.scrollBy(tmp_left, 0); 
			draging = false;  
			//document.selection.empty();
        });  
		
		/*$("#canvas").scroll(function (event){
			document.getElementById('canvas').scrollLeft+=event.wheelDelta; 
			//alert(event.wheelDelta);
		});*/
		$(".photo_grid").select(function(){
			$(".photo_grid").select();
		});
}

function checkpt(x, y, till){
	for(var i=0; i<till; i++){ //check four points
		if(((x>=arrX[i]-least_spacing && x<=arrX[i]+size_x+least_spacing) && (y>=arrY[i]-least_spacing && y<=arrY[i]+size_y+least_spacing)) || ((x+size_x>=arrX[i]-least_spacing && x+size_x<=arrX[i]+size_x+least_spacing)&&(y+size_y>=arrY[i]-least_spacing && y+size_y<=arrY[i]+size_y+least_spacing)) || ((x+size_x>=arrX[i]-least_spacing && x+size_x<=arrX[i]+size_x+least_spacing) && (y>=arrY[i]-least_spacing && y<=arrY[i]+size_y+least_spacing)) || ((x>=arrX[i]-least_spacing && x<=arrX[i]+size_x+least_spacing) && (y+size_y>=arrY[i]-least_spacing && y+size_y<=arrY[i]+size_y+least_spacing))){
			return true;
		}
	}
	return false;
}

function arrangeEventTag(i, from, to, name, detail){
	var d = new Date();
	//var len = $(COSCUP_api).length;
	
	if(from*1000 > d.getTime()){
		return false;	
	}
	//var localOffset = d.getTimezoneOffset() * 60;
	var from_x = getXbyTimestamp(from)-10;
	var to_x = getXbyTimestamp(to)+10;
	var span = from_x - to_x;
	$("#eventline").append("<div id='eventTag_"+i+"' class='eventTag' style='left: "+to_x+"px; width: "+span+"px;'>"+name+"</div>");
	$("#eventTag_"+i).bind("mouseenter", {to: to_x, name: name, id: i, detail: detail}, showEvent);
	$("#eventTag_"+i).bind("mouseleave", {id: i}, removeEvent);
}

function openPhoto(id){
	draging = false;
	//
	var img = new Image();
	img.onload =function () {
		if(this.width < 600){
			$("#innerbox > img").css("width", 320);
			$("#innerbox > img").css("margin-left", '-160px');
		}else{
			$("#innerbox > img").css("width", 640);
			$("#innerbox > img").css("margin-left", '-320px');
		}
	}
	img.src = data[id].photo_url;
	$("#innerbox").html('<img class="photoview" src="'+data[id].photo_url+'" />');
	$("#innerbanner").html("<font id='innerbanner_left'>由 "+data[id].author+" 所拍摄</font><font id='innerbanner_right'><img src='"+img_url+"share.png' alt=''></img><a href='"+data[id].photo_link+"' target='_blank'>浏览这本相本</a></font>");
	//$("g:plusone").attr("href", site_url+"view/"+data[id].photo_id);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url+"view/"+data[id].photo_id});
	$("#photo_link").attr("href", site_url+"view/"+data[id].photo_id);
	$("#shareLink").val(site_url+"view/"+data[id].photo_id);
	var purePhoto = data[id].photo_url.substr(0, data[id].photo_url.lastIndexOf('?'));
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(purePhoto)).concat(" ").concat(encodeURIComponent(site_url+'view/'+data[id].photo_id)).concat(' ').concat('(').concat('快到 COSCUP Cheese 浏览大家的笑容！').concat(")'))"));
	/*$("#photobox").dialog({
			width: 680,
			position: ['center', 20],
			modal: true
		});*/
	/*$("#photobox").css("width", $("#innerbox > img").width());
	$("#photobox").css("height", $("#innerbox > img").height() + 100);*/
	$("#wrap").css("display", "block");
	$("#photobox").css("display", "block");
}

function getIDbyPhotoID(photoID){
	for(var i=0; i<data_length; i++){
		//$("#text").append(data[i].photo_id+"<br />");
		if(data[i].photo_id == photoID){
			return i;
		}
	}
	return false;
}

function getXbyTimestamp(timestamp){
	var left = parseInt(data[0].timestamp);
	var left_x = 0;
	var right;
	var right_x;
	
	for(var i=0; i<data_length; i++){
		if(data[i].timestamp == timestamp){
			return arrX[i];
		}
		if( data[i].timestamp < left && data[i].timestamp > timestamp){
			left = parseInt(data[i].timestamp);
			left_x = arrX[i];
		}
		
		if(data[i].timestamp < timestamp){
			break;
		}
	}
	right = data[i].timestamp;
	right_x = arrX[i];
	
	timestamp = parseInt(timestamp);
	var tmp = Math.floor(-(left_x-right_x)*(left-timestamp) / (left-right)+left_x);
	//$("#text").append("<p>("+left+","+left_x+") > ("+timestamp+","+tmp+") > ("+right+","+right_x+")</p>");
	return tmp;
	//return (left_x+right_x)/2;
}

function showEvent(event){
	var tmp = event.data.to;
	if($("#canvas").scrollLeft() > tmp){
		tmp = $("#canvas").scrollLeft();
	}
	$("#showEvent").append("<div id='eventShower_"+event.data.id+"' class='eventShower' style='left: "+tmp+"px;'>"+"<b>"+event.data.name+" -- </b>"+event.data.detail+"</div>");
}

function removeEvent(event){
	$("#eventShower_"+event.data.id).remove();
}

function closePhoto(){
	$("#desc").empty();
	$("#wrap").css("display", "none");
	$("#photobox").css("display", "none");
	draging = false;
}

function pushEventTag(){
	for(var i=0; i<=6; i++){
		day1[i] = new Object();
	}
	
	day1[0].name = "8/08";
	day1[0].from =	1312761600;
	day1[0].to = 		1312848000;
	day1[0].detail = "2011/8/08";
	
	day1[1].name = "8/09";
	day1[1].to =		1312934400;
	day1[1].detail = "2011/8/09";
	
	day1[2].name = "8/10";
	day1[2].to =		1313020800;
	day1[2].detail =	"2011/8/10";
	
	day1[3].name =	 "8/11";
	day1[3].to =		1313107200;
	day1[3].detail =	"2011/8/11";
	
	day1[4].name =	"8/12";
	day1[4].to =		1313193600;
	day1[4].detail =	"2011/8/12";
	
	day1[5].name =	"8/13";
	day1[5].to =		1313280000;
	day1[5].detail =	"2011/8/14";
	
	day1[6].name = "8/14";
	day1[6].to =		1313366400;
	day1[6].detail ="2011/8/14";
	
	arrangeEventTag(100, day1[0].from, day1[0].to, day1[0].name, day1[0].detail);
	for(var i=1; i<day1.length; i++){
		arrangeEventTag(100+i, day1[i-1].to, day1[i].to, day1[i].name, day1[i].detail);
	}
	
	/*Date Tag*/
	arrangeEventTag(10, 1281744000, day1[0].from, "8/14", "Day 1");
	arrangeEventTag(20, 1281830400, day2[0].from, "8/15", "Day 2");
	
	
	/*
	arrangeEventTag(201, 1281863700, 1281864600, "Announcement", "Announcement");
	arrangeEventTag(202, 1281864600, 1281868200, "Keynote#1", "Road to Gnome3");
	arrangeEventTag(203, 1281868200, 1281870000, "休息#1", "Tea Break");
	arrangeEventTag(204, 1281870000, 1281871800, "议程#1", "Debugging: Linux Kernel by Ftrace | Introducing GStreamer, the Media Framework on GNU/Linux | Building and Using a Memory Profiler | How to Become a Debian Developer");*/
}

function footerSwitcher(){
	if(footer_flag == 0){
		$("#footer > font").fadeOut(1000, 'linear', function(){
		$("#footer").html('<font class="footer_text">快到我们的 <a href="http://coscup.org/2010" target="_blank">网站</a> / <a href="http://blog.coscup.org" target="_blank">博客</a> / <a href="http://www.youtube.com/user/coscup2011" target="_blank">YouTube 频道</a> / <a href="http://www.plurk.com/coscup" target="_blank">噗浪</a> / <a href="https://www.facebook.com/coscup">脸书</a> 逛逛吧！</font>');
		});
		footer_flag = 1;
	}else if(footer_flag ==1){
		$("#footer > font").fadeOut(1000, 'linear', function(){$("#footer").html('<font class="footer_text">We <font style="color: #FFCCFF;">(heart)</font> Open.</font>');});
		footer_flag = 2;
	}else if(footer_flag == 2){
		$("#footer > font").fadeOut(1000, 'linear', function(){$("#footer").html('<font class="footer_text">COSCUP Cheese 2010 、 2011 近期上线，敬请期待！</font>');});
		footer_Flag = 0;
	}
}

function inPhotobox(id){
	$('.thumbnail').eq(id).css("border-color", "#BE1622");
	$('.author').eq(id).css("border-color", "#BE1622");
	$('.timetag').eq(id).css("border-color", "#BE1622").css("background-color", "#BE1622").css("color", "#F39200");
}

function outPhotobox(id){
	$('.thumbnail').eq(id).css("border-color", "#F39200");
	$('.author').eq(id).css("border-color", "#F39200");
	$('.timetag').eq(id).css("border-color", "#F39200").css("background-color", "#F39200").css("color", "#BE1622");
}

function selectTime(){
	//alert("!!");
	if(lang_flag==1){
		closeLang();
	}else if(getInvolved_flag==1){
		closeGetInvolved();
	}
	if(bounceTo_flag == 0){
		$("#bounceTo").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		//$("#timeselect").empty();
		
		
		var tmp = new Date();
		var starttime = new Date(day1[0].from*1000 + tmp.getTimezoneOffset() * 60000);
		$("#timeselect").append("<div class='select_option' onclick='panToTime("+day1[0].to+");'>"+day1[0].name.replace('/', '<br />')+"</div>");
		for(var i=1; i<day1.length; i++){
			var starttime = new Date(day1[i-1].to*1000 + tmp.getTimezoneOffset() * 60000);
			$("#timeselect").append("<div class='select_option' onclick='panToTime("+day1[i].to+");'>"+day1[i].name.replace('/', '<br />')+"</div>");
		}
		
		$("#timeselect").append("<div class='day2 select_option' style='text-align: center;width: 80px; margin-top: 20px; padding-left: 0px !important; clear: both;' onclick='closeTimeselect();'>关闭</div>");
		$("#timeselect").css("top", $("#bounceTo").offset().top + $("#bounceTo").height()).css("left", $("#bounceTo").offset().left).css("display", "block");
		bounceTo_flag = 1;
	}else if(bounceTo_flag == 1){
		$("#bounceTo").attr("style", "");
		$("#timeselect").css("display", "none");
		bounceTo_flag = 2;
	}else if(bounceTo_flag == 2){
		$("#bounceTo").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#timeselect").css("display", "block");
		bounceTo_flag = 1;
	}
	
		
}

function closeTimeselect(){
	bounceTo_flag = 1;
	selectTime();
}

function panToTime(timestamp){
	bounceTo_flag = 1;
	selectTime(); // to close it
	document.getElementById('canvas').scrollLeft = getXbyTimestamp(timestamp);
}

function showLang(){
	$("#language").text("简体中文");
}

function recoverLang(){
	$("#language").text("语言");
}

function changeLang(){
	if(bounceTo_flag == 1){
		closeTimeselect();
	}else if(getInvolved_flag == 1){
		closeGetInvolved();
	}
	if(lang_flag == 0){
		$("#language").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#langselect").empty();
		$("#langselect").append("<div class='select_option'><a href='"+site_url+"lang/zh-tw'>正體中文</a></div>");
		$("#langselect").append("<div class='select_option'><a href='"+site_url+"lang/en'>English</a></div>");
		$("#langselect").append("<div class='select_option' style='clear: both;text-align: center;width: 80px; margin-top: 20px' onclick='closeLang();'>取消</div>");
		$("#langselect").css("top", $("#language").offset().top + $("#language").height()).css("left", $("#language").offset().left).css("display", "block");
		lang_flag = 1;
	}else if(lang_flag == 1){
		$("#language").attr("style", "");
		$("#langselect").css("display", "none");
		lang_flag = 2;
	}else if(lang_flag == 2){
		$("#language").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#langselect").css("display", "block");
		lang_flag= 1;
	}
}

function closeLang(){
	lang_flag = 1;
	changeLang();
}

function getInvolved(){
	if(bounceTo_flag == 1){
		closeTimeselect();
	}else if(lang_flag == 1){
		closeLang();
	}
	if(getInvolved_flag == 0){
		$("#getInvolved").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#getInvolvedInfo").css("top", $("#getInvolved").offset().top + $("#getInvolved").height()).css("left", $("#getInvolved").offset().left).css("display", "block");
		getInvolved_flag = 1;
	}else if(getInvolved_flag == 1){
		$("#getInvolved").attr("style", "");
		$("#getInvolvedInfo").css("display", "none");
		getInvolved_flag = 2;
	}else if(getInvolved_flag == 2){
		$("#getInvolved").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#getInvolvedInfo").css("display", "block");
		getInvolved_flag= 1;
	}
}

function closeGetInvolved(){
	getInvolved_flag=1;
	getInvolved();
}

function selectLink(){
	$("#shareLink").select();
}

function openAbout(){
	$("#innerbox").empty();
	$("#innerbanner").html("<div id='innerbanner_left'>关于 COSCUP Cheese</div>");
	//$("g:plusone").attr("href", site_url);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url});
	$("#photo_link").attr("href", site_url);
	$("#shareLink").val(site_url);
	$("#desc").html("<p><img src='"+img_url+"coscup.png'/></p><p><b>COSCUP Cheese</b>，一个让您轻松分享 COSCUP 照片的平台。这个计划由 COSCUP 2011 行销组主导。“芝士”一词意味着，我们希望每个 COSCUP 成员都能像芝士一样黏稠。我们也希望看到您参与 COSCUP 的每个笑容。</p><p>COSCUP Cheese 专案由 lRabbit 和 Toby 负责。感谢所有行销组成员的协助，包括船长 BobChao、全能小秘书 Singing、小啄插图者 蚊香，以及 虾虾 、暗鸦的意见提供。最后，特别感谢网站组工头 Timdream 和其他所有提供意见的朋友。</p><p>欲取得更多关于 COSCUP（Conference for Open Source Coders, Users, and Promoters）的信息，请到 <a href='http://coscup.org/'>COSCUP 官方网站</a>。</p>");
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(img_url+'banner_coscup.png')).concat(" ").concat(encodeURIComponent(site_url)).concat(' ').concat('(').concat('快到 COSCUP Cheese 浏览大家的笑容！').concat(")'))"))
	$("#wrap").css("display", "block");
	$("#photobox").css("display", "block")
}

function openHelp(){
	$("#innerbox").empty();
	$("#innerbanner").html("<div id='innerbanner_left'>帮助</div>");
	//$("g:plusone").attr("href", site_url);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url});
	$("#photo_link").attr("href", site_url);
	$("#shareLink").val(site_url);
	$("#desc").html("<p>A demo clip will be here soon.</p>");
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(img_url+'banner_coscup.png')).concat(" ").concat(encodeURIComponent(site_url)).concat(' ').concat('(').concat('快到 COSCUP Cheese 浏览大家的笑容！').concat(")'))"))
	$("#wrap").css("display", "block");
	$("#photobox").css("display", "block")
}

function panCanvas(){
	pan_ID = setInterval("document.getElementById('canvas').scrollLeft += 50;", 100);
}

function backCanvas(){
	pan_ID = setInterval("document.getElementById('canvas').scrollLeft -= 50;", 100);
}

function stopCanvas(){
	clearInterval(pan_ID);
}

function returnCanvas(){
	document.getElementById('canvas').scrollLeft = 0;
}

function assignPhoto(){
<?php
	if ($assignPhoto){
	?>
	var assign_id = getIDbyPhotoID("<?php echo $assignPhotoID ?>");
	if(assign_id != false){
		//$("#text").append(getXbyTimestamp(data[assign_id].timestamp));
		document.getElementById('canvas').scrollLeft = getXbyTimestamp(data[assign_id].timestamp);
		openPhoto(assign_id);
	}
<?php
	}
?>
}
</script>
</head>

<body>
<div id="banner">
<a href="<?php echo site_url()?>"><div id="banner_coscup"></div></a>
<a href="<?php echo site_url()?>"><div id="banner_cheese"></div></a>
<div id="banner_menu">
	<div id="getInvolved" class="banner_menu_option" onclick="getInvolved();">融入芝士</div>
    <div id="bounceTo" class="banner_menu_option" onclick="selectTime();">跳跃芝士</div>
    <div id="language" class="banner_menu_option" onmouseover="showLang();" onmouseout="recoverLang();" onclick="changeLang();">语言</div>
    <div id="about" class="banner_menu_option" onclick="openAbout();">关于</div>
    <div id="help" class="banner_menu_option" onclick='openHelp();'>?</div>
</div>
</div>
<div id="canvas">
<div class="seperator"></div>
<div id="container"><p>你的 COSCUP Cheese 正在熔化中，请耐心等待。</p><div id="loading"></div></div>
<div id="showEvent"></div>
<div id="eventline"></div>
<div class="seperator"></div>
<div id="timeline"></div>
<div id="footer"><font class="footer_text">快到我们的 <a href="http://coscup.org/2010" target="_blank">网站</a> / <a href="http://blog.coscup.org" target="_blank">博客</a> / <a href="http://www.youtube.com/user/coscup2011" target="_blank">YouTube 频道</a> / <a href="http://www.plurk.com/coscup" target="_blank">噗浪</a> / <a href="https://www.facebook.com/coscup">脸书</a> 逛逛吧！</font></div>
</div>
<div id="photobox"><div id="innerbanner"></div><div id="innerbox"></div><div id="desc"></div><div id="close" onclick="closePhoto()">X</div><div id="gplusone"><div id="gbutton"></div><a id="plurk" href=""><img style="position:relative; top: 5px" width="32" src="<?php echo base_url();?>image/plurk.png" /></a></div><div id="photo_link" onclick="selectLink();"><img src="<?php echo base_url();?>image/at.png" />分享芝士连结<input id="shareLink"  /></div></div>
<div id="getInvolvedInfo"><p>参与 <b>TOGETHER say Cheese !</b> 活动非常简单，只要 <a href="http://picasaweb.google.com" target="_blank" style="color:#FFF">上传最帅最正的社群或者历届 COSCUP 照片到 Picasa，并且加上 #coscup2u 标签，并且将相簿设置“公开在网路上”</a>，然后这张照片就自然而然地与 COSCUP Cheese 混合了！</p><p>你也可以在活动期间 2011/8/8 - 8/14 间透过 Google +1 按钮为其他的起司照片评分，得分最高者将有意想不到的惊喜！</p><p>*请注意，由于我们对照片数量做了上限限制，您上传的照片有可能不会被显示出来。</p><div class='select_option' style='clear: both;text-align: center;width: 80px; margin-top: 20px' onclick='closeGetInvolved();'>关闭</div></div>
<div id="timeselect"></div>
<div id="langselect"></div>
<div id="wrap2"></div>
<div id="wrap" onclick="closePhoto();"></div>
<div id="text"></div>
<div id="arrow" onmousedown="panCanvas();" onmouseup="stopCanvas();" ontouchstart="panCanvas();" ontouchend = "stopCanvas();">►</div>
<div id="return" onclick="returnCanvas();">←</div>
</body>
</html>