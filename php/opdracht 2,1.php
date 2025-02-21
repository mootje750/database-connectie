<?php
    for ($i = 0; $i <= 50; $i++) {
    echo $i . '<br />'; }

    $namen = ["Aryan", "Ouahib", "Max", "Tom", "Makar", "Karim", "Ahmed", "Anxin", "Can", "Toefal"];
    foreach ($namen as $naam) {
        echo $naam . '<br/>';}

    $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

    for ($i = 0; $i < count($maanden); $i++) {
        echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';}

    foreach ($maanden as $index => $maand) {
        echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />';}

    for ($i = 0; $i <= 20; $i++) {
        if ($i % 2 == 0) { echo $i . '<br />'; }}

    $dagen = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];
    for ($i = 0; $i < count($dagen); $i++) {
        echo 'Dag ' . ($i + 1) . ' van de week is : ' . $dagen[$i] . '<br />';}
?>