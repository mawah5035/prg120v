<?php
?>

 <h2>Velg ukedag</h2>

 <form method="post" action="" id="velgUkedagSkjema" name="velgUkedagSkjema">
    Ukedag 
    <select name="ukedag" id="ukedag" name="ukedag">
    <option value="mandag">mandag</option>
    <option value="tirsdag">tirsdag</option>
    <option value="onsdag">onsdag</option>
    <option value="torsdag">torsdag</option>
    <option value="fredag">fredag</option>
    <option value="lørdag">lørdag</option>
    <option value="søndag">søndag</option>
    </select> <br>
    <input type="submit" value="Velg ukedag" id="velgUkedagKnapp" name="velgUkedagKnapp">
</form>

<?php
if (isset ($_POST ["velgUkedagKnapp"]))
{
    $ukedag=$_POST ["ukedag"];
    print ("Følgende ukedag er valgt: $ukedag <br> ");
}
?>

