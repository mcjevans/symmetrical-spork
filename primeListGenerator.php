<?php
// generate a list of prime numbers use in other work
// M. Evans (mcjevans@gmail.com)


$cut_off_point = 999; // default
$prime_array = array(2, 3, 5, 7);

if (@$argv[1] == NULL) { // @ suppressing "Undefined Offset"
	echo "\nNo stopping point entered as first argument.";
	echo "\nDefaulting to ";
	echo $cut_off_point;
	echo "\n\n"; // User may turn off notices, but it's not recommended
}
else {
	$cut_off_point = $argv[1];
}

function isitPrime($x) { // boolean function
	global $prime_array;
	$sq_x = sqrt($x);
	$prime = true;
	$index = 0;
	while ($index < $sq_x) { 
		if ( ($x % $prime_array[$index]) == 0) $prime = false;
		$index++;
	}
	return $prime;
}

function generatePrimes($x) { // void function
	global $prime_array;
	$prime = isitPrime($x);
	if ($prime == true) array_push($prime_array, $x);
}

function generateprime_array($stop_generating) {
	for ($i = 11; $i < $stop_generating; $i+=2) {
		generatePrimes($i);
	}
}

generateprime_array($cut_off_point);

foreach ($prime_array as $value) echo $value.", "; // print primes list

?>
