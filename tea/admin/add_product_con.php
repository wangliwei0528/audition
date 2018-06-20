<?php
$pname=$_POST["pname"];
$price=$_POST["price"];
$photo=$_POST["photo"];
include "../public/db.php";
$sql="insert into products (pname,price,photo) values ('{$pname}','{$price}','{$photo}')";
//var_dump($sql);exit;
if($db->exec($sql)){
    echo "<script>alert('插入成功');location.href='add_product.php'</script>";
}