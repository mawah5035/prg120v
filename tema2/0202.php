<?php    /* Oppgave 2 */
/*
/*    Programmet mottar fra et html-skjema et svar på spørsmålet "Er du student (j/n)?"
/*    Programmet skjekker om det er svart j eller n på spørsmålet og skrivver ut en passende melding
*/
$svar=$_POST["svar"]; /* Henter data fra skjemaet, her henter den inn svaret som har blitt sendt inn og lagrer det som svar */
if (!$svar) /*når vi skriver ! foran $ som vist her, betyr det at det ikke har kommet inn noe svar.  */
  {
  print("Du har ikke svart på spørsmålet <br/>");

}
else if ($svar=="ja") {
  print("Du har svart ja på spørsmålet om du er student <br/>"); 
}
else if ($svar=="nei") 
  {
  print("Du har svart nei på spørsmålet om du er student <br/>");
  }
  else {
    print("Du har ikke svart ja eller nei på spørsmålet om du er student <br/>");
  }
  ?>
