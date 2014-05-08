<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
	<?php
 		include_once("db_conn.php");
		$_xingming = $_POST["xingming"]; 
		$_sex = $_POST["xingbie"]; 
		$_dianhua = $_POST["dianhua"]; 
		$_QQ = $_POST["QQ"]; 
		$_address = $_POST["dizhi"]; 
		$_youxiang = $_POST["youxiang"]; 
		$_shengri = $_POST["shengri"]; 
		$_aihao = $_POST["aihao"]; 
	$iQuery = "insert into friends(
		xingming,
		sex,
		dianhua,
		QQ,
		address,
		email,
		birthday,
		aihao
	) values (
		'".$_xingming."',
		'".$_sex."',
		'".$_dianhua."',
		'".$_QQ."',
		'".$_address."',
		'".$_youxiang."',
		'".$_shengri."',
		'".$_aihao."'
	)";
	echo $iQuery;
	mysql_query($iQuery);
	mysql_close($conn);
	
	?>
</body>
</html>
