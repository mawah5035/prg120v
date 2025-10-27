<?php 

$klassekode=$_POST["klassekode"];

$lovligKlassekode=true;

if (!$klassekode) 
{
    $lovligKlassekode=false;
    print("Du må oppgi en klassekode");
} 

else if (strlen($klassekode)!=3) 
{
    $lovligKlassekode=false;
    print("Klassekoden må være tre tegn lang=");    
}

else 
{
    $tegn1=$klassekode[0];
    $tegn2=$klassekode[1];
    $tegn3=$klassekode[2];

    if (!ctype_alpha($tegn1)) //skjekker om tegn 1 er bokstav, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    {
        $lovligKlassekode=false; 
        print("Første tegnet må være en bokstav <br>");
    }
     if (!ctype_alpha($tegn2)) //skjekker om tegn 2 er bokstav, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    {
        $lovligKlassekode=false; 
        print("Andre tegnet må være en bokstav <br>");
    }
     if (!ctype_digit($tegn3)) //skjekker om tegn 3 er tall, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    {
        $lovligKlassekode=false; 
        print("Tredje tegnet må være et tall <br>");
    }
}

if ($lovligKlassekode) 
{
    print("Klassekoden $klassekode er gyldig");
}
?>
    