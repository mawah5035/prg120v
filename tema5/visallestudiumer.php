<?php //Åpner php fil

include("db-tilkobling.php"); //Inkluderer database tilkoblings filen

<h3> Vis alle studium </h3> //Printer en overskrift

$sqlSetning= "SELECT * FROM studium ORDER BY studiumkode;"; //Lager en sql setning som henter alle emner
$sqlResultat= mysqli_query($db, $sqlSetning) or die; //Kjører sql setningen mot databasen som er koblet til, sql resultatet er svaret fra databasen

$antallRader= mysqli_num_rows($sqlResultat); //Henter antall rader i sql resultatet

Print ("<h2>Registerte studiumer: </h2>"); //Printer en overskrift
Print ("<table border=1>"); //Starter en tabell med border
Print ("<tr><th align=left>Studiumkode</th><th align=left>Studiumnavn</th></tr>"); //Printer tabell overskrifter, tr for tabell row, th for tabell header

for ($r=1; $r<=$antallRader; $r+) 
{ 
     $rad= mysqli_fetch_array($sqlResultat); //Henter en rad av gangen fra sql resultatet
     $emnekode= $rad["studiumkode"]; //Henter emnekode fra raden
     $emnenavn= $rad["studiumnavn"]; //Henter emnenavn fra raden

     Print ("<tr><td>$studiumkode</td><td>$studiumnavn</td></tr>"); //Printer emnekode og emnenavn i tabell rader, td for tabell data
}
Print ("</table>"); //Avslutter tabellen

?>