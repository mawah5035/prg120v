<?php    /* starter php */
$tall1= $_POST ["tall1"]; /* henter data fra skjemaet, her henter den inn tall1 som har blitt sendt inn og lagrer det som tall1*/
$tall2= $_POST ["tall2"]; /* henter data fra skjemaet, her henter den inn tall 2 som har blitt sendt inn og lagrer det som tall2*/

$summen=$tall1 + $tall2; /* her beregner den summen av tall 1 og tall2*/ 
$differansen=$tall1-$tall2; /*Her beregner den differansen mellom tall1 og tall 2*/ 

print ("tall 1 er $tall1 <br />"); /* print printer ut svaret på hva som ble sendt inn i skjema som tall 1*/
print ("tall 2 er $tall2 <br />"); /* print printer ut svaret på hva som ble sendt inn i skjema som tall 2 */
print ("summen er $summen <br />"); /*print printer ut en tekst som sier hva summen av tallene ble ved å trekke inn regnestykket som ble gjort ovenfor på $summen */ 
print("differansen er $differansen <br />"); /* print printr differansen som ble regnet ut i php dokumnetet ovenfor med navn $differanse*/ 

/*legg merke til at det ikke tregtes å skrive hva summen eller differansen ble men det holder med å legge inn regnestykket.
Addisjon er +
Subtraksjon er -
Divisjon er /
Multiplikasjon er *

Alltid husk ; på slutten av hver linje i php for å få den til å kjøre riktig
*/ 