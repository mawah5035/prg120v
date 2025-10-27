<?php
// denne filen kobles til med html filen og lagrer informasjonen som blir sendt inn
// $tall1 osv kommer inn fra input feltene i html filen
// med $_POST["navn_på_input_felt"] henter vi ut verdien som brukeren skrev inn

$tall1=$_POST["tall1"]; 
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];
$tall4=$_POST["tall4"];
$tall5=$_POST["tall5"];

print("Dine fem tall er $tall1 $tall2 $tall3 $tall4 $tall5 <br>");

// med $tallArray lager vi en array som inneholder de fem tallene som har blitt sendt inn. 
// vi kan bruke en for-løkke for å gå gjennom arrayen og skrive ut tallene i den rekkefølgen de ligger i arrayen

$tallArray = array($tall1, $tall2, $tall3, $tall4, $tall5);

for ($tall=0;$tall<=4;$tall++) //med for-løkken går vi gjennom arrayen fra posisjon 0 til 4, $tall<=4 betyr at løkken kjører så lenge $tall er mindre enn eller lik 4, $tall++ betyr at $tall økes med 1 for hver gang løkken kjører
{ 
    print(" $tallArray[$tall]"); //print printer ut, $tallArray henter ut verdien i arrayen, og [$tall] henter ut verdien på posisjonen som tilsvarer verdien i $tall
}

print("<br>"); // printer mellomrom 

for ($tall=4;$tall>=0;$tall--) // for lager for løkke, $tall=4 starter på posisjon 4, $tall>=0 betyr at løkken kjører så lenge $tall er større enn eller lik 0, $tall-- betyr at $tall minker med 1 for hver gang løkken kjører
{ 
    print(" $tallArray[$tall]"); // printer ut, $tallArray henter ut verdien i arrayen, og [$tall] henter ut verdien på posisjonen som tilsvarer verdien i $tall
}

?> 

