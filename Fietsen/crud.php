<?php
// Auteur: Emirhan Kaya
// Functie: selecteer data

// Connect database
include "connect.php";

// Maak een query
$sql = "SELECT * FROM fietsen";
// Prepare
$stmt = $conn->prepare($sql);

// Foutafhandeling toevoegen
if (!$stmt) {
    echo "Fout bij het voorbereiden van de query: " . $conn->error;
    exit();
}

// Uitvoeren
if (!$stmt->execute()) {
    echo "Fout bij het uitvoeren van de query: " . $stmt->errorInfo()[2];
    exit();
}

// Ophalen alle data
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print the header
echo "<br>";
echo "<table border=1px>";
echo "<tr>";
echo "<th>Merk</th>";
echo "<th>Type</th>";
echo "<th>Prijs</th>";
echo "<th>id</th>";
echo "</tr>";

// Add a row for the "Fiets toevoegen" button
echo "<tr>";
echo "<td colspan='4'><a href='add.php'>Fiets toevoegen</a></td>";
echo "</tr>";

// Loop door de gegevens en toon elke rij
foreach($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['merk'] . "</td> ";
    echo "<td>" . $row['type'] . "</td> ";
    echo "<td>" . $row['prijs'] . "</td>";
    echo "<td><a href='edit.php?id=" . $row['ID'] . "'>Wijzig</a></td>";
    echo "<td><a href='delete.php?id=" . $row['ID'] . "' onclick=\"return confirm('Weet u zeker dat u deze rij wilt verwijderen?')\">Verwijder</a></td>";
    echo "</tr>";
}

echo "</table>";
?>