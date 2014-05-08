<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看图书</title>
<style type="text/css">
body{ background:gray; font-family: "隶书"; color:white; margin:0px;}
  
#header{width:940px; height:90px; margin:0 auto; border:1px solid white;}
#nav{background:gray; width:100%; height:35px; margin-top:10px; margin-bottom:10px; padding:0px; border-top:1px solid white; border-bottom:1px solid white; }
#box{width:940px; margin:0 auto;}
#box #left{width:196px; height:500px; float:left; list-style:none; font-size:20px; margin:0; border:1px solid white;}
#box #right{width:730px; height:500px; margin-left:10px; float:left; margin-bottom:10px; border:1px solid white;}
#footer{clear:both; width:940px; height:90px; margin:0 auto; border:1px solid white;}
.menu{
		margin:0 auto;
		width:940px;
		line-height:35px;
} 
ul{ list-style:none;}

.menu ul{ margin:0px; padding-left:0px;}
.menu li{
    float:left; /* 向左漂移，将竖排变为横排 */
	list-style:none;
	font-size:20px;
	margin-right:10px;  
       
}
</style>
</head>
<body>
    <div id="header">
      <h1 align="center">我的管理系统</h1>
    </div>
    <div id="nav">
        <div class="menu">
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="index.php">图书管理</a></li>
                <li><a href="friend.php">朋友管理</a></li>
                <li><a href="index.php">照片管理</a></li>
            </ul>
        </div>
    </div>
    <div id="box">
        <div id="left">
            <ul>
                <li><a href="tushuleixing.php">添加图书类型</a></li>
                <li><a href="show_leixing.php">查看图书类型</a></li>
            </ul>
        </div>
        <div id="right">
        	<?php
				//连接数据库
            	include_once("db_conn.php");
				//拼写SQL语句
				$sQuery = "SELECT * FROM tushuleixingbiao";  //表名字不对了 执行的也就不显示 
				//执行SQL语句
				$bookleixingList = mysql_query($sQuery);				
			?>
            <br />
            <table border="1" align="center">
            	<tr>
                    <th>类型名称</th>
                    <th>操作</th>
                </tr>
                <?php
					//循环显示查询到的每一本书  //注意图书类型表里面的字段 一一对应（$row['leixing']---不能写成$row['tushuleixing']）
					while($row = mysql_fetch_array($bookleixingList)){
					   echo "<tr>";
					   echo "<td>".$row['leixing']."</td>";
					   echo "<td><a href='edit_bookleixing.php?bookleixingId=".$row['ID']."'>修改</a>|<a href='delete_bookleixing.php?bookleixingId=".$row['ID']."'>删除</a></td>";
					   echo "</tr>";
					}
					//从内存中释放查到的结果集
					mysql_free_result($bookleixingList);
					//关闭SQL连接
					mysql_close();
				?>
            </table>
        </div>        
    </div>
    <div id="footer">
        <h1 align="center">此处显示版权内容</h1>
    </div>
</body>
</html>