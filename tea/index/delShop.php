<?php
$cid=$_GET["cid"];
include "../public/db.php";
if($db->exec("delete from cart where cid=".$cid)){
    echo "<script>alert('删除成功');location.href='shop.php';</script>";
}