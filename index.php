<?php require_once 'config.inc.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>译点通专业翻译</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/js.js"></script>
</head>

<body>
<!--header star-->
<div id="header"> 
<div class="head_top">
<div class="head_top1">
<div class="qq_tu"><img src="images/qq.png" width="32" height="36" /></div><div class="qq">1436681558</div>
<div class="phone_tu"><img src="images/phone.png" width="32" height="36" /></div><div class="phone">400-050-6071</div>
</div>
</div>
<div class="head_logo"><img src="images/logo.jpg" width="354" height="82" /></div>
</div>

<!--header end-->
<div class="clearfloat"></div>

<!--nav star-->
<div id="nav">
<div class="tabHead tab_li_js">
	<ul>
    	<li class="cur" chgId="show_01"><a href="javascript:void(0)" class="cur">快速翻译</a></li>
        <li chgId="show_02"><a href="javascript:void(0)">文档翻译</a></li>
       <div class="tuijian">使用译点通翻译服务，满50送8G优盘一个</div>
    </ul>
</div>
<div class="tabwap tab_ul_js">
  <ul class="active" chgId="show_01"><li>
  <div class="y_list">
	<div class="y_info_tra">

<form action="fast.php" method="post">		
		<div class="cont">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<td>选择语言 <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td>
					<div class="yuzhongselect">
						<p onclick="" id="start_lan_p">请选择</p>
    	<ul class="ulselect u490" id="startlanulselect" style="z-index: 9; display: none;">
<?php foreach($config['fastTranslateLanguages'] as $k => $v): ?>
<!---->
<li id="" onclick="tc('start_lan_p','start_lan_<?php echo $k; ?>','<?php echo $v; ?>','startlanulselect')"><?php echo $v; ?></li>
 <!---->
<?php endforeach; ?>    
    	</ul>
    	</div>
						
       <div style="display: none;">
<?php foreach($config['fastTranslateLanguages'] as $k => $v): ?>
 <!---->
 <input value="<?php echo $k; ?>" name="language" id="start_lan_<?php echo $k; ?>" type="radio"><?php echo $v; ?><br>
<!---->
<?php endforeach; ?>    


<?php foreach($config['qualityLevels'] as $k => $v): ?>
<!---->        	
<input value="<?php echo $k; ?>" name="qualityLevels" id="qualityLevelsselect_1" type="radio"><?php echo $v; ?>
<!---->        	
<?php endforeach; ?>    

  </div>
					</td>				
				</tr>
<!--
				<tr>
					<td>翻译级别 <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td>
					
					<div class="yuzhongselect" style="float: left;">
						<p onclick="" id="qualityLevelsselect_p">请选择</p>
    	<ul class="ulselect u170" id="qualityLevelsselect" style="z-index: 9; display: none;">
        
<?php foreach($config['qualityLevels'] as $k => $v): ?>
<li id="" onclick="tc('qualityLevelsselect_p','qualityLevelsselect_<?php echo $k; ?>','<?php echo $v; ?>','qualityLevelsselect')"><?php echo $v; ?></li>
<?php endforeach; ?>    
  		
    	</ul>
    	</div> <div style="float: left; line-height: 35px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#service" style=" color:#f29a3c; text-decoration:none;">翻译级别说明</a></div>
						
					</td>				
				</tr>
				<tr>
					<td width="10%">标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题</td>
					<td width="90%">
							<input name="title" id="title" class="cont_text" value="标题可不填" onfocus="if(this.value=='标题可不填'){this.value='';}" onblur="if(this.value==''){this.value='标题可不填';}" style="width:700px;" type="text">
						
					</td>				
				</tr>
-->
				<tr>
					<td valign="top">内&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;容 <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td><textarea style="width:710px; height:150px; border:solid 1px #e0e0e0; background:#f2f2f2;  " name="content" id="content" onkeydown="checknum()" onkeyup="checknum()"></textarea><p>翻译内容最多不超过3000字,超过3000字请将内容粘贴至记事本或word，通过 <a href="#" style="color:#F00">上传文档进行下单。</a></p>
						
					           
		            </td>
									
				</tr>
				<tr>
					<td valign="top">需求备注 </td>
					<td>
						<input name="demand" id="demand" class="cont_text" placeholder="如翻译领域、用途、专业词汇等相关说明" style="width:700px;" type="text">
					</td>				
				</tr>
				<tr>
				<tr>
					<td valign="top">手机号码 <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td>
						<input name="phone" id="phone" class="cont_text" placeholder="可获得免费翻译状态短信提醒" style="width:700px;" type="text">
					</td>				
				</tr>
				<tr>
					<td valign="top">邮箱  <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td>
						<input name="email" id="email" class="cont_text" placeholder="用于接收翻译结果" style="width:700px;" type="text">
					</td>				
				</tr>
				
			</tbody></table>
			<div class="y_info_btns">
			<input class="submit" name="Submit" id="submit" value="提 交" type="submit">
       	    <input name="id" value="" type="hidden"></div>
		</div>
