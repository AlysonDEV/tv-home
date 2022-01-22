<?php
include_once('../conn/MysqliDb.php');
$db = new Mysqlidb('localhost', 'root', '', 'martins');

function rotaPage($rota){
	$routes = $db->get('tRoutes');
}
// echo "rotas<br>\n";

// $url = $_SERVER['REQUEST_URI'];
// echo $url;

if ($_SERVER["REQUEST_METHOD"] == "GET"){
	$pagina = $_GET['pagina'];
} else {
	
}


// echo "final\n";

// $currentPath= Request::route()->getName();
// echo "Teste" . $currentPath . "\n";
?>