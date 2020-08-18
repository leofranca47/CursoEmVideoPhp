<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
      span{
          color: red;
      }
  </style>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($nota1 + $nota2)/2;
        echo "sua media é: <span>$media</span>";
        if($media >= 6){
            $resu = "Aprovado";
        }
        elseif($media >= 4){
            $resu = "Recuperação";
        }
        else{
            $resu = "Reprovado";
        }
        echo "<br>Você foi: <span>$resu</span>";

        require 'rotinas.php';
        echo soma($nota1, $nota2);
        
    ?>
    <br><a href="media.html">Voltar</a>
</div>
</body>
</html>