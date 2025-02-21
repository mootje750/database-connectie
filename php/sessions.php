<?php
session_start();

if (!isset($_SESSION['getal-raden'])) {
    $_SESSION['getal-raden'] = rand(1, 100);
}

$melding = "";

if (isset($_POST['gok'])) {
    $gok = $_POST['gok'];

    if ($gok < 1 || $gok > 100) {
        $melding = "Voer een getal in tussen 1 en 100.";
    } elseif ($gok < $_SESSION['getal-raden']) {
        $melding = "Te laag! Probeer een hoger getal.";
    } elseif ($gok > $_SESSION['getal-raden']) {
        $melding = "Te hoog! Probeer een lager getal.";
    } else {
        $melding = "Gefeliciteerd! Je hebt het juiste getal geraden!";
        unset($_SESSION['getal-raden']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessions</title>
</head>
<body>

<h1>raad het Getal</h1>

<p><?php echo $melding; ?></p>

<form method="post">
    <label for="gok">schrijf je gok hier in:</label>
    <input type="number" name="gok" min="1" max="100" required>
    <button type="submit">gok</button>
</form>

</body>
</html>
