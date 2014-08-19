<!DOCTYPE html>
<html>
<head>
	<title>Chapter 6</title>
</head>
<body>

<?php

include ("functions.php");


/**
* CREATING AN OBJECT
*/
echo "<b> Creating an object </b>";

br();
class object
{
	
	function one()
	{
		echo "Ohayoo Gozaimasu!";
	}
}

$a = new object;

echo $a->one(); 

/*end*/

/**
* Accessing values and methods
*/
div();
echo "<b>Accessing values and methods</b>";

br();


class Person
{
public $name = '';
function getName()
{
return $this->name;
}

function setName($newName)
{
$this->name = $newName;
}
}
$f = new Person("Fred", 35);
$b = $f; // $b and $f point at same object
$b->setName("Barney");
printf("%s and %s are best friends.\n", $b->getName(), $f->getName());

br();
/*end*/

class HTMLStuff
{
static function startTable()
{
echo "<table border=\'1\'>\n";
}
static function endTable()
{
echo "</table>\n";
}
}

// $haha = new HTMLStuff;
// echo $haha->startTable();
// echo $haha->endTable();

HTMLStuff::startTable();
// print HTML table rows and columns
echo "<tr><td>hahahaha</td></tr>";
HTMLStuff::endTable();

div();

echo "<b> Declaring constants </b>";

br();

class PaymentMethod
{
const TYPE_CREDITCARD = 0;
const TYPE_CASH = 1;
}
echo PaymentMethod::TYPE_CREDITCARD;

/**
* 
*/
div();

echo "<b> Inheritance </b>";

class Persons
{
public $name, $address, $age;
function __construct($name, $address, $age)
{
$this->name = $name;
$this->address = $address;
$this->age = $age;
}
}
class Employee extends Persons
{
public $position, $salary;
function __construct($name, $address, $age, $position, $salary)
{
parent::__construct($name, $address, $age);

$this->position = $position;
$this->salary = $salary;

}
}?>

<pre><?var_dump ($a = new Employee('ang','pogi','ni','roms','haha'));?></pre>

<?

div();

echo "<b> Abstract Methods </b>";
br();

abstract class Component
{
abstract function printOutput();
}
class ImageComponent extends Component
{
	function printOutput()
{
echo "Pretty picture";
}
}

ImageComponent::printOutput();


div();

function displayClasses()
{
$classes = get_declared_classes();
foreach ($classes as $class) {
echo "Showing information about {$class}<br />";
echo "Class methods:<br />";
$methods = get_class_methods($class);
if (!count($methods)) {
echo "<i>None</i><br />";
}
else {
foreach ($methods as $method) {
echo "<b>{$method}</b>()<br />";
}
}
echo "Class properties:<br />";
$properties = get_class_vars($class);
if (!count($properties)) {
echo "<i>None</i><br />";
}
else {
foreach(array_keys($properties) as $property) {
echo "<b>\${$property}</b><br />";
}
}

echo "<hr />";

}
}

div();



?>

</body>
</html>