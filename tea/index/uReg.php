<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册界面</title>
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
                    注册
                </div>
                <form action="../admin/insertUser.php" method="post">

                    <div class="form_text_ipt">
                        <input name="username" type="text" placeholder="用户名" autocomplete="off">
                    </div>
                    <div class="ececk_warning usererror"><span>用户名为6到12位小写字母</span></div>
                    <div class="form_text_ipt">
                        <input name="upass" type="password" placeholder="密码" >
                    </div>
                    <div class="ececk_warning passerror"><span>密码不得少于6位</span></div>
                    <div class="form_text_ipt">
                        <input name="upass1" type="password" placeholder="重复密码" >
                    </div>
                    <div class="ececk_warning pass1error"><span>两次密码不一致</span></div>
                    <!--<div class="form_text_ipt">
                        <input name="code" type="text" placeholder="验证码">
                    </div>-->
                    <!--<div class="ececk_warning"><span>验证码不能为空</span></div>-->

                    <div class="form_btn">
                        <button type="submit" onclick="javascript:window.location.href='#'">注册</button>
                    </div>
                    <div class="form_reg_btn">
                        <span>已有帐号？</span><a href="ulogin.php">马上登录</a>
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
<script src="../static/js/jquery-3.2.1.js"></script>
</body>
</html>

<script>
    let usererror=$(".usererror");
    let passerror=$(".passerror");
    let pass1error=$(".pass1error");
    let userReg=/^[a-z]\w{5,11}$/i;
    let passwordReg=/^\w{6,12}/;

    //判断用户名
    $("input[name='username']").keyup(function(){
        let username=$(this).val();
        let that=$(this);
        if(userReg.test(username)){
            $.ajax({
                type:"post",
                dataType:"text",
                url:"../admin/checkReg.php",
                data:{username:username},
                success:function (e) {
                    if(e){
                        usererror.css({
                            display:"none",
                        });
                        that.data("flag",true);
                    }else{
                        usererror.css({display:"block"}).html("用户名已存在");
                    }
                    check();
                }
            })
        }else {
            usererror.css({
                display:"block",
                color: "red",
            })
        }
    });
    //判断密码

    $("input[name='upass']").keyup(function () {
        let upass1= $("input[name='upass1']").val();
        let upass=$(this).val();
        if(passwordReg.test(upass)){
            passerror.css({
                display:"none",
            })
            if(upass!=upass1&&upass1){
                passerror.css({display:"block"}).html("两次密码不一致");
//                pass1error.css({display:"block",color:"red"}).html("两次密码不一致");
            }else{
                passerror.css({display:"none"});
                pass1error.css({display:"none"});
                $(this).data("flag",true);
            }
        }else{
            passerror.css({
                display:"block",
                color:"red",
            })
        }
        check();
    })
    //确认密码
    $("input[name='upass1']").keyup(function () {
        let upass= $("input[name='upass']").val();
        let upass1 = $(this).val();
        if (passwordReg.test(upass)) {
            if(upass!=upass1){
//                passerror.css({display:"block"}).html("两次密码不一致");
                pass1error.css({display:"block",color:"red"}).html("两次密码不一致");
            }else{
                passerror.css({display:"none"});
                pass1error.css({display:"none"});
            }
            $(this).data("flag",true);

        } else {
            passerror.css({
                display: "block",
                color: "red"
            })
        }
        check();
    })
    function check(){
        let flag=true;
        $("input").each(function (index,obj) {
            if(!$(obj).data('flag')){
                flag=false;
            }
        })
        if(flag){
            $("button").removeAttr('disabled');
        }else{
            $("button").attr("disabled",'disabled');
        }
    }

</script>
