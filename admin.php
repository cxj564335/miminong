<?php
session_start();
if(isset($_SESSION['user']))
{
    $authority=$_SESSION['user']['authority'];
    if( $authority==10)
    {
        $_SESSION['adminlevel'] =2 ;//权限是2时才能访问到代理页面中的内容
    }else{
        unset($_SESSION['user']);
       echo "<script> alert('您权限不足不能登录');parent.location.href='/admin.php'; </script>"; 

        
    }
}  else {
    include 'admin/login.php';  //
}

if(isset($_GET['action']) && $_GET['action']=='quite'){
//销毁缓存
   session_destroy();
} 
if((isset($_GET['frameset']) && $_GET['frameset']=='left') ||(isset($_GET['left'])&&$_GET['left']!='index')){
  
 include "admin/left.php";

}elseif((isset($_GET['frameset']) &&$_GET['frameset']=='main') ||(isset($_GET['action'])&&$_GET['action']!='index')){

 include "admin/righ.php";
 
}else if(isset($_GET['frameset']) && $_GET['frameset']=='head'){
  
 include "admin/head.php";

}else{
 include "admin/index.php";
}