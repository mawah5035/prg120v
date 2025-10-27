<?php

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];
$tall4=$_POST["tall4"];
$tall5=$_POST["tall5"];

print("Dine fem tall er $tall1 $tall2 $tall3 $tall4 $tall5 <br>");

$tallArray = array($tall1, $tall2, $tall3, $tall4, $tall5);

for ($tall=0; $tall<=4; $tall++) 
{ 
    print("$tallArray [$tall]");
}
print("<br>");

for ($tall=4; $tall>=0; $tall--) 
{ 
    print("$tallArray [$tall]");
}
?>

