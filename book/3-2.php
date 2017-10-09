<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?

echo'<p>PHP代码和HTML代码可相互嵌套</p>';
for($i=3;$i<7;$i++)
{
	?><font size="<?echo $i;?>"><?echo $i-2;?>次Hello Word!
	</font><br/>
	<? }?>
	<?
if($i>1){
	echo $i;
}
?>
</body>
</html>