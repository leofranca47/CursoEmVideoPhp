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

        $estado = $_GET["estado"];
        switch($estado){
            case "mg":
            case "rj":
                echo "Sudeste";
            break;
            case "pr":
            case "rs":
                echo "Sul";

        }
        
        
    ?>
    <a href="estado.html">Voltar</a>
</div>
</body>
</html>
 