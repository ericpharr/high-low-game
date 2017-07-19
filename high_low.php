<?php

if ($argc > 3) {
	echo "too many args";
}

$number = rand($argv[1], $argv[2]);

fwrite(STDOUT, "Guess ? ");

$guess = trim(fgets(STDIN));

$numGuesses = 1;

while ($guess != $number) {
	if (!is_numeric($guess) /*|| floor($guess) != $guess*/){
		fwrite(STDOUT, "GUESS A NUMBER, PLEASE ");
		$guess = trim(fgets(STDIN));
	} else if ($guess < 1 || $guess > 100) {
		fwrite(STDOUT, "BETWEEN 1 AND 100, PLEASE ");
		$guess = trim(fgets(STDIN));
	} else {
		if ($guess < $number) {
			fwrite(STDOUT, "HIGHER ");
			$guess = trim(fgets(STDIN));
			$numGuesses += 1;
		} else {
			fwrite(STDOUT, "LOWER ");
			$guess = trim(fgets(STDIN));
			$numGuesses +=1;
		}
	}
}

if ($guess == $number){
	echo "GOOD GUESS! IT ONLY TOOK YOU $numGuesses GUESSES!" . PHP_EOL;
}
