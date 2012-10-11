<?php
	require_once 'page_numbers.php';

	echo "<pre>\n";
	echo implode(' ', page_numbers(321, 893, 12)) . "\n";
	echo implode(' ', page_numbers(67, 93, 15)) . "\n";
	echo implode(' ', page_numbers(11, 36, 10)) . "\n";
	echo implode(' ', page_numbers(30, 68, 10)) . "\n";
	echo "</pre>\n";
