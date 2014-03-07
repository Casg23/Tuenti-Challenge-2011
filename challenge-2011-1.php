<?php
$file = file('php://stdin');

foreach($file as $line)
{
	echo array_reduce(explode(' ', trim($line)), 'bcadd') . PHP_EOL;
}
?>