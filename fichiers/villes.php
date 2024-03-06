<?php
$villes = ["Paris", "Alger", "Tunis", "Dacca"];
$villes[] = "Alger";

echo "<ul>";
foreach($villes as $ville){
 echo "<li style='color:red;font-size:25px;> - <b>$ville</b></li>"   ;
}
echo "</ul>";