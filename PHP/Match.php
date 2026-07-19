
<h2>Single Line value</h2>
<?php
$color = "red";
$text = match($color)
{
    "blue" => "This is red color",
    "green" => "This is green color",
    "red" => "This is red color",
    default => "this is not a given color",

};
echo $text;
?>
<h2>Multiple Values</h2>
<?php
$num = 3;
$week = match ($num) {
    1,2,3,4,5 => "Week days",
    6,7 => "Weekend",

};
echo $week;