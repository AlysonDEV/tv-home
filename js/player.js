
// alert("Teste");
let infoPlayer = document.querySelector("DIV#infoplayer")
let video = document.querySelector("#video2")
let playing = false;
let atualizar

video.addEventListener('playing', ()=>{
	infoPlayer.innerHTML = "Tocando"
	// playing = true;
	// console.log("Antes do comando")
	// atualizar = setTimeout(obterDuracao('horas', true), 1500000)
	// console.log("Depois")


	function displayTime() {
	   let date = new Date();
	   let time = date.toLocaleTimeString();
	   console.log(time);
	}

	// atualizar = setInterval(displayTime, 1000);
	atualizar = setInterval(obterDuracao, 500, "horas", true);


	/*
	while(playing){
		console.log("Tocando")
	}
	async function atualizarTempo (){
		while (playing == true) {
			await new Promise (resolve => {
				console.log("Tocando")
				obterDuracao("horas", true)
				setTimeout(resolve, 1000)
			})
		}
	}*/
})

video.addEventListener('pause', ()=>{
	infoPlayer.innerHTML = "Parado"
	clearInterval(atualizar);

})


// infoPlayer.innerHTML = "AincradS"
function obterDuracao(tipo, html){
	// console.log ("Início")
	// vamos obter uma referência ao elemento <video>
	// var video = document.getElementById('video2');
	// agora obtemos a duração do vídeo em segundos 
	// (descartando os milisegundos)
	var duracao = Math.trunc(video.duration);
	var segundos = Math.trunc(duracao % 60);
	var minutos = Math.trunc((duracao % 3600) / 60);
	var horas = Math.trunc(duracao / 3600);

	// window.alert("A duração do vídeo é: " + horas.toString().padStart(2, '0')
	// + ":" + minutos.toString().padStart(2, '0') + ":" +
	// segundos.toString().padStart(2, '0')); 
	// console.log(tipo)
	if (tipo == "segundos") {
		data = video.currentTime
	} else if (tipo == "horas" ) {
		data = convTempoSegundos(video.currentTime)
	}
	if (html == false){
		return data
	} else{
		infoPlayer.innerHTML = data
	}
	
}

function convTempoSegundos(Tempo) {
	// let tempoConvertido
	let segundos = formatarNumero(Math.trunc(Tempo % 60))
	let minutos = formatarNumero(Math.trunc((Tempo % 3600)/60))
	let horas = formatarNumero(Math.trunc(Tempo / 3600))
	function formatarNumero(valor) {
		formato = valor.toLocaleString('pt-BR', {minimumIntegerDigits: 2, useGrouping: false})
		return formato
	}
	let tempoConvertido = horas + ":" + minutos + ":" + segundos
	return tempoConvertido
}