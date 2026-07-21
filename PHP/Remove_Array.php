<h2>Removing an array using Splice</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars,1,1);
var_dump($cars);
?>
<H2>Removing Multiple Items from Array</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars,1,2);
var_dump($cars);
?>
<h2>Removing array value using index number using unset</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0],$cars[1]);
var_dump($cars);
?>