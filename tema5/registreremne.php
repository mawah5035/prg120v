<?php
?>

<h3>Registrer emne</h3>

<form method="post" action="" id="registrerEmne" name="registrerEmne" >
    Emnekode: <input type= "text" id="emnekode" name="emnekode" required /> <br>
    Emnenavn: <input type= "text" id="emnenavn" name="emnenavn" required /><br>
    Studiumkode: <input type= "text" id="studiumkode" name="studiumkode" required /><br>
    <input type="submit" value="Send inn" id="registrerEmne" name="registrerEmne"/>
    <input type="reset" value= "Nullstill" id="nullstill" name="nullstill"/>
</form>

<?php

if (isset($_POST ["registrerEmne"])) // trim er for å hindre feil ved sammenligning i db, sørger for at input er ren og reduserer risiko for uventet oppførsel
{
    $emnekode=trim($_POST ["emnekode"]);
    $emnenavn=trim($_POST ["emnenavn"]);
    $studiumkode=trim($_POST ["studiumkode"]);

    if (!$emnekode || !$emnenavn || !$studiumkode) 
    {
        echo ("Både emne kode og emne navn må fylles ut");
    }

    else 
    {
        include("db-tilkobling.php");

        $skjekk = "SELECT * FROM emne WHERE emnekode='$emnekode'";
        $resultat = mysqli_query($db, $skjekk);

        if (mysqli_num_rows($resultat) > 0) {
    echo ("$emnekode er registrert fra før");
} else {
    $sqlSetning = "INSERT INTO emne (emnekode, emnenavn, studiumkode)
                   VALUES ('$emnekode', '$emnenavn', '$studiumkode')";

    if (mysqli_query($db, $sqlSetning)) {
        echo "Følgende emne er nå registrert: $emnekode $emnenavn $studiumkode";
    } else {
        echo "Feil ved registrering: " . mysqli_error($db);
    }
}
    }

}
?>
