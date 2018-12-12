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
		<div class="mui-input-row">
			<label>姓名</label>
			<input type="text" id="usr" name="truename" class="mui-input-clear mui-input nofocus" value="<?php echo ($userinfo["name"]); ?>" placeholder="请输入真实的姓名" data-input-clear="2">
		</div>
		<div class="mui-input-row">
			<label>身份证号</label>
			<input id="percard" value="<?php echo ($userinfo["usercard"]); ?>" name="sfzhaoma" type="text" class="mui-input-clear mui-input nofocus" placeholder="请输入真实身份证号" data-input-clear="2">
		</div>
	</div>
	<article class="tipinfo">
		<p>*须本人身份证，且内容清晰可辨</p>
		<p>*请您确认拍照权限已开启</p>
	</article>
	<div class="mui-input-group regfrm">
    <section> 
	   <!-- 证件 -->	
			<!-- pho -->
		<div class="sfzwrap prel">
   			<div class="phoes" id="mode1" class="uploader-list">
   				<input type="hidden" id="sfz_zm" />
	   				<div class="sfzp" id="sfz_zm_div">
		   				<img src="__PUBLIC__/home/imgs/uppic1.png" alt="" / >
		   			</div>
		   			<div style="display:none;">
		   				<input type="file" id="sfz_zm_input" onchange="uploadImg('sfz_zm','sfz_zm_div',this);" />
		   			</div>
				<div class="hcamera pab" onclick="Selfile('sfz_zm_input');">
					<img src="__PUBLIC__/home/imgs/hcamera.png" alt="">
				</div>
				<div class="sfztip pab">身份证正面照扫描上传</div>
		 	</div>	
		</div>
	   	<!-- pho -->
	   	 <!-- pho -->
	   		<div class="sfzwrap prel">
	   			<div class="phoes" id="mode2" class="uploader-list">
	   				<input type="hidden" id="sfz_fm" />
		   			<div class="sfzp" id="sfz_fm_div">
		   				<img src="__PUBLIC__/home/imgs/uppic2.png" alt="" />
		   			</div>
		   			<div style="display:none;">
		   				<input type="file" id="sfz_fm_input" onchange="uploadImg('sfz_fm','sfz_fm_div',this);" />
		   			</div>
		   	<div class="hcamera pab" onclick="Selfile('sfz_fm_input');">
		   		<img src="__PUBLIC__/home/imgs/hcamera.png" alt="">
		   	</div>
		   	<div class="sfztip pab">身份证反面照扫描上传</div>
	   			</div>
	   		</div>
	   	<!-- pho -->
		   <!-- 证件 end-->
		   <!-- 证件 -->
		   	<!-- pho -->
		   		<div class="sfzwrap prel h130">
		   			<div class="phoes" id="mode3" class="uploader-list">
		   				<input type="hidden" id="sfz_sc" />
			   			<div class="sfzp"  id="sfz_sc_div">
			   				<img src="__PUBLIC__/home/imgs/uppic3.png" alt="" />
			   			</div>
			   			<div style="display:none;">
			   				<input type="file" id="sfz_sc_input" onchange="uploadImg('sfz_sc','sfz_sc_div',this);" />
			   			</div>
			   			<div class="hcamera pab" onclick="Selfile('sfz_sc_input');">
			   			 	<img src="__PUBLIC__/home/imgs/hcamera.png" alt="">
			   			</div>
			   			<div class="sfztip pab">手持身份证照扫描上传</div>
		   			</div>
		   		</div>
		   	<!-- pho -->
		   <!-- 证件 end-->
	</div>
	</article>
	</section>
	</div>
	<section class="msub" style="position: relative;">
		<button type="button" class="mui-btn mui-btn-danger mui-button-pay mui-button-gry" onclick="saveInfo();">提交</button>
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
<script src="__PUBLIC__/home/js/city-67f8c196d0.data-3.js" type="text/javascript" charset="utf-8"></script>
<script>
var isupload = false;
//判断如果已经上传了图片就显示
var sfz_zm = "<?php echo ($userinfo["cardphoto_1"]); ?>";
var sfz_fm = "<?php echo ($userinfo["cardphoto_2"]); ?>";
var sfz_sc = "<?php echo ($userinfo["cardphoto_3"]); ?>";
if(sfz_zm != ''){
	$("#sfz_zm").val(sfz_zm);
	$("#sfz_zm_div").html('<img src="'+sfz_zm+'">');
}
if(sfz_fm != ''){
	$("#sfz_fm").val(sfz_fm);
	$("#sfz_fm_div").html('<img src="'+sfz_fm+'">');
}
if(sfz_sc != ''){
	$("#sfz_sc").val(sfz_sc);
	$("#sfz_sc_div").html('<img src="'+sfz_sc+'">');
}

$('#sel').change(function(){
	change('sel','sela')
});
$('.inputblur').click(function(){
	$(this).blur();
	$('.nofocus').blur();
});

function showalert(msg){
	$("#messageBox").html(msg);
	$("#messageBox").show();
	setTimeout(function(){
		$("#messageBox").hide();
	},2000);
}
function Selfile(inputid){
	if(isupload != false){
		showalert("其他文件正在上传...请稍后");
	}else{
		$("#"+inputid).click();
	}
}
function uploadImg(hiddenid,divid,obj){
	var filename = $(obj).val();
    if(filename != '' && filename != null){
    	isupload = true;
        var pic = $(obj)[0].files[0];
        var fd = new FormData();
        fd.append('imgFile', pic);
        $.ajax({
            url:"__PUBLIC__/main/js/kindeditor/php/upload_json.php",
            type:"post",
            dataType:'json',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success:function(data){
                if(data && data.error == '0'){
              		showalert("上传成功");
                    var imgurl = data.url;
                    $("#"+divid).html('<img src="'+imgurl+'">');
                    $("#" + hiddenid).val(imgurl);
                }else{
                	showalert("上传出错了...");
                }
            },
            error:function (){
				showalert("上传出错了...");
            }
        });
        isupload = false;
    }
    isupload = false;
}

function checkval(val_){
	if(val_ == '' || val_ == null){
		return false;
	}else{
		return true;
	}
}

//保存资料
function saveInfo(){
	var name = $("#usr").val();
	var card = $("#percard").val();
	var cardphoto_1 = $("#sfz_zm").val();
	var cardphoto_2 = $("#sfz_fm").val();
	var cardphoto_3 = $("#sfz_sc").val();
	if(checkval(name) && checkval(card) && checkval(cardphoto_1) && checkval(cardphoto_2) && checkval(cardphoto_3)){
		$.post(
			"<?php echo U('Info/baseinfo');?>",
			{
				name:name,
				usercard:card,
				cardphoto_1:cardphoto_1,
				cardphoto_2:cardphoto_2,
				cardphoto_3:cardphoto_3
			},
			function (data,state){
				if(state != "success"){
					showalert("请求数据失败,请重试!");
				}else if(data.status == 1){
					showalert("保存成功!");
					window.location.href = "<?php echo U('Info/index');?>";
				}else{
					showalert(data.msg);
				}
			}
		);
	}else{
		showalert("资料填写不完整,请检查!");
	}
}
</script>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>