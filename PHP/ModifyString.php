<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upper String</h1>
    <pre>
    <?php
    $x = "Hello World";
    echo strtoupper($x);
    ?>
    <br>
    <h1>Lower Case</h1>
    <?php
    $x = "Hello World!";
echo strtolower($x);
?>
<h1>STRING REPLACE</H1>
<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 
 <h1>String Reverse</h1>
 <?php
$x = "Hello World!";
echo strrev($x);
?> 
<h1>Trim String</H1>

$x = "    Hello World! ";
echo trim($x);
<h1>Explode</h1>
<?php
$x = "hello lovely world";
$y = explode(" " , $x);
print_r($y);
?>
    </pre>
</body>
</html>