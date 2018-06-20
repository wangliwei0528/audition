<?php
session_start();
include "path.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $cssurl?>head.css" />
    <link rel="stylesheet" href="<?php echo $cssurl?>index.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>class.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>foot.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>pay.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>gongdaobei.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>userDetail.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>shop.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>orderDetail.css">
    <link rel="stylesheet" href="<?php echo $cssurl?>order.css">
    <link rel="stylesheet" href="../index/iconfont/iconfont.css" />
    <script src="../index/js/head.js"></script>
    <!--<script src="../index/js/toTop.js"></script>-->
    <title>茶在堂</title>
    <style>
        html,body{
            padding:0;margin:0;
        }
        nav{
            width:800px;height:30px;
            margin:0 auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border:1px solid #ccc
        }

    </style>

</head>
<body>
<input id="btn1" type="button" value="回到顶部" />
<section class="top">
    <div class="wf-wrap">
        <div class="wf-table">
            <div class="wr-td">
                <div class="wr-left">
                    <ul>
                        <li class="iconfont icon-kefu"></li>
                        <li>&nbsp;0500-6000000</li>
                        <li class="iconfont icon-time"></li>
                        <li>&nbsp;上午9点至下午6点</li>
                    </ul>
                </div>
            </div>
            <div class="wr-td">
                <?php
                if(isset($_SESSION["userLogin"])){
                    /*$_SESSION["uname"]=$uname;
                    $_SESSION["uphone"]=$row['phone'];*/
                    ?>
                    <a href="../index/shop.php" style="margin-right: 20px"><span>购物车</span></a>
                    <a href=""><span>欢迎<?php echo $_SESSION['uname']?></span></a>
                    <a href="#" class="slide"><i class="iconfont icon-angle-double-down"></i></a>
                    <ul class="drop_menu">
                        <li><a href="../index/userDetail.php?uid=<?php echo $_SESSION['uid']?>"><span>个人资料</span></a></li>
                        <li><a href=""><span>我的订单</span></a></li>
                        <li><a href="../admin/userLogout.php"><span>安全退出</span></a></li>
                    </ul>
                    <!--<a href="../admin/userLogout.php"><span>退出登录</span></a>-->
                    <?php
                }else{
                    ?>
                    <a href=""><span class="iconfont icon-user"></span></a>
                    <a href="../index/ulogin.php"><span>登录</span></a>
                    <a href=""><span class="iconfont icon-sign-in"></span></a>
                    <a href="../index/uReg.php"><span>注册</span></a>
                    <a href="../admin/index.php"><span style="margin-left: 10px">管理员</span></a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
    include "../public/db.php";
    $sql="select * from category where pid=0";
    $result=$db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
?>

<header>
    <div class="wf-wrap">
        <div class="wf-table">
            <div class="brand">
                <a href="">
                    <span><img src="../index/img/tealogo.jpg" alt="" /></span>
                </a>
            </div>
            <div class="navi">
                <ul class="main-navi">
                    <li class="menu-item">
                        <a href="index.php">
                            <span>首页</span>
                        </a>
                    </li>

                    <?php
                    while ($row=$result->fetch()) {
                        if($row["cname"]=="用茗器"){
                            $url="class.php";
                        }else if($row["cname"]=="买好茶"){
                            $url="class.php";
                        }else if($row["cname"]=="支付方式"){
                            $url="pay.php";
                        }else if($row["cname"]=="关于我"){
                            $url="about.php";
                        }
                        if($row['isshow']){
                        ?>
                        <li class="menu-item">
                            <a href="<?php echo $url ?>?cid=<?php echo $row['cid']?>" class="col">
                                <?php
                                echo $row["cname"]
                                ?>
                            </a>
                        </li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="navi-right">
                <div class="search">
                    <div class="search1">
                        <form action="" class="searchform">
                            <input type="" name="" id="form-search" value="" placeholder="好茶/茗器">
                            <a href="">搜索</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<script src="../index/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".slide").click(function(){
            $(".drop_menu").toggle();
        })
    })
</script>
