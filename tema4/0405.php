<?php

$klassekode = $_POST["klassekode"];

funksjon validerKlassekode($klassekode) 

{
    $lovligKlassekode= true;

    if (!$klassekode)
    {
        $lovligKlassekode=false;
    }

    else if (strlen($klassekode)!=4)
    {
        $lovligKlassekode=false;
    }

    else if (!ctype_digit($klassekode))
    {
        $lovligKlassekode=false;
    }

    return $lovligKlassekode;

}

if (valideringsfunksjon($klassekode))
{
    print("Klassekoden er gyldig");
}
else 
{
    print("Klassekoden er ugyldig");
}
?>