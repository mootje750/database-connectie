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
    <style>
        table {
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Producten Overzicht</h2>
    <table>
        <thead>
            <tr>
                <th>Product code</th>
                <th>Product Naam</th>
                <th>Prijs per Stuk</th>
                <th>Omschrijving</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($producten as $product): ?>
                <tr>
                    <td><?php echo isset($product['product_code']) ? htmlspecialchars($product['product_code']) : 'N/A'; ?></td>
                    <td><?php echo isset($product['product_naam']) ? htmlspecialchars($product['product_naam']) : 'N/A'; ?></td>
                    <td><?php echo isset($product['prijs_per_stuk']) ? htmlspecialchars($product['prijs_per_stuk']) : 'N/A'; ?></td>
                    <td><?php echo isset($product['omschrijving']) ? htmlspecialchars($product['omschrijving']) : 'N/A'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
