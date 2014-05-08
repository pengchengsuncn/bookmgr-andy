<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改图书信息</title>
</head>
<?php
	$_friendId = $_GET["friendId"];
	include_once("db_conn.php");
	$sQuery = "SELECT * FROM friends WHERE ID = ".$_friendId."";
	$_friendList = mysql_query($sQuery);
	$friend = mysql_fetch_array($_friendList);	
?>
<body>
	<form action="update_friend.php" method="post">
    	<table border="1" align="center">
        	<tr>
            	<th>姓别</th>
                <td>
                	<input type="radio" name="xingbei" <?php if($friend['sex'] == "男") echo "checked" ?> value="男">男
                	<input type="radio" name="xingbei" <?php if($friend['sex'] == "女") echo "checked" ?> value="女">女
                </td>
            </tr>
            <tr>
            	<th>姓名</th>
                <td><input type="text" name="xingming" value="<?php echo $friend['xingming'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                	<input type="submit" value="修改" />
                    <input type="hidden" name="friendId" value="<?php echo $friend['ID'] ?>" />
                </td>
            </tr>
        </table>
    </form>
<?php
	//从内存中释放查到的结果集
	mysql_free_result($_friendList);
	//关闭SQL连接
	mysql_close();
?>
</body>
</html>