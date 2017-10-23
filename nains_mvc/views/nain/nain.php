<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<h1 id="title">Les Nains</h1>
		<div class="data">
			<span>Nom du nain : <em><?=$nain->getNom()?></em>, longueur de barbe : <em><?=$nain->getBarbe()?></em>cm</span><br>

			<span>Originaire de : <em><a href="?id=<?=$ville->getId()?>&c=ville&a=display"><?=$ville->getNom()?></a></em></span><br>

			<?php if (isset($taverne)) {
				echo '<span>Boit dans : <em><a href="?id='.$taverne->getId().'&c=taverne&a=display">'.$taverne->getNom().'</a></em></span><br>';
			} 
			
			if (!isset($groupe)) echo '<span>Ne fait partie d\'aucun groupe';
			if (isset($groupe)) { ?>
			
			<span>Travaille de : <em><?=$groupe->getDebuttravail()?>h</em> à <em><?=$groupe->getFintravail()?>h</em></span><br>

			<span>Dans le tunnel de 
			<em><a href="?id=<?=$VillesTunnel['villeDepartId']?>&c=ville&a=display"><?=$VillesTunnel['villeDepart']?></a></em> à 
			<em><a href="?id=<?=$VillesTunnel['villeArriveeId']?>&c=ville&a=display"><?=$VillesTunnel['villeArrivee']?></a></em></span><br>

			<span>Fait partie du groupe <a href="?id=<?=$groupe->getId()?>&c=groupe&a=display"><em><?=$groupe->getId()?></em></a></span>
			<?php } ?>
		</div>
	</body>
</html>



