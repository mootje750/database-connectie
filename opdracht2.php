<?php
// deel 1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

$myArray[] = "tram";

echo $myArray [0] . '<br>';
echo $myArray [1] . '<br>';
echo $myArray [2] . '<br>';
echo $myArray [3] . '<br>';
echo $myArray [4] . '<br>';
echo $myArray [5] . '<br>';
echo $myArray [6] . '<br>';

//deel 2
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
echo "Het array heeft " . count($myArray) . " elementen.<br>";

$myArray[] = "tram";
echo "Het array heeft " . count($myArray) . " elementen.<br>";

// deel 3
$places = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
];

echo "De hoofdstad van Japan is " . $places["Japan"] . ".<br>";
echo "De hoofdstad van Mexico is " . $places["Mexico"] . ".<br>";
echo "De hoofdstad van USA is " . $places["USA"] . ".<br>";
echo "De hoofdstad van India is " . $places["India"] . ".<br>";
echo "De hoofdstad van Korea is " . $places["Korea"] . ".<br>";
echo "De hoofdstad van China is " . $places["China"] . ".<br>";
echo "De hoofdstad van Nigeria is " . $places["Nigeria"] . ".<br>";
echo "De hoofdstad van Argentina is " . $places["Argentina"] . ".<br>";
echo "De hoofdstad van Egypt is " . $places["Egypt"] . ".<br>";
echo "De hoofdstad van UK is " . $places["UK"] . ".<br>";


// deel 4
$cijfers = [3.5, 7.2, 1, 8.8, 5, 2.3, 9.6, 4, 6.1, 0.9];


$som = $cijfers[0] + $cijfers[1] + $cijfers[2] + $cijfers[3] + 
       $cijfers[4] + $cijfers[5] + $cijfers[6] + $cijfers[7] + 
       $cijfers[8] + $cijfers[9];


$gemiddelde = $som / count($cijfers);


$gemiddelde = round($gemiddelde, 1);

echo "Het gemiddelde van de cijfers is $gemiddelde.<br>";
?>