<?php
    header('Access-Control-Allow-Origin: *');  
    include_once("EUROlib.php");
	
	$g = new CKeyGenerator();
	echo $g->keyAsJson();
?>