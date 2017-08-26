<?php
//引入头文件
    require_once 'tmp/head.php';
?>
<div class="container">
	
		  <div class="row" style="margin-bottom:60px">
			
			<div class='col-md-8 col-md-offset-2'>
				<h1 class='text-center'><b>注册页面</b></h1>
				</br>
				<from class='form-horizontal'>
					 <div class="form-group">
						<label for="exampleInputEmail1" class='col-md-3 control-label'>用户名：</label>
						<div class='col-md-6'>
							<input type="text" class="form-control" id="user" placeholder="请输入用户名">
						</div>
					  </div>
                                          <div class="form-group">
						<label for="exampleInputEmail1" class='col-md-3 control-label'>昵称：</label>
						<div class='col-md-6'>
							<input type="text" class="form-control" id="name" placeholder="请输入昵称">
						</div>
					  </div>
                                          
					  <div class="form-group">
						<label for="exampleInputPassword1"  class='col-md-3 control-label'>密码：</label>
						<div class='col-md-6'>
						<input type="password" class="form-control" id="pwd" placeholder="请输入密码">
						</div>

					  </div>
						<div class="form-group">
						<label for="exampleInputPassword1" class='col-md-3 control-label'>确认密码：</label>
						<div class='col-md-6'>
						<input type="password" class="form-control" id="pwds" placeholder="请再次输入密码">
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
<!--					  <div class="checkbox">
						  <label class='col-md-5 control-label'>
							<input type="checkbox"> 用户协议
						  </label>
						</div>-->
						</br>
						<div class='col-md-6 col-md-offset-3'>
                                                    <button type="button" onclick="regajax()" class="btn btn-info btn-lg">同意协议并注册</button>
                                        已有账号？<a href="login.php">登录</a>
						</div>
                                               
				</from>
				
			</div>
		  </div>
	</div>
<script src="js/jquery.min.js"></script>
<script>
    document.onkeydown = function(e) {
    //捕捉回车事件
    var ev = (typeof event!= 'undefined') ? window.event : e;
    if(ev.keyCode == 13) {
        regajax();
    }
    }
    function regajax(){
                        var user = $('#user').val();
                        var name=$('#name').val();
			var pwd = $('#pwd').val();
                        var pws=$('#pwds').val();
                        var idcode=$('#idcode').val();
//                        alert(user);
//                        alert(pwd);
//                        alert(idcode);
                        
			if(pwd!=pws){
				alert('两次输入的密码不同');
                                return ;
			}
                        
			
                        
                        //return false;
           $.ajax({
               type: "post",
                 url: "model/reg.class.php",
                 dataType:'json',
                 data:{
					 user: user,
					 pwd : pwd,
					 idcode:idcode,
                                         name:name
                 },

                 success:function(data){
                     if(data.status==0){
                        alert("恭喜："+data.msg,location.href='login.php');
                     }else if(data.status==1){
                        alert("提示："+data.msg,location.href='reg.php');
                     }
                 }

             });
         }

</script>

<?php
//引入底部文件
    require_once 'tmp/foot.php';
?>