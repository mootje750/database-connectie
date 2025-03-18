<?php
require 'db.php';

if (!isset($_GET['product_code']) || empty($_GET['product_code'])) {
    echo "Geen product_code opgegeven.";
    exit;
}

$product_code = $_GET['product_code'];

$stmt = $pdo->prepare("SELECT * FROM Producten WHERE product_code = :product_code");
$stmt->execute(['product_code' => $product_code]);
$product = $stmt->fetch();

if (!$product) {
    echo "Product niet gevonden.";
    exit;
}

if (isset($_GET['knop'], $_GET['product_naam'], $_GET['prijs_per_stuk'], $_GET['omschrijving'])) {
    $stmt = $pdo->prepare("UPDATE Producten SET product_naam = :product_naam, prijs_per_stuk = :prijs_per_stuk, omschrijving = :omschrijving WHERE product_code = :product_code");
    
    $stmt->execute([
        'product_naam' => $_GET['product_naam'],
        'prijs_per_stuk' => $_GET['prijs_per_stuk'],
        'omschrijving' => $_GET['omschrijving'],
        'product_code' => $product_code
    ]);

    echo "Product succesvol bijgewerkt! <a href='select.php'>Terug naar overzicht</a>";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product bijwerken</title>
</head>
<body>
    <h2>Product bewerken</h2>
    <form method="GET">
        <input type="hidden" name="product_code" value="<?= $product_code ?>">

        <label>Product Code:</label>
        <input type="text" value="<?= $product_code ?>" disabled>

        <input type="text" name="product_naam" id="product_naam" placeholder="Product naam" value="<?= $product['product_naam'] ?>" required>
        <input type="number" name="prijs_per_stuk" id="prijs_per_stuk" placeholder="Prijs per stuk" step=".01" value="<?= $product['prijs_per_stuk'] ?>" required>
        <input type="text" name="omschrijving" id="omschrijving" placeholder="Omschrijving" value="<?= $product['omschrijving'] ?>" required>

        <input type="submit" name="knop" value="Bijwerken">
    </form>
</body>
</html>