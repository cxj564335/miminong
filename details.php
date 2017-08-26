<?php
//引入头文件
    require_once 'tmp/head.php';
    require('model/details.class.php');  
    $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
?>
<!--主体内容部分-->
            <!--左侧详情-->
      
      <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- 精品推荐 -->
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><h1 style="color: #333"><b><?php echo $details['realm'];?></b></h1></li>
                        <li style="margin-top: 40px"  class="pull-right"><span><a target="_blank" href="https://whois.aliyun.com/whois/domain/<?php echo $details['realm'];?>" >whois</a>&nbsp;|&nbsp;<a target="_blank" href="https://www.baidu.com/s?wd=<?php $str=explode('.',$details['realm']);echo $str[0];?>" >百度</a>&nbsp;|&nbsp;<a href="#" >微博分享</a>&nbsp;|&nbsp;<a href="#" >微信分享</a></span></li>
                    </ul>
                    <br/>
                    <table class="table">
                        <tr>
                            <td style="width: 33%">米表：</td>
                            <td><a href="<?php echo dirname($url).'/table.php?id='.$details['id'];?>"><?php echo $details['tabname'];?></a></td>
                            
                        </tr>
                        <tr>
                            <td>价格：</td>
                            <td>￥：<?php echo $details['price'];?></td>
                            
                        </tr>
                        <tr>
                            <td>简介：</td>
                            <td><?php echo $details['content'];?></td>
                            
                        </tr>
                        <tr>
                            <td>后缀：</td>
                            <td><?php echo $details['suffix'];?></td>
                            
                        </tr>
                        <tr>
                            <td>类型：</td>
                            <td><?php echo $details['type'];?></td>
                            
                        </tr>
                        <tr>
                            <td>联系人邮箱：</td>
                            <td><?php echo $details['email'];?></td>
                            
                        </tr>
                        <tr>
                            <td>联系人手机：</td>
                            <td><?php echo $details['phone'];?></td>
                            
                        </tr>
                        <tr>
                            <td>联系人qq：</td>
                            <td><?php echo $details['qq'];?></td>
                            
                        </tr>
                        
                        <tr>
                            <td>购买地址：</td>
                            <td><a href="<?php echo $details['p_address'];?>">点击前往</a></td>
                            
                        </tr>
                        
                        
                    </table>
                    
                </div>
                
                
                
               
            </div>
            <div class="col-md-3">
                <!--右侧内容-->
                <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><h4><b>本店其他</b></h4></li>
                      
                    </ul>
                    <br/>
                      <?php 
                            foreach ($mydo as $v ){
                       ?>
                    <div class="col-md-12">
                        <a href="<?php echo dirname($url).'/details.php?id='.$v['id'];?>" class="thumbnail">

                            <div class="caption">
                                <h5><?php echo $v['realm']?></h5>
                            <p>价格：<?php echo $v['price']?></p>
                          </div>
                        </a>
                    </div>
                            <?php }?>
                    
                   
                    
                    
                
            </div>
          </div>
      </div>

<?php
//引入底部文件
    require_once 'tmp/foot.php';
?>