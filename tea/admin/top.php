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
    <title>header</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "../public/db.php";
$aid=$_SESSION["aid"];
$sql="select * from admin WHERE aid=".$aid;
$result=$db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
if($row=$result->fetch()){
    $url=explode(";",$row["aphoto"])[0];
}
?>
<div class="header">
    <div class="logo">
        <img src="images/admin_logo.png" title="在哪儿"/>
    </div>
    <div class="fr top-link">
        <a href="../index/index.php" target="_blank" title="访问站点"><i class="shopLinkIcon"></i><span>访问商城</span></a>
        <a href="admin_list.php" target="mainCont" title="DeathGhost"><i class="adminIcon"></i><span>管理员：<?php echo $row['aname']?></span></a>
        <!--<a href="#" title="修改密码"><i class="clearIcon"></i><span>清除缓存</span></a>-->
        <a href="revise_password.php" target="mainCont" title="修改密码"><i class="revisepwdIcon"></i><span>修改密码</span></a>
        <a href="logout.php" title="安全退出" style="background:rgb(60,60,60);"><i class="quitIcon"></i><span>安全退出</span></a>
    </div>
</div>
</body>
</html>