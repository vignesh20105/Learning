<h2>Adding Aray Element</h2>
<?php
$fruits = ["apple", "orange","banana"];
$fruits[] = "mango";
var_dump($fruits);
?>
<h2>Add Multiple Items to an Array</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
array_push($cars,"Audi","Benz");
var_dump($cars);
?>
<h2>Array Splice</h2>
<p>Adding an element inside an Array</h2>
<br>
<?php
$fruits = array("Apple", "Banana", "Cherry");
//$new_fruit = "Orange";
array_splice($fruits, 1, 0, "orange"); // insert "Orange" at index 1
var_dump($fruits);
?>