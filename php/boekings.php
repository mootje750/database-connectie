<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['booking'] = [
        'naam' => htmlspecialchars($_POST['naam']),
        'email' => htmlspecialchars($_POST['email']),
        'personen' => (int)$_POST['personen'],
        'datum' => $_POST['datum'],
        'tijd' => $_POST['tijd']
    ];

    header('Location: overzichtspagina.php');
    exit;
} else {
    echo "Geen toegang.";
}
?>