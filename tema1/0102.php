<?php    /* Eksempel 2*/

/* Programmet mottar 2 tall fra et html-skjema ved post-metoden
/* Programmet skriver ut de 2 tallene og summen og differansen av/mellom tallene
*/

$tall1= $_POST ["tall1"]; 
$tall2= $_POST ["tall2"];

$summen=$tall1 + $tall2
$differansen=$tall1-$tall2

print ("tall 1 er $tall1 <br />")
print ("tall 2 er $tall2 <br />")
print ("summen er $summen <br />")
print("differansen er $differansen <br />")

