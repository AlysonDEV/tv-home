<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Familia Martins</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="titulo"><h1>Familia Martins</h1></div>
	<div class="filmes">
		<div class="capa">
			<a href="./pages/index.php?p=vindagores">
				<figure>
					<img src="./assets/avanger.png">
					<figcaption>Vingadores</figcaption>
				</figure>
			</a>
		</div>
		<div class="capa">Homem Aranhha</div>
		<div class="capa"></div>
		<div class="capa"></div>
		<div class="capa"></div>
		<div class="capa"></div>
	</div>
	<div id="name"></div>
	<div id="codename"></div>
	<div id="info"></div>
	<div id="browser"></div>
	<div id="version"></div>
	<script type="text/javascript">
		var q = "";
		var w = "";
		var e = "";

		q = " Propriedade appName: " +navigator.appName;
		document.getElementById("name").innerHTML = q;
		w = " Propriedade appCodeName: " +navigator.appCodeName;
		document.getElementById("codename").innerHTML = w;

		e = " Propriedade userAgent: " +navigator.userAgent;
		document.getElementById("info").innerHTML = e;
		
		document.getElementById("version").innerHTML =  navigator.appVersion;
		var navegadores = "";

		if (navegadores = navigator.userAgent.toLowerCase().indexOf('op') > -1) {
		    document.getElementById("browser").innerHTML = "Opera";
		}else if (navegadores = navigator.userAgent.indexOf('MSIE') > -1) {
		    document.getElementById("browser").innerHTML = "Internet Explorer ou Edge";
		}else if (navegadores = navigator.userAgent.indexOf('Firefox') > -1) {
		    document.getElementById("browser").innerHTML = "Mozilla Firefox";
		}else if (navegadores = navigator.userAgent.indexOf('Epiphany') > -1) {
		    document.getElementById("browser").innerHTML = "Epiphany";
		}else if (navegadores = navigator.userAgent.indexOf('Chrome') > -1) {
		    document.getElementById("browser").innerHTML = "Google Chrome";
		}else if (navegadores = navigator.userAgent.indexOf('Safari') > -1) {
		    document.getElementById("browser").innerHTML = "Safari";
		}
		
		


		// if ((chrome) && (safari)) safari = false;
		// if ((chrome) && (opera)) chrome = false;
		// if ((safari) && (epiphany)) safari = false;
	</script>
</body>
</html>