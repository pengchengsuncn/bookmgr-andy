<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的朋友管理系统</title>
<style type="text/css">
body{ background:gray; font-family: "隶书"; color:white; margin:0px;}

.header{width:940px; height:90px; margin:0 auto; border:1px solid white;}
.nav{background:gray; width:100%; height:35px; margin-top:10px; margin-bottom:10px; padding:0px; border-top:1px solid white; border-bottom:1px solid white; }

 .box{width:940px; margin:0 auto;}
.box .left{width:196px; height:500px; float:left; list-style:none; font-size:20px; margin:0; border:1px solid white;}
.box .right{width:730px; height:500px; margin-left:10px; float:left; margin-bottom:10px; border:1px solid white;}
.footer{clear:both; width:940px; height:90px; margin:0 auto;border:1px solid white;}
.menu{
		margin:0 auto;
		width:940px;
		line-height:35px;
} 
ul{ list-style:none;}

.menu ul{ margin:0px; padding-left:0px;}
.menu li{
    float:left;  
	list-style:none;
	font-size:20px;
	margin-right:10px;}
	a:hover
{ 
background-color:yellow;
} 
</style>
</head>
<body>

    <div class="header">
      <h1 align="center">我的管理系统</h1>
    </div>
    <div class="nav">
        <div class="menu">
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="tushuleixing.php">图书管理</a></li>
                <li><a href="friend.php">朋友管理</a></li>
                <li><a href="index.php">照片管理</a></li>
            </ul>
        </div>
    </div>
    <div class="box">
        <div class="left">
            <ul>
                <li><a href="show_friend.php">查找朋友</a></li>
                <li><a href="index.php">添加朋友</a></li>
            </ul>
        </div>
        <div class="right">
			<form action="save_friend.php" method="post">
            	 <table>
                <tr>
                    <td>姓名:</td>
                    <td><input name="xingming" type="text"/></td>
                </tr>
                 <tr>                                 	
                        <td>姓别:</td>
                        <td>
                            <input name="xingbie" type="radio" value="男" checked="checked"/>男
                            <input name="xingbie" type="radio" value="女"/>女
                        </td>
                 </tr>
                <tr>           	
                    <td>电话:</td>
                    <td><input name="dianhua" type="text"/></td>
                </tr>
                <tr>                                      	
                    <td>Q Q:</td>
                    <td><input name="QQ" type="text"/></td>
                </tr>
                <tr>                                      	
                    <td>地址:</td>
                    <td><input name="dizhi" type="text"/></td>
                </tr>
                <tr>                                      	
                    <td>邮箱:</td>
                    <td><input name="youxiang" type="text"/></td>
                </tr>
                <tr>                   	
                    <td>生日:</td>
                    <td><input name="shengri" type="text"/></td>
                </tr>
                <tr>                                 	
                    <td>爱好:</td>
                    <td>
                        <input name="aihao[]" type="checkbox" value="音乐"/>音乐
                        <input name="aihao[]" type="checkbox" value="美术"/>美术
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="提交" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
	</div>
    <div class="footer">
            <h1 align="center">此处显示版权内容</h1>
    </div>
        
</body>
</html>
</html>
