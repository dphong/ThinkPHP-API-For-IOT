<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"D:\web\api\public/../application/index\view\user\create.html";i:1498874623;s:61:"D:\web\api\public/../application/index\view\index\header.html";i:1498811777;s:61:"D:\web\api\public/../application/index\view\index\footer.html";i:1495591400;}*/ ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>注册用户</title>
<link charset="utf-8" rel="stylesheet" href="__PUBLIC__/css/common.css">
<link charset="utf-8" rel="stylesheet" href="__PUBLIC__/css/buttons.css">
<link charset="utf-8" rel="stylesheet" href="__PUBLIC__/css/style.css">
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
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
                window.location.href = "logout";
            }
            function create(){
                window.location.href = "create";
            }
            function home(){
                window.location.href = "/";
            }
            function login(){
                window.location.href = "login";
            }
        </script>
        <div class="headr">
            <span class="topTxt">
                <a href="javascript:void(0)" onclick="<?php echo empty($list->username)?"login":"home";?>()" class="username"  title='<?php echo empty($list->username)?"登录":$list->username;?>' ><?php echo empty($list->username)?"登录":$list->username;?></a>
                <span class="separ1">|</span>
                <a href="javascript:void(0)" onclick="<?php echo empty($list->username)?"create":"logout";?>()" class="exitLink"><?php echo empty($list->username)?"注册":"退出";?></a>
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
<script type="text/javascript" src="/static/js/Validform_v5.3.2.js"></script>
<script type="text/javascript" src="/static/js/passwordStrength.js"></script>

<h2>注册用户</h2>

<FORM method="post" class="login" action="<?php echo url('/index/user/add'); ?>">
    <table width="100%" style="table-layout:fixed;">
        <tbody>
            <tr>
                <td class="need" style="width:10px;">*</td>
                <td style="width:80px;">用户名：</td>
                <td style="width:240px;">
                    <input type="text" class="inputtxt" name="username" ajaxurl="/index/user/valid" datatype="s3-16" sucmsg=" "  nullmsg="请输入用户名" errormsg="用户名格式错误，请重新输入" />
                </td>
                <td>
                    <div class="Validform_checktip"></div>
                    <div class="info">用户名至少3个字符，最多16个字符
                        <span class="dec">
                            <s class="dec1">◆</s>
                            <s class="dec2">◆</s>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="need" style="width:10px;">*</td>
                <td style="width:80px;">密码：</td>
                <td style="width:240px;">
                    <input type="password" class="inputtxt" name="password" plugin="passwordStrength" datatype="*6-18" sucmsg=" "  nullmsg="请输入密码"  errormsg="密码格式错误，请重新输入" />
                </td>
                <td>
                        <div class="Validform_checktip"></div>
                        <div class="passwordStrength" style="display:none;"><b>密码强度：</b> <span>弱</span><span>中</span><span class="last">强</span></div>
                        <div class="info">密码至少6个字符，最多18个字符<span class="dec"><s class="dec1">◆</s><s class="dec2">◆</s></span></div>
                </td>
            </tr>
            <tr>
                <td class="need" style="width:10px;">*</td>
                <td style="width:80px;">确认密码：</td>
                <td style="width:240px;">
                    <input type="password" class="inputtxt" name="repassword" recheck="password" datatype="*6-18" sucmsg=" " nullmsg="请确认密码" errormsg="两次密码输入不一致" />
                </td>
                <td>
                    <div class="Validform_checktip"></div>
                    <div class="info">请确认密码
                        <span class="dec">
                            <s class="dec1">◆</s>
                            <s class="dec2">◆</s>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="need" style="width:10px;">*</td>
                <td style="width:80px;">电子邮箱：</td>
                <td style="width:240px;">
                    <input type="text" class="inputtxt" name="email" datatype="e" sucmsg=" "  nullmsg="请输入电子邮箱" />
                </td>
                <td>
                    <div class="Validform_checktip"></div>
                    <div class="info">请输入电子邮箱
                        <span class="dec">
                            <s class="dec1">◆</s>
                            <s class="dec2">◆</s>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="need" style="width:10px;"></td>
                <td style="width:80px;">昵称：</td>
                <td style="width:240px;">
                    <input type="text" class="inputtxt" datatype="*" name="nickname" sucmsg=" "  nullmsg="请输入昵称" errormsg="昵称格式错误，请重新填写" />
                </td>
                <td>
                    <div class="Validform_checktip"></div>
                    <div class="info">昵称可以是中文，但不得包含特殊字符
                        <span class="dec">
                            <s class="dec1">◆</s>
                            <s class="dec2">◆</s>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="need" style="width:10px;"></td>
                <td style="width:80px;">手机号码：</td>
                <td style="width:240px;">
                    <input type="text" class="inputtxt" datatype="m" name="telephone" sucmsg=" " nullmsg="请输入手机号码" errormsg="请输入正确的手机号码" />
                </td>
                <td>
                    <div class="Validform_checktip"></div>
                    <div class="info">请输入11位手机号码
                        <span class="dec">
                            <s class="dec1">◆</s>
                            <s class="dec2">◆</s>
                        </span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
<input type="hidden" name="flag" value=1 />
<INPUT type="submit" style="margin-top:18px; margin-left: 140px;" class="button button-rounded button-small button-primary" value="注册">
<br/><p style="padding: 26px 134px 10px;">已有账号？<a href="/login">登录</a></p>
</FORM>

<script>
    $('#captcha_image').click(function(){
        $(this).find('img').attr('src','/captcha.html?r='+Math.random());
    });
</script>
<script>

$(function(){
	var getInfoObj=function(){
			return 	$(this).parents("td").next().find(".info");
		}
	$("[datatype]").focusin(function(){
		if(this.timeout){clearTimeout(this.timeout);}
		var infoObj=getInfoObj.call(this);
		if(infoObj.siblings(".Validform_right").length!=0){
			return;	
		}
		infoObj.show().siblings().hide();
		
	}).focusout(function(){
		var infoObj=getInfoObj.call(this);
		this.timeout=setTimeout(function(){
			infoObj.hide().siblings(".Validform_wrong,.Validform_loading,.Validform_right").show();
		},0);
		
	});
	
	$(".login").Validform({
		tiptype:2,
                showAllError:true,
                ajaxPost:true,
		usePlugin:{
			passwordstrength:{
				minLen:6,
				maxLen:18,
				trigger:function(obj,error){
					if(error){
						obj.parent().next().find(".passwordStrength").hide().siblings(".info").show();
					}else{
						obj.removeClass("Validform_error").parent().next().find(".passwordStrength").show().siblings().hide();	
					}
				}
			}
		}
	});
})
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81001026-1', 'auto');
  ga('send', 'pageview');
 </script>
</div>
</center>
<footer class="mini-footer" id="bottom">
    <center>Copyright &copy; <?php echo date("Y");?> <a class="footer-icp" href="/">物联网智能管理平台</a> &nbsp;&nbsp;
        <a class="footer-icp" href="http://www.miitbeian.gov.cn/">皖ICP备17005522号-1</a></center>
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
