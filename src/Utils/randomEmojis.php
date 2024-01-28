<?php 

function randomEmojis(){
	$Emojis = [
		"👽",
		"🤬",
		"🐱‍👤",
		"🐱‍🚀",
		"🐱‍💻",
		"🦓",
		"🐸",
		"🍍",
		"💦",
		"♻",
		"👨‍💻",
		"🧜‍♂",
		"🧛‍♂️",
		"🤸‍♂️",
		"👾",
		"🤖",
		"🐱‍🐉",
		"🐱‍🏍",
	];

	$random = rand(0, count($Emojis)-1);

	if ($Emojis[$random]) {
		return $Emojis[$random];
	} else {
		die("404");
	}
}



?>