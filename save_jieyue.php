  <?php

	include_once("db_conn.php");

	$_jieyueren = $_POST["jieyueren"];
	$_jieyueriqi = $_POST["jieyueriqi"];
	$_tushuming = $_POST["tushuming"];
	$iQuery = "insert into tushujieyuebiao (
		jieyueren,
		jieyueriqi,
		tushuming
	) values (
		'".$_jieyueren."',
		'".$_jieyueriqi."',
		'".$_tushuming."'
	)";
	echo $iQuery;
	mysql_query($iQuery);
	mysql_close($conn);
	
?>