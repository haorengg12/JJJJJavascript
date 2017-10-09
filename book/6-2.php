<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1 align="center"></h1>
<?php
$str="C:\\Users\\ASUS\\Desktop\\1418622678.xlsx";
$file=fopen($str,"r");
while (!feof($file)) {
	$kk=fgets($file);
	echo nl2br($kk);
	# code...
}
fclose($file);
?>
</body>
</html>