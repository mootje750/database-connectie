<?php
$huidigeTijd = date("H");

if ($huidigeTijd < 12) {
    echo "Goedemorgen.<br>";
} elseif ($huidigeTijd >= 12 && $huidigeTijd < 18) {
    echo "Goedemiddag.<br>";
} else {
    echo "Goedenavond.<br>";
}

function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    return $gemiddelde;
}

$antwoord = berekenGemiddelde(30, 60);
echo $antwoord . "<br>";

function totaleLengteStrings($strings) {
    $totaleLengte = 0;
    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }
    return $totaleLengte;
}

$Array = ["muis", "keyboard", "monitor"];
$resultaat = totaleLengteStrings($Array);
echo $resultaat . "<br>";

function naarHoofdletters($string) {
    return strtoupper($string);
}

$voorbeeldString = "hello world";
$resultaat = naarHoofdletters($voorbeeldString);
echo $resultaat . "<br>";
?>