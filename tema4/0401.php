<?php

$postnr=$_POST["postnr"]; //henter postnummer fra skjema i html fil

$lovligPostnr=true; //setter en variabel for lovlig postnummer til true

if (!$postnr) //postnummer er tomt
{
    $lovligPostnr=false; //setter variabelen for ulovlig postnummer til false
    print("Du må fylle inn et postnummer <br>");
}

else if (strlen($postnr)!=4) //postnummer består ikke av 4 siffer, strlen teller antall tegn i en streng
{
    $lovligPostnr=false; //setter variabelen for ulovlig postnummer til false 
    print("Postnummeret må bestå av 4 siffer <br>");
}
else if (!ctype_digit($postnr)) // ctype_digit skjekker om det kun er tall i postnummret, hvis det ikke kun er tall så er det ulovlig
{
    $lovligPostnr=false; //setter variablen for ulovlig postnummer til false
    print("Postnummeret må kun bestå av tall <br>");
}

if ($lovligPostnr) // trenger ikke å skrive $lovligPostnr==true fordi når man skriver if ($lovligPostnr) så skjekker den om variabelen er true
{
    print("Postnummeret $postnr er gyldig <br>");
}
?>
