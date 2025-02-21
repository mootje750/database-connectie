<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
</head>
<body>

<form action="post.php" method="post">

    <input type="text" name="naam" placeholder="naam"><br>

    <input type="text" name="achternaam" placeholder="achternaam"><br>

    <input type="date" name="leeftijd" placeholder="leeftijd"><br>

    <input type="text" name="adres" placeholder="adres"><br>

    <input type="email" name="email" placeholder="email"><br>

    <input type="submit" name="knop" value="Verzenden">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = isset($_POST['naam']) ? $_POST['naam'] : '';
    $achternaam = isset($_POST['achternaam']) ? $_POST['achternaam'] : '';
    $leeftijd = isset($_POST['leeftijd']) ? $_POST['leeftijd'] : '';
    $adres = isset($_POST['adres']) ? $_POST['adres'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

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