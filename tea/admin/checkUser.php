<?php
session_start();
header("content-type:text/html;charset=utf-8");
$uname=htmlspecialchars(addslashes($_POST["uname"]));
$upass=$_POST["upass"];
$upass1=$_POST["upass1"];
$sql="select * from user where uname='{$uname}' and upass='{$upass}'";
include  "../public/db.php";
$result=$db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$row=$result->fetch();
if($result->rowCount()>0){
    $_SESSION["userLogin"]="yes";
    $_SESSION["uname"]=$row['uname'];
    $_SESSION["uphone"]=$row['uphone'];
    $_SESSION["uid"]=$row["uid"];
    echo "<script>alert('登陆成功');location.href='../index/index.php';</script>";
}else{
    echo "<script>alert('登陆失败');location.href='../index/ulogin.php';</script>";
}

