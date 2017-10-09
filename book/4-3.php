<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="Post" action="">
用户名：<input type="text" name="kk" size="12">
密码：<input type="text" name="cc" size="10">
		<input type="submit" name="denglu" value="登陆">

</form>
<?
if (isset($_POST['denglu'])) {
	# code...
$userName=$_POST["kk"];
$PS=$_POST["cc"];
echo "您输入的用户名是：".$userName;
echo "<br>您输入的密码是：".$PS;

}
?>
</body>
</html>

