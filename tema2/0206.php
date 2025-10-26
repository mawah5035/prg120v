 <?php

$tall1 = $_POST['tall1'];
$tall2 = $_POST['tall2'];

if ($tall1 > $tall2) {
    print("$tall1 er større enn $tall2");
}
else if ($tall1 < $tall2) {
    print("$tall2 er større enn $tall1");
}
else if ($tall1 == $tall2) {
    print("$tall1 er lik $tall2");
}
?>