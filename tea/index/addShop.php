<?php
session_start();
include "../public/db.php";
if(isset($_SESSION["userLogin"])){
    /*$num = $_POST['num'];
    $price = $_POST['price'];*/
    $uid=$_SESSION["uid"];
    $cid=strval($_GET['pid']);
    $sql=$db->query("select * from products where pid='".$cid."'");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $row=$sql->fetch();
    $cname=$row["pname"];
    $cprice=$row["price"];
    $amount=$row["amount"];
    $cphoto=$row["photo"];
    $sql1="insert into cart (cname,cprice,cphoto,amount,uid) values ('{$cname}','{$cprice}','{$cphoto}','1','{$uid}')";
    /*if(isset($_POST['num']&&$_POST['price'])){
        $sql1="insert into cart (cname,cprice,cphoto,amount,uid) values ('{$cname}','{$cprice}','{$cphoto}','{$amount}','{$uid}')";
    }else{
        $sql1="insert into cart (cname,cprice,cphoto,amount,uid) values ('{$cname}','{$cprice}','{$cphoto}','{$amount}','{$uid}')";
    }*/

    if($db->exec($sql1)) {
        echo "<script>alert('加入购物车成功');location.href='shop.php'</script>";
    }
}else{
    echo "<script>alert('请先登录后再购物！');history.back();</script>";
}

