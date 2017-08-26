<?php
if(isset($_POST['realm']) and isset($_POST['newadd']))
{
    date_default_timezone_set('Asia/Shanghai'); 
    $realm =$_POST['realm'];//域名
    $content=$_POST['content'];//介绍
    $price=$_POST['price'];//价格
    $p_address=$_POST['p_address'];//购买地址
    //$enroll =$_POST['enroll'];//注册商
    $sell =$_POST['sell'];//是否出售或者是否显示
    $type =$_POST['type'];//域名的类型
    if(isset($_POST['advert'])){
        $advert=$_POST['advert'];//首页推送
    }
    if(isset($_POST['sort'])){
        $advert=$_POST['sort'];//竞价
    }
    //判断传递进来的价格是不是数字
    if(is_numeric($price)){
        $price=sprintf("%.2f", $price);
    }else{
        $price="0.00";
    }
    
    $suffix = strstr($realm, '.');//后缀
    $len=strpos($realm, '.');
    $time=  time();//时间戳
    require_once  'ip.class.php';
    $ip=ip();//IP地址
    //print_r($_POST);//
    $own_id=$_SESSION['user']['uid'];
    //echo $own_id;
    if($realm!='')//如果域名不为空开始执行写入操作
    {
        require_once  'controller/pdomysql.class.php';
        $pdo=new pdomysql();
        if($_SESSION['adminlevel'] ==2){
            $args=array('reaml_len'=>$len,'realm'=>$realm,'content'=>$content,'price'=>$price,'p_address'=>$p_address,'sell'=>$sell,'type'=>$type,'suffix'=>$suffix,'time'=>$time,'ip'=>$ip,'own_id'=>$own_id,'advert'=>$advert,'sort'=>$sort);
        }else{
            $args=array('reaml_len'=>$len,'realm'=>$realm,'content'=>$content,'price'=>$price,'p_address'=>$p_address,'sell'=>$sell,'type'=>$type,'suffix'=>$suffix,'time'=>$time,'ip'=>$ip,'own_id'=>$own_id);
        }
        $add=$pdo->add('mi_domain', $args);
        if ($add)
        {
              if($_SESSION['adminlevel'] ==2){
                echo "<script> alert('新增数据成功');location.href='?action=list'; </script>"; 
            }  else {
                echo "<script> alert('新增数据成功');parent.location.href='user.php?action=domainlist'; </script>"; 
            }
        }
        
    }
}
if(isset($_POST['realm']) and isset($_POST['xiugai']))
{
    
    unset($_POST['xiugai']); 
    //判断传递进来的价格是不是数字
    if(is_numeric($_POST['price'])){
        $_POST['price']=sprintf("%.2f", $_POST['price']);
    }else{
        $_POST['price']="0.00";
    }
   // print_r($_POST);
    if($_POST['id']>0)//如果id大于0开始执行修改操作
    {
        require_once  'controller/pdomysql.class.php';
        $pdo=new pdomysql();
        $xiu=$pdo->update('mi_domain', $_POST,"id=$_POST[id]");
        if ($xiu)
        {
            if($_SESSION['adminlevel'] ==2){
                echo "<script> alert('修改数据成功');location.href='?action=list'; </script>"; 
            }  else {
                echo "<script> alert('修改数据成功');parent.location.href='user.php?action=domainlist'; </script>"; 
            }
            
        }
        
    }
}
if(isset($_POST['realm']) and isset($_POST['delete']))
{
    //print_r($_POST);
    $id=$_POST['id'];
    //先查询这个id的域名属于谁的；
    require_once  'controller/pdomysql.class.php';
    $pdo=new pdomysql();
    $wen=$pdo->fetOne('mi_domain','*','id='."$id".'');
    //print_r($wen);
    $own=$_SESSION['user']['uid'];
    if($wen['own_id']==$own or $_SESSION['adminlevel'] ==2)
    {
        $del=$pdo->delete('mi_domain', 'id='."$id".'');
    }
      if($_SESSION['adminlevel'] ==2){
                echo "<script> alert('删除成功');location.href='?action=list'; </script>"; 
            }  else {
                echo "<script> alert('删除成功');parent.location.href='user.php?action=domainlist'; </script>"; 
            }
}


?>