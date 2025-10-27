<?php

$lovligEmnekode = true;

$emnekode=$_POST["emnekode"];

if (!$emnekode) 
{
    $lovligEmnekode = false;
    print("Du må skrive inn en emnekode <br>");
}
else if (strlen($emnekode)!=7) 
{
    $lovligEmnekode = false;
    print("Emnekoden må være 7 tegn langt <br>");
}

else 
{
    $tegn1=$emnekode[0];
    $tegn2=$emnekode[1];
    $tegn3=$emnekode[2];
    $tegn4=$emnekode[3];
    $tegn5=$emnekode[4];
    $tegn6=$emnekode[5];
    $tegn7=$emnekode[6];

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

     if (!ctype_alpha($tegn3)) //skjekker om tegn 3 er bokstav, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    {
        $lovligKlassekode=false; 
        print("Tredje tegnet må være et bokstav <br>");
    }

     if (!ctype_digit($tegn4)) //skjekker om tegn 1 er tall, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    {
        $lovligKlassekode=false; 
        print("Første tegnet må være en bokstav <br>");
    }

     if (!ctype_digit($tegn5)) //skjekker om tegn 2 er tall, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    {
        $lovligKlassekode=false; 
        print("Andre tegnet må være en bokstav <br>");
    }

     if (!ctype_digit($tegn6)) //skjekker om tegn 3 er tall, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    {
        $lovligKlassekode=false; 
        print("Tredje tegnet må være et tall <br>");
    }

    if (!ctype_alpha($tegn7)) //skjekker om tegn 7 er bokstav, hvis ikke er den false og det blir printet ut at første tegnet ikke er en bokstav
    
    {
        $lovligKlassekode=false;
        print("Sjuende tegnet må være en bokstav <br>");
    }

    if ($lovligEmnekode)
    {
        print("Emnekoden er $emnekode <br>");
    }
}
?>