</form>
		<br>
	</div>
</div>
  </li></ul>
  <ul chgId="show_02"><li>
  <div class="y_info_tra">
<form action="file.php" method="post">	
		<div class="cont">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<td>选择语言 <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td>
					<div class="yuzhongselect">
						<p onclick="" id="start_lan_p">请选择</p>
    	<ul class="ulselect u490" id="startlanulselect" style="z-index: 9">
<?php foreach($config['fileTranslateLanguages'] as $k => $v): ?>
<!---->
<li id="" onclick="tc('start_lan_p','start_lan_ch_en','<?php echo $v; ?>','startlanulselect')"><?php echo $v; ?></li>
<!---->
<?php endforeach; ?>
    	</ul>
    	</div>
						
       <div style="display: none;">
<?php foreach($config['fileTranslateLanguages'] as $k => $v): ?>
 <!---->
 <input value="<?php echo $v; ?>" name="FileForm[language]" id="start_lan_ch_en" type="radio"><?php echo $v; ?><br>
<!---->
<?php endforeach; ?>
  </div>
					</td>				
				</tr>
				<tr>
					<td width="10%">文件上传 <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td width="90%">
							<input name="FileForm[document]" id="FileForm_document" class="cont_text" style="width:400px;" type="file"><br>
<span style="font-size:12px; color:#666">请上传doc、docx、txt、pdf、rar、zip格式的文件。如有多个文件，请打包后上传，上传文件大小不能超过20M。</span>
						
					</td>				
				</tr>
				<tr>
					<td valign="top">手机号码 <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td>
						<input name="FileForm[phone]" id="FileForm_phone" class="cont_text" placeholder="可获得免费翻译状态短信提醒" style="width:700px;" type="text">
					</td>				
				</tr>
				<tr>
					<td valign="top">邮箱  <span style="color:#F00;font-size:16px;line-height:30px">*</span></td>
					<td>
						<input name="FileForm[email]" id="FileForm_email" class="cont_text" placeholder="用于接收翻译结果" style="width:700px;" type="text">
					</td>				
				</tr>
                <tr>
                <td></td>  <td style="font-size:12px; color:#666">友情提示：文档订单客服未与您确认字数价格之前，订单不记录。工作日客服会在10分钟内处理。</td>
                </tr>
			</tbody></table>
			<div class="y_info_btns">
			<input class="submit" name="submit" id="submit" value="提 交" type="submit">
       	    </div>
		</div>
</form>    
	</div>
  </li></ul>
  
</div>


<div class="tabHead_fuwu tab_li_js">
	<ul>
    	<li class="cur" chgId="show_03"><a href="javascript:void(0)" class="cur" name="service">服务说明</a></li>
        <li chgId="show_04"><a href="javascript:void(0)">价格说明</a></li>
        <li chgId="show_05"><a href="javascript:void(0)">等级说明</a></li>
        <li chgId="show_06"><a href="javascript:void(0)">下单流程</a></li>
    </ul>
</div>
<div class="tabwap_fuwu tab_ul_js">
  <ul class="active" chgId="show_03"><li>
  <div class="service">
  <p>传神译点通是中国奥运会的独家多语合作伙伴，世博会唯一合作伙伴，CCTV-国际频道独家合作伙伴。</p>
  <div class="chengluo">
  <div style="font-size:18px; color:#ec4503; float:left; font-weight:bolder;">我们的服务承诺：</div>
  <div style="font-size:18px; float:left; font-weight:bolder;">终生质保 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 无偿修订</div></div>
  <div class="biaoge">
  <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#fff" style="color:#666666; border:1px solid #ebebeb; font-size:14px;">
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">实力强</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;" >国家的各种资质和证书上百种，世界级的语言服务专利56项，亚洲首个云翻译服务平台的语言服务企业</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">多语种</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">英语、日语、韩语、德语、法语、俄语、西班牙语、阿拉伯语、葡萄牙语、意大利语等等30多个语种</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">高效率</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">最快1分钟可以交付，中国唯一拥有语联网平台和云翻译技术的公司，公司人数900多人，专职外籍翻译160人，兼职译员4万多人</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">种类多</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">笔译（企业简介、产品说明、合同、讲稿、简历、证件 论文 等等），口译（工作、生活陪同、交传口译、同声传译）等</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">领域广</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">石油、石化、汽车、法律、通讯、出版、会展、能源、电力等50多个领域</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">高保密</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">国家最高级翻译保密机制，保证客户资料的私密性、安全性，泄露赔偿</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">高精确</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">拥有中国顶尖的翻译团队和专职外籍翻译，保证翻译质量准确无误</td>
  </tr>
