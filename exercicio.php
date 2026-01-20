<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./stilo/exec.css">
  <link rel="stylesheet" href="./stilo/stilo.css">
    <title>Coder PHP</title>
  </head>
<body class="exercicio">
   <header class="cabecalho">
    <h1>Exercicios PHP</h1>
    <h2>Vizualização dos Exercícios</h2>
   </header>
      <nav class="navegacao">
        <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>" class="green">Sem Formatação</a>
        <a href="index.php" class="red">Voltar</a>
        
      </nav>
   <main class="principal">
    <div class="conteudo">
      <?php
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
        
        
      ?>
   </main>

   <footer class="rodape">
    Coder PHP ©  <?= date("Y"); ?>
   </footer>
</body>
</html>