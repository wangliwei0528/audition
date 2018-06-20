<?php
header("content-type:text/html;charset=utf-8");
include "../public/db.php";
$uid=$_GET["uid"];
$uname=$_POST["uname"];
$uphone=$_POST["uphone"];
$sql="update user set uname='{$uname}',uphone='{$uphone}' where uid=".$uid;
//var_dump($sql);exit;
if($db->exec($sql)){
    echo "<script>alert('修改成功');location.href='userDetail.php';</script>";
}
