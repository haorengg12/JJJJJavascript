<?
class Person{
	var $name;
	var $sex;
	function _construct($name,$sex){
		$this->name=$name;
		$this->sex=$sex;

	}
}
class Students extends Person{
	public $school;
	function study(){
		echo '我在上学<br>';
	}
}
class dxs extends Students{
	function study(){
		echo $this->name.'在读大学<br>';

	}
}

class xss extends Students
{
	function study(){
		echo $this->name.'在读小学<br>';
	}
}
function rightstudy($obj){
	if($obj instanceof Students)
		$obj ->study();
	else echo '出现错误！<br>';

}
$s1=new dxs('小新','男');
rightstudy($s1);
$s2=new xss('小花','女');
rightstudy($s2);
$s3=new Students('小文','女');
rightstudy($s3)
?>