<?php
?>

<script scr= "funksjoner.js"> </script>

<h3>Slett emne</h3>

<form method="post" action="" id=slettemne name=slettemne onSubmit="return bekreft ()" >
    Hvilket emne ønsker du å slette? <input type= "text" id="emnekode" name="emnekode" required /> <br>
    <input type="submit" value="Slett emne" id=submit name="submit">
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill">
</form>

<?php

if (isset($_POST ["submit"])) 
{
  $emnekode=$_POST ["emnekode"];
  $emnenavn=$_POST ["emnenavn"];

    include("db-tilkobling.php");

    $sqlSetning="DELETE FROM emne WHERE emnekode='$emnekode';";
    mysqli_query($db, $sqlSetning) or die ("ikke mulig å slette data i databasen");

    Print ("Følgende emnekode er nå slettet: $emnekode $emnenavn");
}

?>
  

