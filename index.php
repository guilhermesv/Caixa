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
  
  $cores = ["FF0000", "FF6E00", "0029FF", "FF8A80", "00C853", "FFF000"];
  $letras =['T', 'R', 'I', 'N', 'C', 'A'];
  shuffle($cores);

  $css = "";
  $css .= '<style>';
  $css .= ':root {';
  $css .= '--cor-fundo: #' . $cores[0] . ';';
  $css .= '--cor-texto: #' . $cores[1] . ';';
  $css .= '--cor-imagem: #000' . ';}';
  $css .= '</style>';
  echo $css;

  $modelo = rand(1, 3);

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
        <!-- Descricao -->
        <span class="caixa frase">caixa</span>
        <span class="e frase">é</span>
        <span class="uma frase">uma</span>
        <span class="caverna frase">caverna</span>
        <div class="de">
          <div class="contador-contagem">000</div>
          <div>de</div>
          <div class="contador-total">160</div>
        </div>
        <span class="encontros frase">encontros</span>
        <span class="enviados frase">enviados</span>
        <span class="pelo frase">pelo</span>
        <span class="acaso frase">acaso</span>

        <!-- Trinca -->
        <span class="T"><img src="<?php echo 'assets/' . $cores[1] . '_' . $modelo . '_' .'T.png'?>" alt="t"></span>
        <span class="R"><img src="<?php echo 'assets/' . $cores[1] . '_' . $modelo . '_' .'R.png'?>" alt="r"></span>
        <span class="I"><img src="<?php echo 'assets/' . $cores[1] . '_' . $modelo . '_' .'I.png'?>" alt="i"></span>
        <span class="N"><img src="<?php echo 'assets/' . $cores[1] . '_' . $modelo . '_' .'N.png'?>" alt="n"></span>
        <span class="C"><img src="<?php echo 'assets/' . $cores[1] . '_' . $modelo . '_' .'C.png'?>" alt="c"></span>
        <span class="A"><img src="<?php echo 'assets/' . $cores[1] . '_' . $modelo . '_' .'A.png'?>" alt="a"></span>
        
      
    </div>   
    <ul id="midias" class="midia-grid">
      <?php include("galeria.php"); ?>
    </ul>
  </div>
</body>
</html>