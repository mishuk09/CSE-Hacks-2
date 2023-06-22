<?php

// Declare and initialize array
$sides = array("1", "2", "3");
$directions = array("Mahadi", "Hasan", "Mishuk" );

// Use foreach loop to display array elements
foreach( $sides as $index => $side ) {
	echo $side . " - " . $directions[$index] . " \n";
}

?>
