<?php
require('model/myinfo.class.php');
?>
<div class="container" style="margin: 0px;width: 100%">
    <h3>个人设置</h3>
    <table class="table table-hover">
        <form method="post"> 
        
        <tr>
            <td style="width: 150px;">注册时间:</td>
            <td><?php echo !empty($myusers)?date("Y-m-d H:i:s", $myuser['time']):'未创建';?></td>
        </tr>
        <tr>
            <td style="width: 150px;">用户名:</td>
            <td><input type="text" disabled="true" value="<?php echo !empty($myusers)?$myuser['user']:'';?>"/></td>
        </tr>
        <tr>
            <td style="width: 150px;">昵称:</td>
            <td><input name="name" type="text" value="<?php echo !empty($myusers)?$myuser['name']:'';?>"/></td>
        </tr>
        
        <tr>
            <td style="width: 150px;">头像:</td>
            <td><input name="pic" style="width:350px" id="url1" value="<?php echo !empty($myusers)?$myuser['pic']:'';?>" type="text"> <input id="image1" value="上传" type="button"></td>
        </tr>
        <tr>
            <td style="width: 150px;">密码设置:</td>
            <td><input type="button" value="修改"/></td>
        </tr>
        
        <tr>
            <td style="width: 150px;">绑定电子邮箱:</td>
            <td><input type="text" value="<?php echo !empty($myusers)?$myuser['email']:'';?>" name="email" /></td>
        </tr>
        <tr>
            <td style="width: 150px;">绑定手机号:</td>
            <td><input type="text" value="<?php echo !empty($myusers)?$myuser['phone']:'';?>" name="phone" /></td>
        </tr>
        <tr>
            <td style="width: 150px;">联系QQ:</td>
            <td><input type="text" value="<?php echo !empty($myusers)?$myuser['qq']:'';?>" name="qq" /></td>
        </tr>
        
        <tr>
            <td style="width: 150px;"></td>
            <td><button type="submit" name="tijiao" class="btn btn-info" style="width: 120px;">提交</button>
            </td>
        </tr>
        </form>
        
    </table>
</div>