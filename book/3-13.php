<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
<?
/**
* 
*/
class Person
{

	function __construct($name,$sex)
	{
		$this->name=$name;
		$this->sex=$sex;

		# code...
	}
	function say()
	{
		echo '我叫：'.$this->name.'<br>';
		echo '性别：'.$this->sex.'<br>';
	}

}
/**
* 
 */
class Students extends Person
{
	public $school;
	function study($scholl)
	{
		echo '我在'.$scholl.'上学';
		# code...
	}
	}
	$Student= new Students ('小新','男');
	$Student ->say();
 	$Student->study('石鼓书院');
 

?>