#!/usr/bin/php
<?PHP
	$input = trim(fgets(STDIN));
	if (is_numeric($input)) {
		echo "ok";
	}
	$number = $input + 0;
	if (($number % 2) == false) {
		echo "Le nombre est pair;";
	}
	else {
		echo "Le nombre est impair";
	}
?>
