<?php

$password = null;

$symbols = 'qwertyuiopasdfghjklzxcvbnm,.!/?_QWERTYUIOPASDFGHJKLZXCVBNM1234567890';

for ($i=0; $i<20; $i++) {
    $randomIndex = rand(0, strlen($symbols) - 1);
    $randomSymbol = $symbols[$randomIndex];

    $password = $password . $randomSymbol;
}

echo $password . PHP_EOL;
echo rand(101,999) . PHP_EOL;

//second way

$newPassword = null;

$arraySymbols = [
  ['qwertyuiopasdfghjklzxcvbnm'],
  ['QWERTYUIOPASDFGHJKLZXCVBNM'],
  ['1234567890,.!_?/'],
];

for ($i = 0; $i<20; $i++) {
    $j = rand(0,2);

    $string = $arraySymbols[$j][0];
    $randomIndex = rand(0, strlen($string) - 1);
    $randomSymbol = $string[$randomIndex];

    $newPassword = $newPassword . $randomSymbol;
}

echo $newPassword;