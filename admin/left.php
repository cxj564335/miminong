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
html,body{
    height: 100%;
    width: 100%;
}
        
    </style>
  </head>
  <body style="border-right-style : groove;border-color :#B8D3E1 ;height: 100%">
      <div >
            <?php if(!isset($_GET['left'])||$_GET['left']=='common' ){
                //常用和默认
                ?>
            <ul class="nav nav-pills  nav-stacked">
              <li role="presentation" class="active"><a href="#">常用设置</a></li>
              <li role="presentation"><a href="#">模板设置</a></li>
              <li role="presentation"><a href="#">皮肤设置</a></li>
              <li role="presentation"><a href="#">日志中心</a></li>

            </ul>
            <?php }?>
            <?php if(isset($_GET['left'])&&$_GET['left']=='global' ){
                //全局设置
                ?>
            <ul class="nav nav-pills  nav-stacked">
              <li role="presentation" class="active"><a href="?action=setting" target="main">核心设置</a></li>
              <li role="presentation"><a href="#">伪静态</a></li>
              <li role="presentation"><a href="#">内容过滤</a></li>
              <li role="presentation"><a href="#">友情链接</a></li>
              <li role="presentation"><a href="#">ip限制</a></li>
              <li role="presentation"><a href="#">顶部导航设置</a></li>
              <li role="presentation"><a href="#">客服信息设置</a></li>



            </ul>
            <?php }?>
            <?php if(isset($_GET['left'])&&$_GET['left']=='domain' ){
                //全局设置
                ?>
            <ul class="nav nav-pills  nav-stacked">
              <li role="presentation" class="active"><a href="?action=list" target="main">域名列表</a></li>
              <li role="presentation" ><a href="?action=sylist" target="main">首页推送</a></li>
              <li role="presentation" ><a href="?action=bid" target="main">竞价排名</a></li>
              



            </ul>
            <?php }?>
            
          
      </div>
  </body>
</html>