</table>
<br><br>
  </div>
  </div>
  </li></ul>
  <ul chgId="show_04"><li>
  <div class="jiage">
  <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#fff" style="color:#666666; border:1px solid #ebebeb; font-size:14px;">
  <tr>
    <td bgcolor="#ebebeb" height="40" width="10%" align="center">质量等级</td>
    <td bgcolor="#ebebeb" width="10%" align="center">中译英</td>
    <td bgcolor="#ebebeb" width="10%" align="center">英译中</td>
    <td bgcolor="#ebebeb" width="20%" align="center">文档用途</td>
    <td bgcolor="#ebebeb" width="20%" align="center">译员配置;</td>
    <td bgcolor="#ebebeb" width="20%" align="center">处理流程</td>
    <td bgcolor="#ebebeb" width="10%" align="center">售后服务</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" align="center" height="100">标准</td>
    <td bgcolor="#ebebeb" align="center">188元/千字</td>
    <td bgcolor="#ebebeb" align="center">288元/千字</td>
    <td bgcolor="#ebebeb" align="center">适用于一般性的论文发表，不适用于专业性极强领域（小型期刊发表）</td>
    <td bgcolor="#ebebeb" align="center">5年经验，累计翻译字数达200万</td>
    <td bgcolor="#ebebeb" align="center">译员翻译+2轮标准审校+质检抽验</td>
    <td rowspan="3" bgcolor="#ebebeb" align="center">无偿修订</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" align="center" height="100">专业</td>
   
        <td width="66" bgcolor="#ebebeb" align="center"><p>238元/千字 </p></td>
      
    <td bgcolor="#ebebeb" align="center">388元/千字</td>
    <td bgcolor="#ebebeb" align="center">适用于专业性要求较高的论文，对专业性及译者极高要求(核心期刊发表)</td>
    <td bgcolor="#ebebeb" align="center">5-10年经验，累计翻译字数达500万，根据细分领域分单</td>
    <td bgcolor="#ebebeb" align="center">译员翻译+3轮专业审校+质检抽验</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" align="center" height="120">母语</td>
    <td bgcolor="#ebebeb" align="center">348元/千字</td>
    <td bgcolor="#ebebeb" align="center">528元/千字</td>
    <td bgcolor="#ebebeb" align="center">适用于母语人群，满足其宗教背景，文化背景，以及阅读习惯等，要求译者是经验丰富的外籍人士</td>
    <td bgcolor="#ebebeb" align="center">经验丰富的外籍译员，5年以上，累计翻译字数达500万</td>
    <td bgcolor="#ebebeb" align="center">资深译员翻译，外籍译员润色，责任编辑质检</td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#ebebeb" align="center">备注</td>
    <td colspan="6" bgcolor="#ebebeb" height="30" style="padding-left:5px;">1、字数均按照原文统计。</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#ebebeb" height="30" style="padding-left:5px;">2、对于证书、证件等不可编辑的文档，统一按份报价。</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#ebebeb" height="30" style="padding-left:5px;">3、排版、打印、盖章等都是额外的服务，收费另计。</td>
  </tr>
</table>

  </div>
  </li></ul>
  <ul chgId="show_05"><li>
  <div class="dengji">
  <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#fff" style="color:#666666; border:1px solid #ebebeb; font-size:14px;">
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">实力强</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;" >国家的各种资质和证书上百种，世界级的语言服务专利56项，亚洲首个云翻译服务平台的语言服务企业</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">多语种</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">英语、日语、韩语、德语、法语、俄语、西班牙语、阿拉伯语、葡萄牙语、意大利语等等30多个语种</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">高效率</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">最快1分钟可以交付，中国唯一拥有语联网平台和云翻译技术的公司，公司人数900多人，专职外籍翻译160人，兼职译员4万多人</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">种类多</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">笔译（企业简介、产品说明、合同、讲稿、简历、证件 论文 等等），口译（工作、生活陪同、交传口译、同声传译）等</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">领域广</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">石油、石化、汽车、法律、通讯、出版、会展、能源、电力等50多个领域</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">高保密</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">国家最高级翻译保密机制，保证客户资料的私密性、安全性，泄露赔偿</td>
  </tr>
  <tr>
    <td bgcolor="#ebebeb" width="86" height="35" align="center">高精确</td>
    <td bgcolor="#ebebeb" style="padding-left:10px;">拥有中国顶尖的翻译团队和专职外籍翻译，保证翻译质量准确无误</td>
  </tr>
