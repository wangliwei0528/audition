<?php
header("content-type:text/html;charset=utf-8");
include "../public/db.php";
$pid=$_GET["pid"];
$pname=addslashes(htmlspecialchars($_POST["pname"]));
$price=$_POST["price"];
$amount=$_POST["amount"];
$photo=$_POST["photo"];
//var_dump($photo);exit;
$sql="update products set pname='{$pname}',price='{$price}',amount='{$amount}',photo='{$photo}' where pid=".$pid;
//var_dump($sql);exit;
if($db->exec($sql)){
    echo "<script>alert('修改成功');location.href='product_list.php';</script>";
}
