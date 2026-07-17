<?php
$t = date("H");
echo "$t";
echo "<br>";
if($t<20)
    {
        echo "Have a good Day";
    }
    elseif($t<10)
    {
        echo "Have a good Morning";
    }
    else{
        echo "Have a good Night";
    }
?>