<?php
// Auteur: Emirhan Kaya
// Functie: selecteer data

// connect database
include "connect.php";

// maak een query
$sql = "SELECT * FROM fietsen";
// prepare
$stmt = $conn->prepare ($sql);
// uitvoeren
$stmt ->execute();
// ophalen alle data
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);

// print de data rij voor rij
echo "<br>";
echo "<table border=1px>";

    echo "<tr>";
    echo "<th>merk</th>";
    echo "<th>type</th>";
    echo "<th>prijs</th>";
    echo "<th>foto</th>";
    echo "</tr>";
    foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['merk'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['prijs'] . "</td>";

    echo "<td><img src='images/" . $row['Foto'] . "' alt='Fietsfoto'></td>";

    echo "</tr>";
} 
?>