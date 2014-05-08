<?php
	$_friendId = $_POST["friendId"];
	$_xingbei = $_POST["xingbei"];
	$_xingming = $_POST["xingming"];
	include_once("db_conn.php");
	$uQuery = "UPDATE friends SET sex='".$_xingbei."',xingming='".$_xingming."' WHERE ID = ".$_friendId."";
	mysql_query($uQuery);
	mysql_close();
?>
修改成功！ <a href="edit_friend.php?friendId=<?php echo $_friendId ?>">返回</a> | <a href="index.php">首页</a>	