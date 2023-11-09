<?php


$presentTime = new DateTime('2015-10-21 04:06:00');
$destinationTime = new DateTime('2016-11-22 05:29:00');

echo nl2br($presentTime->format('m/d/Y H:i')), '\n';
echo nl2br($destinationTime->format('m/d/Y H:i')) . PHP_EOL;

$interval = date_diff($presentTime, $destinationTime);
echo nl2br($interval->format('%R%y years, %R%m months, %R%a days, %R%h hours, %R%i minutes')) . PHP_EOL;
