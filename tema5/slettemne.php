<?php
include("db-tilkobling.php"); //inkluderer ekstern php
?>

<h3>Slett emne</h3> 

<form method="post" action="" id=slettemne name=slettemne onSubmit="return bekreft ()" >
    <select name="emnekode" id="emnekode" required>
        <option value="" >--Velg emne---</option>

<?php //starter andre php
$sqlSetning="SELECT * FROM emne ORDER BY emnekode"; //sql setningen henter emnekodene som er lagt inn i databasen
$resultat= mysqli_query($db, $sql); //resultatet blir at lagret i $resultater, db er koblingen til databasen og sql inneholder spørringen som henter emnekode og emnenavn fra tabellen. 

while ($rad= mysqli_fetch_array($resultat)) //while går igjennom hver rad i resuktatet fra databasen, mysqli_fetch_array henter en rad om gangen som et assosiastivt array. 
{
    // Her hentes ut verdiene fra emnekode og emnenavn fra den aktuelle raden
    $emnekode=$rad["emnekode"];
    $emnenavn=$rad["emnenavn"];
    //skriver ut en option element som får brukeren til å kunne velge 
    echo "<option value= '$emnekode'>$emnekode - $emnenavn</option>";
}
//slutter andre php
?> 
</select>

<br><br>
<input type="submit" value="Slett emne" id="submit" name="submit"/>
</form>

<?php

if (isset($_POST["submit"]))
{
    $emnekode= $_POST["emnekode"];

    if (empty($emnekode))
    {
        echo "<p style='color:red;'> Du m&aring; velge et emne å slette!</p>";
    }

    else
    {
        $skjekk= "SELECT * FROM emne WHERE emnekode='$emnekode'";
        $resultat= mysqli_query($db, $skjekk);

        if (mysqli_num_rows($resultat) == 0){
            $sql = "DELETE FROM emne WHERE emnekode='$emnekode'";
            if (mysqli_query($db, $sql))
            {
                echo "<p style='color:green;'> Klassen med klassekode <strong>$klassekode</strong> er slettet fra databasen.</p>";
            }
            if else
            {
                echo "<p style='color:red;'> Feil ved sletting: " . mysqli_error($db) . "</p>";
            }
        }
          else{
            echo "<p style='color:red;'> Feil: Kan ikke slette klasse med studenter i </p>";
        }

      }
}

?>
  

