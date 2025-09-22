<?php     /* Oppgave 4 */ 
/* 
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålene 
/*      "Er du gift (j/n) ?" og "Har du barn (j/n) ?" 
/*    Programmet sjekker om det er svart j eller n på spørsmålet og skriver ut en passende melding 
*/ 

$gift=$_POST["gift"];
$barn=$_POST["barn"];

if (!$gift || !$barn) 
    {
    print("Du har ikke svart på begge spørsmålene");
}
else if ($gift=="ja" && $barn=="ja")  
    {
    print("Du er gift og har ikke barn <br/>");
} 
elseif ($gift=="ja" && $barn=="nei") 
    {
    print("Du er gift og har ikke barn");
}
else 
    {
    print("Du har ikke svart ja eller nei om du er gift og har barn");
}
?>
