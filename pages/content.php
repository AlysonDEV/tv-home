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
        <source src="../assets/movies/Eternals.2021.2160p.WEB-DL.x265.10bit.HDR.DDP5.1.Atmos-NOGRP/Eternals.2021.2160p.WEB-DL.x265.10bit.HDR.DDP5.1.Atmos-NOGRP.mkv" type="video/mp4">
        <track kind="subtitles" src="../assets/movies/Eternals.2021.2160p.WEB-DL.x265.10bit.HDR.DDP5.1.Atmos-NOGRP/Eternals.2021.2160p.WEB-DL.x265.10bit.HDR.DDP5.1.Atmos-NOGRP.vtt" srclang="pt-br" label="Português">
      Your browser does not support the video tag.
      </video>
    <?php
  } else if ($filme == "the-darkest-minds"){
    ?>
      <video id="video2" width="600" height="300" poster="../assets/The Darkest Minds.jpg" controls>
        <source src="../assets/movies/The.Darkest.Minds.2018.1080p.BluRay.H264.AAC-RARBG/The.Darkest.Minds.2018.1080p.BluRay.H264.AAC-RARBG.mp4" type="video/mp4">
        <track kind="subtitles" src="../assets/movies/The.Darkest.Minds.2018.1080p.BluRay.H264.AAC-RARBG/The.Darkest.Minds.2018.1080p.BluRay.H264.AAC-RARBG.vtt" srclang="pt-br" label="Português">
      Your browser does not support the video tag.
      </video>

    <?php
  } 
}
?> 
<br><button onClick="obterDuracao('horas', true)">Obter Duração</button>  
<div id="infoplayer"></div> 