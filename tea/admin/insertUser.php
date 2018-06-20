<?php
    $uname=$_POST["username"];
    $upass=$_POST["upass"];
    include "../public/db.php";
    $sql="insert into user(uname,upass) values('$uname','$upass')";
    $result=$db->query($sql);
    if($result->rowCount()){
        echo "<script>alert('注册成功');location.href='../index/ulogin.php';</script>";
    }
