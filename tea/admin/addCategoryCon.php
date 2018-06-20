<?php
include "../public/db.php";
$pid=$_GET["pid"];
$cname=$_GET["cname"];
$cename=$_GET["cename"];
$ctitle=$_GET["ctitle"];
$cimg=$_GET["cimg"];
$isshow=$_GET["isshow"];
$sql="insert into category (cname,cename,ctitle,cimg,pid,isshow,state) VALUES ('{$cname}','{$cename}','{$ctitle}','{$cimg}',{$pid},{$isshow},0)";

if($db->exec($sql)){

    if($pid!=0) {
        $sql = "update category set state=1 WHERE cid=" . $pid;

        $db->exec($sql);
        echo "<script>alert('添加成功');location.href='addCategory.php'</script>";


    }else{
        echo "<script>alert('添加成功');location.href='addCategory.php'</script>";
    }
}
