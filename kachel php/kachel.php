<?php
// auteur: Emirhan Kaya
// functie: zet de kachel aan

// temp -10 - -1 graden: kachel hoge stand
// temp 0-18: normale stand
// temp > 18: kachel uit

// initialisatie van de tempartuur
$temp = 10;

if ($temp < 0 && $temp >= -10) {
    echo "Hoge stand";

} elseif($temp > 0 && $temp <= 18){
    echo "normale stand";
}

elseif ($temp > 18) {
    echo "Kachel uit";
} 

else{ 
    echo"Doet niks<br>";
}

?>