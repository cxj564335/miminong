<?php

$uid=$_SESSION['user']['uid'];

require_once  'controller/pdomysql.class.php';
$pdo=new pdomysql();
$myusers=$pdo->getAll("select * from mi_user where uid=$uid");
if(!empty($myusers)){
    $myuser=$myusers[0];
}
if(isset($_POST['tijiao']))
{
   
    if(!empty($myusers)){
       // print_r($_POST);
       unset($_POST['tijiao']);
      $xiu=$pdo->update('mi_user', $_POST,"uid=$uid");
       echo "<script> alert('修改成功');parent.location.href='user.php?action=myinfo'; </script>"; 
    }  else {
        
        echo "<script> alert('创建成功');parent.location.href='user.php?action=mymeter'; </script>"; 
       
    }
}