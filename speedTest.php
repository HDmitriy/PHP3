<?php
include 'QuickSort.php';
include 'BubbleSort.php';

function getArr(): array
{
	return _randArray(1000000);
}

$arr = getArr();
$lastIndex = count($arr) - 1;



$start = microtime(true);
bubbleSort($arr);
echo "BubbleSort: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
quickSort($arr, 0, $lastIndex);
echo "QuickSort: ".( microtime(true) - $start).PHP_EOL;

