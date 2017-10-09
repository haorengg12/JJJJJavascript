<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
require('b3.php');
$cc=$_POST["cc"];
$sql="insert into kk(kkcc) values('$cc')";
mysql_query($sql) or die('执行失败');
$result=mysql_query("Select * from kk",$con);
 ?>
<table border="1" width="50px">
 	<tr bgcolor="#e0e0e0">
 	<th>kkcc</th>
 	</tr>
<?php
while ($row=mysql_fetch_assoc($result)) {?>
<tr><td><?php echo $row['kkcc']?></td></tr>
	<?php
}?>

</table>

</body>
</html>