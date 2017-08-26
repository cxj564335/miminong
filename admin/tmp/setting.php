<?php
 require_once 'controller/conn.class.php';
$CONN=include "model/conn.php";
//print_r($CONN);
//print_r($_POST)
if(isset($_POST['tijiao'])){
    unset($_POST['tijiao']);
    $config=$_POST;
if(is_array($config)) $config_new = array_merge($CONN,$config);

arr2file('model/conn.php',$config_new);
echo "<script>alert('修改成功');</script>";
$CONN=include "model/conn.php";
}
?>
<form  method="post">
<table class="table table-bordered">
    <tr>
        <td style="width: 40%">
            <p><b>站点名称:</b></p>
            网站的名称在每个页面的标题处会显示
        </td>
        <td><input type="text" name="webtitle" value="<?php echo isset( $CONN['webtitle'])? $CONN['webtitle']:""; ?>"/></td>
    </tr>
    
    <tr>
        <td>
            <p><b>站点域名:</b></p>
            哦，这是一个域名；
        </td>
        <td><input type="text" name="webhttp" value="<?php echo isset( $CONN['webhttp'])? $CONN['webhttp']:"" ; ?>"/></td>
    </tr>
    <tr>
        <td>
            <p><b>网站描述（全站）:</b></p>
          
针对网站的所有页面设置Meta部分的描述定义,多个描述用逗号分隔
        </td>
        <td><textarea rows="3" cols="80" name="description" value=""><?php echo isset( $CONN['description'])? $CONN['description']:"" ; ?></textarea></td>
    </tr>
    <tr>
        <td>
            <p><b>网站关键词（全站）:</b></p>
            
针对网站的所有页面设置Meta部分关键词定义,多个词用逗号分隔
        </td>
        <td><textarea rows="3" cols="80" name="keywords" value=""><?php echo isset( $CONN['keywords'])? $CONN['keywords']:"" ; ?></textarea></td>
    </tr>
    
    <tr>
        <td>
            <p><b>管理员常用Email（重要）:</b></p>
            系统给用户发邮件时将使用此域名，并且网站数据库错误信息也会发到此Email
        </td>
        <td><input type="text" name="email" value="<?php echo isset($CONN['email'])? $CONN['email']:"" ; ?>"/></td>
    </tr>
    <tr>
        <td>
            <p><b>网站备案号码:</b></p>
            页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入您的备案号
        </td>
        <td><input type="text" name="icp" value="<?php echo isset($CONN['icp'])?$CONN['icp']:""; ?>"/></td>
    </tr>
    <tr>
        <td>
            <p><b>网站版权信息:</b></p>
            可以在此声明网站的版权信息等，也可以填写关于我们、联系我们等信息；
此次支持HTML代码，不用可以留空。
        </td>
        <td><input type="text" name="icpxx" value="<?php echo isset($CONN['icpxx'])?$CONN['icpxx']:"" ; ?>"/></td>
    </tr>
    <tr>
        <td>
            <p><b>访问统计代码:</b></p>
            可将第三方提供的网站访问统计HTML代码，直接粘贴到此次即可统计全站
        </td>
        <td><input type="text" name="census" value="<?php echo isset($CONN['census'])?$CONN['census']:""; ?>"/></td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" class="btn btn-info" name="tijiao" value="提交" /></td>
       
    </tr>
    
</table>
</form>
