<?php
include "../public/header.php";

?>

<section class="gongdaobei">
    <div class="wf-wrap">
        <div class="line"></div>
        <?php
        $sql1="select * from products where pid=13";
        $result1=$db->query($sql1);
        $result1->setFetchMode(PDO::FETCH_ASSOC);
        while($row1=$result1->fetch()) {

            ?>
            <div class="cup-contain">
                <div class="cup-left">
                    <div class="sp-wrap">

                        <a href="img/cup1.jpg">
                            <img src="img/zhengshanxiaozhong.jpg" alt="">
                        </a>

                        <a href="img/jia1.jpg">
                            <img src="img/zhengshanxiaozhong.jpg" alt="">
                        </a>
                        <a href="img/cup1.jpg">
                            <img src="img/zhengshanxiaozhong.jpg" alt="">
                        </a>
                    </div>
                </div>
                <form action="addShop.php?pid=<?php echo $row1["pid"]?>" method="post">
                    <div class="cup-right">
                        <h1><?php echo $row1["pname"]?></h1>
                        <div class="lineSmall"></div>
                        <div class="price-box">
                            <span>￥<?php echo $row1["price"]?></span>
                        </div>
                        <div class="description">
                            <span>正山小种</span>
                        </div>
                        <div class="shopcar">
                            <table>
                                <tr>
                                    <td>
                                        <button type="submit">加入购物车</button>
                                    </td>
                                    <!--<td>
                                        <input type="button" value="-" class="minus" >
                                        <input type="number" value="1" class="num text" id="number">

                                        <input type="button" value="+" class="plus" >
                                    </td>-->
                                </tr>
                            </table>
                        </div>
                        <div class="product_meta">
                            <div class="proRow">商品编号：001003</div>
                            <div class="proRow">分类：<span style="color: #c90000">茗器</span>&nbsp;&nbsp;茗之杯</div>
                        </div>
                    </div>
                </form>
            </div>
            <?php
        }
        ?>
        <div class="miaoshu">
            <ul class="tabs">
                <li><a href="">描述</a></li>
                <li><a href="">用户评论 (0)</a></li>
            </ul>
            <div class="panel">
                <div class="panel1">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆羽说，茶者，南方之佳木。那么，北方产不产茶？北方也有产茶的地区，比如西藏的林芝地区、山东、甘肃、河南，只是总体产量和品质不能和南方相比。陆羽写《茶经》时，这些地方还没有开始种植茶叶。茶的种植最早分布在长江流域地区，从云南、四川一直往东，到江浙地区。 </span>
                </div>
                <div class="panel1">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;传说，神农发现了茶，这只是一个传说。据文字资料的记载，在两汉时期的茶事记载非常少，而到魏晋南北朝时期开始增多。魏晋时期是茶饮从菜食往饮用的转变时期。经过唐朝，到宋代达到茶的一个鼎盛时期。从文献记载来看，唐朝时商业资金在茶叶上的倾斜，和茶叶贸易的繁荣，可以看出茶叶在中国人生活中的重要性。 </span>
                </div>
                <div class="panel1">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆羽对茶树做了详细的描述，对茶树的叶、花、果实、根系做了详细的介绍，并用常见的植物做为类比。树如瓜芦，一种冬青科大叶冬青植物，不是山茶科的。叶子形似栀子的叶。花如白蔷薇。果实如栟榈，果实的蒂如丁香。 </span>
                </div>
            </div>
        </div>
        <div class="related">
            <h2>相关商品</h2>
            <ul class="rePro">
                <?php
                $sql1="select * from shows where cid=33";
                $result1=$db->query($sql1);
                $result1->setFetchMode(PDO::FETCH_ASSOC);
                while($row1=$result1->fetch()) {

                    ?>
                    <li>
                        <a href="gongdaobei.php">
                            <div class="rebox">
                                <img src="<?php echo $path?>admin/<?php echo $row1['simg']?>" alt=""/>
                            </div>
                            <div class="retext">
                                <span><?php echo $row1['stitle']?></span>
                                <span><?php echo $row1['sprice']?></span>
                            </div>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<?php
include "../public/footer.php";
?>
<link rel="stylesheet" href="../static/css/smoothproducts.css">
<script src="../static/js/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/cart.js"></script>
<script src="../static/js/smoothproducts.min.js"></script>
<script>
    $(window).load(function () {
        $('.cupSmall').smoothproducts();
    })

</script>





