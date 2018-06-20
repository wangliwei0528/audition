<?php
include "../public/header.php";
?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".containn li").click(function(){
            $(".containn li").eq($(this).index()).addClass("cur").siblings().removeClass('cur');
            $(".usermanage_rightslider>div").hide().eq($(this).index()).show();
            //另一种方法: $("div").eq($(".tab li").index(this)).addClass("on").siblings().removeClass('on');
        });
    });
</script>
<div class="container" style="height:auto">
    <div class="wf-wrap">
        <div class="usermanage_leftslider" style="height: 312px">
            <div class="usermanage_page">
                <div class="usermanage_header">
                    <span class="photo">

                    </span>
                    <span class="name">
                        <p class="center-head-name">lisi<i class="fa fa-pencil"></i></p>
                        <p style="padding-top: 5px">
                            <a class="info" href="">修改密码</a>
                        </p>
                    </span>
                </div>
                <ul class="containn">
                    <!--我的订单-->
                    <li class="usermanage_order cur">
                        <div class="item_inner">
                            <a class="a_userpadding usermenu" href="">
                            <span style="display:table-cell;text-align: left">
                                <i class="" style="margin-right: 10px;width: 16px"></i>
                                <span class="title">个人资料</span>
                            </span>
                                <span style="display:table-cell;text-align: right">
                                <!--<span style="background: #ddd;padding: 1px 4px;font-size: 12px;position: relative;top: -2px;">2</span>-->
                                <i class="">></i>
                            </span>
                            </a>
                        </div>
                    </li>
                    <!--个人资料-->
                    <li class="usermanage_order">
                        <div class="item_inner">
                            <a class="a_userpadding usermenu" href="">
                            <span style="display:table-cell;text-align: left">
                                <i class="" style="margin-right: 10px;width: 16px"></i>
                                <span class="title">我的订单</span>
                            </span>
                                <span style="display:table-cell;text-align: right">
                                <!--<span style="background: #ddd;padding: 1px 4px;font-size: 12px;position: relative;top: -2px;">2</span>-->
                                <i class="">></i>
                            </span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!--收货地址-->
                <!--<li class="usermanage_order">
                    <div class="item_inner">
                        <a class="a_userpadding usermenu" href="">
                            <span style="display:table-cell;text-align: left">
                                <i class="" style="margin-right: 10px;width: 16px"></i>
                                <span class="title">收货地址</span>
                            </span>
                            <span style="display:table-cell;text-align: right">

                                <i class="">></i>
                            </span>
                        </a>
                    </div>
                </li>-->
            </div>
        </div>
        <div class="usermanage_rightslider" style="height: auto">
            <div class="contain">
                <div class="my_new_order" style="margin-right: 10px">
                    <i class=""></i>个人资料
                </div>
                <div class="my_tab_content">
                    <div class="order_list">
                        <div class="order_detail">
                            <?php
                            $uid=$_SESSION["uid"];
                            /*$uid=$_GET["uid"];*/
                            $sql="select * from user where uid=".$uid;

                            include "../public/db.php";
                            $result=$db->query($sql);
                            $result->setFetchMode(PDO::FETCH_ASSOC);
                            $row=$result->fetch()
                            ?>
                            <form action="edit_user_info.php?uid=<?php echo $uid?>" method="post">
                                <table>
                                    <tr>
                                        <td>姓名</td>
                                        <td><input type="text" value="<?php echo $row['uname']?>" name="uname"></td>
                                    </tr>
                                    <tr>
                                        <td>手机号</td>
                                        <td><input type="text" value="<?php echo $row['uphone']?>" name="uphone"></td>
                                    </tr>
                                    <!--<tr>
                                        <td>照片</td>
                                        <td>
                                            <div class="img"></div>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td><button type="submit">保存更改</button></td>
                                    </tr>
                                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="contain">
                <div class="my_new_order" style="margin-right: 10px">
                    <i class=""></i>我的订单
                </div>
                <div class="my_tab_content">
                    <div class="order_list">
                        <div class="order_detail">
                            <?php
                            $uid=$_SESSION["uid"];
                            /*$uid=$_GET["uid"];*/
                            $sql="select * from user where uid=".$uid;

                            include "../public/db.php";
                            $result=$db->query($sql);
                            $result->setFetchMode(PDO::FETCH_ASSOC);
                            $row=$result->fetch()
                            ?>
                            <form action="edit_user_info.php?uid=<?php echo $uid?>" method="post">
                                <table>
                                    <tr>
                                        <td>姓名</td>
                                        <td><input type="text" value="<?php echo $row['uname']?>" name="uname"></td>
                                    </tr>
                                    <tr>
                                        <td>手机号</td>
                                        <td><input type="text" value="<?php echo $row['uphone']?>" name="uphone"></td>
                                    </tr>
                                    <!--<tr>
                                        <td>照片</td>
                                        <td>
                                            <div class="img"></div>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td><button type="submit">保存更改</button></td>
                                    </tr>
                                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "../public/footer.php";
?>
