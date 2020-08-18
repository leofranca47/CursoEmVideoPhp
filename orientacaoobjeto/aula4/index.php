<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require 'Caneta.php';

        $c1 = new Caneta('BIC', 0.5, 'azul');
        $c1->destampar();
        $tampada = $c1->getTampada()?'tampada':'destamapada';

        echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} da cor {$c1->getCor()} e está {$tampada}";
    ?>
</body>
</html>