<?php
session_start();
require '../controller/ValidateCode.class.php';  //先把类包含进来，实际路径根据实际情况进行修改。
$_vc = new ValidateCode();  //实例化一个对象
$_vc->doimg();  
$_SESSION['idcode'] = $_vc->getCode();//验证码保存到SESSION中


//setsession();//读取session
//function setsession($time=300){
//session_set_cookie_params($time);
//session_save_path(dirname(__FILE__)."sessoin/"); //设置sessoin 位置 可以更改
//session_start();
//setcookie("PHPSESSID", session_id(), time() + $time);
//
//}
