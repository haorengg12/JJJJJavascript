<?
function myReplace($str)
{
	$str =str_replace("<","&lt;",$str);
	$str =str_replace(">","&gt;",$str);
	$str =str_replace(chr(13), "<br>", $str);
	$str =str_replace(chr(32), "&nbsp", $str);
return $str;
}
$str="<font color='red'>abc</font>";
echo $str.'<br>';
echo myReplace($str);
?>