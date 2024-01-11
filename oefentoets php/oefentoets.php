<?php
    // Auteur Emirhan Kaya
    // Functie: Oefentoets php

function BepaalGemiddelde($cijfers) {
    $aantalElementen = count($cijfers);

    if ($aantalElementen === 0) {
        return 0; // Om te voorkomen dat je door 0 deelt als de array leeg is
    }

    $totaal = 0;

    foreach ($cijfers as $cijfer) {
        $totaal += $cijfer;
    }

    $gemiddelde = $totaal / $aantalElementen;

    return $gemiddelde;
}

// Voorbeeldgebruik:
$cijfers = array(2, 3, 4);
$gemiddelde = BepaalGemiddelde($cijfers);
echo $gemiddelde;

?>
