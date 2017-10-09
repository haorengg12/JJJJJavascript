<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
<table border="1" width="25" align="center"><tr>
<? $i=0;
while ( $i< 9) {
	# code...
	echo "<td>第 $i 格<td/>";
	$i++;
	if($i%3<>0||$i==9)continue;
	echo "</tr><tr>";
} ?>
</tr></table>