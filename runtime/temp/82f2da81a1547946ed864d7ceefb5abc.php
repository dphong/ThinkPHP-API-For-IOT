<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"D:\web\api\public/../application/api\view\map\show.html";i:1495591400;s:59:"D:\web\api\public/../application/api\view\index\header.html";i:1495591400;s:59:"D:\web\api\public/../application/api\view\index\footer.html";i:1495591400;}*/ ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>数据查询</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link charset="utf-8" rel="stylesheet" href="__PUBLIC__/css/common.css">
<link charset="utf-8" rel="stylesheet" href="__PUBLIC__/css/buttons.css">
<style>
body , html,
/*#all{width:1001px}   overflow:hidden;*/
#allmap {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
#container{height:100%;width:1001px}
#name{height:28px;width:1000px}
#result{margin:auto 0;height:33px;}
#bp10{height:5px}
body{
    color: #333;
    font: 16px Verdana, "Helvetica Neue", helvetica, Arial, 'Microsoft YaHei', sans-serif;
    margin: 0px;
    padding: 0px;
}
#centre{height:100%;width:1001px}
a{
    color: #868686;
    cursor: pointer;
}
a:hover{
    text-decoration: underline;
}
h2{
    color: #4288ce;
    font-weight: 400;
    padding: 6px 0;
    margin: 6px 0 0;
    font-size: 28px;
    border-bottom: 0px solid #eee;
    margin-bottom: 35px;
}
.text{
    margin-bottom: 10px;
}

div{
margin:8px;
}
.info{
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}

.copyright{
    margin-top: 35px;
    padding: 12px 0;
 /* border-top: 0px solid #eee;*/
    clear: both;
    background: #eee;
 /*   margin-top: 10px; */
}

body, div, h1, h2, h3, h4, h5, h6, p, ul, ol, form, dl, dt, dd {
    margin: 0;
}
.head {
    background: #f5f5f5;
    position: relative;
    z-index: 1;
}
.headin {
    width: 1000px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    height: 75px;
}
.logo {
    height: 100%;
    width: 154px;
    position: absolute;
    left: 0px;
    background: url(__PUBLIC__/photo/logo.jpg) no-repeat left center;
}
.logoTxt {
    position: absolute;
    top: -100px;
}
.nav {
    position: absolute;
    bottom: 0;
    left: 380px;
}
.nav li {
    float: left;
    width: 92px;
    height: 75px;
}
.nav li a {
    float: left;
    padding-left: 22px;
    padding-right: 22px;
    font-size: 14px;
    line-height: 75px;
}
.headr {
    float: right;
    margin-right: 5px;
}
.username {
    display: inline-block;
    width: 40px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: top;
}
.topTxt {
    font-size: 12px;
    line-height: 75px;
}
.username, .exitLink {
    color: #666;
}
.separ1 {
    color: #bbb;
    position: relative;
    top: -1px;
    margin-left: 8px;
    margin-right: 8px;
}
.username, .exitLink {
    color: #666;
}
Inherited from body
body {
    font-family: 'Microsoft Yahei';
    font-size: 14px;
    color: #333;
    line-height: 1.5;
}
.auto1 {
    margin-left: auto;
    margin-right: auto;
    width: 1000px;
}
.fix {
}
.pb30 {
    padding-bottom: 30px;
}
.pt20 {
    padding-top: 20px;
}
Pseudo ::after element
.fix:after {
    display: table;
    content: '';
    clear: both;
}
.lbar {
    float: left;
    width: 180px;
    padding-bottom: 8px;
}
.lNav1 {
    border-right: 1px solid #ddd;
    width: 130px;
}
.lNav1li {
    margin-bottom: 10px;
    position: relative;
    left: 1px;
}
.lNav1-liOn a {
    color: #dc4a3b;
    border-right-color: #dc4a3b;
}
.lNav1a {
    display: block;
    color: #999;
    cursor: pointer;
    line-height: 30px;
    border-right: 1px solid #ddd;
    font-size: 15px;
}
ul, ol {
    padding-left: 0;
    list-style-type: none;
}
.rmain1 {
    width: 800px;
    float: right;
    min-height: 600px;
}
.rmain1 .intro {
    width: 100%;
    padding-top: 0;
    margin-bottom: 20px;
}
.intro {
    color: #aaa;
    text-align: left;
    width: 1000px;
    margin: 0 auto;
    padding-bottom: 10px;
    padding-top: 20px;
    font-size: 13px;
    border-bottom: 1px dotted #bbb;
}
.intro a {
    color: #aaa;
    text-decoration: none;
    width: 100%;
    text-align: left;
    margin-right: 2px;
    margin-left: 2px;
}
.table1 {
    margin-bottom: 50px;
}
.table1 th {
    width: 100px;
    text-align: right;
    padding: 0;
    vertical-align: top;
    height: 32px;
    line-height: 32px;
    padding: 6px 0;
    font-weight: normal;
}
.table1 td {
    padding: 6px 0 6px 20px;
    height: 32px;
    line-height: 32px;
    vertical-align: top;
}
.reds {
    color: #f00;
}
.btn1 {
    height: 32px;
    line-height: 32px;
    text-align: center;
    background: #fe9388;
    color: #fff;
    font-size: 14px;
    display: inline-block;
    padding: 0 20px;
}

