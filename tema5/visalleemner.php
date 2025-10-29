<?php //Åpner php fil

include("db-tilkobling.php"); //Inkluderer database tilkoblings filen

<h3> Vis alle emner </h3> //Printer en overskrift

$sqlSetning= "SELECT * FROM emne ORDER BY emnekode;"; //Lager en sql setning som henter alle emner
$sqlResultat= mysqli_query($db, $sqlSetning) or die; //Kjører sql setningen mot databasen som er koblet til, sql resultatet er svaret fra databasen

$antallRader= mysqli_num_rows($sqlResultat); //Henter antall rader i sql resultatet

Print ("<h2>Registerte emner: </h2>"); //Printer en overskrift
Print ("<table border=1>"); //Starter en tabell med border
Print ("<tr><th align=left>Emnekode</th><th align=left>Emnenavn</th></tr>"); //Printer tabell overskrifter, tr for tabell row, th for tabell header

for ($r=1; $r<=$antallRader; $r+) 
{ 
     $rad= mysqli_fetch_array($sqlResultat); //Henter en rad av gangen fra sql resultatet
     $emnekode= $rad["emnekode"]; //Henter emnekode fra raden
     $emnenavn= $rad["emnenavn"]; //Henter emnenavn fra raden

     Print ("<tr><td>$emnekode</td><td>$emnenavn</td></tr>"); //Printer emnekode og emnenavn i tabell rader, td for tabell data
}
Print ("</table>"); //Avslutter tabellen

?>

