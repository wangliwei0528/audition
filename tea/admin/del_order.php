<?php
$oid=$_GET["oid"];
include "../public/db.php";
if($db->exec("delete from orders where oid=".$oid)){
    echo "<script>alert('删除成功');location.href='order_list.php';</script>";
}