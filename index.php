<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <script src="js/main.js" defer></script>
  
  <title>T/R/I/N/C/A</title>
  <?php 
  
  $cores = ["#FF0000", "#FF6E00", "#0029FF", "#FF8A80", "#00C853", "#FFF000", "#000000"];
  shuffle($cores);

  $css = "";
  $css .= '<style>';
  $css .= ':root {';
  $css .= '--cor-fundo: ' . $cores[0] . ';';
  $css .= '--cor-texto: ' . $cores[1] . ';';
  $css .= '--cor-imagem: ' . $cores[2] . ';}';
  $css .= '</style>';
  echo $css;

  $trinca = rand(1, 3);

  ?>
</head>
<body>
  <div id="caixa" class="site carregando">
    <div class="carregando-tela">
      <div id="carregando_status" class="carregando-status">
        <div class="trevo">☘️</div>
        <div></div>
      </div>
    </div>
    <div class="informacoes">
      <div class="descricao">
        <span>caixa</span>
        <span>é</span>
        <span>uma</span>
        <span>caverna</span>
        <span>de</span>
        <span>encontros</span>
        <span>enviados</span>
        <span>pelo</span>
        <span>acaso</span>
      </div>
      <div id="trinca" class="trinca">
        <span><img src="<?php echo 'assets/' . $trinca . 'T.png'?>" alt="t"></span>
        <span><img src="<?php echo 'assets/' . $trinca . 'R.png'?>" alt="r"></span>
        <span><img src="<?php echo 'assets/' . $trinca . 'I.png'?>" alt="i"></span>
        <span><img src="<?php echo 'assets/' . $trinca . 'N.png'?>" alt="n"></span>
        <span><img src="<?php echo 'assets/' . $trinca . 'C.png'?>" alt="c"></span>
        <span><img src="<?php echo 'assets/' . $trinca . 'A.png'?>" alt="a"></span>
      </div>
      <div id="contador" class="contador">
        <span class="contador-contagem">000</span>
        <span class="contador-total">159</span>
      </div>
    </div>   
    <ul id="midias" class="midia-grid">
      <?php include("galeria.php"); ?>
    </ul>
  </div>
</body>
</html>