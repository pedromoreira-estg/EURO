<?php
    
    include_once("EUROlib.php");
	
	$g = new CKeyGenerator();
	echo $g->keyAsJson();
?>