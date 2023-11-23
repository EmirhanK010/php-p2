<?php
   //auteur: Zoheb
   //functie: voorbeeld operatoren blz 4.36

   $getal = 2000;
   // optellen 1000 + 2000
   $uitkomst = 1000 + $getal;
   echo "Uitkomst = $uitkomst";



   //formule: 3000 + 3000 * 10/100 = 10%
   //formule: 3000 + 3000 * 0,1 = 10%
   //formule: 3000 * 1,1

   echo "<br>";
   echo $uitkomst * 1.1;

  $uitkomst = $uitkomst * 1.1;

  // trek er 1000 vanaf
  echo "<br>";
  $uitkomst = $uitkomst -1000;

  // print het resultaat
  echo "Eindresultaat $uitkomst";
 
  ?>