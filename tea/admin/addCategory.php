
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../static/js/upload.js"></script>
    <title>Document</title>
</head>
<body>
<form action="addCategoryCon.php">
    所属分类:<select class="pid" name="pid">
        <option value="0">
            一级分类
        </option>
        <?php
        include "../libs/tree.class.php";
        include "../public/db.php";
        $treeobj=new tree();
        $treeobj->getTree(0,$db,"category",0,"-");
        echo ($treeobj->str);
        ?>
    </select><br>
    分类名称:<input type="text" name="cname"><br>
    分类英文名称:<input type="text" name="cename"><br>
    分类描述:<input type="text" name="ctitle"><br>
    <div class="parent"></div>
    <input type="hidden" value="" name="cimg"><br>
    是否在导航显示:
    <input type="radio" name="isshow" value="0" checked="checked">不显示&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="isshow" value="1">显示<br>
    <input type="submit" value="添加分类">
</form>
</body>
</html>
<script>
    var upobj=new upload();
    upobj.createView({parent:document.querySelector(".parent")});
    upobj.up("up.php",function (e) {
        document.querySelector("input[type=hidden]").value=e.join(";");
    })
</script>