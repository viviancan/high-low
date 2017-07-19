<?php 

	$compNumber = mt_rand(1, 100);
	$guesses = 0;
	

	  echo $compNumber . PHP_EOL;

	do {

		fwrite(STDOUT, 'Guess? ');

		$guesses++;

		$userInput = trim(fgets(STDIN));

		if (!is_numeric($userInput) ){
			echo "Please enter a valid number." . PHP_EOL;

		} elseif ($guesses == 7) {
			echo "Game over! Too many guesses!" . PHP_EOL;
			break;

		}  elseif ($userInput < $compNumber){
			echo "Higher" . PHP_EOL;
			// $guesses++;

		} elseif ($userInput > $compNumber) {
			echo "Lower" . PHP_EOL;

		} else {
			echo "Good Guess! You Win!" . PHP_EOL;
			echo "Number of guesses: {$guesses}"  . PHP_EOL;
		}
	} while ($guesses <= 7 && $userInput != $compNumber  );



?>