</table>

  </div>
  </li></ul> 
  <ul chgId="show_06"><li>
  <div class="liucheng">
  <div class="liucheng1">
  <div class="liucheng1_tu">用户注册翻译</div>
  <div class="liucheng1_zi"><img src="images/jian.jpg" width="50" height="42" /></div>
  <div class="liucheng1_tu">用户注册翻译</div>
  <div class="liucheng1_zi"><img src="images/jian.jpg" width="50" height="42" /></div>
  <div class="liucheng1_tu">用户注册翻译</div>
  <div class="liucheng1_zi"><img src="images/jian.jpg" width="50" height="42" /></div>
  <div class="liucheng1_tu">用户注册翻译</div>
  </div>
  <div class="liucheng2">
  <div class="liucheng1_zi1"><img src="images/jian1.jpg" width="40" height="42" /></div>
  <div class="liucheng1_tu">用户注册翻译</div>
  <div class="liucheng1_zi"><img src="images/jian.jpg" width="50" height="42" /></div>
  <div class="liucheng1_tu">用户注册翻译</div>
  <div class="liucheng1_zi"><img src="images/jian.jpg" width="50" height="42" /></div>
  <div class="liucheng1_tu1">订单完成</div>
  <div class="liucheng1_zi"><img src="images/jian.jpg" width="50" height="42" /></div>
  <div class="liucheng1_tu">用户注册翻译</div>
  </div>
  </div>
  </li></ul> 
</div>

<div class="fukuan" >
<div class="fukuan_top" id="fuguan" ></div>
<div class="fukuanl">
<div class="fukuanl_tu"><img src="images/pay.jpg" width="110" height="46" /></div>
<div class="fukaunl_zi">支付宝：</br> 
zfb@yeedt.com</div>
</div>
<div class="fukuanm">
<div class="fukuanm_tu"><img src="images/pay1.jpg" width="226" height="46" /></div>
<div class="fukaunm_zi">北京银行账户<br>
帐户名称： 传神联合（北京）信息技术有限公司<br>
开户行： 中国工商银行北京建国路支行<br>
帐号： 0200 0419 1920 0115 963</div>
</div>
<div class="fukuanr">
<div class="fukuanr_tu"><img src="images/pay2.jpg" width="138" height="46" /></div>
<div class="fukaunr_zi">武汉银行账户<br>
帐户名称： 武汉传神信息技术有限公司<br>
开户行： 招商银行武汉分行东湖支行<br>
帐号： 275 5838 8991 0001</div>
</div>
</div>

<div class="wenti">
<div class="kong" id="wenti"></div>
<div class="wen">1)翻译完了，怎么接收翻译结果？</div>
<div class="ti">答：翻译完毕，我们将会把翻译结果发送到您当时注册账号时所填写的邮箱中，另外，我们将会有一个短信提醒直接发到您当时注册的手机号上。</div>
<div class="wen">2)翻译之后觉得不满意，怎么办？</div>
<div class="ti">答：若您觉得翻译质量有任何不满意的地方，可以直接拨打我们的客服热线400-050607-1，或者是直接跟我们的客服QQ：1436681558联系，或者发
邮件到邮箱kefu@yeedt.com。</div>
<div class="wen">3)你们的字数是怎么统计的？</div>
<div class="ti">答：我们的字数统计方法：字数统计按照WORD工具中的字符数（不计空格）为准；文件中如包括文本框、页眉页脚、图片文字批注等应另外统计，
与字符数（不计空格）相加形成总字数。</div>
<div class="wen">4)你们按照什么计费的呢？</div>
<div class="ti">答：当中文与其他语种互译，一律以中文字数计费，单位为：千中文字；字数均按照原文统计。</div>
<div class="wen">5)提交之后我多久可以拿到翻译结果？</div>
<div class="ti">答：如果您的论文字数在10000字以内，3个工作日左右即可，如果您的论文字数超过10000字，5-7个工作日左右。</div>
<div class="wen">6)发票你们怎么寄给我呢？</div>
<div class="ti">答：如您需要提供发票，请第一时间与客服QQ：1436681558，提供您的订单号、发票抬头、收件地址、收件人以及手机号，我们将会把发票给您
邮寄过去。
</div>
</div>

