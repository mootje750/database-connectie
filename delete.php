<?php
require 'db.php';
$errorMessage = '';

try {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $productCode = $_GET['id'];

        $selectSql = "SELECT * FROM Producten WHERE product_code = ?";
        $stmt = $pdo->prepare($selectSql);
        $stmt->execute([$productCode]);
        $product = $stmt->fetch();

        if ($product) {
            $deleteSql = "DELETE FROM producten WHERE product_code = ?";
            $deleteStmt = $pdo->prepare($deleteSql);
            $deleteStmt->execute([$productCode]);

            header("Location: select.php");
            exit();
        } else {
            $errorMessage = "Geen product gevonden met de opgegeven ID.";
        }
    } else {
        $errorMessage = "Ongeldige of ontbrekende 'id' parameter.";
    }
} catch (PDOException $e) {
    $errorMessage = "Er is een fout opgetreden: " . $e->getMessage();
}

if (!empty($errorMessage)) {
    header("Refresh: 10; url=select.php");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fout bij verwijderen</title>
</head>
<body>
    <p><?php echo ($errorMessage); ?></p>
    <p>Je wordt over 10 seconden doorgestuurd naar het overzicht..</p>
</body>
</html>
<?php
}
?>