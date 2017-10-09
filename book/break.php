<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
<? $sports=array("网球","游泳","短跑","柔道");
for ($i=0; $i < 4; $i++) { 
	# code...
	echo $sports[$i];
	if($i==3)break;
	echo ",";
}?>