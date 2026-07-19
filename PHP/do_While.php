<?php
$i = 10;

do{
    echo $i;
    $i++;
    echo "<br>";
}while($i<20);
echo "<h2>do while with if loop</h2>"
?>
<?php
do{
    if($i==25) break;
    echo $i;
    $i++;
    echo "<br>";
}while($i<20);
?>