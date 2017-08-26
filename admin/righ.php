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
       <?php 
            if(isset($_GET['action']))
            {
                $path= $_GET['action'];
                include "tmp/$path.php";
            }  
       ?>
      <div class="container-fluid text-center" >
         Powered by miminong V1.0.0 © 2015 - 2026 Cenwor Inc.  
      </div>
    
  </body>
</html>