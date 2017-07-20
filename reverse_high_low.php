<?php

fwrite(STDOUT, "Pick a number 1-100 for dumb AI to guess: ");

$number = trim(fgets(STDIN));

$min = 1;
$max = 100;
$numGuesses = 1;

$guess = rand($min, $max);

echo "Guessing... ";

while ($guess != $number) {
    if ($guess < $number) {
        echo $guess . PHP_EOL;
        fwrite(STDOUT, "HIGHER ") . PHP_EOL;
        $min = $guess;
        $guess = rand($min, $max);
        $numGuesses += 1;
    } else {
        echo $guess . PHP_EOL;
        fwrite(STDOUT, "LOWER ") . PHP_EOL;
        $max = $guess;
        $guess = rand($min, $max);
        $numGuesses +=1;
    }
}

if ($guess == $number) {
    echo "It's $number!, it took me $numGuesses guesses!";
}

fwrite(STDOUT, "\n\nNow pick a number for the smarter AI: ");

$number = trim(fgets(STDIN));

$min = 1;
$max = 100;
$numGuesses = 1;

$guess = rand($min, $max);

echo "Guessing... ";

while ($guess != $number) {
    if ($guess < $number) {
        echo $guess . PHP_EOL;
        fwrite(STDOUT, "HIGHER ") . PHP_EOL;
        $min = $guess;
        $guess = round(($min + $max) / 2);
        $numGuesses += 1;
    } else {
        echo $guess . PHP_EOL;
        fwrite(STDOUT, "LOWER ") . PHP_EOL;
        $max = $guess;
        $guess = round(($min + $max) / 2);
        $numGuesses +=1;
    }
}

if ($guess == $number) {
    echo "It's $number!, it took me $numGuesses guesses!";
}