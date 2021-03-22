<?php

$a = 20;
$b = 40;
$c = 60;


if ($a>$b && $a>$c) {
	echo "$a is the largest number!";
}

elseif ($b>$a && $b>$c) {
	echo "$b is the largest number!";
}

else
	echo "$c is the largest number!";

?>