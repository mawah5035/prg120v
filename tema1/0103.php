<?php  /* starter php */
  $fornavn=$_POST ["fornavn"]; /* henter data fra skjemaet, i html dokmentet var skjemaet sin metode post dermed kalles alle variablene for $ og for å hente den fram start vvi $_POST */
  $etternavn=$_POST ["etternavn"]; /* henter data fra skjemaet, her henter den inn etternavnet som har blitt sendt inn og lagrer det som etternavn*/
  $alder=$_POST ["alder"]; /* henter data fra skjemaet, her henter den inn alderen som har blitt sendt inn og lagrer det som alder*/
	
  print ("God dag $fornavn $etternavn, du er $alder &aring;r og like sprek. <br />"); /* print printer ut setningen "god dag (henter det dataen har registerte har kommet inn fra skjema som fronavn og etternavn via id=fornavn id=etternavn) du er (henter inn alderen som ble sendt inn fra skjemaet og hadde id=alder) &aring(å)r og like sprek. ; for å få den til å kjøre */
?> /*slutter php */ 
