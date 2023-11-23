<?php
// Auteur: Emirhan Kaya
// Functie:  uitleg datum functie
// Initialsatie 
$datum = date('l d F Y').".";
//  main
echo "Het is vandaag: $datum";
echo "<br>";

echo "Vandaag is het de " . date('z'). "e dag van het jaar";
echo "<br>";

echo date('l') . " is de ". date('w'). "e dag van de week.";
echo "<br>";

echo "De maand ". date('F'). " heeft in totaal ". date('t'). " dagen.";
echo "<br>";

function isLeapYear ($year) {
  if(!is_numeric($year)) {
    echo "String is now allowed. Input should be a number.";
    return;
  }

  if(($year%4 == 0 && $year%100!=0) || $year%400==0) {
    echo "Het jaar $year is een schrikkeljaar";

  }else{
    echo "Het jaar $year is geen schrikkeljaar";

  }

}

$year = date('Y');
isLeapYear($year);
?>