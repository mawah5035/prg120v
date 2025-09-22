<?php    /* Oppgave 2 */
/*
/*    Programmet mottar fra et html-skjema et svar på spørsmålet "Er du student (j/n)?"
/*    Programmet skjekker om det er svart j eller n på spørsmålet og skrivver ut en passende melding
*/
$svar=$_POST["svar"];
if (!$svar) /*ikke svar på spørsmålet */
  {
  print("Du har ikke svart på spørsmålet <br/>");

}
else if ($svar=="ja"|| $svar=="JA"|| $svar=="j"||$svar=="J" || $svar=="Ja") {
  print("Du har svart ja på spørsmålet om du er student <br/>"); 
}
else if ($svar=="nei" ||$svar=="NEI"||$svar=="Nei"||$svar=="n"||$svar=="N") 
  {
  print("Du har svart nei på spørsmålet om du er student <br/>");
  }
  else {
    print("Du har ikke svart ja eller nei på spørsmålet om du er student <br/>");
  }
  ?>
