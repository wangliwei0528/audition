<?php
include "../public/header.php";
?>
<div class="main_content">
    <div class="wf-wrap">
        <div class="line"></div>
        <div class="container" style="height: 924px">
            <div class="col-1">
                <h2>谢谢，您的订单已收到。</h2>
                <table class="shop_table dingdan">
                    <thead>
                    <tr>
                        <th class="order">订单</th>
                        <th class="date">日期</th>
                        <th class="total">总计</th>
                        <th class="method">付款方式</th>
                    </tr>
                    </thead>
                    <?php
                    $sql="select * from orders";
                    $result=$db->query($sql);
                    $result->setFetchMode(PDO::FETCH_ASSOC);
                    $row=$result->fetch();
                    ?>
                    <tbody>
                    <tr>
                        <td><strong>#<?php echo $row["oid"]?></strong></td>
                        <td><strong><?php echo $row["order_date"]?></strong></td>
                        <td><strong>#</strong></td>
                        <td><strong>银行汇款（线下）</strong></td>
                    </tr>
                    </tbody>
                </table>
                <p>直接付款到我们的银行账户。请使用订单号作为付款名目。我们会在资金到账后配送订单。</p>
                <h2>我们的银行账户详情</h2>
                <h2>订单详情</h2>
                <table class="shop_table dingdan2">

                    <thead style="border-bottom: 3px solid #ddd;">
                    <tr>
                        <th class="product_name">商品</th>
                        <th class="product_total row" style="text-align: right;">合计</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr class="cart_sub">
                        <th>购物小计</th>
                        <td class="row">
                            <span class="amount">￥199.00</span>
                        </td>
                    </tr>
                    <tr class="cart_sub">
                        <th>配送</th>
                        <td class="row">免费送货</td>
                    </tr>
                    <tr class="order_total">
                        <th>订单合计</th>
                        <td style="font-weight: bold" class="row">
                            <span class="amount">￥199.00</span>
                        </td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $sql1="select * from ordercon";
                    $result1=$db->query($sql1);
                    $result1->setFetchMode(PDO::FETCH_ASSOC);
                    while ($row1=$result1->fetch()) {
                        ?>
                        <tr class="order_item">
                            <td>
                                <a href="">
                                    <?php echo $row1["cname"] ?>
                                    <strong class="product_quantity">*1</strong>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <h2>账单地址</h2>
                <table class="shop_table dingdan3">
                    <tr style="border-bottom: 1px dotted #ddd;">
                        <th width="80">电话</th>
                        <th><?php echo $row["phone"]?></th>
                    </tr>
                    <tr style="border-bottom: 1px dotted #ddd;">
                        <th width="80">名字</th>
                        <th><?php echo $row["name"]?></th>
                    </tr>
                    <tr style="border-bottom: 1px dotted #ddd;">
                        <th width="80">地址</th>
                        <th><?php echo $row["address"]?></th>
                    </tr>
                    <tr style="border-bottom: 1px dotted #ddd;">
                        <th width="80">邮编</th>
                        <th><?php echo $row["postcode"]?></th>
                    </tr>
                </table>
                <div style="padding: 20px 0;">
                    <a href="index.php" class="back">返回</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "../public/footer.php";
?>
