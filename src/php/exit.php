<?php 

session_start();

//print_r($url[1]);

$id = $_GET['di'];
$idDecode = base64_decode($id);

if (isset($idDecode)) {
	session_destroy();
	unset($idDecode);

	header("Location: /");
} else {
	header("Location: /");
}

?>