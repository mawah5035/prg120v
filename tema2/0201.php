<?php    /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmål "hva er 3 ganger 3?"
/*    Programmet skjekker om svaret er riktig og skriver ut en melding ang svaret 
*/
  $svar=$_POST ["svar"]; /* Henter data fra skjemaet, her henter den inn svaret som har blitt sendt inn og lagrer det som svar */
  if ($svar==9) /* om svaret som er sendt inn er 9, vil første print bli printet */
    {
    print("Riktig. 3 ganger 3 er 9");
  } 
  else { /*hvis ikke, vil andre print bli printet */
    print("Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9.");
  }
	 
?> /* Slutten av php */
