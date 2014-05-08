<?php
	$_bookjieyueId = $_POST["bookjieyueId"];
	$_jieyueren = $_POST["jieyueren"];
	
	include_once("db_conn.php");
	$uQuery = "UPDATE tushujieyuebiao SET jieyueren='".$_jieyueren."' WHERE ID = ".$_bookjieyueId."";
	echo $uQuery;
	mysql_query($uQuery);
	mysql_close();
?>
修改成功！ <a href="edit_bookjieyue.php?bookjieyueId=<?php echo $_bookjieyueId ?>">返回</a> | <a href="index.php">首页</a>