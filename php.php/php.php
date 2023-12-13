<?php
// auteur: Emirhan Kaya
// Functie:  print tekst vertikaal

function printVertikaal($tekst) {
    //code van de functie
    echo "$tekst<br>";


    // bepaal lengte van de $tekst

    $len = strlen($tekst)

    for ($i=0; $i < $len ; $i++)
    echo "$tekst<br>";

}

// Main

printVertikaal ("abcd");

printVertikaal ("123456789");
?>