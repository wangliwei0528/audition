<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>订单列表</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style/adminStyle.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
    <script src="js/public.js"></script>
</head>
<body>
<div class="wrap">
    <div class="page-title">
        <span class="modular fl"><i class="order"></i><em>订单列表</em></span>
    </div>
    <div class="operate">
        <form>
            <img src="images/icon_search.gif"/>
            <input type="text" class="textBox length-long" placeholder="输入订单编号或收件人姓名..."/>
            <select class="inline-select">
                <option>未付款</option>
                <option>已付款</option>
            </select>
            <input type="button" value="查询" class="tdBtn"/>
        </form>
    </div>
    <table class="list-style Interlaced">
        <tr>
            <th>订单编号</th>
            <th>下单时间</th>
            <th>收件人</th>
            <th>订单金额</th>
            <th>订单状态</th>
            <th>操作</th>
        </tr>
        <?php
        include  "../public/db.php";

        $sql="select * from orders";
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row=$result->fetch()){
        ?>
        <tr>
            <td>
                <input type="checkbox"/>
                <a href="order_detail.html"><?php echo $row["oid"]?></a>
            </td>
            <td class="center">
                <span class="block"><?php echo $row["name"]?></span>
                <span class="block"><?php echo $row["order_date"]?></span>
            </td>
            <td width="450">
                <span class="block"><?php echo $row["name"]?>[<?php echo $row["phone"]?>]</span>
                <address><?php echo $row["address"]?></address>
            </td>
            <td class="center">
                <span><i>￥</i><b>58.00</b></span>
            </td>
            <td class="center">
                <span>
                    <?php
                    if($row["state"]==1){

                    ?>
                    未发货
                    <?php
                    }elseif($row["state"]==0) {

                        ?>
                    已发货
                        <?php
                    }
                    ?>
                </span>
            </td>
            <td class="center">
                <a href="order_detail.php" class="inline-block" title="查看订单"><img src="images/icon_view.gif"/></a>
                <a href="del_order.php?oid=<?php echo $row['oid']?>" class="inline-block" title="删除订单"><img src="images/icon_trash.gif"/></a>
            </td>
        </tr>
            <?php
        }
        ?>
    </table>
    <!-- BatchOperation -->
    <div style="overflow:hidden;">
        <!-- Operation -->
        <div class="BatchOperation fl">
            <input type="button" value="配货" class="btnStyle"/>
            <input type="button" value="删除订单" class="btnStyle"/>
        </div>
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