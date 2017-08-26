<?php

session_start();
//在页首先要开启session,
//error_reporting(2047);
session_destroy();
//将session去掉，以每次都能取新的session值;
//引入数据库类
require_once  '../controller/pdomysql.class.php';
$pdo=new pdomysql();
    date_default_timezone_set('Asia/Shanghai'); 
    $status = 1;
    $msg = '';
    $user=$_POST['user'];
    $pwd=$_POST['pwd'];
    $name=$_POST['name'];
    $idcode=$_POST['idcode'];
     $time=  time();//时间戳
    require_once  'ip.class.php';
    $ip=ip();//IP地址
    if( isset($_POST["idcode"]) and $idcode!=$_SESSION["idcode"])
    {
       exit(json_encode( array( 'status' => 1,
          'msg' => '验证码输入有误', )) );
    }
    if(isset($_POST["user"])=="")
    {
        exit(json_encode( array( 'status' => 1,
          'msg' => '账号或者密码不能为空', )) );
         
    }
     if( isset($_POST["pwd"]) and strlen($pwd) < 6 || strlen($pwd) > 18)exit(json_encode( array( 'status' => 1,
          'msg' => '密码必须大于6位小于18位', )) );
     //查找用户是否被注册
     $reg = $pdo->getOne("select user from mi_user where user = '".$user."'");
     
     if($reg){
      $status = 1;
      $msg = '已被其他人注册';
      }  else {
          $password=  md5($pwd);
          $reg = $pdo->add('mi_user',array('user'=>$user,'name'=>$name,'password'=>$password,'time'=>$time,'ip'=>$ip));
          if($reg){
              $status = 0;
            $msg = '注册成功';
          }
           
          
      }
    

$data = array( 'status' => $status,
                  'msg' => $msg

);
echo json_encode($data);