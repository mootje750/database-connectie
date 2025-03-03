<?php

require 'db.php';

if (isset($_POST['knop'])) {
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];

    $query= "INSERT INTO Producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
    $result=$pdo->prepare($query);
    $Winkel = [
        "product_naam" => $product_naam,
        "prijs_per_stuk" => $prijs_per_stuk,
        "omschrijving" => $omschrijving
    ];
    $result->execute($Winkel);
    if ($result) {
        echo "Product is toegevoegd!";
    } else {
        echo "Er is iets fout gegaan";
        die();
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="product_naam" id="product_naam" placeholder="product naam" required>
    <input type="number" name="prijs_per_stuk" id="prijs_per_stuk" placeholder="prijs per stuk" step=".01" required>
    <input type="text" name="omschrijving" id="omschrijving" placeholder="omschrijving" required>
    <input type="submit" name="knop" value="submit" id="knop">
    </form>
</body>
</html>