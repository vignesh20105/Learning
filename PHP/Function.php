<h2>Calling a Function</h2>
<br>
<?php
function message()
{
    echo "Hello World";
}
message();
?>
<br>
<h2>Function Parameters</h2>
<br>
<?php
function name($name,$age)
{
    echo "$name , $age";
}
name("John" , "12");
?>