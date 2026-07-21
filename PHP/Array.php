
<?php
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
?>
<h2>Change Value of Array Item</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
echo $cars[1];
?>
<h2>Access Array Item</h2>
<?php
$cars = array("brand" => "Ford", 'Name' => "Mustang","Year" => 1964);
echo $cars["Name"];
?>
<h2>Array Using Function</h2>
<?php
function car(){
    echo "Hi Vignesh";
}
$student = array("Vignesh",28,"car");
echo $student[2]();
?>