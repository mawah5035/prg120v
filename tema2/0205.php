<?php



if ($tall3==1) 
    {
    $resultat=$tall1+$tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall2 er $tall2 <br/>");
    print ("Regneoperasjonen er addisjon<br/>");
    print ("Resultatet av regneoperasjonen er $resultat<br/>");
}
else if ($tall3==2) 
    {
        $resultat=$tall1-$tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall2 er $tall2 <br/>");
    print ("Regneoperasjonen er subtraksjon <br/>");
    print ("Resultatet av regneoperasjonen er $resultat<br/>");
}
else if ($tall3==3) 
    {
        $resultat=$tall1*$tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall2 er $tall2 <br/>");
    print ("Regneoperasjonen er multiplikasjon<br/>");
    print ("Resultatet av regneoperasjonen er $resultat<br/>");
}
else if ($tall3==4) 
    {
        $resultat=$tall1/$tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall2 er $tall2 <br/>");
    print ("Regneoperasjonen er divisjon<br/>");
    print ("Resultatet av regneoperasjonen er $resultat<br/>");
}
else 
    {
    print("Det er ikke angitt en gyldig regneoperasjon");
}
?>