<?php

define("NNUMBERS", 5);
define("NSTARS",2);

define("MAXNUMBER",50);
define("MAXSTAR",11);

$numbers = array();
$stars   = array();

for($i=0; $i<MAXNUMBER; $i++) {
	$numbers[$i] = $i+1;
}

for($i=0; $i<MAXSTAR; $i++) {
	$stars[$i] = $i+1;
}

$keynumbers = array();
$keystars   = array();

for($i=0; $i <NNUMBERS; $i++) {
	$idx = rand(0,count($numbers)-1);
	$keynumbers[] = $numbers[$idx];
	array_splice($numbers,$idx,1);
	
//	echo("------<br/>");
//	print_r($keynumbers);
//	echo("------<br/>");
//	print_r($numbers);
//	echo("---------------------------------<br/>");
}

sort($keynumbers);


for($i=0; $i <NSTARS; $i++) {
	$idx = rand(0,count($stars)-1);
	$keystars[] = $stars[$idx];
	array_splice($stars,$idx,1);
	
//	echo("------<br/>");
//	print_r($keynumbers);
//	echo("------<br/>");
//	print_r($numbers);
//	echo("---------------------------------<br/>");
}

sort($keystars);

?>
<html>
	<head>
		<title>
			EuroMilhões
		</title>
		<link rel="stylesheet" href="css/euro.css" /> 
	</head>
	<body>
		<?php
		// echo ("<p> number of numbers ".NNUMBERS);
		// var_dump($stars);
		?>
		<div class="chave">
		<ul class="numeros">
			<li><?php echo $keynumbers[0];?></li>
			<li><?php echo $keynumbers[1];?></li>
			<li><?php echo $keynumbers[2]?></li>
			<li><?php echo $keynumbers[3]?></li>
			<li><?php echo $keynumbers[4];?></li>
		</ul>
		<ul class="estrelas">
			<li><?php echo $keystars[0];?></li>
			<li><?php echo $keystars[1];?></li>
		</ul>
		</div>
	</body>
</html>

