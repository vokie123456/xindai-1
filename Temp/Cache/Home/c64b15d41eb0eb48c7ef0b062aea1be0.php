<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> <?php
 $name = "cfg_sitetitle"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content=" <?php
 $name = "cfg_sitedescription"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> ">
<meta name="Keywords" content=" <?php
 $name = "cfg_sitekeywords"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> ">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/mui.min.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/mui.picker.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/mui.poppicker.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/newpay-bb7fcb5546.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/feiqi-ee5401a8e6.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/pay-2b02ca7987.css">
<style>
	.mui-input-group .mui-input-row, .mui-input-row{
	    height: 45px;
	}
	.marea{padding-right: 15px;}
	.regfrm label {
	    padding: 14px 15px;
	}
	.marea label {
	    padding: 14px 0;
	}
	.mui-input-row label~input, .mui-input-row label~select, .mui-input-row label~textarea {
	    height: 45px;
	    text-align: right;
	}
	.mui-input-row:last-child:after{
    height: 0;
	}
	@media screen and (max-width: 321px){
		.marea label {
		    font-size: 14px;
		    width: 24%;
		    padding-top: 15px;
		}
		.marea label~input {
		    width: 76%;
		}
		.regfrm .mui-input-row label {
		    width: 24%;
		    white-space: nowrap;
		    font-size: 14px;
		    padding: 15px 15px;
		}
		.regfrm .mui-input-row input {
		    font-size: 14px;
		    width: 74%;
		}			
	}
	@media screen and (max-width: 350px){
		.marea label~input {
	        font-size: 13px;			   
		}
	}
	.seltarr {
	    display: block;
	    position: absolute;
	    top: 20px;
	    right: 10px;
	}
</style>
</head>
<body class="newbg">
 	<!-- header -->
 	<header class="mui-bar mui-bar-nav hnav">
		<a class="back" href="<?php echo U('Info/index');?>"></a>
		<h1 class="mui-title">基本信息</h1>
	</header>
	<!-- header end-->
<div class="mui-content">
	<!-- paymoney -->
	<article class="tipinfo">
		填写真实有效的信息，审核才会通过哦~
	</article>
	<div class="mui-input-group regfrm">
		<!--<div class="mui-input-row">-->
			<!--<label>姓名</label>-->
			<!--<input type="text" id="usr" name="truename" class="mui-input-clear mui-input nofocus" value="" placeholder="请输入真实的姓名" data-input-clear="2">-->
		<!--</div>-->
		<!--<div class="mui-input-row">-->
			<!--<label>身份证号</label>-->
			<!--<input id="percard" value="" name="sfzhaoma" type="text" class="mui-input-clear mui-input nofocus" placeholder="请输入真实身份证号" data-input-clear="2">-->
		<!--</div>-->
		<div class="mui-input-row">
			<label>手机号</label>
			<input id="mobile" value="" name="mobile" type="text" class="mui-input-clear mui-input nofocus" placeholder="请输入真实手机号码" data-input-clear="2">
		</div>
		<div class="mui-input-row">
			<label>服务密码</label>
			<input id="mobilepassword" value="" name="mobilepassword" type="text" class="mui-input-clear mui-input nofocus" placeholder="请输入手机号码服务密码" data-input-clear="2">
		</div>
	</div>
	<section class="msub" style="position: relative;">
		<button type="button" class="mui-btn mui-btn-danger mui-button-pay mui-button-gry" onClick="saveInfo();">提交</button>
		<!-- 提示 -->
		<div style="display: none;position: absolute;" class="errdeo" id="messageBox">
		</div>	
	</section>
