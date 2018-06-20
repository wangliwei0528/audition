<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>添加商品</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style/adminStyle.css" rel="stylesheet" type="text/css" />
    <script src="../static/js/upload.js"></script>

</head>
<body>
<div class="wrap">
    <div class="page-title">
        <span class="modular fl"><i class="edit_user"></i><em>编辑商品资料</em></span>
    </div>
    <form action="add_product_con.php" method="post">
        <table class="list-style">
            <tr>
                <td style="width:15%;text-align:right;">商品名称：</td>
                <td><input type="text" class="textBox length-middle" name="pname"/></td>
            </tr>
            <tr>
                <td style="width:15%;text-align:right;">图片：</td>
                <td>
                    <!--<div>
                        <?php
/*                        $url=$row['photo'];
                        $url=explode(";",$url)
                        */?>
                        <img src="<?php /*echo $url[0]*/?>" alt="" width="50">
                    </div>-->
                    <div class="parent">

                    </div>
                    <input type="hidden" value="" name="photo">
                </td>
            </tr>
            <tr>
                <td style="text-align:right;">价格：</td>
                <td><input type="text" class="textBox length-middle" name="price"/></td>
            </tr>

            <tr>
                <td style="text-align:right;">库存：</td>
                <td><input type="text" class="textBox length-middle" name="amount"/></td>
            </tr>

            <tr>
                <td style="text-align:right;"></td>
                <td><input type="submit" class="tdBtn" value="更新保存"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
<script>
    var upobj=new upload();
    upobj.createView({
        parent:document.querySelector(".parent")
    });
    upobj.up("./upload.php",function(e){
        document.querySelector("input[type=hidden]").value=e.join(";");
    })
</script>

