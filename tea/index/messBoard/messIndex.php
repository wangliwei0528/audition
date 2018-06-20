<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
</head>
<style>
    .content{
        margin:0 auto;
        width: 800px;
        /*height:500px;*/
        border:1px solid #cccccc;
        padding:20px;
    }
</style>
<body>
<div class="content">
    <h2>我的留言板</h2>
    <a href = "messIndex.php">添加留言</a>
    <a href = "show.php" >查看留言</a>
    <hr width = "100%">
    <h3>添加留言</h3>
    <form action = "doAdd.php" method = "post">
        <table width = "380" border = "0" cellpadding = "4">
            <tr>
                <td  align = "right">标题：</td>
                <td><input type = "text" name = "title"></td>
            </tr>
            <tr>
                <td  align = "right">留言者：</td>
                <td><input type = "text" name = "author"></td>
            </tr>
            <tr>
                <td align = "right" valign = "top">留言内容：</td>
                <td><textarea name = "content" row = "5" cols = "30"></textarea></td>
            </tr>
            <tr>
                <td colspan = "2" align = "center"><input type = "submit" value = "提交">
                    <input type = "reset" value = "重置"></td>
            </tr></table>
    </form>
</div>
</body>
</html>