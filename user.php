<?php
//引入头文件
    require_once 'tmp/head.php';
    //session_start();
   // print_r($_SESSION);
    if(!isset($_SESSION['user']))
    {
       echo "<script> alert('您尚未登录');parent.location.href='login.php'; </script>"; 

    }
    if(isset($_GET['action']))
    {
        if($_GET['action'] =='logout')
        {
            unset ($_SESSION['user']);
            echo "<script> alert('成功退出');parent.location.href='login.php'; </script>"; 
        }
       

    }
    
?>
<p></p>
<div class="container">
    <div class="row">
        <!--这里是个人中心左侧导航-->
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item active">我的个人中心</a>
                <a <?php if(isset($_GET['action'])&&$_GET['action'] =='mymeter'){    echo 'style="border-left:3px #337ab7 solid;"'; }?> href="?action=mymeter" class="list-group-item">我的米表</a>
                <a <?php if(isset($_GET['action'])&&$_GET['action'] =='myinfo'){    echo 'style="border-left:3px #337ab7 solid;"'; }?> href="?action=myinfo" class="list-group-item">个人设置</a>
                <a <?php if(isset($_GET['action'])&&$_GET['action'] =='domainlist'){    echo 'style="border-left:3px #337ab7 solid;"'; }?> href="?action=domainlist" class="list-group-item">域名管理</a>
<!--                
                <a href="#" class="list-group-item">其他服务</a>
                <a href="#" class="list-group-item">其他服务</a>
                <a href="#" class="list-group-item">其他服务</a>
                <a href="#" class="list-group-item">其他服务</a>
                <a href="#" class="list-group-item">其他服务</a>
                <a href="#" class="list-group-item">其他服务</a>
                <a href="#" class="list-group-item">其他服务</a>-->
                
            </div>
            
            
        </div>
        <!--这里是个人中心右侧主体部分-->
        <div class="col-md-10">
             <?php
			
                if(isset($_GET['action'])){
                    if($_GET['action'] =='mymeter')include 'tmp/mymeter.php'; //米表设置
                    else if($_GET['action'] =='myinfo')include 'tmp/myinfo.php'; //个人设置
                    else if($_GET['action'] =='domainlist')include 'tmp/domainlist.php'; //域名管理
                    
                    

                }else {
                    include 'tmp/mymeter.php'; //米表设置 ，设置这个为默认
                }
            ?>
        
        </div>
    </div>
</div>

<?php
//引入底部文件
    require_once 'tmp/foot.php';
?>