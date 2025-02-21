<?php
session_start();


$booking = $_SESSION['booking'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boekingsoverzicht</title>
</head>
<body>
    <h1>Overzicht van je boeking</h1>
    <p>Naam: <?php echo $booking['naam']; ?></p>
    <p>E-mailadres: <?php echo $booking['email']; ?></p>
    <p>Aantal personen: <?php echo $booking['personen']; ?></p>
    <p>Datum: <?php echo $booking['datum']; ?></p>
    <p>Tijd: <?php echo $booking['tijd']; ?></p>

    <form action="bevestig.php" method="POST">
        <button type="submit">Bevestig</button>
    </form>
</body>
</html>