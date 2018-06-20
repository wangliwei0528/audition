<?php
$cid=$_POST["cid"];
$stitle=$_POST["stitle"];
$scon=$_POST["scon"];
$simg=$_POST["simg"];
$sprice=$_POST["sprice"];
include "../public/db.php";
$sql="insert into shows (stitle,scon,simg,sprice,cid) values ('{$stitle}','{$scon}','{$simg}','{$sprice}',$cid)";
if($db->exec($sql)){
    echo "<script>alert('添加成功');location.href='addCon.php';</script>";
}