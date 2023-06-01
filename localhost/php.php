<?php

$massiveX = [

    rand(0, 30),
    rand(0, 30),
    rand(0, 30),
    rand(0, 30),
    rand(0, 30),
    rand(0, 30)

];



foreach ($massiveX as $X) {
    $X = sort($massiveX);
    $X = max($massiveX);
    $X = array_slice($massiveX, 4);
}


$massiveY = [

    rand(0, 30),
    rand(0, 30),
    rand(0, 30),
    rand(0, 30),
    rand(0, 30),
    rand(0, 30)

];

foreach ($massiveY as $Y) {
    $Y = array_slice($massiveY, 4);
}

$massiveT = array_merge($X, $Y);
$massiveZ = array_unique($massiveT);
var_dump($massiveZ);

if (in_array(7, $massiveZ) || in_array(17, $massiveZ) ||
    in_array(27, $massiveZ) || in_array(37, $massiveZ) ||
    in_array(47, $massiveZ) || in_array(57, $massiveZ) ||
    in_array(67, $massiveZ) || in_array(70, $massiveZ) ||
    in_array(71, $massiveZ) || in_array(72, $massiveZ) ||
    in_array(73, $massiveZ) || in_array(74, $massiveZ) ||
    in_array(75, $massiveZ) || in_array(76, $massiveZ) ||
    in_array(77, $massiveZ) || in_array(78, $massiveZ) ||
    in_array(79, $massiveZ) || in_array(87, $massiveZ) ||
    in_array(97, $massiveZ)) {

    echo "МассивZ соддержит числа, в которых есть цифра 7";
}  else {
    echo "МассивZ не соддержит числа, в котором есть цифра 7";
}


