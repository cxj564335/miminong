
<?php 
require('model/domainlist.class.php');
?>
<!--我的域名管理-->
<div class="container" style="margin: 0px;width: 100%">
    <table class="table table-bordered">
        <tr>
            <td>id</td>
            <td>域名</td>
            <td>介绍</td>
            <td style="width: 100px;">价格</td>
            <td>购买地址</td>
            
<!--            <td style="width: 120px;">注册商</td>-->
            <td>域名类型</td>
            <td>审核状态</td>
            <td>是否出售</td>
            <td>操作</td>
        </tr>
        <form method="post"> 
        <tr>
            <td>新增</td>
            <td><input type="text" class="form-control" name="realm" id="realm" placeholder="请输入域名"></td>
            <td><input type="text" class="form-control" name="content" id="content" placeholder="请输入介绍"></td>
            <td><input type="text" class="form-control" name=" price" id=" price" placeholder="填写价格"></td>
            <td><input type="text" class="form-control" name="p_address"  id="p_address" placeholder="请填写购买地址"></td>
<!--            <td><input type="text" class="form-control" name="enroll" id="enroll" placeholder="请填写注册商"></td>-->
            <td>
                
                <select  class="form-control" name="type"> 
                    <option value="0">未分类</option>
                    <option value="1">纯数字</option>
                    <option value="2">纯字母</option>
                    <option value="3">纯声母</option>
                    <option value="4">单拼</option>
                    <option value="5">双拼</option>
                    <option value="6">三拼</option>
                    <option value="7">四拼</option>
                    <option value="8">杂米</option>
                    
                
              </select>
            </td>
            <td>未审核</td>
            <td>
                <select  class="form-control" name="sell"> 
                    <option value="0">未出售</option>
                    <option value="1">已出售</option>
                    <option value="2">不展示</option>
                
              </select></td>
              <td><button type="submit" name="newadd" class="btn btn-info btn-xs">新增</button></td>
        </tr>
        </form>
        <?php 
                require_once  'controller/pdomysql.class.php';
                $pdo=new pdomysql();
                $own=$_SESSION['user']['uid'];
                $arr=$pdo->getAll("select * from mi_domain where own_id=$own");
                //print_r($arr);
                foreach ($arr as $v ){
        
        ?>
        <form  method="post">
            <input type="hidden" name="id" value="<?php echo $v['id'];?>" />
        <tr>
            <td><?php echo $v['id'];?></td>
            
            <td><input type="text" class="form-control" name="realm" id="realm"  placeholder="请输入域名" value="<?php echo $v['realm'];?>"></td>
            <td><input type="text" class="form-control" name="content" id="content"  placeholder="请输入介绍" value="<?php echo $v['content'];?>"></td>
            <td><input type="text" class="form-control" name=" price" id=" price"  placeholder="请填写价格" value="<?php echo $v['price'];?>"></td>
            <td><input type="text" class="form-control" name="p_address"  id="p_address" placeholder="请填写购买地址" value="<?php echo $v['p_address'];?>"></td>
<!--            <td><input type="text" class="form-control" name="enroll" id="enroll"  placeholder="请填写注册商" value="<?php echo $v['enroll'];?>"></td>-->
            <td>
                
                <select  class="form-control" name="type"> 
                    <option value="0" <?php echo $v['type']==0?'selected = "selected"':''?>>未分类</option>
                    <option value="1" <?php echo $v['type']==1?'selected = "selected"':''?> >纯数字</option>
                    <option value="2" <?php echo $v['type']==2?'selected = "selected"':''?>>纯字母</option>
                    <option value="3" <?php echo $v['type']==3?'selected = "selected"':''?>>纯声母</option>
                    <option value="4" <?php echo $v['type']==4?'selected = "selected"':''?>>单拼</option>
                    <option value="5" <?php echo $v['type']==5?'selected = "selected"':''?>>双拼</option>
                    <option value="6" <?php echo $v['type']==6?'selected = "selected"':''?>>三拼</option>
                    <option value="7" <?php echo $v['type']==7?'selected = "selected"':''?>>四拼</option>
                    <option value="8" <?php echo $v['type']==8?'selected = "selected"':''?>>杂米</option>
                    
                
              </select>
            </td>
            <td><?php echo $v['statu']==0?'未审核':'已审核'?></td>
            <td>
                <select  class="form-control" name="sell"> 
                    <option value="0" <?php echo $v['sell']==0?'selected = "selected"':''?>>未出售</option>
                    <option value="1" <?php echo $v['sell']==1?'selected = "selected"':''?>>已出售</option>
                    <option value="2" <?php echo $v['sell']==2?'selected = "selected"':''?>>不展示</option>
                </select>
            </td>
            <td>
            <button type="submit" name="xiugai" class="btn btn-success btn-xs">修改</button>
            <button type="submit" name="delete" class="btn btn-success btn-xs">删除</button>
            </td>
        </tr>
        </form>
                <?php }?>
       
        
        
        
    </table>
</div>