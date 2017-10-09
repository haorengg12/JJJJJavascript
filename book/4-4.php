<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	
<title></title>
</head>
<body>
<h1 align="center">新用户注册</h1>
<form method="Post" action="4-5.php">
姓名：<input type="text" name="名字"><br><!-- </input> -->
性别：<input type="radio" name="性别" value="1" checked="checked">男<!-- </input> --><input type="radio" name="性别" value="0">女<br><!-- </input> -->
爱好：<input type="checkbox" name="爱好[]" value="太极拳">太极拳<!-- </input> -->
<input type="checkbox" name="爱好[]" value="音乐">音乐<!-- </input> -->
<input type="checkbox" name="爱好[]" value="旅游">旅游<br><!-- </input> -->
职业：<select name="职业">
	<option value="教育业">教育业</option>
	<option value="医疗业">医疗业</option>
	<option value="其他">其他</option>
</select><br>
个性签名：<textarea name="个性签名" rows="2" cols="20"></textarea><br>
<input type="submit" value="提交"></input>
</form>
</body>
</html>