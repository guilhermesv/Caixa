<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
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
      <div id="contador">

      </div>
      <ul id="midias" class="midia-grid">
        <?php include("galeria.php"); ?>
      </ul>
    </div>
    <header>
      
    </header>
  
</body>
</html>