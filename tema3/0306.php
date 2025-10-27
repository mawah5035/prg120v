<?php

$angittTall=$_POST["tall"];

if ($angittTall <= 0)
{
    print("Du må angi et tall større enn null <br>");
}
else 
{
    for ($tall=1; $tall<=$angittTall; $tall++) 
    { 
        print("$tall <br>");
    }
}
?>