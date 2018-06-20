<?php
$uid=$_GET["uid"];
include "../public/db.php";
if($db->exec("delete from user where uid=".$uid)){
    echo "<script>alert('删除成功');location.href='user_list.php';</script>";
}
