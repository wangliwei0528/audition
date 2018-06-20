<?php
include "../public/db.php";
/*$num = $_POST['num'];
$price = $_POST['price'];*/
$uid=$_GET["uid"];
$billing_name=$_POST["billing_name"];
$billing_address=$_POST["billing_address"];
$billing_postcode=$_POST["billing_postcode"];
$billing_phone=$_POST["billing_phone"];
$order_comments=$_POST["order_comments"];

/*$sql4="select * from cart";
$result4=$db->query($sql4);
$result4->setFetchMode(PDO::FETCH_ASSOC);
$row=$result4->fetch();
$sql="insert into ordercon values $row";
$arr= explode("",$row);
foreach($row as $k=>$v){
    $sql="insert into ordercon values $v";
    var_dump($sql);exit;
}
var_dump($sql);exit;*/











$sql2="select * from orders";
$result=$db->query($sql2);
$result->setFetchMode(PDO::FETCH_ASSOC);
$row=$result->fetch();
$oid=$row['oid'];


$sql="insert into orders (name,address,postcode,phone,order_comments,uid,state) values ('{$billing_name}','{$billing_address}','{$billing_postcode}','{$billing_phone}','{$order_comments}','{$uid}',1)";

$sql1="insert into ordercon(cid,cname,cprice,cphoto,amount,uid) SELECT * FROM cart WHERE uid='".$uid."'";
$db->exec($sql1);

$sql3="update ordercon set oid='$oid'";
//var_dump($sql3);exit;
$db->exec($sql3);


if($db->exec($sql)){
    echo "<script>alert('下单成功');location.href='order.php'</script>";
}