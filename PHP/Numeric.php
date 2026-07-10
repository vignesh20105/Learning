<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <h1>Numbers</h1>
    <?php
    $x= 10;
    $y = 20.30;
    $z = "20";
    var_dump($x);
    var_dump($y);
    var_dump($z);
    ?>
    <h1>IS_INT</h1>
    <?php
$x = 5985;
var_dump(is_int($x));

echo "<br>";

$y = 59.85;
var_dump(is_int($y));
?>  
    </pre>
</body>
</html>