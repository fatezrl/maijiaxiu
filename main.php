<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<script src="http://api.asilu.com/cdn/jquery.js,jquery.backstretch.min.js" type="text/javascript"></script>
<script>
function c1()
{
document.getElementById("input").value=document.getElementById("field1").value;
}
function c2()
{
document.getElementById("input").value=document.getElementById("field2").value;
}
function c3()
{
document.getElementById("input").value=document.getElementById("field3").value;
}
function c4()
{
document.getElementById("input").value=document.getElementById("field4").value;
}
function c5()
{
document.getElementById("input").value=document.getElementById("field5").value; 
}
function c6()
{
document.getElementById("input").value=document.getElementById("field6").value;
}
function c7()
{
document.getElementById("input").value=document.getElementById("field7").value;
}
function c8()
{
document.getElementById("input").value=document.getElementById("field8").value;
}
</script>
<title>hup内网代理系统</title>
<style type="text/css">
	*{
		margin:0px;
		padding:0px;
		bacl
		font-size: 30px;
		color:black;
	
	}
	a {
		color: #EF7B0A;

		text-decoration:none; 
	}
	a:hover {
		text-decoration: underline;
	}
	p {
		color: #444;
		line-height: 170%; margin: 5px 0;
	}
	p, td, th, ul {
		font-size: 80%;
	}
	
	/* LAYOUT */
	#wrapper {
		width: 700px;
		margin: 0 auto 0 auto;
		text-align: left;
	}
	
	#content {
		background-color: PeachPuff ;
		border-top: 3px solid #ce6c1c;
		border-bottom: 3px solid #ce6c1c;
		padding: 20px;
	}
	
	h2 {
		font: bold 100% arial, verdana, sans-serif;
		color: #3B578B;
		border-bottom: 1px solid #ccc;
		padding-bottom: 3px;
		margin: 25px 0 10px 0;
	}
	p+p {
		padding-top: 1em;
	}
	form.form {
		font-size: 80%;
		background-color: PapayaWhip ;
		padding: 10px;
	}
	#options {
		list-style-type: none;
		width: 500px;
		margin: 10px; padding: 0;
	}
	#options li { 
		float: left;
		width: 240px;
		border-left: 5px solid #ccc;
	}
	#footer {
		margin: 10px 0 0 0; 
		font-size: 18px;
		color: #PeachPuff ;	
	}
	#class,button{
		font-size: 20px;
		color: #A9A9A9;
	}
	#nav {
		text-align: right;
		list-style-type: none;
		font-size: 80%;
		border-top: 1px solid #ccc;
		margin: 20px 0 0 0;
		padding: 0;
	}
	#nav li {
		padding: 0 5px 0 5px;
		display: inline;
		border-left: 1px solid #ccc;
	}
	.left {
		float: left;
	}
	
	/* STYLES */
	.first {
		margin-top: 0;
	}
	input.textbox {
		background-color:LemonChiffon ;
		width: 500px;
		font: 120% arial, verdana, sans-serif;
	}
	input.button {
		margin-top: 10px;
		background-color:PaleGoldenRod;
		font-family: arial, verdana, sans-serif;
		font-size: 120%;
	}
	label {
		font-weight: light;
	}
	#error {
		border: 1px solid red;
		border-left: 5px solid red;
		padding: 2px;
		margin: 5px 0 15px 0;
		background: #eee;
	}
	
	/* TABLES USED IN COOKIE MANAGEMENT / EDIT BROWSER PAGES */
	table {
		border-color: #666;
		border-width: 0 0 1px 1px;
		border-style: solid;
		width: 50%;
	}
	th {
		font-size: normal;
		background: #ccc;
		border-width: 2px;
	}
	td, th {
		border-color: #666;
		border-width: 1px 1px 0 0;
		border-style: solid;
		padding: 2px 10px 2px 10px;
	}
	td {
		background-color: #EEEEEE;
	}
	.full-width {
		width: 98%;
	}
	.large-table { 
		width: 75%; 
		margin-top: 15px;
	}
	.large-table td, .large-table th {
		padding: 5px;
	}
	td.small-note {
		font-size: 60%;
		padding: 2px;
		text-align: right;
	}
	
	/* TOOLTIP HOVER EFFECT */
	label {
		font-weight: bold;
		line-height: 20px;
		cursor: help;
	}
	#tooltip {
		width: 20em;
		color: #fff;
		font-size: 12px;
		font-weight: normal;
		padding: 5px;
		border: 3px solid #333;
		text-align: left;
		background-color: #555555;
	}
	
