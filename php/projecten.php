<?php
require 'config.php';
//require_once 'sessions.inc.php';

try {
    $query = "SELECT * FROM Projecten";
    $stmt = $conn->prepare($query);
    $stmt->execute();

// haal alle resultaten op in een array
    $resultaten = $stmt->fetchAll();

// aantal rijen tellen
    $aantalRijen = count($resultaten);

    include "view/projecten_view.php";
} catch (PDOException $e) {
    echo "<p>FOUT!</p>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
    exit;
}