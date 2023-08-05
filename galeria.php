<?php

function criar_texto($texto) {
  $texto = explode(' ', $texto);
  $arquivo_conteudo = '';

  foreach ($texto as $palavra) {
    $arquivo_conteudo .= '<li class="item-texto">';
    $arquivo_conteudo .= $palavra;
    $arquivo_conteudo .= '</li>';
  }
  echo $arquivo_conteudo;
} 


function criar_galeria($dir) {
  $arquivo_conteudo = '';
  $midias = scandir($dir);
  shuffle($midias);

  foreach ($midias as $midia) {
    if (!in_array($midia, array('.', '..'))) {
      $tipo = pathinfo($midia, PATHINFO_EXTENSION);

      if (in_array($tipo, array('jpg', 'png', 'gif', 'jpeg'))) {
        list($imagem_largura, $imagem_altura) = getimagesize($dir . $midia);
        $porcentagem = rand(50, 100) / 100;
        $largura = $imagem_largura * $porcentagem;
        $altura = $imagem_altura * $porcentagem;
        
        $src = 'src="' . $dir . $midia . '" ';
        $medidas = 'width="' . $largura . 'px" height="' . $altura . 'px" ';
                
        $arquivo_conteudo .= '<li class="item-imagem">';
        $arquivo_conteudo .= '<img ' . $src . $medidas . ' draggable="false"';
        $arquivo_conteudo .= '</li">';
      }

      if ($tipo == 'mp3' || $tipo == 'ogg') {
        $arquivo_conteudo .= '<li class="item-audio">';
        $arquivo_conteudo .= '<audio controls>';
        if ($tipo == 'mp3') { 
          $arquivo_conteudo .= '<source src="' . $dir . $midia . '" type="audio/mpeg">';
        }

        if ($tipo == 'ogg') { 
          $arquivo_conteudo .= '<source src="' . $dir . $midia . '" type="audio/ogg">';
        }
        $arquivo_conteudo .= '</audio>';
        $arquivo_conteudo .= '</li">';
      }
      
      if ($tipo == 'mov' || $tipo == 'mp4') {
        $arquivo_conteudo .= '<li class="item-video">';
        $arquivo_conteudo .= '<video width="270" height="480"controls >';
        if ($tipo == 'mp4') { 
          $arquivo_conteudo .= '<source src="' . $dir . $midia . '" type="video/mp4">';
        }

        if ($tipo == 'mov') { 
          $arquivo_conteudo .= '<source src="' . $dir . $midia . '" type="video/mov">';
        }
        $arquivo_conteudo .= '</video>';
        $arquivo_conteudo .= '</li">';
      } 
    }
  }
  
  echo $arquivo_conteudo;
}

?>

<?php criar_texto('Caixa é uma caverna de encontros enviados pelo acaso certo.'); ?>
<?php criar_galeria('midias/'); ?>
