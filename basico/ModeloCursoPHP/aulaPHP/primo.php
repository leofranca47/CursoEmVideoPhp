<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $num = isset($_GET['num'])? $_GET['num']:0;
        $tot = 0;
        $mult = "";
        echo "<h1>Analisando o número $num...</h1><br>";
        for($i = $num; $i >= 1; $i--){
            if($num % $i == 0){
                $tot++;
                $mult .= "$i ";
            }
        }
        echo "<h2>Valores múltiplos: $mult<br>";
        echo "<h2>Total de múltiplos: $tot";
        if($tot == 2){
            echo "<h1>Resultado: $num é primo</h1>";
        }else{
            echo "<h1>Resultado: $num não é primo</h1>";
        }
    ?>
    <a href="primo.html">Voltar</a>
</div>
</body>
</html>
 