<div class="tishi"><span style="font-weight:bolder;">友情提示：</span>市场上一些翻译公司，聘请不专业翻译人员，本身也没有科学的翻译质量管理体系制度，他们只有低廉的价格去吸引客户，但是往往会给客户带来的损失
相当惨重，这样的失败案例不计其数，请消费者不要因为价格低那么一点点，就盲目消费而导致因小失大。</div>
</div>
<!--nav end-->
<div class="clearfloat"></div>


<!--bottom star-->
<div class="bottom">
<div class="bottom_font">
<p>本服务由人大经济论坛与传神译点通专业翻译联合推出　　服务电话：400-050-6071　　QQ:1436681558</p>
<span>© 2005-2013 译点通专业翻译 | 京ICP备08001822号</span> 
</div></div>


<div id="tbox">
    <div class="fudong">
    <div class="jianxi"></div>
    <div class="fudong1"><a href="#service">服务说明</a></div>
    <div class="fudong1"><a href="#fuguan">付款方式</a></div>
    <div class="fudong1"><a href="#wenti">常见问题</a></div>
     <div class="fudong2">服务电话<br>400-050-6071</div>
      <div class="fudong4">QQ在线<br>1436681558</div>
    <div class="fudong3"><a id="gotop" href="javascript:void(0)"></a></div>
    
    </div>
	
</div>
<!--bottom end-->
<div class="clearfloat"></div>
<script>
/*tag标签切换方法 
*tab：被点击标签,tabDom：被点击标签类型,tabActive：高亮Class;
*target：目标标签,targetDom：目标标签类型,tagActive：高亮Class;*/
function tabChange(tab,tabDom,tabActive,target,targetDom,tagActive){
	$(tab).find(tabDom).die().live("click",function(){
		var chgId = $(this).attr("chgId");
		$(this).addClass(tabActive).siblings(tabDom).removeClass(tabActive);
		$(target+" > "+targetDom+"[chgId="+chgId+"]").addClass(tagActive).siblings(targetDom).removeClass(tagActive);
	});
}
//方法调用
tabChange(".tab_li_js","li","cur",".tab_ul_js","ul","active");
</script>
<script>
function check()
{
	if(document.getElementById('content').value=="")
	{
		alert('请填写您需要翻译的内容');
		return false;
	}
	if(document.getElementById('start_lan_p').innerHTML=="请选择")
	{
		alert('请选择您需要翻译的语言');
		return false;
	}
	if(document.getElementById('qualityLevelsselect_p').innerHTML=="请选择")
	{
		alert('请选择您需要翻译的级别');
		return false;
	}
	var content = document.getElementById('content').value;
	
	if(content.length > 3000)
	{
		alert('翻译内容最多不能超过3000字');
		return false;
	}

	if(document.getElementById('phone').value=="")
	{
		alert('请输入您的手机号码');
		return false;
  }
  var phone = document.getElementById('phone').value;
  var pattern = /^1[3|4|5|8][0-9]\d{4,8}$/;
  chkFlag = pattern.test(phone);
  if(!chkFlag){
    alert("手机号码的格式不正确！");
    document.getElementById('phone').focus();
    return false;
  }

	if(document.getElementById('email').value=="")
	{
		alert('请输入您的邮箱地址');
		return false;
	}
  var email = document.getElementById('email').value;
  var pattern = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
  chkFlag = pattern.test(email);
  if(chkFlag){
    return true;
  }
  else
  {
    alert("邮箱地址的格式不正确！");
    document.getElementById('email').focus();
    return false;
  }
	var input = document.getElementById("submit");
  input.disabled = 'disabled';
	
}
	

function showSelect(id)
{
	if(document.getElementById(id).style.display=='block')
	{
		document.getElementById(id).style.display='none';
	}
	else
	{
		document.getElementById(id).style.display='block';
	}
}
function tc(start_lan_p,start_lan_k,v,ulid)
{
	document.getElementById(start_lan_p).innerHTML=v;
	document.getElementById(ulid).style.display='none';
	document.getElementById(start_lan_k).checked=true;
}
$(function(){
	$('#start_lan_p').click(function(e){
		showSelect('startlanulselect');
		e.stopPropagation();
	});
	$('#qualityLevelsselect_p').click(function(e){
		showSelect('qualityLevelsselect')
		e.stopPropagation();
	});


	//点击空白处隐藏弹出层
     $(document).click(function(e){
        var target  = $(e.target);
        if(target.closest("#startlanulselect").length == 0 || target.closest("#qualityLevelsselect").length ){
            $("#startlanulselect").hide();
            $("#qualityLevelsselect").hide();
        }
     });
});

</script>
</body>
</html>
