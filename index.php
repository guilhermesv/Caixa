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
        <div class="contador">
          <span>0</span>
          <span>0</span>
          <span>0</span>
          <span>/</span>
          <span>1</span>
          <span>5</span>
          <span>9</span>
        </div>
        <div class="trinca">
          <span>t</span>
          <span>r</span>
          <span>i</span>
          <span>n</span>
          <span>c</span>
          <span>a</span>
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