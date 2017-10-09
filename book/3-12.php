<?
class Person{
	var $name;
	var $sex;
	var $age;
	function say($word)
	{echo $this->name.'对你说：'.$word;}
	function run($step)
	{echo "<br>然后走了".$step."步";}
}
$p1= new Person();
$p1->name="张三";
$p1->say('您好');
$p1->run(5);
?>