.mt10 {
    margin-top: 10px;
}
.footer {
    clear: both;
    background: #eee;
    margin-top: 10px;
}
.fmenu {
    width: 700px;
    float: left;
}
.footer dl:first-child {
    margin-left: 0px;
}
.footer dl {
    float: left;
    margin-left: 100px;
}
.footer dt {
    padding-bottom: 10px;
    font-size: 16px;
}
.footer a {
    color: #777;
    font-size: 12px;
    line-height: 1.8;
}
.address {
    float: right;
    padding-top: 25px;
    color: #aaa;
    font-size: 13px;
    text-align: right;
}
.teltxt {
    font-size: 26px;
    color: #333;
    margin-bottom: 2px;
}
.mini-footer {
    box-sizing: border-box;
    margin-top: 20px;
    padding: 10px;
    height: 40px;
    background-color: #bbb;
    align-items: center;
}
a.footer-icp {
    text-transform: none;
    text-decoration: none;
    color: #363636;
}
a.footer-icp:hover {
    color: #777777;
}
</style>
<script type="text/javascript" src="__PUBLIC__/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
</head>
<body>
    
<div class="head">
    <div class="headin">
        <a href="/" class="logo"><h1 class="logoTxt">IOT</h1></a>
        <ul class="nav">
            <li class="navi"><a href="/" id="service">开发者</a></li>
            <li class="navi"><a href="/sample" id="cases">API</a></li>
            <li class="navi"><a href="/map" id="device">设备</a></li>
        </ul>
            <script type="text/javascript">
            function logout(){
                window.location.href = "/logout";
            }
            function create(){
                window.location.href = "/create";
            }
            function home(){
                window.location.href = "/";
            }
            function login(){
                window.location.href = "/login";
            }
        </script>
        <div class="headr">
            <span class="topTxt">
                <a href="javascript:void(0)" onclick="<?php echo empty($user->username)?"login":"home";?>()" class="username"  title='<?php echo empty($user->username)?"登录":$user->username;?>' ><?php echo empty($user->username)?"登录":$user->username;?></a>
                <span class="separ1">|</span>
                <a href="javascript:void(0)" onclick="<?php echo empty($user->username)?"create":"logout";?>()" class="exitLink"><?php echo empty($user->username)?"注册":"退出";?></a>
            </span>
        </div>
    </div>
    <!--div style="display: none;">
          <iframe src="/views/pushlet/sessionout.jsp">
               不支持iframe
          </iframe>
          <iframe src="/views/pushlet/kickoff.jsp">
            不支持iframe
          </iframe>
    </div-->
</div>
<center>
<div id="centre">
<style>
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:16px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
        text-align:center;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table tr:hover
{
    background-color:#bbbbdd;
}
a.lefta{
    float: left;
    text-align: left;
}

</style>
<!--a class="lefta" href="/index/user/data">返回</a-->
<div class="intro"><a href="/">用户中心</a>&gt;&nbsp;<a href="/index/user/data">查看数据</a>&gt;&nbsp;查看MAP数据</div>
</br><h2>MAP数据</h2></br></br>
    <table class="hovertable">
        <tr id="onmouseover">
            <th style="width:19%">经度</th>
            <th style="width:19%">纬度</th>
            <th style="width:29%">信息</th>
            <th style="width:33%">时间</th>
        </tr>
        <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr id="lat">
            <td>
                <?php echo $v['lng']; ?>
            </td>
            <td>
                <?php echo $v['lat']; ?>
            </td>
            <td>
                <?php echo $v['code']; ?>
            </td>
            <td>
                <?php echo $v['create_time']; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</br></br>
<style>
    ul li{
    float: left; list-style:none;
}
</style>
    <?php echo $list->render(); ?>
</div>
</center>
<footer class="mini-footer" id="bottom">
    <center>Copyright &copy; <?php echo date("Y");?> <a class="footer-icp" href="/">物联网智能管理平台</a> &nbsp;&nbsp;<a class="footer-icp" href="http://www.miitbeian.gov.cn/">皖ICP备17005522号-1</a></center>
<script>
    var adjustFooter = function() {
        if( ($('#bottom').offset().top + $('#bottom').outerHeight(true) )<$(window).height() ) {
            var footerBottom = $(window).height() - $('#bottom').outerHeight(true) - $('#bottom').offset().top;
            footerBottom = Math.floor(footerBottom) + 20;
            $('#bottom').css({'bottom': '-' + footerBottom + 'px', 'position': 'relative'});
        }
    };
    var $ = jQuery;
    $(document).ready(function() {
        adjustFooter();
    });
</script>
</footer>
</body>
</html>