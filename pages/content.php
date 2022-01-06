<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $filme = $_GET['p'];
  if (empty($filme)) {
    echo "Filme não esta definido";
  } else if($filme == "vindagores") {
    echo $filme;
      ?>
      <video id="video1" width="600" height="300" poster="../assets/avanger.png" controls>
        <source src="../assets/movies/Vingadores - Guerra Infinita 2018 [4K 2160p] [DUAL] BAIXE NO COMANDOTORRENTS.COM/Vingadores.Guerra.Infinita.2018.2160p.UHD.BluRay.6CH.x265.DUAL.WWW.COMANDOTORRENTS.COM.mkv" type="video/mp4">
        <track kind="subtitles" src="../assets/movies/Vingadores - Guerra Infinita 2018 [4K 2160p] [DUAL] BAIXE NO COMANDOTORRENTS.COM/Vingadores.vtt" srclang="pt-br" label="Português">
      Your browser does not support the video tag.
      </video>
      <?php
  } else if ($filme == "eternos"){
    ?>
      <video id="video2" width="600" height="300" poster="../assets/eternos.jpg" controls>
        <source src="../assets/movies/Eternals.2021.HDCAM.2021.720p-FuckAds/Eternals.2021.HDCAM.2021.720p-FuckAds.mkv" type="video/mp4">
        <track kind="subtitles" src="../assets/movies/Eternals.2021.HDCAM.2021.720p-FuckAds/Eternals.2021.HDCAM.2021.720p-FuckAds.vtt" srclang="pt-br" label="Português">
      Your browser does not support the video tag.
      </video>
    <?php
  }
}
?> 
<video width="50%" controls crossorigin="anonymous">
  <source src="https://thepaciellogroup.github.io/AT-browser-tests/video/ElephantsDream.mp4" type="video/mp4">
  <track kind="subtitles" src="https://thepaciellogroup.github.io/AT-browser-tests/video/subtitles-en.vtt" srclang="en" label="Inglês" default>
  <track kind="subtitles" src="https://thepaciellogroup.github.io/AT-browser-tests/video/subtitles-en.vtt" srclang="pt" label="Português">     
</video>