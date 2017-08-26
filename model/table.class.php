<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    require_once  'controller/pdomysql.class.php';
    $pdo=new pdomysql();
    //通过get传递来的id获取到米表的信息
    $tab=$pdo->getOne("select * from mi_table where id=$id");
    //print_r($tab);
    if($tab){
        $uid=$tab['uid'];//从米表获取到uid号
        //通过uid获取一口价列表
        $yikoujia=$pdo->getAll("select * from mi_domain where own_id=$uid and price>0 and statu>0 and sell=0 ORDER BY time DESC");
        //通过uid获取议价列表
        $yijia=$pdo->getAll("select * from mi_domain where own_id=$uid and price=0 and statu>0 and sell=0 ORDER BY time DESC");
        //通过uid获取已经出售列表
        $del=$pdo->getAll("select * from mi_domain where own_id=$uid and statu>0 and sell=1 ORDER BY time DESC");
    }else{
        echo "<script> alert('很遗憾，没有找到对应的米表信息。');location.href='index.php'; </script>"; 
    }
}  else {
    echo "<script> alert('很遗憾，没有找到对应的米表信息。');location.href='index.php'; </script>"; 
    die();
}
    
