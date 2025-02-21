<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room</title>
</head>
<body>
    <h1>Escape Room Boeken</h1>
    <form action="boekings.php" method="POST">
        <label for="name">Naam:</label><br>
        <input type="text" id="naam" name="naam" required><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="persons">Aantal personen (1-6):</label><br>
        <input type="number" id="personen" name="personen" min="1" max="6" required><br>

        <label for="date">Datum:</label><br>
        <input type="date" id="datum" name="datum" required><br>

        <label for="time">Tijd:</label><br>
        <input type="time" id="tijd" name="tijd" required><br>

        <button type="submit">Nu boeken</button>
    </form>
</body>
</html>