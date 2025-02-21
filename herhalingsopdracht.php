<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Boeking</title>
</head>
<body>
    <h1>Escape Room Boeken</h1>
    <form action="process.php" method="POST">
        <label for="name">Naam:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="persons">Aantal personen (1-6):</label><br>
        <input type="number" id="persons" name="persons" min="1" max="6" required><br><br>

        <label for="date">Datum:</label><br>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Tijd:</label><br>
        <input type="time" id="time" name="time" required><br><br>

        <button type="submit">Boek Nu</button>
    </form>
</body>
</html>