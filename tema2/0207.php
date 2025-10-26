<?php

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];

print ("Tall 1 er $tall1 <br> Tall 2 er $tall2 <br> Tall 3 er $tall3"); 



if ($tall1 > $tall2 )
    {
        print ("<br> $tall1 er større enn $tall2");
    }
else if ($tall1 < $tall2 )
    {
        print ("<br> $tall1 er mindre enn $tall2");
    }
else if ($tall1 == $tall2 )
    {
        print ("<br> $tall1 er lik $tall2");
    }
 


if      ($tall2 > $tall3 )
    {
        print ("<br> $tall2 er større enn $tall3");
    }

else if ($tall2 == $tall3) 
{
    print ("$tall2 er lik $tall3");
}
else if ($tall2 < $tall3 )
    {
        print ("<br> $tall2 er mindre enn $tall3");
    }



if ($tall1 > $tall3 )
    {
        print ("<br> $tall1 er større enn $tall3");
    }
else if ($tall1 < $tall3 )
    {
        print ("<br> $tall1 er mindre enn $tall3");
    }
else if ($tall1 == $tall3)
    {
        print ("<br> $tall1 er lik $tall3");
    }
?>