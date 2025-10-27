<?php

$angittTall=$_POST["tall"];

if ($angittTall <= 0) // fordi oppgaven ber om positive tall så skjekker vi om tallet er mer eller lik 0, fordi tall under null er negative tall
{
    print("Du må angi et tall større enn null <br>"); //hvis tallet er mindre enn null får du denne meldingen
}
else //hvis if setningen ikke er sann, altså tallet er større enn null, kjører vi for setningen
{
    for ($tall=1; $tall<=$angittTall; $tall++) //for setningen som skriver ut tallene fra 1 til det angitte tallet
    { 
        print("$tall <br>");
    }
}
?>