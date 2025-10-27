<?php

$navn= $_POST["navn"];

$del=explode(" ", $navn); 

$fornavn= $del[0];
$etternavn= $del[1];

print("Fornavn er $fornavn <br>");
print("Etternavn er $etternavn <br>");
?>