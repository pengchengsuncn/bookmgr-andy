<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改图书信息</title>
</head>
<?php
	$_bookleixingId = $_GET["bookleixingId"];
	include_once("db_conn.php");
	$sQuery = "SELECT * FROM tushuleixingbiao WHERE ID = ".$_bookleixingId."";
	$_bookleixingList = mysql_query($sQuery);
	$leixing = mysql_fetch_array($_bookleixingList);	
?>
<body>
	<form action="update_bookleixing.php" method="post">
    	<table border="1" align="center">
        	<tr>
            	<th>类型名</th>
                <td><input type="text" name="leixing" value="<?php echo $leixing['leixing'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                	<input type="submit" value="修改" />
                    <input type="hidden" name="bookleixingId" value="<?php echo $leixing['ID'] ?>" />
                </td>
            </tr>
        </table>
    </form>
<?php
	//从内存中释放查到的结果集
	mysql_free_result($_bookleixingList);
	//关闭SQL连接
	mysql_close();
?>
</body>
</html>