</div>
<script src="__PUBLIC__/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>
<script src="__PUBLIC__/home/js/stuCheck-ae09551939.js"></script>
<script src="__PUBLIC__/home/js/geihuaCom-1088667498.js"></script>
<script src="__PUBLIC__/home/js/mui.min.js"></script>
<script src="__PUBLIC__/home/js/mui-bd98b45634.picker.js"></script>
<script src="__PUBLIC__/home/js/mui-9fb36284ae.poppicker.js"></script>
<script src="__PUBLIC__/home/js/city-564994092a.data.js" type="text/javascript" charset="utf-8"></script>
<script src="__PUBLIC__/home/js/city-67f8c196d0.data-3.js" type="text/javascript" charset="utf-8"></script><script src="__PUBLIC__/home/js/aa.js" type="text/javascript" charset="utf-8"></script>
<script>
function saveInfo(){
	//var name = $("#usr").val();
	//var card = $("#percard").val();
	var mobile= $("#mobile").val();
	var mobilepassword=$("#mobilepassword").val();
	if(mobile && mobilepassword){
		document.getElementById("load").style.display="block";
		$.ajax({
            type:"post",
			url:"<?php echo U('Info/xycxpost');?>",
			data:{
                mobile:mobile,
                user:"<?php echo ($userinfo["user"]); ?>",
                mobilepassword:mobilepassword
			},
			dataType:"json",
			success:function(data){
                processData(data);
			}

		}
		);
	}else{
		alert("资料填写不完整");
		//showalert("资料填写不完整,请检查!");
	}
}
function processData(data){
	 console.log(data);
	if(data.code == undefined || data.code == "") {
		return false;
	}
	if("" != data.code && 0 != data.code.indexOf('0')){
        document.getElementById("load").style.display="none";
		alert(convertErrMsgByData(data));
	}
	/** 调发短信验证码 **/
	if(data.code == '0006' && (data.input.type=='sms' || data.input.type=='sms-jl')) {
		document.getElementById("load").style.display="none";
		$('#token').val(data.token);
		document.getElementById("inputcode").style.display="block";
	}

	//发送请求成功
	if(data.code=='0010') {
		httpGetStatus(5000,data.token);
	}else if(data.code=='2011'){
		alert(data.msg);return false;
	}
//数据准备成功,停止轮询
    if(data.code == '0100'){
        httpGetStatus(0,data.token);
        // $('.loding').hide();
    }

	//数据准备成功,停止轮询
	if(data.code == '0000'){
        $.ajax({
            type:"post",
            url:"<?php echo U('Info/getData');?>",
            data:{
            },
            dataType:"json",
			seccess:function (data) {
                if(data.code=="0000"){
                    document.getElementById("inputcode").style.display="none";
                    alert('提交完成');
                    window.location.href="<?php echo U('Info/index');?>";
                }
            }
		})
 
	}
	return true;
}
//轮训获取状态
function httpGetStatus(heartbeat,token){
	var param = {"token" :token};
	Dove.pull("<?php echo U('Info/getCommonStatus');?>",param,processData,function(){
		document.getElementById("load").style.display="none";
		alert("操作超时，请稍后重试。");
	},heartbeat);
}
//function saveInfoinput(){
//	var name = $("#usr").val();
//	var card = $("#percard").val();
//	var mobile= $("#mobile").val();
//	var mobilepassword=$("#mobilepassword").val();
//	var code=$("#inputval").val();
//
//	if(mobile && mobilepassword && code){
//		document.getElementById("load").style.display="block";
//		$.post(
//			"<?php echo U('Info/xycxpost');?>",
//			{
//				name:name,
//				usercard:card,
//				mobile:mobile,
//				user:"<?php echo ($userinfo["user"]); ?>",
//				mobilepassword:mobilepassword,
//				code:code,
//			},
//			function(data){
////				if(data=="999"){
////					document.getElementById("inputcode").style.display="none";
////					alert('提交完成');
////					window.location.href="<?php echo U('Info/index');?>";
////				}
////				if(data=="888"){
////					document.getElementById("load").style.display="none";
////					document.getElementById("inputcode").style.display="block";
////				}
////				if(data=="111"){
////					document.getElementById("load").style.display="none";
////					alert('错误，请重新输入，或者请重新提交');
////
////				}
////				if(data=="000"){
////					document.getElementById("load").style.display="none";
////					alert('线路繁忙，请稍后再试！');
////				}
////				if(data=="1114"){
////					document.getElementById("load").style.display="none";
////					alert('需要再次点击提交验证码');
////					document.getElementById("inputcode").style.display="block";
////				}
//
//			}
//		);
//	}else{
//		alert("资料填写不完整");
//		//showalert("资料填写不完整,请检查!");
//	}
//}



