<?php
include "../public/header.php";
$uid=$_SESSION["uid"];
//var_dump($uid);exit;
?>
<!--<script src="js/cart.js"></script>-->
<div class="main_content">
    <div class="wf-wrap">
        <div class="line"></div>
        <div class="container" style="height: 544px">

            <form action="add_order.php?uid=<?php echo $uid?>" class="checkout bit_row" name="checkout" method="post">
                <div class="checkout_left">
                    <div class="col-1">
                        <h3>账单地址</h3>
                        <p class="form_row">
                            <label for="billing_name">
                                姓名
                                <abbr title="必填" class="required">*</abbr>
                            </label>
                            <input name="billing_name" id="billing_name" class="billing_name">
                        </p>
                        <p class="form_row">
                            <label for="billing_address">
                                地址
                                <abbr title="必填" class="required">*</abbr>
                            </label>
                            <input name="billing_address" id="billing_address" class="billing_address" placeholder="编辑地址">
                        </p>
                        <p class="form_row">
                            <label for="billing_postcode">
                                邮政编码
                                <abbr title="必填" class="required">*</abbr>
                            </label>
                            <input name="billing_postcode" id="billing_postcode" class="billing_postcode" placeholder="邮政编码">
                        </p>
                        <p class="form_row">
                            <label for="billing_phone">
                                电话
                                <abbr title="必填" class="required">*</abbr>
                            </label>
                            <input name="billing_phone" id="billing_phone" class="billing_phone" placeholder="电话">
                        </p>
                        <p class="form_row">
                            <label for="order_comments">
                                订单备注
                                <abbr title="必填" class="required">*</abbr>
                            </label>
                            <textarea name="order_comments" id="order_comments" cols="5" rows="2" class="input_text" placeholder="为您的订单添加备注，例如，送货特别注意事项。"></textarea>
                        </p>
                    </div>
                </div>
                <div class="checkout_right">
                    <h3 class="order_review">订单详情</h3>
                    <div id="order_review">
                        <?php
                        include  "../public/db.php";
                        $uid=$_SESSION["uid"];
                        $sql="select * from cart where uid='".$uid."'";
                        $result=$db->query($sql);
                        $result->setFetchMode(PDO::FETCH_ASSOC);
                        while ($row=$result->fetch()){
                        ?>
                        <table class="shop_table">
                            <thead>
                            <tr>
                                <th class="product_name">商品</th>
                                <th class="product_total">合计</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr class="cart_sub">
                                <th>购物车小计</th>
                                <td class="amount">￥199</td>
                            </tr>
                            <tr class="shipping">
                                <th>运费</th>
                                <td>免费送货</td>
                            </tr>
                            <tr class="order_total order_totals">
                                <th>订单总计</th>
                                <td class="amount">￥199.00</td>
                            </tr>
                            </tfoot>
                            <tbody>

                            <tr class="cart_item">
                                <td class="mainProductName" style="text-align: left;">
                                    <a href=""><?php echo $row["cname"]?></a>
                                    <strong class="product_quantity shuliang"><?php echo $row["amount"]?></strong>
                                </td>
                                <td class="mainProductName">
                                    <span class="amount"><?php echo $row["cprice"]?></span>
                                </td>
                            </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <div class="payment">
                            <ul class="payment_methods">
                                <li class="payment_method">
                                    <input type="radio" class="input_radio" name="payment_method" value="bacs" checked="checked">
                                    <label for="payment_method">银行汇款（线下）</label>
                                    <div class="payment_box">
                                        <p>直接付款到我们的银行账户。请使用订单号作为付款名目。我们会在资金到账后配送订单。</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="place_order">
                                <input type="submit" class="button" name="place_order" value="下单" data-value="下单">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../public/footer.php";
?>
<!--<script>-->
<!--    $(function () {-->
<!--        function setTotals(){-->
<!--            var lists=$(".cart_item");-->
<!--            var zong=0;-->
<!--            for(var i=0;i<lists.length;i++){-->
<!--                var num=parseInt($(lists[i]).children(".mainProductName").children(".shuliang").text());-->
<!--                var price=parseInt($(lists[i]).children(".mainProductName").children(".amount").text());-->
<!--                var total=price *  num;-->
<!--                 console.log(num);-->
<!--                $(".cart_sub").children(".amount").text(total.toFixed(2));-->
<!--                zong=zong + total;-->
<!---->
<!--            }-->
<!--//            console.log(zong);-->
<!---->
<!--             $(".cart_sub").children(".amount").text("￥"+zong.toFixed(2));-->
<!--             $(".order_totals").children(".amount").text("￥"+zong.toFixed(2));-->
<!--        }-->
<!--        setTotals();-->
<!--    })-->
<!--</script>-->

