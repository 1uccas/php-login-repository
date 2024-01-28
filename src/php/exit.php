<?php 

session_start();

//print_r($url[1]);

$id = $_SESSION['id'];

if (isset($id)) {
	session_destroy();
	unset($id);

	header("Location: /");
} else {
	header("Location: /");
}

?>