<?php
	$_bookId = $_POST["bookId"];
	$_tushuming = $_POST["tushuming"];
	$_zuozhe = $_POST["zuozhe"];
	include_once("db_conn.php");
	$uQuery = "UPDATE tushubiao SET tushuming='".$_tushuming."',zuozhe='".$_zuozhe."' WHERE ID = ".$_bookId."";
	mysql_query($uQuery);
	mysql_close();
?>
修改成功！ <a href="edit_book.php?bookId=<?php echo $_bookId ?>">返回</a> | <a href="index.php">首页</a>