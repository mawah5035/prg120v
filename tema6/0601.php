<?php 
?>
<h3>Velg aviser du leser daglig</h3>
 
<form method="post" action="" id="velgAvisSkjema" name="velgAvisSkjema">
    Avis <br>
    <input type="checkbox" id="avis" name="avis" value="aftenposten" />Aftenposten <br>
    <input type="checkbox" id="avis" name="avis" value="dagbladet"/>Dagbladet <br>
    <input type="checkbox" id="avis" name="avis" value="dn" />dn <br>
    <input type="checkbox" id="avis" name="avis" value="vg" />vg <br>
    <input type="submit" value=" Velg aviser" id="velgAviserKnapp" name="velgAviserKnapp">
</form>

<?php // ovenfor ble det lagd checkbox skjema for forskjellige aviser

if (isset($_POST ["velgAviserKnapp"])) 
{
    @$avis=$_POST ["avis"];
    $antall=count($avis); //teller hvor mange som er valgt

    if ($antall==0) //skjekker om antall valgt er null, hvis det er null sp blir det printet at ingen er valgt
    {
        print ("ingen aviser er valgt >br>")
    }
    else { //ellers hvis noen av de er valgt, blir det printet det nedenfor med hjelp av for setning
        print ("Følgende aviser er valgt: <br>");

        for ($r=0;$r<$antall;$r++)
        { 
            print("$avis[$r] <br>");
        }
        
    }


}
