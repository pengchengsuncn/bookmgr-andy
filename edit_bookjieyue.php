<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改图书信息</title>
</head>
<?php //接受图书借阅的id
	$_bookjieyueId = $_GET["bookjieyueId"];
	include_once("db_conn.php");  //拼写SQL语句 得到图书借阅表
	$sQuery = "SELECT * FROM tushujieyuebiao WHERE ID = ".$_bookjieyueId."";
	$_bookjieyueList = mysql_query($sQuery); //执行语句
	$bookjieyue = mysql_fetch_array($_bookjieyueList);	
?>
<body>
	<form action="update_bookjieyue.php" method="post">
    	<table border="1" align="center">
        	<tr>
            	<th>借阅人</th>                             <!--打印出借阅人的字段，-->
                <td><input type="text" name="jieyueren" value="<?php echo $bookjieyue['jieyueren'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                	<input type="submit" value="修改" /><!--submit 提交-->
                    <input type="hidden" name="bookjieyueId" value="<?php echo $bookjieyue['ID'] ?>" />
                </td><!--hidden 隐藏-->
            </tr>
        </table>
    </form>
<?php
	//从内存中释放查到的结果集
	mysql_free_result($_bookjieyueList);
	//关闭SQL连接
	mysql_close();
?>
</body>
</html>