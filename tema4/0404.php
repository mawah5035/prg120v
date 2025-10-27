<?php

function validerPostnr($postnr) 
// Hensikten til funksjonener å skjekke om postnret som er fylt ut er korrekt
// Parameter: $postnr - postnummeret skal skjekkes 
// funksjonsverdi/returverdi, funksjonen returnerer true hvis post nummeret er korrekt
// funksjonen returerer false ellers 

{
    $lovligPostnr=true;

    if (!$postnr) 
    {
        $lovligPostnr=false; 
    }

    else if (strlen($postnr)!=4) 
    {
        $lovligPostnr=false;    
    }
    else if (!ctype_digit($postnr)) 
    {
        $lovligPostnr=false;    
    }

    return $lovligPostnr; // returnerer true eller false og er slutt på funksjonen   
}

$postnr=$_POST["postnr"];

$lovligPostnr=validerPostnr($postnr); //valideringsfunksjon

if ($lovligPostnr) //om den er korrekt
{
    print("Postnr er korrekt fylt ut"<br>);
}
else //om det ikke er korrekt
{
    print("Postnr er ikke korrekt utfylt")
}
?>



