<?php
session_start();

$bookingId = time() . '-' . rand(1000, 9999);

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bevestiging</title>
</head>
<body>
    <h1>Van hartelijk bedankt voor je boeking!</h1>
    <p>Je boeking is bevestigd.</p>
    <p>Boekings ID: <?php echo $bookingId; ?></p>
</body>
</html>