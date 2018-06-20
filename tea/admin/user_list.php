<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>会员列表</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style/adminStyle.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
    <script src="js/public.js"></script>
</head>
<body>
<div class="wrap">
    <div class="page-title">
        <span class="modular fl"><i class="user"></i><em>会员列表</em></span>
        <span class="modular fr"><a href="add_user.php" class="pt-link-btn">+添加新会员</a></span>
    </div>
    <div class="operate">
        <form>
            <select class="inline-select">
                <option>选择会员等级</option>
                <option>白金会员</option>
                <option>黄金会员</option>
            </select>
            <input type="text" class="textBox length-long" placeholder="输入会员昵称、姓名、手机号码..."/>
            <input type="button" value="查询" class="tdBtn"/>
        </form>
    </div>
    <table class="list-style Interlaced">
        <tr>
            <th>编号</th>
            <th>会员昵称</th>
            <th>手机号码</th>
            <th>注册日期</th>
            <th>操作</th>
        </tr>
        <?php
        include  "../public/db.php";

        $sql="select * from user";
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row=$result->fetch()){
        //$url=explode(";",$row["uphoto"]);
        ?>
        <tr>
            <td class="center"><?php echo $row["uid"]?></td>
            <td class="center"><?php echo $row["uname"]?></td>
            <td class="center"><?php echo $row["uphone"]?></td>
            <td class="center">2015-04-17</td>
            <td class="center">
                <a href="edit_user.php?uid=<?php echo $row['uid']?>" class="inline-block" title="编辑"><img src="images/icon_edit.gif"/></a>

                <a href="delUser.php?uid=<?php echo $row['uid']?>" class="inline-block" title="删除"><img src="images/icon_drop.gif"/></a>
            </td>
        </tr>

            <?php
        }
        ?>
    </table>
    <!-- BatchOperation -->
    <div style="overflow:hidden;">
        <!-- Operation -->
        <!--<div class="BatchOperation fl">
            <input type="checkbox" id="del"/>
            <label for="del" class="btnStyle middle">全选</label>
            <input type="button" value="批量删除" class="btnStyle"/>
        </div>-->
        <!-- turn page -->
        <div class="turnPage center fr">
            <a>第一页</a>
            <a>1</a>
            <a>最后一页</a>
        </div>
    </div>
</div>
</body>
</html>