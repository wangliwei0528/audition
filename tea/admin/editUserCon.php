<?php
header("content-type:text/html;charset=utf-8");
include "../public/db.php";
$uid=$_GET["uid"];
$uname=addslashes(htmlspecialchars($_POST["uname"]));
$upass=$_POST["upassword"];
$uphone=$_POST["uphone"];

//$aphoto=$_POST["aphoto"];
if($upass){
    $upass=$upass;
    $sql="update user set uname='{$uname}',upass='{$upass}',uphone='{$uphone}' where uid=".$uid;
}else{
    $sql="update user set uname='{$uname}',uphone='{$uphone}' where uid=".$uid;
}


   if($db->exec($sql)){
    echo "<script>alert('修改成功');location.href='user_list.php';</script>";
   }
