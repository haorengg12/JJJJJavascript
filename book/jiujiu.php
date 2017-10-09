<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>dassd</title>
</head>
<body>
<table border="1">
<?php
for($k=1;$k<10;$k++)
{
	echo '<tr>';
	for($i=1,$j=1;$i<=9,$j<=$k;$i++,$j++)
	{
		echo'<td>';
		echo $i.'*'.$k.'='.$i*$k.' ';
		echo '</td>';

	}	
	echo '</tr>';
}
?>
</table>
</body>
</html>