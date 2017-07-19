<?php 

// fwrite(STDOUT, 'How old are you? ');

// $age = trim(fgets(STDIN));


// fwrite(STDOUT, "Wow, you are $age years old\n");


// if ($age > 25){
// 	echo "You are no spring chicken" . PHP_EOL;
// } else {
// 	echo "You are a baby!" . PHP_EOL;
// }



$compNumber = rand(1, 100);
$guesses = 0;

echo $compNumber . PHP_EOL;

do {

	fwrite(STDOUT, 'Guess ');

	$userInput = trim(fgets(STDIN));

	if ($userInput < $compNumber){
		echo "Higher" . PHP_EOL;
		$guesses++;

	} elseif ($userInput > $compNumber) {
		echo "Lower" . PHP_EOL;
		$guesses++;

	} else {
		echo "Good Guess! You Win!" . PHP_EOL;
		echo "Number of guesses: {$guesses}"  . PHP_EOL;
	}
} while ($userInput != $compNumber);





?>