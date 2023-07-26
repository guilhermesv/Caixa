<?php

function criar_galeria($dir) {
  $arquivo_conteudo = '';
  $midias = scandir($dir);
  shuffle($midias);

  foreach ($midias as $midia) {
    if (!in_array($midia, array('.', '..'))) {
      $tipo = pathinfo($midia, PATHINFO_EXTENSION);

      if (in_array($tipo, array('jpg', 'png', 'gif', 'jpeg'))) {
        list($imagem_largura, $imagem_altura) = getimagesize($dir . $midia);
        $arquivo_conteudo .= '<li class="item-imagem">';
        $arquivo_conteudo .= '<img src="' . $dir . $midia . '" width="' . $imagem_largura . '" height="' . $imagem_altura . '" loading="lazy"/>';
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
        $arquivo_conteudo .= '<li class="item-audio">';
        $arquivo_conteudo .= '<video controls>';
        if ($tipo == 'mp3') { 
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

criar_galeria('midias/');
