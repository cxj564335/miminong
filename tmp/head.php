<?php
    define('WZHOST',$_SERVER ['HTTP_HOST'].'/miminong');
    session_start();
    $conn=include 'model/conn.php';
    //print_r($conn);
    
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后�?-->
    <meta name="keywords" content="<?php echo $conn['keywords'];?>" />
    <meta name="description" content="<?php echo $conn['description'];?>" />
    <title><?php echo $conn['webtitle'];?></title>
    
    
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .nan  li    a:hover {
    text-decoration: none;
    background-color: #321;
}
        
    </style>
  </head>
  <body>
      <!--顶部内容-->
      <div class="container-fluid" style=" background-color: #F5F5F5; margin: 0px;padding: 0px">
        <div class="container" style="margin-bottom: 0px;padding-bottom: 0px" >
        <div class="row" style="margin-bottom: 0px;padding-bottom: 0px">
            
            <div class="col-sm-4 col-xs-6 col-sm-6">米米农miminong.com</div>
            <div class="col-sm-4 col-xs-0 col-sm-0"></div>
            
            <div class="col-sm-4 col-xs-6 col-sm-6">
                <ol class="breadcrumb" style="margin: 0px;height: 40">
                    <?php if(isset($_SESSION['user'])){ ?>
                    <li><a href="user.php">你好,<?php echo $_SESSION['user']['name'] ;?></a></li>
                    <li><a  href="user.php?action=logout">退出</a></li>
                    <li><a  href="user.php">我的个人中心</a></li>
               
                    <?php if($_SESSION['user']['authority'] ==10){ echo '<li><a  href="admin.php">管理后台</a></li>';} }else{?>
                    <li><a href="reg.php">注册</a></li>
                    <li><a  href="login.php">登录</a></li>
                    <li class="active">我的个人中心</li>
                    <?php }?>
              </ol>
            </div>
            
          </div>
      </div>
      </div>
      <!--logo内容-->
      <div class="container-fluid" style="background-color:#3CC4FB;">
          <div class="container" style="">
             
              <div style="margin: 0px; padding: 0px;">
                      <img src="img/logo.png" style="height: 90px; "/>
                    </div>
                  
              
           </div>
      </div>
      <!--导航内容-->
      <?php //print_r($_SERVER['REQUEST_URI'])?>
      <div class="container-fluid" style=" background-color: #2C3E50;margin-top: 0px;">
        
            <div class="container" >
                
                          <div class="row">

                              <div class="col-md-8 col-xs-6 col-sm-6">
                                  
                                  <ul class="nan nav navbar-nav" >
                                      <li <?php if($_SERVER['REQUEST_URI']=='/'||$_SERVER['REQUEST_URI']=='/index.php'){
                                        echo "style='background-color:#1c1c1c'"; }?>>
                                          <a href="index.php" style="color: #ffffff;">首页 <span class="sr-only">(current)</span></a>
                                      </li>
                                    <li <?php if($_SERVER['REQUEST_URI']=='/list.php'){
                                        echo "style='background-color:#1c1c1c'"; }?>>
                                        <a href="list.php" style="color: #ffffff">列表</a>
                                    </li>
                                    <li <?php if($_SERVER['REQUEST_URI']=='/map.php'){
                                        echo "style='background-color:#1c1c1c'"; }?>>
                                        <a href="map.php" style="color: #ffffff">导航</a>
                                    </li>
                                    

                                  </ul>
                              </div>

                              <div class="col-md-4 col-xs-6 col-sm-6">
                                  <form method="post" action="list.php" class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" name="realm" class="form-control" placeholder="请输入您要查找的域名">
                                    </div>
                                    <button type="submit" class="btn btn-default">搜索</button>
                                  </form>
                                  
                                  
                              </div>
                          
                        
                      </div>
                      
                    </div><!-- /.container-fluid -->
         
      </div>