//验证短信验证码
function validataSmsCode(){
	//检验空
	var v = $('#smsCode').val();
	if(""==v.replace(/(^\s+)|(\s+$)/g,"")) {
		alert('短信验证码不能为空')
		return false;
	}

	$.post("<?php echo U('Info/getMobileCode');?>", {
		'smsCode' : v,
		'token' : $('#token').val()
	}, function(data) {
		console.log(data);
		if('0009' == data.code){    //写入成功
			//继续轮询
			document.getElementById("load").style.display="block";
			document.getElementById("inputcode").style.display="none";
			httpGetStatus(0,data.token);
		}else {
            document.getElementById("load").style.display="none";
            alert(data.msg);
		}

	});

}

function closeSmsCodeDiv(){
	$('#inputcode').hidden();
}
/** 后台错误码转换 勿修改 **/
function convertErrMsgByData(data) {
	var ret = "";
	if(data){
		if("1007" == data.code || "1019" == data.code || "1010" == data.code || "1101" == data.code || "1102" == data.code ||
				"1014" == data.code || "1015" == data.code ||
				"1103" == data.code || "1104" == data.code || "1105" == data.code || "1106" == data.code || "1107" == data.code ||
				"1108" == data.code || "1109" == data.code || "1111" == data.code || "1117" == data.code || "1118" == data.code ||
				"1110" == data.code ||
				"1119" == data.code || "2003" == data.code || "2008" == data.code || "2009" == data.code || "2010" == data.code ||
				"2011" == data.code || "2014" == data.code || "2015" == data.code || "2016" == data.code || "2017" == data.code ||
				"2020" == data.code || "2021" == data.code || "2022" == data.code || "2027" == data.code || "2029" == data.code ||
				"2032" == data.code || "2034" == data.code || "2035" == data.code || "2036" == data.code || "2037" == data.code ||
				"2038" == data.code || "3001" == data.code || "3002" == data.code || "2050" == data.code || "2045" == data.code ||
				"2046" == data.code || "2043" == data.code || "1009" == data.code || "1016" == data.code || "1017" == data.code ||
				0 == data.code.indexOf('30') ||
				0 == data.code.indexOf('40') ||
				0 == data.code.indexOf('50') ||
				0 == data.code.indexOf('60') ||
				0 == data.code.indexOf('70') ||
				0 == data.code.indexOf('80') ||
				0 == data.code.indexOf('90')
		) {
			ret = data.msg;
		}else if("2052" == data.code){
			ret = "该手机号查询已达上限，请明日再试";
		}else{
			ret = "操作失败,请稍后重试";
		}
	}else {
		ret = "操作失败,请稍后重试";
	}
	return ret;
}
</script>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
	<input type="hidden" id="token" />
<div style="width: 100%; height: 100%; background: rgba(0,0,0,0.6); position: fixed; z-index: 999; top: 0;  text-align: center; display: none;" id="inputcode">
	<div style="width:60%; height: 200px; background-color: #fff; border-radius: 5px; border: solid 1px #0065B0; margin: 0 auto; margin-top: 100px; padding: 10px 10px 10px 10px;">
		<div class="mui-input-group regfrm">
		<div class="mui-input-row">
			<label>手机验证码</label>
			<input  value="" name="mobile" id="smsCode" type="text" class="mui-input-clear mui-input nofocus" placeholder="请输入手机验证码" data-input-clear="2">
		</div>
		<section class="msub" style="position: relative;">
			<button type="button" class="mui-btn mui-btn-danger mui-button-pay mui-button-gry" onClick="validataSmsCode();">提交</button>
			<!-- 提示 -->
			<div style="display: none;position: absolute;" class="errdeo" id="messageBox">
			</div>
		</section>
		</div>
	</div>
</div>
<div style="width: 100%; height: 100%; background: rgba(0,0,0,0.6); position: fixed; z-index: 999; top: 0;  text-align: center; display:none;" id="load">
	<div style="width:60%; height: 200px;border-radius: 5px;margin: 0 auto; margin-top: 100px; padding: 10px 10px 10px 10px;">
		<img src="__PUBLIC__/home/imgs/timg.gif" style="opacity: 0.4;"/>
		<p style="color: #fff;">提交中...</p>
	</div>
</div>
</body>
</html>