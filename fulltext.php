<?php

error_reporting(0);

$version = $argv[1];
$b = $argv[2];
$c = $argv[3];
$file = file_get_contents("data/$version.json");
$bible = json_decode($file, TRUE);

foreach ($bible[$b][$c] as $n => $verse):

	echo "$n $verse ";

endforeach;


