<?php
include "../public/header.php";
?>

<script src="js/cart.js"></script>
<div class="container" style="height: auto">
    <div class="wf-wrap">
        <form action="orderDetail.php" method="post">
            <!--左侧-->
            <div class="shop_left">
                <table class="shop_table" id="tab">
                    <tr>
                        <th class="product_remove first" colspan="3">商品</th>
                        <th class="product_price">价格</th>
                        <th class="product_quantity">数量</th>
                        <th class="product_sub last">合计</th>
                    </tr>
                    <?php
                    $uid=$_SESSION["uid"];
                    $sql="select * from cart where uid='".$uid."'";
                    $result=$db->query($sql);
                    $result->setFetchMode(PDO::FETCH_ASSOC);
                    while ($row=$result->fetch()){
                    ?>
                    <tr class="list" ids="<?php echo $row['cid']?>">
                        <td class="product_removelink">
                            <a href="delShop.php?cid=<?php echo $row['cid']?>" class="remove">*</a>
                        </td>
                        <td class="product_photo">
                            <div class="product_content">
                                <a href="">
                                    <img src="../admin/<?php echo $row["cphoto"]?>" alt="">
                                </a>
                            </div>
                        </td>
                        <td class="product_name">
                            <a href=""><?php echo $row["cname"]?></a>
                        </td>
                        <td class="product_price">
                            <span class="amount price"><?php echo $row["cprice"]?></span>
                        </td>
                        <td class="product_quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" value="1" title="数量" class="input_text text" autocomplete="off" placeholder="1">
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>
                        <td class="product_sub">
                            <span class="amount"></span>
                        </td>
                    </tr>

                        <?php
                    }
                    ?>
                </table>
            </div>
            <!--右侧-->
            <div class="shop_right">
                <div class="cart_sidebar">
                    <div class="cart_sub">
                        <h2>购物车总计</h2>
                        <table cellpadding="0" class="cart_sub_table" width="100%">
                            <tr class="cart_subtotal">
                                <th>购物车小计</th>
                                <td>
                                    <span class="amount">￥199.0</span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>运费</th>
                                <td>
                                    <span class="amount">免费送货</span>
                                </td>
                            </tr>
                            <tr class="order_total">
                                <th>订单总计</th>
                                <td>
                                    <span class="amount">￥199.0</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="cart_button">
                        <input type="submit" class="first_button" name="proceed" value="前往收银台">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include "../public/footer.php";
?>

<script>

</script>
