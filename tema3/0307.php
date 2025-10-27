<?php

$navn= $_POST["navn"]; // henter navn fra skjema

$del=explode(" ", $navn); 
// $del deler opp navnet i to deler, 
// explode deler ved mellomrom med første del som fornavn og andre del som etternavn, 
// (" ", $navn); er for å si at det skal deles ved mellomrom i variabelen $navn

$fornavn= $del[0]; // første delen av navnet, svarter ,med 0 fordi det bare er sånn
$etternavn= $del[1]; // andre delen av navnet

print("Fornavn er $fornavn <br>");
print("Etternavn er $etternavn <br>");

?>