<?php
 include "../public/header.php";
?>
<section class="banner">
    <ul class="banner-box">
        <?php
        $sql1="select * from shows where cid=27";
        $result1=$db->query($sql1);
        $result1->setFetchMode(PDO::FETCH_ASSOC);
        while($row1=$result1->fetch()) {
        ?>
        <li class="imgs"><img src="<?php echo $path?>admin/<?php echo $row1['simg']?>" alt="" style="display: block"/></li>
            <?php
        }
        ?>
    </ul>
</section>
<section class="main">
    <div class="wf-wrap">
        <div class="main-content">
            <!--所有商品-->
            <div class="all">
                <div class="container">
                    <div style="text-align: center;">
                        <span style="color: rgb(0,0,0);font-size: 26px;font-family: '宋体';">所有商品</span>
                    </div>
                    <div style="text-align: center;letter-spacing: 3px;color: #c90000;font-size: 13px;">All Products</div>
                    <div class="contain-icon-box">
                        <div class="online-icon">
                            <span class="iconfont icon-angle-double-down"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-beautiful">
                <div class="all-wrap">
                    <img src="img/all1.jpg" alt="" />
                </div>
                <!--茗器-->
                <div class="beautiful">
                    <div style="text-align: center;">
                        <span style="color: rgb(0,0,0);font-size: 26px;font-family: '宋体';">茗器</span>
                    </div>
                    <div style="text-align: center;letter-spacing: 3px;color: #c90000;font-size: 13px;">Tea Set</div>
                </div>
                <div class="beautiful-wrap">
                    <ul class="products">
                        <?php
                        $sql1="select * from products where cid=1";
                        $result1=$db->query($sql1);
                        $result1->setFetchMode(PDO::FETCH_ASSOC);
                        while($row1=$result1->fetch()) {

                            ?>
                            <li class="product">
                                <a href="<?php echo $row1['path']?>" class="pro">
                                    <img src="<?php echo $path?>admin/<?php echo $row1['photo']?>" alt=""/>
                                </a>
                                <h3 class="pro-text"><?php echo $row1['pname']?></h3>
                                <div class="pro-price"><?php echo $row1['price']?></div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="down">
                <div class="online-icon">
                    <span class="iconfont icon-angle-double-down"></span>
                </div>
            </div>
            <div class="down-jiamu">
                <div class="down-wrap">
                    <img src="img/down.jpg" alt="" />
                </div>
                <!--好茶-->
                <div class="jiamu">
                    <div style="text-align: center;">
                        <span style="color: rgb(0,0,0);font-size: 26px;font-family: '宋体';">好茶</span>
                    </div>
                    <div style="text-align: center;letter-spacing: 3px;color: #c90000;font-size: 13px;">Nice Tea</div>
                </div>
                <div class="jiamu-wrap">
                    <ul class="jiamu-box">
                        <?php
                        $sql="select * from products where cid=2";
                        $result=$db->query($sql);
                        $result->setFetchMode(PDO::FETCH_ASSOC);
                        while($row=$result->fetch()) {

                        ?>
                            <li class="product">
                                <a href="<?php echo $row['path']?>" class="pro">
                                    <img src="<?php echo $path?>admin/<?php echo $row['photo']?>" alt=""/>
                                </a>
                                <h3 class="pro-text"><?php echo $row['pname']?></h3>
                                <div class="pro-price"><?php echo $row['price']?></div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--客服-->
    <section class="kefu">
        <div class="kefu-box">
            <div class="kefu-up">
                <div class="circle">
                    <div class="iconfont icon-kefu"></div>
                </div>
            </div>
            <div class="kefu-down">
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">在线客服</span>
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">周一至周五09:00-19:00</span>
            </div>
        </div>
        <div class="kefu-box">
            <div class="kefu-up">
                <div class="circle">
                    <div class="iconfont icon-kefu"></div>
                </div>
            </div>
            <div class="kefu-down">
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">在线客服</span>
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">周一至周五09:00-19:00</span>
            </div>
        </div>
        <div class="kefu-box">
            <div class="kefu-up">
                <div class="circle">
                    <div class="iconfont icon-kefu"></div>
                </div>
            </div>
            <div class="kefu-down">
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">在线客服</span>
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">周一至周五09:00-19:00</span>
            </div>
        </div>
        <div class="kefu-box">
            <div class="kefu-up">
                <div class="circle">
                    <div class="iconfont icon-kefu"></div>
                </div>
            </div>
            <div class="kefu-down">
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">在线客服</span>
                <span style="font-family: '微软雅黑';font-size: 15px;text-align: center;line-height: 28px;display: block;">周一至周五09:00-19:00</span>
            </div>
        </div>
    </section>


<?php
include "../public/footer.php";
?>
<script src="<?php echo $jsurl?>index.js"></script>

