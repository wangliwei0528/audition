<?php
include "../public/header.php";
?>
		<section class="class-tu">
			<img src="img/class1.jpg" alt="" />
		</section>
		<section class="fenlei">
			<div class="wf-wrap">
				<div class="fenlei-row">
					<div class="fenlei-row-fir">
						<span><a href="index.php">首页</a></span>
						<span>/</span>
						<span>商城</span>
                        <span>/</span>
                        <span style="color: #c00000">茗器</span>
					</div>
					<div class="fenlei-row-box">
						<div class="row">
							<div class="row-left">好茶</div>
							<div class="row-right">
								<ul>
									<li><a href=""><span>乌龙茶</span></a></li>
									<li><a href=""><span>红茶</span></a></li>
									<li><a href=""><span>白茶</span></a></li>
									<li><a href=""><span>绿茶</span></a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="row-left">茗器</div>
							<div class="row-right">
								<ul>
									<li><a href=""><span>茗之壶</span></a></li>
									<li><a href=""><span>茗之杯</span></a></li>
									<li><a href=""><span>茗之件</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
                <?php
                if($_GET["cid"]==11){
                    ?>
                    <div class="fenlei-pro">
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
                    <?php
                }elseif ($_GET["cid"]==12){
                    ?>
                    <div class="fenlei-pro">
                        <div class="beautiful-wrap">
                            <ul class="products">
                                <?php
                                $sql1="select * from products where cid=2";
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
                <?php
                }
                ?>

			</div>
		</section>
<?php
include "../public/footer.php";
?>