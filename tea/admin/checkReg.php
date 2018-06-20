<?php
    header("content-type:text/html;charset=utf-8");
    $uname=htmlspecialchars(addslashes($_POST["username"]));
    include "../public/db.php";
    $sql="select * from user where username='$uname'";
    $result->setFetchMode(PDO::FETCH_ASSOC);
    //var_dump($result);exit;
    $row=$result->fetch();
    if($result->rowCount()>0){
        echo "用户名已存在";
    }else{
        echo "ok";
    }
?>