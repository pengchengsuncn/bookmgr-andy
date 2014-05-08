<?php
                                   
	include_once("db_conn.php");

	$_tushuming = $_POST["tushuming"];
	$_zuozhe = $_POST["zuozhe"];
	$_chubanshe = $_POST["chubanshe"];
	$_chubanriqi = $_POST["chubanriqi"];                             
	$_tushuleixing = $_POST["tushuleixing"];
	$_biaoqian = $_POST["biaoqian"];
	$_jiage = $_POST["jiage"];                                                       
	$_shifoushangjia = $_POST["shifoushangjia"];		 
	$_tushujianje = $_POST["tushujianjie"];
	
	$iQuery = "insert into tushubiao (
		tushuming,
		zuozhe,
		chubanshe,
		chubanriqi,
		tushuleixing,
		jiage,
		shifoushangjia,
		tushujianjie
	) values (
		'".$_tushuming."',
		'".$_zuozhe."',
		'".$_chubanshe."',
		'".$_chubanriqi."',
		'".$_tushuleixing."',
		".$_jiage.",
		'".$_shifoushangjia."',
		'".$_tushujianje."'
		
	)";

	mysql_query($iQuery);
	mysql_close($conn);
	
?>