<?php


function validerKlassekode($klassekode) 

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

$klassekode=$_POST["klassekode"];

$lovligKlassekode=validerPostnr($klassekode); //valideringsfunksjon

if ($lovligKlassekode) //om den er korrekt
{
    print("Klassekoden er korrekt fylt ut");
}
else //om det ikke er korrekt
{
    print("Klassekoden er ikke korrekt utfylt");
}
?>