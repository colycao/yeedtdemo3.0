<?php
$config = array(
    'yeedt_id' => 'coly123@qq.com', //译点通帐号
    'yeedt_key' => md5('123456'), //译点通密码
    'requestUrl' => "http://demo.yeedt.com", //请求译点通
    //'returnUrl' => "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}returnUrl.php",
    'returnUrl' => "http://{$_SERVER['HTTP_HOST']}/ren_da/returnUrl.php",
    'fastTranslateLanguages' => array(
        'ch_en' => '中文->英文',
        'en_ch' => '英文->中文',
    ),
    'fileTranslateLanguages' => array(
	    "ch_en" => "中文->英文",
		"ch_ja" => "中文->日文",
		"ch_fr" => "中文->法文",
		"ch_de" => "中文->德文",
		"ch_ru" => "中文->俄文",
		"ch_kr" => "中文->韩文",
		"ch_es" => "中文->西班牙语",
		"ch_ar" => "中文->阿拉伯语",
		"en_ch" => "英文->中文",
		"ja_ch" => "日文->中文",
		"fr_ch" => "法文->中文",
		"de_ch" => "德文->中文",
		"ru_ch" => "俄文->中文",
		"kr_ch" => "韩文->中文",
		"es_ch" => "西班牙语->中文",
		"ar_ch" => "阿拉伯语->中文"
    ),
	'qualityLevels' => array(
		'1' => '标准',
		'2' => '专业',
		'3' => '母语',
	),
);

//提交数据至一个地址，不需要跳转，
//PostHttpRequest("http://o2.dev.transn.net/api/order/createorder/","order_info={$enarr}");
function PostHttpRequest($url, $params="")
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, 1.0);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        ob_start();
        curl_exec($ch);
        $data=ob_get_contents();
        ob_end_clean();
        curl_close ($ch);
        return $data;
    }
?>
