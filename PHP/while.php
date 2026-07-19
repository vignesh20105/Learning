<!-- <h2>Loops</h2>
<p>Loops run the specific condition under the condition is true</p>
<?php

$i = 1;
while($i<6)
    {
        echo $i;
        $i++;
    }
    ?>

    <br>
<?php
$i=1;
while($i<6)
    {
        if($i == 3) break;
        $i++;
        echo $i;
        
    }    
    ?> -->
    <br>
    <?php
    $j = 0;
    while($j <100)
        {
            $j+=10;
            echo $j;
            echo "<br>";
        }