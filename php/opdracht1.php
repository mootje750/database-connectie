<?php
$leeftijd = 24;


if ($leeftijd <= 12 || $leeftijd >=65){
    echo "$leeftijd Je mag gratis naar binnen!";
} 

else if  ($leeftijd <= 17 && $leeftijd >=12){
    echo "krijgt korting op de ticketprijs.";
}

 else {
    echo "moet de volle prijs betalen.";
}
?>