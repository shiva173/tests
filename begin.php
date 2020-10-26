<?php  

$first = [30, 550, 22, 1, 403, 5200, 130, 12, 40];
$second = [550, 40, 1, 403, 5200, 12, 2, 15, 22];

function uniq_value($f, $s) {

	foreach ($f as $value) {
		if (!in_array($value, $s)) {
			echo "$value - только в массиве first" . '</br></br>';
		}
	}


	foreach ($s as $value) {
		if (!in_array($value, $f)) {
			echo "$value - только в массиве second" . '</br></br>';
		}
	}


}

uniq_value($first, $second);






$words = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam";

$up_words = ucwords($words);

echo $up_words . '</br>';





?>