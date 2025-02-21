<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $naam = htmlspecialchars(trim($_POST["naam"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $telefoon = htmlspecialchars(trim($_POST["telefoon"]));
    $wachtwoord = $_POST["wachtwoord"];

    $errors = [];

    if (empty($naam)) {
        $errors[] = "Naam is verplicht.";
    } elseif (!preg_match("/^[a-zA-Z ]{3,}$/", $naam)) {
        $errors[] = "Naam moet minimaal 3 letters bevatten, geen cijfers of speciale tekens.";
    }

    if (empty($email)) {
        $errors[] = "E-mailadres is verplicht.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Ongeldig e-mailadres.";
    }

    if (!empty($telefoon) && !preg_match("/^\d{10}$/", $telefoon)) {
        $errors[] = "Telefoonnummer moet exact 10 cijfers bevatten.";
    }

    if (empty($wachtwoord)) {
        $errors[] = "Wachtwoord is verplicht.";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}$/", $wachtwoord)) {
        $errors[] = "Wachtwoord moet minimaal 8 tekens bevatten, inclusief 1 hoofdletter, 1 kleine letter, 1 cijfer en 1 speciaal teken.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Formulier is succesvol verwerkt!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validatie</title>
</head>
<body>
    <h1>Formulier Validatie</h1>
    <form method="post">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam" required><br><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefoon">Telefoonnummer (optioneel):</label><br>
        <input type="text" id="telefoon" name="telefoon"><br><br>

        <label for="wachtwoord">Wachtwoord:</label><br>
        <input type="password" id="wachtwoord" name="wachtwoord" required><br><br>

        <button type="submit">Verzenden</button>
    </form>
</body>
</html>