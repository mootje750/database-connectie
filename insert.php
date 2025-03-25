<?php
require 'db.php';

if (isset($_POST['knop'])) {
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];
    $categorie = $_POST['categorie'];

    try {
        $query = "INSERT INTO Producten (product_naam, prijs_per_stuk, omschrijving, categorie) 
                  VALUES (:product_naam, :prijs_per_stuk, :omschrijving, :categorie)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            "product_naam" => $product_naam,
            "prijs_per_stuk" => $prijs_per_stuk,
            "omschrijving" => $omschrijving,
            "categorie" => $categorie
        ]);

        header("Location: select.php");
        exit();
    } catch (PDOException $e) {
        echo "Fout bij het toevoegen: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="product_naam" id="product_naam" placeholder="Product naam" required>
        <input type="number" name="prijs_per_stuk" id="prijs_per_stuk" placeholder="Prijs per stuk" step=".01" required>
        <input type="text" name="omschrijving" id="omschrijving" placeholder="Omschrijving" required>

        <label for="categorie">Categorie:</label>
        <select name="categorie" id="categorie" required>
            <option value="drinken">Drinken</option>
            <option value="eten">Eten</option>
            <option value="kleding">Kleding</option>
            <option value="electronica">Electronica</option>
        </select>

        <input type="submit" name="knop" value="Toevoegen">
    </form>
</body>
</html>
