<?php  

  $svar=$_POST ["svar"]; 

  if ($svar==9) 
    {
    print("Riktig. 3 ganger 3 er 9");
  } 
  else { 
    print("Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9.");
  }	 
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Hva er 3 ganger 3?</title>
</head>
<body>
  <h3>Oppgave 1 i tema 2</h3>
    
  <form method="post" action="" id="eksempel1" name="eksempel1">
    Hva er 3 ganger 3? <input type="text" id="svar" name="svar" required /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
  </form>
</body>
</html>
