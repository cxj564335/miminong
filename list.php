<?php
//引入头文件
    require_once 'tmp/head.php';
    require('model/list.class.php');  
?>
      <!--列表页索引部分-->
      <div class="container">
          <form  method="post" >
            <table class="table  table-hover">
                <tr>
                    <td>包含：</td>
                    <td> <input name="realm" style="width:200px;height: 28px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入域名包含的字符"></td>
                    
                </tr>
                <tr>
                    <td style="width:10%;">类型：</td>
                    <td >
                        <button type="button" class="btn btn-primary btn-xs">不限</button>
                        
                        <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio1" value="1"> 纯数字
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio2" value="2"> 纯字母
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio3" value="3"> 纯声母
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio3" value="4"> 单拼
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio3" value="5"> 双拼
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio3" value="6"> 三拼
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio3" value="7"> 四拼
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="type" id="inlineRadio3" value="8"> 杂米
                          </label>
                          
                    </td>
                    
                    
                    
                </tr>
                
                <tr>
                    <td>后缀：</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-xs">不限</button>
                        <label class="radio-inline">
                            <input type="radio" name="suffix" id="inlineRadio1" value=".com"> .com
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="suffix" id="inlineRadio2" value=".cn"> .cn
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="suffix" id="inlineRadio3" value=".net"> .net
                          </label>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        长度：
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary btn-xs">不限</button>
                        <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio1" value="1"> 1个
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio2" value="2"> 2个
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio3" value="3"> 3个
                          </label>
                        <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio1" value="4"> 4个
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio2" value="5"> 5个
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio3" value="6"> 6个
                          </label>
                        <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio1" value="7"> 7个
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio2" value="8"> 8个
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio3" value="9"> 9个
                          </label>
                         <label class="radio-inline">
                            <input type="radio" name="reaml_len" id="inlineRadio3" value="10"> 10个以上
                          </label>
                        
                    </td>
                
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <button style="width:80px;height: 32px;" type="submit" class="btn btn-default">搜索</button>
                    </td>
                
                </tr>
                
                
            </table>
          </form>
         <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><span class="glyphicon glyphicon glyphicon-info-sign" aria-hidden="true"></span> &nbsp;共有<?php echo $zong['zong'];?>个搜索结果</div>
         </div>
          
          <!--真正列表部分-->
          <table class="table table-striped">
              <tr style="background-color: #afd9ee">
                  <td>域名</td>
                  <td>域名介绍</td>
                  <td>价格</td>
                  <td>查看详情</td>
                  <td>购买地址</td>
                  
              </tr>
              <?php 
                foreach ($arr as $v ){
        
                ?>
              <tr onclick="javascript:window.location.href='<?php echo dirname($url).'/details.php?id='.$v['id']?>'">
                  <td><?php echo $v['realm']?></td>
                  <td><?php echo $v['content']?></td>
                  <td><?php echo $v['price']?></td>
                  <td><a href='<?php echo dirname($url).'/details.php?id='.$v['id']?>' target="_blank">点击前往</a></td>
                  <td><a href="<?php echo $v['p_address']?>" target="_blank">点击前往</a></td>
                  
              </tr>
                <?php }?>
              
              
              
          </table>
          <!--分页-->
          <nav>
             
            <ul class="pagination navbar-right">
               
              <li>
                  
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
               <?php 
                   for ($x=1;$x<=$pagenum;$x++){
                       if($page==$x){
                           echo "<li class='active'><a href='list.php?page=$x'>$x</a></li>";
                       }  else {
                           echo "<li><a href='list.php?page=$x'>$x</a></li>";
                       }
                       
                   }
               
               
               ?>
              
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
              
            </ul>
<!--               <span class="pagination navbar-right">共有100页， 每页显示：50条</span>-->
          </nav>
          
      </div>
      
      
      
      
<?php
//引入底部文件
    require_once 'tmp/foot.php';
?>