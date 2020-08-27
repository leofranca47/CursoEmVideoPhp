<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "ContaBanco.php";
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();
        $p1->setTipo("CC");
        $p1->abrirConta($p1->getTipo());
        $p1->setDono("jubileu");
        $p1->setNumConta(1111);
        $p2->setTipo("CP");
        $p2->abrirConta($p2->getTipo());
        $p2->setDono("Creuza");
        $p2->setNumConta(2222);

        $p1->depositar(300);
        $p2->depositar(500);

        print_r($p1);
        print_r($p2);
        
    ?>
</body>
</html>