<?php  /*starter php */
  $fornavn=$_POST ["fornavn"]; /* henter data fra skjemaet, her henter den inn fornavnet som har blitt sendt inn og lagrer det som fornavn*/
  $etternavn=$_POST ["etternavn"];  /* henter data fra skjemaet, her henter den inn etternavnet som har blitt sendt inn og lagrer det som etternavn*/
	
  print ("God dag, $fornavn $etternavn <br />");  /* print/echo er for å vise noe på nettsiden, her viser den en hilsen med fornavn og etternavn som ble sendt inn via skjemaet*/
?> /*slutten av php */