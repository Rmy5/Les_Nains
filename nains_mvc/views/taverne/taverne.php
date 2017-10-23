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
			<span> <em><?=$taverne->getNom()?>,</em><em><a href="?id=<?=$ville->getId()?>&c=ville&a=display"><?=$ville->getNom()?></em></a></span><br>
			<span>Possède de la bierre :
				<?php 
					if ($taverne->getBlonde() == 1) echo ' <em>Blonde,</em>';
					if ($taverne->getBrune() == 1) echo ' <em>Brune,</em>';
					if ($taverne->getRousse() == 1) echo ' <em>Rousse,</em>';
				?>
			</span><br>
			<span><em><?=$taverne->getChambres()?></em> chambres dont <em><?=$count[0]['chambresLibres']?></em> libres.</span>
		</div>
	</body>
</html>
