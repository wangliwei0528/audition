<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["index"])){
    echo "<script>alert('请登录');location.href='alogin.php'</script>";
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <frameset rows="76,*" framespacing="0" border="0">
        <frame src="top.php" id="header-frame" name="header-frame" frameborder="no" scrolling="no">
        <frameset cols="180, 10, *" framespacing="0" border="0" id="frame-body">
            <frame src="menu.php" frameborder="no" scrolling="yes">
            <frame src="bar.php" frameborder="no" scrolling="no">
            <frame src="main.php" name="mainCont" frameborder="no" scrolling="yes">
        </frameset>
    </frameset><noframes></noframes>
</head>
<body>
</body>
</html>