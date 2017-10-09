<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?
$conn=mysql_connect('localhost','root','root');
mysql_query("SET NAMES'utf8'");
mysql_select_db("test",$conn);
$result=mysql_query("Select * from 座位安排发布",$conn);
 ?>
<table border="1" width="95%">
 	<tr bgcolor="#e0e0e0">
 	<th>学号</th>
 	<th>姓名</th>
 	<th>系</th>
 	<th>班级</th>
 	<th>考场—场次—座位号</th>
 	<th>考试时间</th>
 	 	</tr>
<?
while ($row=mysql_fetch_assoc($result)) {?>
<tr align="center">
<td><? echo $row['学号']?></td>
 	<td><? echo $row['姓名']?></td>
 	<td><? echo $row['系']?></td>
 	<td><? echo $row['班级']?></td>
 	<td><? echo $row['考场—场次—座位号']?></td>
 	<td><? echo $row['考试时间']?></td>
</tr>
	<?
}?>
</body>
</html>