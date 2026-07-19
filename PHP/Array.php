
<?php
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
echo $cars[1];
?>