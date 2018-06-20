<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../static/ueditor/ueditor.config.js"></script>
    <script src="../static/ueditor/ueditor.all.min.js"></script>
    <script src="../static/js/upload.js"></script>
    <title>Document</title>
</head>
<body>
<form action="addConCon.php" method="post">
    所属分类:
    <select name="cid" >
        <option value="0">一级分类</option>
        <?php
        include "../libs/tree.class.php";
        include "../public/db.php";
        $treeobj=new tree();
        $treeobj->getTree(0,$db,"category",0,"-");
        echo ($treeobj->str);
        ?>
    </select><br>
    内容标题: <input type="text" name="stitle"><br>
    价格: <input type="text" name="sprice"><br>
    内容:
    <div name="scon"><script id="editor" type="text/plain" style="width:100%;height:300px;"></script></div>
<!--    <textarea name="scon"  cols="30" rows="10">-->
<!--    </textarea><br>-->
    <div class="parent"></div>
    <input type="hidden" value="" name="simg">
    <input type="submit" value="添加">
</form>
</body>
</html>
<script>
    var upobj=new upload();
    upobj.createView({parent:document.querySelector(".parent")});
    upobj.up("./upload.php",function (e) {
    document.querySelector("input[type=hidden]").value=e.join(";");
    })
    var ue = UE.getEditor('editor');
</script>