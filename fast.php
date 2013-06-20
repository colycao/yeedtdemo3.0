<?php
require_once 'config.inc.php';
if (isset($_POST))
{
    $info = array();
    $info['yeedt_id']           = $config['yeedt_id'];
    $info['yeedt_key']          = $config['yeedt_key'];
    $info['contentArr']         = json_encode(array(array('content' => strip_tags($_POST['content']))));
    $info['qualityLevels']      = 2;    //默认为专业级
    $info['translateLanguages'] = $_POST['language'];
    $info_je = json_encode($info);
    //var_dump($info);
    //var_dump($config['requestUrl']);
    $data = PostHttpRequest($config['requestUrl'] . "/interface/getWordCount","info={$info_je}");
    $data = json_decode($data, true);
    //var_dump($data);
    if ($data['errcode'])
    {
        echo $data['errcode'];exit();
    }
    else
        $data = $data['info'];
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<p><span>字数：</span> <?php echo $data['wordCount']; ?></p>
<p><span>价格：</span> <?php echo $data['price']; ?></p>
<p><span>预计完成时间：</span> <?php echo $data['posttime']; ?></p>

<form action="<?php echo $config['requestUrl']; ?>/interface/webtrans" method="post">
<input type='hidden' name='content' value='<?php echo $info["contentArr"]; ?>'>
<input type='hidden' name='language' value='<?php echo $info['translateLanguages'] ?>'>
<input type='hidden' name='qualityLevels' value='2'>
<input type='hidden' name='yeedt_id' value="<?php echo $config['yeedt_id']; ?>">
<input type='hidden' name='yeedt_key' value="<?php echo $config['yeedt_key']; ?>">
<input type="hidden" name="proxy_key" value="[1]">
<input type='hidden' name='returnUrl' value="<?php echo $config['returnUrl']; ?>">
<input type='hidden' name='f_demand' value="<?php echo $_POST['demand']; ?>">
<input type='hidden' name='f_email' value="<?php echo $_POST['email']; ?>">
<input type='hidden' name='f_phone' value="<?php echo $_POST['phone']; ?>">
<p>
<input class='submit' type='button' onclick="window.location='index.php'" name='button' value='放弃翻译'>
<input class='submit' type='submit' name='Submit' value='确认翻译'>
</p>
</form>
