<?php
require_once 'global.php';

if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['password']))
{
  if ($yeedt_id == $_POST['email'] && $yeedt_key == md5($_POST['password']))
  {
    session_start();
    $_SESSION['username'] = $yeedt_id;
    header("Location: trans.php");
  }
  else
    //echo "帐号或密码错误！";
    echo '<script type="text/javascript">alert("帐号或密码错误！");</script>'; 
}

include 'tpl/login.htm';
?>