</style>
<?=injectionJS();?>
<script type="text/javascript">
	window.addDomReadyFunc(function() {
		document.getElementById('options').style.display = 'none';
		document.getElementById('input').focus();
	});
	disableOverride();
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script type="text/javascript">
$.backstretch([
		'http://api.asilu.com/cdn/img/bg/444.jpg',
		'http://api.asilu.com/cdn/img/bg/445.jpg',
		'http://api.asilu.com/cdn/img/bg/446.jpg',
		'http://api.asilu.com/cdn/img/bg/447.jpg',
		'http://api.asilu.com/cdn/img/bg/448.jpg',
		'http://api.asilu.com/cdn/img/bg/460.jpg',
		'http://api.asilu.com/cdn/img/bg/461.jpg',
		'http://api.asilu.com/cdn/img/bg/462.jpg',
		'http://api.asilu.com/cdn/img/bg/463.jpg',
		'http://api.asilu.com/cdn/img/bg/464.jpg',
		'http://api.asilu.com/cdn/img/bg/465.jpg',
		'http://api.asilu.com/cdn/img/bg/466.jpg',
		'http://api.asilu.com/cdn/img/bg/499.jpg',
		'http://api.asilu.com/cdn/img/bg/123.jpg',
		'http://api.asilu.com/cdn/img/bg/234.jpg',
		'http://api.asilu.com/cdn/img/bg/231.jpg',
		'http://api.asilu.com/cdn/img/bg/422.jpg',
		'http://api.asilu.com/cdn/img/bg/400.jpg',
		], {
		fade : 1000, // 动画时长
		duration : 2000 // 切换延时
});
</script>
<div id="wrapper">
	<div id="header">
		<h1>
		 hpu内网代理系统</a>
		</h1>
	</div>
	
	<div id="content" >
	<h2>输入下方网址</h2>

		<!--[index_above_form]-->

		<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
		
			<input type="text"   name="u" id="input" size="40" class="textbox">
			</br>
			<input type="submit"  value="Go起飞" class="button"> &nbsp; 
		</form>
	</div>
	<div id="footer">
	"本在线代理由淳小白无偿提供"
	</br>
	"本站搭建是为了方便本校学生查询成绩"
	</br>
	万方教务系统网址:
	<input type="hidden" id="field1"  class= "input" value="202.196.225.57"><button onclick="c1()">点击自动填写该网址</button><br><hr/>
	万方科技学院焦作校区主页：
	<input type="hidden" id="field2" class= "input" value="wfstc.hpu.edu.cn"><button onclick="c2()">点击自动填写该网址</button><br><hr/>
	HPU教务管理系统：	
	<input type="hidden" id="field3" class= "input" value="http://jw.hpu.edu.cn"><button onclick="c3()">点击自动填写该网址</button><br><hr/>
	HPU最新公告栏：	
	<input type="hidden" id="field4" class= "input"  value="218.196.240.155/swfweb/hpugg.aspx"><button onclick="c4()">点击自动填写该网址</button><br><hr/>

	HPU本科教务管理：	
	<input type="hidden" id="field5" class= "input" value="http://218.196.240.25"><button onclick="c5()">点击自动填写该网址</button><br><hr/>

		HPU学生评教系统：	
	<input type="hidden" id="field6" class= "input" value="218.196.240.112"><button onclick="c6()">点击自动填写该网址</button><br><hr/>

		中国知网：	
	<input type="hidden" id="field7"  class= "input"value="http://www.cnki.net/"><button onclick="c7()">点击自动填写该网址</button><br><hr/>
	本代理还允许访问中国知网和万方数据库，用来下载论文。<br>	
	本站仅提供加速访问、提高安全性以及学习交流使用。禁止用其浏览任何违法内容。一经发现，直接封禁ip段。<br>
	服务器如若显示连接失败，一般十分钟内会自动修复该问题。<br>

	Powered by <a >Glype</a>&reg; 
	<!--[version]-->.
	</div>
</div>	
<script type="text/javascript"> 
/* 鼠标特效 */ 
var a_idx = 0; 
jQuery(document).ready(function($) { 
    $("body").click(function(e) { 
        var a = new Array("富强", "民主", "文明", "和谐", "自由", "平等", "公正" ,"法治", "爱国", "敬业", "诚信", "友善","石岸英"); 
        var $i = $("<span/>").text(a[a_idx]); 
        a_idx = (a_idx + 1) % a.length; 
        var x = e.pageX, 
        y = e.pageY; 
        $i.css({ 
            "z-index": 999999999999999999999999999999999999999999999999999999999999999999999, 
            "top": y - 20, 
            "left": x, 
            "position": "absolute", 
            "font-weight": "bold", 
            "color": "LightPink " 
        }); 
        $("body").append($i); 
        $i.animate({ 
            "top": y - 180, 
            "opacity": 0 
        }, 
        1500, 
        function() { 
            $i.remove(); 
        }); 
    }); 
}); 
</body>
<footer>
			<p align="center"><a>已有</a>
			
<script src="http://count.knowsky.com/count1/count.asp?id=177184&sx=1&ys=32" language="JavaScript" charset="gb2312"></script>
<a>人次访问</a>
			</p></footer>

</html>
