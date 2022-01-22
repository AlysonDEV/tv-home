<?php 
error_reporting(E_ALL);
require_once("./conn/MysqliDb.php");
// $action = 'adddb';
// $data = array();

$db = new Mysqlidb('localhost', 'root', '', 'martins');
function catalogShow () {
	global $db;

	$tCatalog = $db->get('tCatalog');
	if ($db->count == 0){
		// echo "Sem dados\n";
		return;
	}
	foreach ($tCatalog as $c){
		echo "<div class='capa'>\n
			<a href='./pages/index.php?p={$c['id']}'>\n
				<figure>\n
					<img src='{$c['posterportrait']}'>\n
					<figcaption>{$c['movie']}</figcaption>\n
				</figure>\n
			</a>\n
		</div>\n";
	}

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Familia Martins</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
	<?php include_once("./routes/routes.php");?> 
	<div class="titulo"><h1>Familia Martins</h1></div>
	<div class="filmes">
		<?php catalogShow();?>
		<div class="capa">
			<a href="./pages/index.php?p=vindagores">
				<figure>
					<img src="./assets/avanger.png">
					<figcaption>Vingadores</figcaption>
				</figure>
			</a>
		</div>
		<div class="capa">
			<a href="./pages/index.php?p=eternos">
				<figure>
					<img src="./assets/eternos.jpg">
					<figcaption>Eternos</figcaption>
				</figure>
			</a>
		</div>
		<div class="capa">
			<a href="./pages/index.php?p=kumo-desu-ga-nani-ka">
				<figure>
					<img src="./assets/kumo-desu-ga-nani-ka-episode-6-2469.jpg">
					<figcaption>Kumo desu ga, nani ka</figcaption>
				</figure>
			</a>
		</div>
		<div class="capa">
			<a href="./pages/index.php?p=precure-all-star-movie-haru-no-carnival">
				<figure>
					<img src="./assets/PRECURE ALL STARS MOVIE: HARU NO CARNIVAL.jpeg">
					<figcaption>Precure All Star Movie - Haru no Carnival</figcaption>
				</figure>
			</a>
		</div>
		<div class="capa">
			<a href="./pages/index.php?p=the-darkest-minds">
				<figure>
					<img src="./assets/The Darkest Minds.jpg">
					<figcaption>Precure All Star Movie - Haru no Carnival</figcaption>
				</figure>
			</a></div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>