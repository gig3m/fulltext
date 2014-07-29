<?php

error_reporting(0);

$file = $argv[1];
$contents = file_get_contents($file);
$data = json_decode($contents, TRUE);

foreach ($data['bible']['b'] as $book):
	foreach ($book['c'] as $chapter):
		foreach ($chapter['v'] as $verse):
			echo $verse['#text'];
		endforeach;	
	endforeach;
	echo '/n';
endforeach;


// foreach ($data['bible']['b'] as $book):
// 	foreach ($book['c'] as $chapter):
// 		foreach ($chapter['v'] as $verse):
// 			echo $book['n']." ".$chapter['n'].":".$verse['n']." - ".$verse['#text']."\n";
// 		endforeach;	
// 	endforeach;
// 	echo '/n';
// endforeach;


//echo var_dump($data['bible']['b']['n']['Genesis']);
//echo var_dump($data);