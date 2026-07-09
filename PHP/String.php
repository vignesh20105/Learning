<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    echo "Strings<br>";
    echo 'Strings<br>';
    
    $x="john";
   
    echo 'hello $x<br>';

    $x = "John";
echo 'Hello $x\n';
echo '\tHow are you?\n';
   
    echo "hello $x";
    
echo "Hello $x\n";
echo "\tHow are you?\n";
?>
    <h1>String Functions</h1>

    <pre>
    <?php
    echo "String length is strlen<br>";
    echo strlen("Hello World");
    echo "<br>";
    echo "Word count str_word_count ";
    echo str_word_count("Hello world!");
    ?>

    <?php
$txt = "I really love PHP!";
var_dump(str_contains($txt, "love"));
?>
    </pre>
</body>
</html>