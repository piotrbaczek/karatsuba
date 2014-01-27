<?php

include 'classes/Karatsuba.php';
$a1 = 123451231361;
$a2 = 23453432234236;
$time_start = microtime(true);
$a = 0;
for ($i = 0; $i < 1000; $i++) {
	$a = $a1 * $a2;
}
echo $a . '<br/>';

$time_end = microtime(true);
echo '<b>Total Execution Time:</b> ' . ($time_end - $time_start) . ' ms';

$time_start = microtime(true);
$b = 0;
for ($i = 0; $i < 1000; $i++) {
	$b = Karatsuba::multiply($a1, $a2);
}
echo $b . '<br/>';

$time_end = microtime(true);
echo '<b>Total Execution Time:</b> ' . ($time_end - $time_start) . ' ms';
