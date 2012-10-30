<?php
define("NNUMBERS", 5);
define("NSTARS",2);

define("MAXNUMBER",50);
define("MAXSTAR",11);


function keygenerator($min,$max,$n,$class) {
	$numbers 	= array();
	$key 		= array();
	
	for($i=0; $i<$max-$min+1; $i++) {
		$numbers[$i] = $i+$min;
	}
	
	for($i=0; $i<$n; $i++) {
		$idx = rand(0,count($numbers)-1);
		$key[] = $numbers[$idx];
		array_splice($numbers,$idx,1);
	}
	sort($key);
	// by here we have a sorted key
	
	$HTMLList = new SimpleXMLElement("<ul></ul>");
	$HTMLList->addAttribute("class",$class);
	for($i=0;$i<$n;$i++) {
		$HTMLList->addChild("li",$key[$i]);
	}
	echo $HTMLList->asXML();
}

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
			<?php keygenerator(1, MAXNUMBER, NNUMBERS, "numeros");?>
			<?php keygenerator(1, MAXSTAR, NSTARS, "estrelas");?>
		</div>
		<ul>
			<li>segunda</li>
			<li>terça</li>
		</ul>
	</body>
</html>

