<?php 

	// $compNumber = mt_rand(1, 100);
	// $guesses = 0;
	

	//   echo $compNumber . PHP_EOL;

	// do {

	// 	fwrite(STDOUT, 'Guess? ');

	// 	$guesses++;

	// 	$userInput = trim(fgets(STDIN));

	// 	if (!is_numeric($userInput) ){
	// 		echo "Please enter a valid number." . PHP_EOL;

	// 	} elseif ($guesses == 7) {
	// 		echo "Game over! Too many guesses!" . PHP_EOL;
	// 		break;

	// 	}  elseif ($userInput < $compNumber){
	// 		echo "Higher" . PHP_EOL;
	// 		// $guesses++;

	// 	} elseif ($userInput > $compNumber) {
	// 		echo "Lower" . PHP_EOL;

	// 	} else {
	// 		echo "Good Guess! You Win!" . PHP_EOL;
	// 		echo "Number of guesses: {$guesses}"  . PHP_EOL;
	// 	}
	// } while ($guesses <= 7 && $userInput != $compNumber  );


	if($argc !== 3){
		echo 'pleae pass the minimum and maximum for the game' . PHP_EOL;
		echo PHP_EOL;
		echo 'Usage: ' . PHP_EOL;
		echo '     php high_low.php <min> <max>' . PHP_EOL; 
		exit; 
	}

	$min = $argv[1];
	$max = $argv[2];

	$compNumber = mt_rand($min, $max);
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