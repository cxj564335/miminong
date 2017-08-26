<?php
    require_once  'controller/pdomysql.class.php';
    //print_r($_POST);
    if(isset($_POST)){
       $where='';
       if(isset($_POST['realm'])&&$_POST['realm']!='')
       {
           $realm=$_POST['realm'];
           $where.=" and realm  Like '%$realm%'";
       }
       if(isset($_POST['type'])&&$_POST['type']!='')
       {
           $type=$_POST['type'];
           $where.=" and type=$type";
       }
       if(isset($_POST['suffix'])&&$_POST['suffix']!='')
       {
           $suffix=$_POST['suffix'];
           $where.=" and suffix='$suffix'";
       }
       if(isset($_POST['reaml_len'])&&$_POST['reaml_len']!='')
       {
           $reaml_len=$_POST['reaml_len'];
           if($reaml_len<10){
               $where.=" and reaml_len=$reaml_len";
           }else{
               $where.=" and reaml_len>=10";
           }
           
       }
       
       
       
       
    }
    if(isset($_GET['page'])){
           $page=$_GET['page'];
       }  else {
           $page=1;
       }
    //从这条数据开始
    $num=($page-1)*20;
    
    $pdo=new pdomysql();
    //获取到该页的信息
    $arr=$pdo->getAll("select * from mi_domain where statu>0 and sell=0 $where ORDER BY time DESC LIMIT $num,20");
    $zong=$pdo->getone("select count(*) as zong from mi_domain where statu>0 and sell=0 $where ORDER BY time");
    //页数
    $pagenum=ceil($zong['zong']/20);
    
    //print_r($pagenum);
    $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
