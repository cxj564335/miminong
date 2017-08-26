<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    require_once  'controller/pdomysql.class.php';
    $pdo=new pdomysql();
    //利用左连接获取该域名信息以及域名主人的店铺信息
    $details=$pdo->getOne("select * from mi_domain as do left join mi_table as ta on do.own_id=ta.uid where do.id=$id");
    //print_r($details);
    //右侧显示该用户的最近发布9个域名
    if(!$details){
        echo "<script> alert('很遗憾，没有找到指定的域名信息。');location.href='index.php'; </script>"; 
    }
    $uid=$details['own_id'];
    $mydo=$pdo->getAll("select * from mi_domain where own_id=$uid and statu>0 and sell=0 ORDER BY time DESC limit 9");
}

