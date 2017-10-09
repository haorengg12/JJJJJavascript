<?
function right($s,$n){return $n? substr($s,-$n):'';}
function noHtml($str)
{
	while(strpos($str,'<')!==false||strpos($str, '>')!==false){
		$begin=strpos($str, '<');
		$end=strpos($str, '>');
		$length=strlen($str)-$end-1;
		$filterstr=substr($str,0, $begin).right($str,$length);
		$str=$filterstr;
	}
	return $str;

}
$str="<font size=9>abc</font>";
echo noHtml($str);
?>