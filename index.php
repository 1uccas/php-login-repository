<?php

$url = (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)) ? filter_input(INPUT_GET, 'url', FILTER_DEFAULT) : "login");
//var_dump($url);


$url = array_filter(explode('/', $url));
//print_r($url);

$arquivo = 'src/page/'.$url[0].'.php';
$arquivo_php = 'src/php/'.$url[0].'.php';
//var_dump("<br>".$arquivo);

if (is_file($arquivo)) {
	include $arquivo;
}else if(is_file($arquivo_php)){
	include $arquivo_php;
}else{
	include 'src/page/not-found.html';
}

?>