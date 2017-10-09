<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?
$con=mysql_connect('localhost','root','root');
mysql_query("SET NAMES'utf8'");/*防止乱码*/
if (!$con) {
	die('error'.mysql_error());
	# code...
}
$database="test";
$sqlDatabase='create database'.$database;
if(mysql_query($sqlDatabase,$con)){
	echo "good!";
};

mysql_select_db($database,$con);
$sqlcreateTable="create table 座位安排发布(学号 varchar(255),姓名 varchar(255),系 varchar(255),班级 varchar(255),考场—场次—座位号 varchar(255),考试时间 varchar(255))";/*建表*/
if (mysql_query($sqlcreateTable)) {
	echo "成功建表了！";
	# code...
}
else
{
	echo "建表失败！";
}
mysql_close($con);
?>
</body>
</html>