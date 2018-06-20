<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION["userLogin"])){
    echo "<script>alert('已登录');location.href='index.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>管理员登录界面</title>
    <link rel="stylesheet" href="../index/css/login/reset.css" />
    <link rel="stylesheet" href="../index/css/login/common.css" />
    <link rel="stylesheet" href="../index/css/login/font-awesome.min.css" />
</head>
<body>
<div class="wrap login_wrap">
    <div class="content">
        <div class="logo"></div>
        <div class="login_box">

            <div class="login_form">
                <div class="login_title">
                    管理员登录
                </div>
                <form action="check.php" method="post">

                    <div class="form_text_ipt">
                        <input name="aname" type="text" placeholder="用户名" autocomplete="off">
                    </div>
                    <div class="ececk_warning"><span>用户名不能为空</span></div>
                    <div class="form_text_ipt">
                        <input name="apass" type="password" placeholder="密码">
                    </div>
                    <div class="ececk_warning"><span>密码不能为空</span></div>
                    <div class="form_check_ipt">

                    </div>
                    <div class="form_btn">
                        <button type="submit" onclick="javascript:window.location.href='#'">登录</button>
                    </div>

                </form>
                <div class="other_login">
                    <div class="left other_left">
                        <a href="../index/index.php"><span>回到商城首页</span></a>
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
