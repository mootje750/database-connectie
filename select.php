<?php
require 'db.php';

$sql = "SELECT * FROM Producten";
$stmt = $pdo->query($sql);
$producten = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten Overzicht</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>


    <button onclick="window.location.href='insert.php';">Product Toevoegen</button>
    <table>
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Naam</th>
                <th>Prijs per Stuk</th>
                <th>Omschrijving</th>
                <th>Bewerken</th>
                <th>Verwijderen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($producten as $product): ?>
                <tr>
                    <td><?= $product['product_code'] ?></td>
                    <td><?= $product['product_naam'] ?></td>
                    <td><?= $product['prijs_per_stuk'] ?></td>
                    <td><?= $product['omschrijving'] ?></td>
                    <td>
                        <a href="update.php?product_code=<?= $product['product_code'] ?>">Bewerken</a>
                    </td>
                    <td>
                    <a href="delete.php?id=<?= ($product['product_code']) ?>" 
                           onclick="return confirm('Weet je zeker dat je dit product wilt verwijderen?');">Verwijderen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
