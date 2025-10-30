<?php
?>

<h3>Registrer Studium</h3>

<form method="post" action="" id="registrerStudium" name="registrerStudium" >
    Studiumkode: <input type= "text" id="studiumkode" name="studiumkode" required /> <br>
    Studiumnavn: <input type= "text" id="studiumnavn" name="studiumnavn" required /><br>
    <input type="submit" value="Send inn" id="submit" name="submit"/>
    <input type="reset" value= "Nullstill" id="nullstill" name="nullstill"/>
</form>

<?php

if (isset($_POST ["submit"])) 
{
    $studiumkode=$_POST ["studiumkode"];
    $studiumnavn=$_POST ["studiumnavn"];

    if (!$studiumkode || !$studiumnavn) 
    {
        Print ("Både studium kode og studium navn må fylles ut");
    }
    else 
    {
        include("db-tilkobling.php");

        $sqlSetning= "SELECT * FROM studium WHERE studiumkode= '$studiumkode'"; 
        $sqlResultat=mysqli_query($db, $sqlSetning) or die ("ikke mulig å hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);

        if ($antallRader!=0) 
        {
            Print ("Studiumer registerert fra før");
        }
        else 
        {
            $sqlSetning= "INSERT INTO studium VALUES ('$studiumkode', '$studiumnavn');";

            Print ("Følgende studium er nå registert: $studiumkode $studiumnavn");
        }
    }

}
