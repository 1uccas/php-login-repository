<?php 

session_start();

$id = $url[1];
$idDecode = base64_decode($id);

if (isset($idDecode)) {
	session_destroy();
	unset($idDecode);

	header("Location: /");
} else {
	header("Location: /");
}

?>