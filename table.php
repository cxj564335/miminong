<?php
//引入头文件
    require_once 'tmp/head.php';
    require('model/table.class.php');
    $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
    
?>
<div class="container" style="margin-top: 10px;">
  <div class="col-md-3">
      <img src="img/adminlogo.jpg" class="img-responsive img-thumbnail" alt="米米农">
  </div>
    <div class="col-md-5">
        <span style="font-size: 28px;"><?php echo $tab['tabname'];?></span> &nbsp;<a href="<?php echo dirname($url).'/table.php?id='.$tab['id'];?>"><?php echo dirname($url).'/table.php?id='.$tab['id'];?></a>
        <hr style="border-top: 1px solid #bbb;margin-top: 10px;">
        <h5><b>创建时间：</b><?php echo date("Y-m-d H:i:s",$tab['time'])?></h5>
        <h5><b>电子邮箱：</b><?php echo $tab['email']?></h5>
        <h5><b>联系手机：</b><?php echo $tab['phone']?></h5>
        <h5><b>联系QQ：</b><?php echo $tab['qq']?></h5>
        
    
    </div>
  <div class="col-md-4">
      <div class="jumbotron" style="margin:0px;padding:5px;border: 1px solid #ddd;background-color: #fff;height: 170px;">
          <h3 style="margin-top: 10px;margin-bottom: 10px;color:#0000cc">米表公告：</h3>
          <p style="font-size:16px;"><?php echo $tab['affiche']?></p>
        
      </div>
  </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- 精品推荐 -->
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><h4><b>一口价推荐</b></h4></li>
                      <li  class="pull-right"><a href="#" ></a></li>
                    </ul>
                    <br/>
                <?php 
                     foreach ($yikoujia as $v ){
                ?>
                    <div class="col-md-4">
                        <a href="<?php echo dirname($url).'/details.php?id='.$v['id']?>" class="thumbnail">

                            <div class="caption">
                            <h3><?php echo $v['realm']?></h3>
                            <p>价格：<?php echo $v['price']?></p>
                            <p>介绍：<?php echo $v['content']?></p>
                             

                            </div>
                        </a>
                    </div>
                     <?php }?>
                    
                </div>
                
                <!-- 站长推荐 -->
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><h4><b>议价推荐</b></h4></li>
                      <li  class="pull-right"><a href="#" ></a></li>
                    </ul>
                    <br/>
                    <?php 
                     foreach ($yijia as $v ){
                ?>
                    <div class="col-md-4">
                        <a href="<?php echo dirname($url).'/details.php?id='.$v['id']?>" class="thumbnail">

                            <div class="caption">
                            <h3><?php echo $v['realm']?></h3>
                            <p>价格：议价</p>
                            <p>介绍：<?php echo $v['content']?></p>
                             

                            </div>
                        </a>
                    </div>
                    <?php }?>
                    
                </div>
                
               
            </div>
            <div class="col-md-3">
                <!--右侧内容-->
                <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><h4><b>已经交易</b></h4></li>
                      
                    </ul>
                    <br/>
                      <?php 
                            foreach ($del as $v ){
                       ?>
                    <div class="col-md-12">
                        <a href="<?php echo dirname($url).'/details.php?id='.$v['id']?>" class="thumbnail">

                            <div class="caption">
                                <h5><del><?php echo $v['realm']?></del></h5>
                            <p>价格：<del><?php echo $v['price']?></del></p>
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