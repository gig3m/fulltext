<?php

error_reporting(0);

$version = $argv[1];
$contents = file_get_contents("data/$version.json");
$data = json_decode($contents, TRUE);
$bible = $data['bible'];

$newbible = array();

foreach ($bible['b'] as $book):
	foreach ($book['c'] as $chapter):
		//echo "Book: ".$book['n']." Chapter: ".$chapter['n']."\n";
		foreach ($chapter['v'] as $verse):
			//echo $book['n']." ".$chapter['n'].":".$verse['n']." - ".$verse['#text']."\n";
			$text = $verse['#text'];
			$v = $verse['n'];
			$c = $chapter['n'];
			$b = $book['n'];
			

			$newbible[$b][$c][$v] = $text;

		endforeach;	
	endforeach;
endforeach;

//var_dump($newbible);

echo $newbible['Genesis']['1']['1'];

//$newcontents = json_encode($newbible, TRUE);
//$confirm = file_put_contents('data/newesv.json', $newcontents);



//echo var_dump($data['bible']['b']['n']['Genesis']);
//echo var_dump($data);