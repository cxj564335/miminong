<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>米米农|后台管理系统</title>
    
   
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
  <body style="background: #222 url('img/bei.jpg');">
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
     
      
<div class="container" >
	
		  <div class="row" style="margin-bottom:60px">
			
			<div class='col-md-6 col-md-offset-3' style="background: #EBF2FA;padding: 0px">
                            <div style="background:#0E6D9D;margin :0px;">
                                <h1 class='text-center' ><b style="color:#fff">后台管理系统</b></h1>
				
                                
                            </div>
				<br/>
				<from class='form-horizontal' >
					 <div class="form-group" >
						<label for="exampleInputEmail1" class='col-md-3 control-label'>用户名：</label>
						<div class='col-md-6'>
							<input type="text" class="form-control" id="user" placeholder="请输入用户名">
						</div>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1" class='col-md-3 control-label'>密码：</label>
						<div class='col-md-6'>
						<input type="password" class="form-control" id="pwd" placeholder="请输入密码">
						</div>

					  </div>
						
						<div class="form-group">
                                                        <label for="yzm" class='col-md-3 control-label'>验证码：</label>
                                                        <div class='col-md-3'>
                                                        <input type="text" class="form-control" id="idcode" placeholder="请输入验证码">
                                                        <p></p>
                                                        <img  title="点击刷新" src="model/vocde.php" align="absbottom" onclick="this.src='model/vocde.php?'+Math.random();">

                                                </div>
					  </div>
					  
						</br>
						<div class='col-md-6 col-md-offset-3'>
                                                    <button type="button" onclick="logajax()" class="btn btn-info btn-lg">点击登录</button>
                                        
						</div>
                                               <br/>
                                               <br/><br/>
                                               
                                               
                                               
				</from>
                                <p></p>
				
			</div>
		  </div>
	</div>
         
<script src="js/jquery.min.js"></script>
<script>
    function logajax(){
                        var user = $('#user').val();
			var pwd = $('#pwd').val();
                        var idcode=$('#idcode').val();
//                        alert(user);
//                        alert(pwd);
//                        alert(idcode);
                        
                        //return false;
           $.ajax({
               type: "post",
                 url: "model/login.class.php",
                 dataType:'json',
                 data:{
					 user: user,
					 pwd : pwd,
					 idcode:idcode
                 },

                 success:function(data){
                     if(data.status==0){
                        alert("恭喜："+data.msg,location.href='admin.php');
                     }else if(data.status==1){
                        alert("提示："+data.msg,location.href='admin.php');
                     }
                 }

             });
         }

</script>
  </body>
</html>
