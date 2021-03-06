<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION["userLogin"])){
    echo "<script>alert('已登录');location.href='../index/index.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>登录界面</title>
    <link rel="stylesheet" href="css/login/reset.css" />
    <link rel="stylesheet" href="css/login/common.css" />
    <link rel="stylesheet" href="css/login/font-awesome.min.css" />
</head>
<body>
<div class="wrap login_wrap">
    <div class="content">
        <div class="logo"></div>
        <div class="login_box">

            <div class="login_form">
                <div class="login_title">
                    登录
                </div>
                <form action="../admin/checkUser.php" method="post">

                    <div class="form_text_ipt">
                        <input name="uname" type="text" placeholder="用户名" autocomplete="off">
                    </div>
                    <div class="ececk_warning"><span>用户名不能为空</span></div>
                    <div class="form_text_ipt">
                        <input name="upass" type="password" placeholder="密码">
                    </div>
                    <div class="ececk_warning"><span>密码不能为空</span></div>
                    <div class="form_check_ipt">
                        <!--<div class="left check_left">
                            <label><input name="" type="checkbox"> 下次自动登录</label>
                        </div>-->
                        <div class="right check_right">
                            <a href="#">忘记密码</a>
                        </div>
                    </div>
                    <div class="form_btn">
                        <button type="submit" onclick="javascript:window.location.href='#'">登录</button>
                    </div>
                    <div class="form_reg_btn">
                        <span>还没有帐号？</span><a href="uReg.php">马上注册</a>
                    </div>
                </form>
                <div class="other_login">
                    <div class="left other_left">
                        <a href="index.php"><span>回到商城首页</span></a>
                    </div>
                    <div class="right other_right">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/common.js" ></script>

</body>
</html>
