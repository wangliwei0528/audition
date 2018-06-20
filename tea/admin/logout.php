<?php
session_start();
unset($_SESSION["index"]);
unset($_SESSION["uname"]);
echo "<script>alert('退出成功');location.href='index.php'</script>";
