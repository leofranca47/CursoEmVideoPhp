<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Funções Aritméticas</title>
</head>
<body>
    <div>
        <?php
            $x = $_GET["x"];
            $y = $_GET["y"];
            echo "$x e $y o valor absoluto de $y é ".(abs($y));
            echo "<br>O valor de $x<sup>$y</sup> é " . (pow($x,$y));
            echo "<br>A raiz quadrada de $x é ". sqrt($x);
            echo "<br>O valor arredondado de $y é " . round($y); //ceil ou floor
            echo "<br>A parte inteira de $y é " . intval($y);
            echo "<br>O valor  de $x em moeda é R$ " . number_format($x,2,",",".");
        ?>
    </div>
</body>
</html>