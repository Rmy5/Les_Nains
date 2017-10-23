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
			<span>Ville : <em><?=$ville->getNom()?></em>, superficie : <em><?=$ville->getSuperficie()?> m²</em></span><br>
			<span>Nains originaires de la ville : </span>
			<ul>
				<?php
					foreach ($nains as $value) {
						echo '<li><a href="?id='.$value->getId().'&c=nain&a=display">'.$value->getNom().'</a></li>';
					}
				?>
			</ul>
			<span>Tavernes de la ville : </span>
			<ul>
				<?php
					foreach ($tavernes as $value) {
						echo '<li><a href="?id='.$value->getId().'&c=taverne&a=display">'.$value->getNom().'</a></li>';
					}
				?>
			</ul>
			<?php
				foreach ($tunnels as $val) {

					if ($val['t_progres'] == 100) echo 'Tunnel vers <a href="?id='.$val['id2'].'&c=ville&a=display">'.$val['v_nom'].'</a> ouvert<br>';
					
					else echo 'Tunnel vers <a href="?id='.$val['id2'].'&c=ville&a=display">'.$val['v_nom'].'</a> progression : '.$val['t_progres'].'%<br>';		
				}?>
		</div>
	</body>
</html>
<?php
