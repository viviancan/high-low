<?php 

	$compNumber = mt_rand(1, 100);
	$guesses = 1;

	echo $compNumber . PHP_EOL;

	do {

		fwrite(STDOUT, 'Guess? ');

		$userInput = trim(fgets(STDIN));

		if (!is_numeric($userInput) ){
			echo "Please enter a valid number." . PHP_EOL;

		} elseif ($userInput < $compNumber){
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