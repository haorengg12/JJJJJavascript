<?
header("Content-type:test/html;charset=gb2312");
require('conn.php');
$sInput=trim(unescape($_GET["sBus"]));
$sResult="";
$sql="select routename from route where routename like'$sInput%'limit 10"
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
$sResult=$sResult.$row["routinename"].",";
if(strlen($sResult)>0)
$sResult=substr($sResult,0, -1);
echo $sResult;
?>