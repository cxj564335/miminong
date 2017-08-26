<?php

$uid=$_SESSION['user']['uid'];

require_once  'controller/pdomysql.class.php';
$pdo=new pdomysql();
 $mytabs=$pdo->getAll("select * from mi_table where uid=$uid");
// print_r($mytabs);
if(!empty($mytabs)){
    $mytab=$mytabs[0];
}

if(isset($_POST['tijiao']))
{
   
    if(!empty($mytabs)){
       // print_r($_POST);
       unset($_POST['tijiao']);
      $xiu=$pdo->update('mi_table', $_POST,"uid=$uid");
       echo "<script> alert('修改成功');parent.location.href='user.php?action=mymeter'; </script>"; 
    }  else {
        unset($_POST['tijiao']); 
        $_POST['time']=time();
        $_POST['id']=null;
        $_POST['uid']=$uid;
        $add=$pdo->add('mi_table', $_POST);
        echo "<script> alert('创建成功');parent.location.href='user.php?action=mymeter'; </script>"; 
       
    }
}