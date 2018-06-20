<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>编辑会员资料</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$uid=$_GET["uid"];
$sql="select * from user where uid=".$uid;

include "../public/db.php";
$result=$db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$row=$result->fetch()
?>
<div class="wrap">
    <div class="page-title">
        <span class="modular fl"><i class="edit_user"></i><em>编辑会员资料</em></span>
    </div>
    <form action="editUserCon.php?uid=<?php echo $_GET['uid']?>" method="post">
    <table class="list-style">
        <tr>
            <td style="width:15%;text-align:right;">会员昵称：</td>
            <td><input type="text" class="textBox length-middle" value="<?php echo $row['uname']?>" name="uname"/></td>
        </tr>
        <tr>
            <td style="text-align:right;">手机号码：</td>
            <td><input type="text" class="textBox length-middle" value="<?php echo $row['uphone']?>" name="uphone"/></td>
        </tr>

        <tr>
            <td style="text-align:right;">会员等级：</td>
            <td>
                <select class="textBox">
                    <option>请选择会员等级</option>
                    <option>白金会员</option>
                    <option>黄金会员</option>
                </select>
            </td>
        </tr>

        <tr>
            <td style="text-align:right;"></td>
            <td><input type="submit" class="tdBtn" value="更新保存"/></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>