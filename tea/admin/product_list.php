<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>产品列表</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style/adminStyle.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
    <script src="js/public.js"></script>
</head>
<body>
<div class="wrap">
    <div class="page-title">
        <span class="modular fl"><i></i><em>产品列表</em></span>
        <span class="modular fr"><a href="add_product.php" class="pt-link-btn">+添加商品</a></span>
    </div>
    <div class="operate">
        <form>
            <select class="inline-select">
                <option>茗器</option>
                <option>好茶</option>
            </select>
            <input type="text" class="textBox length-long" placeholder="输入产品名称..."/>
            <input type="button" value="查询" class="tdBtn"/>
        </form>
    </div>
    <table class="list-style Interlaced">
        <tr>
            <th>编号</th>
            <th>图片</th>
            <th>名称</th>
            <th>价格</th>
            <th>库存</th>
            <th>操作</th>
        </tr>
        <?php
        include  "../public/db.php";

        $sql="select * from products";
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row=$result->fetch()) {
            //var_dump($row);exit;
            ?>
            <tr>
                <td><span><?php echo $row["pid"] ?></span></td>
                <td class="center pic-area"><img src="<?php echo $row["photo"] ?>" class="thumbnail"/></td>
                <td class="td-name">
                    <span class="ellipsis td-name block"><?php echo $row["pname"] ?></span>
                </td>
                <td class="center">
                <span>
                    <i>￥</i>
                    <em><?php echo $row["price"] ?></em>
                </span>
                </td>
                <td class="center">
                <span>
                    <em><?php echo $row["amount"] ?></em>
                    <!--<i>件</i>-->
                </span>
                </td>
                <td class="center">
                    <!--<a href="http://www.baidu.com/跳转至前台页面哦" title="查看" target="_blank"><img src="images/icon_view.gif"/></a>-->
                    <a href="edit_product.php?pid=<?php echo $row['pid']?>" title="编辑"><img src="images/icon_edit.gif"/></a>
                    <a href="delProducts.php?pid=<?php echo $row['pid']?>" title="删除"><img src="images/icon_drop.gif"/></a>
                </td>
            </tr>
            <?php
        }
        ?>


    </table>
    <!-- BatchOperation -->
    <div style="overflow:hidden;">
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