<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改图书信息</title>
</head>
<?php
	$_bookId = $_GET["bookId"];
	include_once("db_conn.php");
	$sQuery = "SELECT * FROM tushubiao WHERE ID = ".$_bookId."";
	$_bookList = mysql_query($sQuery);
	$book = mysql_fetch_array($_bookList);	
?>
<body>
	<form action="update_book.php" method="post">
    	<table border="1" align="center">
        	<tr>
            	<th>图书名</th>
                <td><input type="text" name="tushuming" value="<?php echo $book['tushuming'] ?>"></td>
            </tr>
            <tr>
            	<th>作者</th>
                <td><input type="text" name="zuozhe" value="<?php echo $book['zuozhe'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                	<input type="submit" value="修改" />
                    <input type="hidden" name="bookId" value="<?php echo $book['ID'] ?>" />
                </td>
            </tr>
        </table>
    </form>
<?php
	//从内存中释放查到的结果集
	mysql_free_result($_bookList);
	//关闭SQL连接
	mysql_close();
?>
</body>
</html>