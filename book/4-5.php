<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<h3 align="center"></h3>
<?
$名=$_POST["名字"];
$sex=$_POST["性别"];
$hobby=$_POST["爱好"];
$career=$_POST["职业"];
$intro=$_POST["个性签名"];
$hobbynum=count($hobby);
echo "尊敬的".$名;
if ($sex=="1") {
	echo "先生<h3>";
	# code...
}
if ($sex=="0") {
	echo "女士<h3>";
	# code...
}
echo "<p>您选择了".$hobbynum."项爱好：</p>";
for ($i=0; $i < $hobbynum; $i++) { 
	# code...
	echo $hobby[$i].' '.'<br>';
	//var_dump($_POST);
}
	echo "<br>您的职业：".$career;
	echo "<br>您的个性签名：".$intro;
?>
<p><a href="JavaScript:history.go(-1)">返回修改</a></p>
</body>
</html>