<!DOCTYPE html>
<html>
<head>
  <?php
    $cor = isset($_POST["color"]) ? $_POST["color"] : "#00000";
  ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    span.texto{
      color: <?= $cor; ?>
    }
  </style>
</head>
<body>
<div>
    <?php
      $nome = isset($_POST["nome"])? $_POST["nome"] : "não informado";
      echo "<span class='texto'>$nome</span>";
        
    ?>
    <br><a href="form.html">Voltar</a>
</div>
</body>
</html>
 