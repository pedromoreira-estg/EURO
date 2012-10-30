<?php
	$chJSON_LOCAL = file_get_contents('http://localhost/SIR1213/EURO/serveChave.php');
	$chJSON_ESTG = file_get_contents('http://www.estg.ipvc.pt/~pmoreira/sir/euro/serveChave.php');
	
/*	
	class XPTO {
		public keystars;
		public keynumbers;
	} 
*/
	function json2HTML($keyjson) {
		$keyphp = json_decode($keyjson);
		$DIV = new SimpleXMLElement("<div></div>");
		$DIV->addAttribute("class","chave");
		$ULN = $DIV->addChild("ul");
		$ULN->addAttribute("class","numeros");
		foreach($keyphp->keynumbers as $kn) {
			$ULN->addChild("li",$kn);
		}
		$ULS = $DIV->addChild("ul");
		$ULS->addAttribute("class","estrelas");
		foreach($keyphp->keystars as $ks) {
			$ULS->addChild("li",$ks);
		}
		
		return $DIV->asXML();
	}
	
	json2HTML($chJSON_LOCAL);
	
	//echo($chJSON_LOCAL);
	//echo($chJSON_ESTG);
?>

<html>
	<head>
		<title>
			EuroMilhões
		</title>
		<link rel="stylesheet" href="css/euro.css" /> 
	</head>
	<body>
		<?php echo json2HTML($chJSON_LOCAL); ?>
		<?php echo json2HTML($chJSON_ESTG); ?>

	</body>
</html>

