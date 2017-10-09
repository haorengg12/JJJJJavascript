<?
function aval($num)
{
for($i=0;$num>=1;$i++)
{
	$arr[$i]=$num%10;
	$num=$num/10;
}
return $arr;
}
print_r(aval(54262));
?>