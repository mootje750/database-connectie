<?php
$leeftijd = 24;


if ($leeftijd <= 12 || $leeftijd >=65){
    $boodschap = "Je mag gratis naar binnen!";
} 

else if  ($leeftijd <= 17 && $leeftijd >=12){
    $boodschap = "Je krijgt korting op de ticketprijs.";
}

 else {
    $boodschap = "Je moet de volle prijs betalen.";
}

echo $boodschap;
?>