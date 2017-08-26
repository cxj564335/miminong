<?php
    define('WZHOST',$_SERVER ['HTTP_HOST'].'/miminong');
    session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>米米农|米农网|米表网|域名交易|域名发表</title>
    
   
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
      <div class="container-fluid" style=" background-color: #F5F5F5;height: 40px;">
        <div class="container">
        <div class="row">
            
            <div class="col-sm-4 breadcrumb">米米农-miminong.com</div>
            <div class="col-sm-5"></div>
            
            <div class="col-sm-3">
                <ol class="breadcrumb">
                    <?php if(isset($_SESSION['user'])){ ?>
                    <li><a href="user.php">你好,<?php echo $_SESSION['user']['uid'] ;?></a></li>
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
      <div class="container-fluid" style="background-color:#3CC4FB;height: 100px">
          <div class="container">
              <img src="../img/logo.png"/>
          </div>
      </div>
      <!--导航内容-->
      <div class="container-fluid" style=" background-color: #2C3E50">
        
            <div class="container" >
                

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <div class="row">

                              <div class="col-md-8">
                                  
                                  <ul class="nan nav navbar-nav" >
                                    <li class="active"><a href="index.php" style="color: #ffffff;">首页 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="list.php" style="color: #ffffff">列表</a></li>
                                    <li><a href="#" style="color: #ffffff">数字</a></li>
                                    <li><a href="#" style="color: #ffffff">字母</a></li>
                                    <li><a href="#" style="color: #ffffff">拼音</a></li>
                                    <li><a href="#" style="color: #ffffff">杂米</a></li>
                                    <li><a href="#" style="color: #ffffff">精品</a></li>

                                  </ul>
                              </div>

                              <div class="col-md-4">
                                  <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="请输入您要查找的域名">
                                    </div>
                                    <button type="submit" class="btn btn-default">搜索</button>
                                  </form>
                                  
                                  
                              </div>
                          
                        
                      </div>
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
         
      </div>