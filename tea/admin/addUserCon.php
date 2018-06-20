<?php
$aname=$_POST["aname"];
$apass=$_POST["apass"];
$aphone=$_POST["aphone"];
//$anicheng=$_POST["anicheng"];
//$aphoto=$_POST["aphoto"];
include "../public/db.php";
$sql="insert into admin (aname,apass,aphone) values ('{$aname}','{$apass}','{$aphone}')";
//var_dump($sql);exit;
if($db->exec($sql)){
    echo "<script>alert('插入成功');location.href='add_user.php'</script>";
}