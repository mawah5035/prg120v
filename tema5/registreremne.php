<?php
?>

<h3>Registrer emne</h3>

<form method="post" action="" id="registrerEmne" name="registrerEmne" >
    Emnekode: <input type= "text" id="emnekode" name="emnekode" required /> <br>
    Emnenavn: <input type= "text" id="emnenavn" name="emnenavn" required /><br>
    <input type="submit" value="Send inn" id="submit" name="submit"/>
    <input type="reset" value= "Nullstill" id="nullstill" name="nullstill"/>
</form>

<?php

if (isset($_POST ["submit"])) 
{
    $emnekode=$_POST ["emnekode"];
    $emnenavn=$_POST ["emnenavn"];

    if (!$emnekode || !$emnenavn) 
    {
        Print ("Både emne kode og emne navn må fylles ut");
    }
    else 
    {
        include("db-tilkobling.php");

        $sqlSetning= "SELECT * FROM emne WHERE emnekode= '$emnekode'"; 
        $sqlResultat=mysqli_query($db, $sqlSetning) or die ("ikke mulig å hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);

        if ($antallRader!=0) 
        {
            Print ("Emner registerert fra før");
        }
        else 
        {
            $sqlSetning= "INSERT INTO emne VALUES ('$emnekode', '$emnenavn');";

            Print ("Følgende emne er nå registert: $emnekode $emnenavn");
        }
    }

}
