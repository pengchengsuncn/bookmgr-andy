 <?php

	include_once("db_conn.php");

	$_leixing = $_POST["leixing"];
	
	$iQuery = "insert into tushuleixingbiao(
		leixing
		) values (
		'".$_leixing."'
		)";

	mysql_query($iQuery);
	mysql_close($conn);
	
?>