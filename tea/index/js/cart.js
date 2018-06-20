$(function() {
    $(".plus").click(function() {
        var t = $(this).parent().find('input[class*=text]');
        if(t.val()==""||undefined||null){
            t.val(0);
        }
        t.val(parseInt(t.val()) + 1);
        setTotal();
    });
    $(".minus").click(function() {
        var t = $(this).parent().find('input[class*=text]');
        if(t.val()==""||undefined||null){
            t.val(0);
        }
        t.val(parseInt(t.val()) - 1)
        if(parseInt(t.val()) < 1) {
            t.val(1);
        }
        setTotal();
    });

    function setTotal(){
        var lists=$(".list");
        var zong=0;
        for(var i=0;i<lists.length;i++){
            var num=$(lists[i]).children(".product_quantity").children(".quantity").children(".text").val();
            var price=parseInt($(lists[i]).children(".product_price").children(".price").text());
            var total=price *  num;
            // console.log(total);
            $(lists[i]).children(".product_sub").children("span").text(total.toFixed(2));
            zong=zong + total;

        }
        console.log(zong);
        $(".cart_subtotal").children("td").children(".amount").text("￥"+zong.toFixed(2));
        $(".order_total").children("td").children(".amount").text("￥"+zong.toFixed(2));

        // $(".cart_sub").children(".amount").text("￥"+zong.toFixed(2));
        // $(".order_totals").children(".amount").text("￥"+zong.toFixed(2));
    }
    setTotal();
});
