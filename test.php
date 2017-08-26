<?php
//header("Content-Type:text/html;charset=utf-8");
//
//phpinfo();
//  require_once 'controller/conn.class.php';
//  $CONN=include "model/conn.php";
// // print_r($CONN);
//  $config=array('admin'=>'cxj564335');
//if(is_array($config)) $config_new = array_merge($CONN,$config);
//
//arr2file('model/conn.php',$config_new);
$file=dirname(__FILE__);
echo $file;
require_once  $file. '/Controller/pdomysql.class.php';
echo '111111111';

?>