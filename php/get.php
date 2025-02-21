<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>

<form action="get.php" method="get">

<input type="text" name="naam" placeholder="naam"><br>

<input type="text" name="achternaam" placeholder="achternaam"><br>

<input type="date" name="leeftijd" placeholder="leeftijd"><br>

<input type="text" name="adres" placeholder="adres"><br>

<input type="email" name="email" placeholder="email"><br>

<input type="submit" name="knop" value="Verzenden">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $naam = isset($_GET['naam']) ? $_GET['naam'] : '';
    $achternaam = isset($_GET['achternaam']) ? $_GET['achternaam'] : '';
    $leeftijd = isset($_GET['leeftijd']) ? $_GET['leeftijd'] : '';
    $adres = isset($_GET['adres']) ? $_GET['adres'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';

    echo "<ul>";
    echo "<li>Naam: $naam</li>";
    echo "<li>Achternaam: $achternaam</li>";
    echo "<li>Leeftijd: $leeftijd</li>";
    echo "<li>Adres: $adres</li>";
    echo "<li>Email: $email</li>";
    echo "</ul>";
} else {
    echo "Geen gegevens ingevuld";
}
?>

</body>
</html>

