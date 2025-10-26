<?php

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];

print ("Tall 1 er $tall1 <br> Tall 2 er $tall2 <br> Tall 3 er $tall3 <br>"); 



if ($tall1 > $tall2 )
    {
        print ("<br> Tall 1 er større enn Tall 2");
    }
else if ($tall1 < $tall2 )
    {
        print ("<br> Tall 1 er mindre enn Tall 2");
    }
else if ($tall1 == $tall2 )
    {
        print ("<br> Tall 1 er lik Tall 2");
    }
 


if      ($tall2 > $tall3 )
    {
        print ("<br> Tall 2 er større enn Tall 3");
    }

else if ($tall2 == $tall3) 
{
    print ("<br> Tall 2 er lik Tall 3");
}
else if ($tall2 < $tall3 )
    {
        print ("<br> Tall 2 er mindre enn tall 3");
    }



if ($tall1 > $tall3 )
    {
        print ("<br> Tall 1 er større enn Tall 3");
    }
else if ($tall1 < $tall3 )
    {
        print ("<br> Tall 1 er mindre enn Tall 3");
    }
else if ($tall1 == $tall3)
    {
        print ("<br> Tall 1 er lik Tall 3");
    }
?>