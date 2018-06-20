<?php
$pid=$_GET["pid"];
include "../public/db.php";
if($db->exec("delete from products where pid=".$pid)){
    echo "<script>alert('删除成功');location.href='product_list.php';</script>";
}
