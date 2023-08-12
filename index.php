<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <script src="js/main.js" defer></script>
  
  <title>t.r.i.n.c.a.</title>
  <?php 
  
  $cores = ["#00c853", "#ff8a80", "#fff000"];
  $cor_selecionada = $cores[rand(0,2)];

  echo '<style>body {background-color: ' . $cor_selecionada . '; }</style>';

  ?>
</head>
<body>

  <div id="caixa" class="site carregando">
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
          <span><img src="assets/1T.png" alt="t"></span>
          <span><img src="assets/1R.png" alt="r"></span>
          <span><img src="assets/1I.png" alt="i"></span>
          <span><img src="assets/1N.png" alt="n"></span>
          <span><img src="assets/1C.png" alt="c"></span>
          <span><img src="assets/1A.png" alt="a"></span>
        </div>
        <div id="contador" class="contador">
          <span>000</span>
          <span>159</span>
        </div>
      </div>
      <ul id="midias" class="midia-grid">
        <?php include("galeria.php"); ?>
      </ul>
    </div>
    <header>
      
    </header>
    
</body>
</html>