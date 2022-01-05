
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $filme = $_GET['p'];
  if (empty($filme)) {
    echo "Filme não esta definido";
  } else {
    echo $filme;
    if ($filme == "vindagores"){
      ?>
      <video id="video" width="600" height="300" poster="../assets/avanger.png" controls>
        <source src="../assets/movies/Vingadores - Guerra Infinita 2018 [4K 2160p] [DUAL] BAIXE NO COMANDOTORRENTS.COM/Vingadores.Guerra.Infinita.2018.2160p.UHD.BluRay.6CH.x265.DUAL.WWW.COMANDOTORRENTS.COM.mkv" type="video/mp4">
      Your browser does not support the video tag.
      </video>
      <?php
    }
  }
}
?>

<div id="len"></div>

<script type="text/javascript">
  let ld = document.querySelector("#len");
  ld.innerHTML = "Teste";
  // document.addEventListener('DOMContentLoaded',()=>{
  //   video = document.getElementsByTagName("video")[0];

  //   for (i=0; i < video.audioTracks.length; i++) {

  //     if (video.audioTracks[i].language.substring(0,2) === "eng") {
  //       ld.innerHTML += video.audioTracks[i].language.substring(0,2);
  //       video.audioTracks[i].enabled = true;
  //     } else {
  //       ld.innerHTML += "Sem dual audio"
  //       video.audioTracks[i].enabled = false;
  //     }
  //   }

  // })



// video = document.getElementsByTagName("video")[0];
// let audio = video.audioTracks[2].language
// for (i=0; i < video.audioTracks.length; i++) {
//   if (video.audioTracks[i].language.substring(0,2) === "pt-BR") { /*Alterar pela lingua que você quer*/
//    video.audioTracks[i].enabled = true;
//   } else {
//    video.audioTracks[i].enabled = false;
//   }
// }

</script>
