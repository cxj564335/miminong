<?php

session_start();
//在页首先要开启session,
//error_reporting(2047);
session_destroy();
//将session去掉，以每次都能取新的session值;
//引入数据库类

require_once  '../controller/pdomysql.class.php';
//echo '111'; 
$pdo=new pdomysql();
    $status = 1;
    $msg = '';
    $user=$_POST['user'];
    $pwd=$_POST['pwd'];
    $idcode=$_POST['idcode'];
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
     $reg = $pdo->getOne("select * from mi_user where user = '".$user."'");
     
     if($reg){
            $password=  md5($pwd);
            if($password==$reg['password'])
            {
                session_start();
                $_SESSION['user'] =$reg;
                 $status = 0;
                $msg = '登录成功';
            }else{
                $status = 1;
                $msg = '账号或者密码错';
            }
      } 
    

$data = array( 'status' => $status,
                  'msg' => $msg

);
echo json_encode($data);