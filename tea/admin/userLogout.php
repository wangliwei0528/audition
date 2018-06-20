<?php
session_start();
unset($_SESSION["userLogin"]);
unset($_SESSION["uname"]);
echo "<script>alert('退出成功');location.href='../index/index.php'</script>";
