<?php
if(file_exists('../../flag.txt')){
    $flag = trim(file_get_contents('../../flag.txt'));
}else if(file_exists('/var/www/flag.txt')){
    $flag = trim(file_get_contents('/var/www/flag.txt'));
}
// echo ROOT_URL.'home/ajax';
return array(
	'description' => 'In this challenge lab you need to answer all the question which can be found in Flag submission tab. <br>If you face any technical problem here, you can always try to open lab (<b>192.168.8.254</b>) in <b>fireforx</b>.',
	'questions' => [
		'What is the HTML field name which is vulnerable for the SQL injection?',
		'What is the full URL of ajax request while searching the movies?',
		'How many movie records are in database?',
		'Find a secret movie names and submit the flag'
	],
	'answers' => [
		'search',
		ROOT_URL.'home/ajax',
		"7",
		$flag
	],
	'hints' => [
		'Flag. Format is HTB{...}',
		'Try 2 Google 😁'
	]
);



