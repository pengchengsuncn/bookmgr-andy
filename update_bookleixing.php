<?php
	$_bookleixingId = $_POST["bookleixingId"];
	$_leixing = $_POST["leixing"];
	include_once("db_conn.php");
	$uQuery = "UPDATE tushuleixingbiao SET leixing='".$_leixing."'WHERE ID = ".$_bookleixingId."";
	
	echo $uQuery;
	mysql_query($uQuery);
	mysql_close();
?>
修改成功！ <a href="edit_bookleixing.php?bookleixingId=<?php echo $_bookleixingId ?>">返回</a> | <a href="index.php">首页</a> 