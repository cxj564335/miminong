<?php
//引入头文件
        require_once 'tmp/head.php';
        //这里首先我们要获取到推送到首页来的精品与其他域名
        //引入操作数据库的文件
        require_once  'controller/pdomysql.class.php';
        $pdo=new pdomysql();
        //这里获取的是精品推送advert=1
        $arr=$pdo->getAll("select * from mi_domain where statu>0 and advert=1 and sell=0 ORDER BY time DESC limit 9");
        //站长推荐advert=2
        $zhan=$pdo->getAll("select * from mi_domain where statu>0 and advert=2 and sell=0 ORDER BY time DESC limit 9");
        //这里获取的是已经出售的域名
        $del=$pdo->getAll("select * from mi_domain where statu>0 and sell=1 ORDER BY time DESC limit 9");
        //这个数组表示域名的类型
        $type=array('0'=>'未分类','1'=>'纯数字','2'=>'纯字母','3'=>'纯声母','4'=>'单拼','5'=>'双拼','6'=>'三拼','7'=>'四拼','8'=>'杂米',);
        $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
        ?>
      <!--主体内容部分-->
            <!--精品内容部分-->
      
      <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- 精品推荐 -->
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><h4><b>精品推荐</b></h4></li>
                      <li  class="pull-right"><a href="#" >查看更多>>></a></li>
                    </ul>
                    <br/>
                <?php 
                     foreach ($arr as $v ){
                ?>
                    <div class="col-md-4">
                        <a href="<?php echo dirname($url).'/details.php?id='.$v['id']?>" class="thumbnail">

                            <div class="caption">
                            <h3><?php echo $v['realm']?></h3>
                            <p>价格：<?php echo $v['price']?></p>
                            <p>类型：<?php echo $type[$v['type']]?></p>
                             

                            </div>
                        </a>
                    </div>
                     <?php }?>
                    
                </div>
                
                <!-- 站长推荐 -->
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><h4><b>站长推荐</b></h4></li>
                      <li  class="pull-right"><a href="#" >查看更多>>></a></li>
                    </ul>
                    <br/>
                    <?php 
                     foreach ($zhan as $v ){
                ?>
                    <div class="col-md-4">
                        <a href="<?php echo dirname($url).'/details.php?id='.$v['id']?>" class="thumbnail">

                            <div class="caption">
                            <h3><?php echo $v['realm']?></h3>
                            <p>价格：<?php echo $v['price']?></p>
                            <p>类型：<?php echo $type[$v['type']]?></p>
                             

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