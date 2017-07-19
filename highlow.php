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

echo $compNumber . PHP_EOL;

fwrite(STDOUT, 'Guess ');

$userInput = trim(fgets(STDIN));

if ($userInput < $compNumber){
	echo "Higher" . PHP_EOL;

} elseif ($userInput > $compNumber) {
	echo "Lower" . PHP_EOL;

} else {
	echo "Good Guess! You Win!" . PHP_EOL;
}





?>