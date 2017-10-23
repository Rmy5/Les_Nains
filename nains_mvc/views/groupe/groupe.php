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
			<span>Groupe : <em><?=$groupe->getId()?></em></span><br><br>
			<span>Nains du groupe : </span>
			<ul>
				<?php 
					foreach ($nains as $nain) {

						echo '<li><a href="?id='.$nain->getId().'&c=nain&a=display">'.$nain->getNom().'</a></li>';
					}
				?>
			</ul>

			<?php if (isset($taverne)) {?>
				<span>Boivent à  : <em><a href="?id=<?=$taverne->getId()?>&c=taverne&a=display"><?=$taverne->getNom()?></a> </em></span><br>
			<?php } ?>
			<span>Travaillent de <em><?=$groupe->getDebuttravail()?>h</em> à <em><?=$groupe->getFintravail()?>h</em> dans le tunnel n° <em><?=$groupe->getTunnel()?></em> de 
				<em><a href="?id=<?=$tunnels['villeDepartId']?>&c=ville&a=display"> <?=$tunnels['villeDepart']?></a></em> à 
				<em><a href="?id=<?=$tunnels['villeArriveeId']?>&c=ville&a=display"> <?=$tunnels['villeArrivee']?></a></em></span>
		</div>
	</body>
</html>