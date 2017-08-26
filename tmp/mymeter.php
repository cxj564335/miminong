<!--我的米表页面-->
<?php
require('model/mymeter.class.php');
$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
!empty($mytabs)?$miurl=dirname($url).'/table.php?id='.$mytab['id']:$miurl='#';
?>
<div class="container" style="margin: 0px;width: 100%">
    <h3>米表设置</h3>
    <table class="table table-hover">
        <form method="post"> 
        <tr>
            <td style="width: 150px;">米表地址:</td>
            <td><a href="<?php echo $miurl;?>"><?php echo $miurl;?></a></td>
        </tr>
        <tr>
            <td style="width: 150px;">米表创建时间:</td>
            <td><?php echo !empty($mytabs)?date("Y-m-d H:i:s", $mytab['time']):'未创建';?></td>
        </tr>
        <tr>
            <td style="width: 150px;">开启状态:</td>
            <td>
                <input type="radio" name="state" id="shop_status1" value="0" <?php echo !empty($mytabs)?($mytab['state']==0?"checked=''":""):'checked=""';?> ><label>开启</label>
		<input type="radio" name="state" id="shop_status2" value="1" <?php echo !empty($mytabs)?($mytab['state']==1?"checked=''":""):'';?>><label>关闭</label>
            </td>
        </tr>
        <tr>
            <td style="width: 150px;">米表名称:</td>
            <td><input type="text" name="tabname" value="<?php echo !empty($mytabs)?$mytab['tabname']:'';?>"/></td>
        </tr>
        <tr>
            <td style="width: 150px;">米表logo:</td>
            <td><input name="tablogo" style="width:350px" id="url1" value="<?php echo !empty($mytabs)?$mytab['tablogo']:'';?>" type="text"> <input id="image1" value="上传" type="button"></td>
        </tr>
        
        <tr>
            <td style="width: 150px;">电子邮箱:</td>
            <td><input type="text" value="<?php echo !empty($mytabs)?$mytab['email']:'';?>" name="email" /></td>
        </tr>
        <tr>
            <td style="width: 150px;">手机:</td>
            <td><input type="text" value="<?php echo !empty($mytabs)?$mytab['phone']:'';?>" name="phone" /></td>
        </tr>
        <tr>
            <td style="width: 150px;">QQ:</td>
            <td><input type="text" value="<?php echo !empty($mytabs)?$mytab['qq']:'';?>" name="qq" /></td>
        </tr>
        <tr>
            <td style="width: 150px;">首页公告:</td>
            <td><input type="text" value="<?php echo !empty($mytabs)?$mytab['affiche']:'';?>" name="affiche" /></td>
        </tr>
        
        <tr>
            <td style="width: 150px;">统计:</td>
            <td><input type="hidden" value="<?php echo !empty($mytabs)?$mytab['addup']:'';?>" readOnly name="addup" />统计功能暂未开放</td>
        </tr>
        <tr>
            <td style="width: 150px;"></td>
            <td><button type="submit" name="tijiao" class="btn btn-info" style="width: 120px;">提交</button>
            </td>
        </tr>
        </form>
        
    </table>
</div>